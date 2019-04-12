<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<?php


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


//// specify orl
//$wsdl = 'http://www.booking-manager.com/cbm_web_service2/services/CBM?wsdl';
//
//// load client with definitions
//$soapClient = new SoapClient($wsdl, Array('trace'=>1));
//
//try {
//    $struct = new MMKSruct(Array(3497,'office@sea-time.co.il','seatime0', 225));
//
//    $result = $soapClient->getResources($struct);
//
//    if (isset($result->out)) {
//        $xml = $result->out;
//        echo $xml;
//    }
//}
//
//catch (Exception $e) {
//    print_r($soapClient->__getLastRequest());
//    print_r($soapClient->__getLastResponse());
//    print_r($e->getTrace());
//    var_dump($e);
//}
//
//$tmp = $soapClient->__getLastResponse();            //получение запроса и обрезание убейте хорватов пожалуйста
//$response = html_entity_decode($tmp);
//$response = stristr($response, '<root>');
//$pos = strpos($response, '</ns1:out>');
//$response = substr($response, 0, $pos);
//$obj = new SimpleXMLElement($response);
//

$index = 0;
foreach ($obj->resource as  $resource){
    $counter = 0;
    $time = strtotime($resource->prices->price[0]->attributes()['datefrom']);
    foreach ($resource->prices as $price){
        foreach ($price as $key => $item) {
            if ($time < strtotime($item->attributes()['datefrom'])){
                $time = strtotime($item->attributes()['datefrom']);
                $price = $item->attributes()['price'];
                $index = $counter;
            }
            $counter++;

        }
        echo $index.' ';
        echo '<br>';
        $index = 0;
    }

    foreach ($resource->images as $image){

    }

    foreach ($resource->equipment as $equipment){

    }

    foreach ($resource->extras as $extra) {

    }

//    $resource->locations->attributes(); ??????????????????????/
}

?>
<pre>
<?php

print_r($obj);
?>
</pre>
