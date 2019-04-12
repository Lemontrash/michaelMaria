<?php
/*
 * Plugin Name: Marina
 */
//class MMKSruct {
//    public function __construct($a) {
//        $i=0;
//        foreach($a as $var=>$val) {
//            $varName = 'in'.$i;
//            $this->$varName = $val;
//            $i++;
//        }
//    }
//}

class MMKSruct {
    public function __construct($a) {
        $i=0;
        foreach($a as $var=>$val) {
            $varName = 'in'.$i;
            $this->$varName = $val;
            $i++;
        }
    }
}




register_activation_hook(__FILE__, 'onActivate');
function onActivate(){
    global $wpdb;
    $table_name = $wpdb->get_blog_prefix() . 'yachts';
    $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    $sql = <<<SQL
    CREATE TABLE {$table_name} (
    id int unsigned NOT NULL,
    yacht_name varchar(255) default "",
    model varchar(255) default "",
    year varchar(255) default "",
    length varchar(255) default "",
    cabins varchar(255) default "",
    heads varchar(255) default "",
    berths varchar(255) default "",
    deposit varchar(255) default "",
    engine varchar(255) default "",
    price float unsigned  default "0",
    PRIMARY KEY  (id),
    KEY price (price)
    ) {$charset_collate};
SQL;
//  Создать таблицу.
    dbDelta( $sql );

    $table_name = $wpdb->get_blog_prefix() . 'images_for_yachts';
    $sql = <<<SQL
    CREATE TABLE {$table_name} (
    id int unsigned NOT NULL AUTO_INCREMENT,
    yacht_id int unsigned NOT NULL,
    yacht_option varchar(255) NOT NULL default "0",
    PRIMARY KEY  (id)
    ) {$charset_collate};
SQL;
    dbDelta( $sql );

    $table_name = $wpdb->get_blog_prefix() . 'options_for_yachts';
    $sql = <<<SQL
    CREATE TABLE {$table_name} (
    id int unsigned NOT NULL Auto_increment,
    yacht_id int unsigned NOT NULL,
    image varchar(255) NOT NULL default "0",
    PRIMARY KEY  (id)
    ) {$charset_collate};
SQL;
    dbDelta( $sql );
}

function getApiRequest(){
    // specify orl
    $wsdl = 'http://www.booking-manager.com/cbm_web_service2/services/CBM?wsdl';

// load client with definitions
    $soapClient = new SoapClient($wsdl, Array('trace'=>1));

    try {
        $struct = new MMKSruct(Array(3497,'office@sea-time.co.il','seatime0', 225));

        $result = $soapClient->getResources($struct);

        if (isset($result->out)) {
            $xml = $result->out;
            echo $xml;
        }
    }

    catch (Exception $e) {
        print_r($soapClient->__getLastRequest());
        print_r($soapClient->__getLastResponse());
        print_r($e->getTrace());
        var_dump($e);
    }

    $tmp = $soapClient->__getLastResponse();            //получение запроса и обрезание убейте хорватов пожалуйста
    $response = html_entity_decode($tmp);
    $response = stristr($response, '<root>');
    $pos = strpos($response, '</ns1:out>');
    $response = substr($response, 0, $pos);
    $obj = new SimpleXMLElement($response);

    return $obj;
}

function getAllDataForYachtsFromApi(){
    $object = getApiRequest();

    $all = [];
    $simplified = [];

    $allIds = [];
    $allNames = [];
    $allPrices = [];
    $allImages = [];

    $yachtsCounter = 0;
    foreach ($object->resource as  $resource){
        $counter = 0;
        $time = strtotime($resource->prices->price[0]->attributes()['datefrom']);

        $allIds[]       = (string)$resource->attributes()['id'];
        $allNames[]     = (string)$resource->attributes()['name'];
        $allHeads[]     = (string)$resource->attributes()['heads'];
        $allYears[]     = (string)$resource->attributes()['year'];
        $allLengthes[]  = (string)$resource->attributes()['length'];
        $allCabins[]    = (string)$resource->attributes()['cabins'];
        $allDeposits[]  = (string)$resource->attributes()['deposit'];
        $allEngines[]   = (string)$resource->attributes()['engine'];
        $allModels[]    = (string)$resource->attributes()['model'];
        $allBerths[]    = (string)$resource->attributes()['berths'];

        foreach ($resource->prices as $price){
            foreach ($price as $key => $item) {
                if ($time < strtotime($item->attributes()['datefrom'])){
                    $time = strtotime($item->attributes()['datefrom']);
                    $innerPrice = (string)$item->attributes()['price'];
                }
                $counter++;
            }
            if ($price->count() == $counter){
                $allPrices[] = $innerPrice;
            }
        }
        foreach ($resource->images as $image){
            foreach ($image as $i){
                $allImages[$yachtsCounter][] = (string)$i->attributes()['href'];
            }
        }
        $all['names'][$allIds[$yachtsCounter]] = $allNames[$yachtsCounter];
        $all['images'][$allIds[$yachtsCounter]] = $allImages[$yachtsCounter];
        $all['prices'][$allIds[$yachtsCounter]] = $allPrices[$yachtsCounter];
        $all['models'][$allIds[$yachtsCounter]] = $allModels[$yachtsCounter];
        $all['heads'][$allIds[$yachtsCounter]] = $allHeads[$yachtsCounter];
        $all['years'][$allIds[$yachtsCounter]] = $allYears[$yachtsCounter];
        $all['length'][$allIds[$yachtsCounter]] = $allLengthes[$yachtsCounter];
        $all['cabins'][$allIds[$yachtsCounter]] = $allCabins[$yachtsCounter];
        $all['engines'][$allIds[$yachtsCounter]] = $allEngines[$yachtsCounter];
        $all['deposits'][$allIds[$yachtsCounter]] = $allDeposits[$yachtsCounter];
        $all['berths'][$allIds[$yachtsCounter]] = $allBerths[$yachtsCounter];
        $yachtsCounter++;

    }
    return $all;
}
function insertAll(){
    $yachts = getAllDataForYachtsFromApi();
    $counter = 1;
    global $wpdb;
    $yachtsId = [];
    $table_name = $wpdb->get_blog_prefix() . 'yachts';
    $wpdb->query("delete from $table_name");
    foreach ($yachts['names'] as $id => $name) {
        $data = [
            'id' => (string)$id,
            'yacht-name' => $name
        ];
        if ($wpdb->get_var("select id from $table_name where id = $id")){
            $wpdb->delete($table_name, array('id' => $id));
        }
        $wpdb->insert($table_name, $data);
        $yachtsId[] = $counter;
        $counter++;
    }
    foreach ($yachts['prices'] as $id => $price) {
        $data = [
            'price' => $price
        ];
        $where = [
            'id' => $id
        ];
        $wpdb->update($table_name, $data, $where);
    }
    foreach ($yachts['models'] as $id => $model) {
        $data = [
            'model' => $model
        ];
        $where = [
            'id' => $id
        ];
        $wpdb->update($table_name, $data, $where);
    }
    foreach ($yachts['heads'] as $id => $head) {
        $data = [
            'heads' => $head
        ];
        $where = [
            'id' => $id
        ];
        $wpdb->update($table_name, $data, $where);
    }
    foreach ($yachts['years'] as $id => $year) {
        $data = [
            'year' => $year
        ];
        $where = [
            'id' => $id
        ];
        $wpdb->update($table_name, $data, $where);
    }
    foreach ($yachts['length'] as $id => $length) {
        $data = [
            'length' => $length
        ];
        $where = [
            'id' => $id
        ];
        $wpdb->update($table_name, $data, $where);
    }
    foreach ($yachts['cabins'] as $id => $cabin) {
        $data = [
            'cabins' => $cabin
        ];
        $where = [
            'id' => $id
        ];
        $wpdb->update($table_name, $data, $where);
    }
    foreach ($yachts['engines'] as $id => $engine) {
        $data = [
            'engine' => $engine
        ];
        $where = [
            'id' => $id
        ];
        $wpdb->update($table_name, $data, $where);
    }
    foreach ($yachts['deposits'] as $id => $deposit) {
        $data = [
            'deposit' => $deposit
        ];
        $where = [
            'id' => $id
        ];
        $wpdb->update($table_name, $data, $where);
    }
    foreach ($yachts['berths'] as $id => $berth) {
        $data = [
            'berths' => $berth
        ];
        $where = [
            'id' => $id
        ];
        $wpdb->update($table_name, $data, $where);
    }
    $table_name = $wpdb->get_blog_prefix() . 'images_for_yachts';
    $innerCounter = 0;
    $wpdb->query("delete from $table_name");
    foreach ($yachts['images'] as $id => $array) {

        if (isset($array)){

            if (count($array) > 1){
                $yachtsId[] = $counter;
                for ($i = 0; $i < count($array); $i++){
                    $counter++;
                    $yachtsId[] = $counter;
                }
            }
            foreach ($array as $image) {
                $data = [
                    'id' => $yachtsId[$innerCounter],
                    'yacht_id' => (string)$id,
                    'image' => $image
                ];
                $yachtId = $yachtsId[$innerCounter];
                if ($wpdb->get_var("select id from $table_name where id = $yachtId")){
                    $wpdb->delete($table_name, array('id' => $yachtId));
                }
                $innerCounter++;
                $wpdb->insert($table_name, $data);
            }
        }
    }
}
function getAllDataFromDb(){
    global $wpdb;
    $table_name = $wpdb->get_blog_prefix() . 'yachts';
    $ids = $wpdb->get_col("select id from $table_name");
    foreach ($ids as $count => $id){
        $row = $wpdb->get_row("select * from $table_name where id = $id");
        echo ++$count.': <br>';
        echo $row->price.' '.$row->model.' '.$row->price.' '.$row->length.'<hr>';
    }
}