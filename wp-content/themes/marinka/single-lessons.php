<?php

get_header();
?>
<style>
    a.nice-likes {
        display: inline-block;
        margin-right: 20px;
        margin-bottom: 1em;
        text-decoration: none;
    }
    .lessonsWrapper{
        direction: ltr;
        margin: 10px 20px 20px 20px;
    }
    .lessonPage{
        margin: ;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }
    aside{
        margin-right: 15px;
        text-transform: capitalize;
        width: 30%;
    }
    ul{
        margin: 0;
        padding: 0;
    }
    ul li:last-child{
        padding-bottom: 0.7em;
    }
    ul li:first-child{
        padding-top: 0;
    }
    a, a:visited{
        color: white;
        text-decoration: none;
        color:#aedfe7;
    }
    .lessonContent img{
        margin-right: 18px;
        float: left;
    }

    .lessonContent .views{
        margin: 0;
    }
    .lessonContent{
        word-break: break-all;
        font-weight: 100;
        font-size: 12px;
        padding: 0 36px 0 36px;
    }
    .lessonContent h2{
        text-transform: capitalize;
        color: #2e312a;
        margin: 24px 0 0 24px;
    }
    .lessonContent h2:after{
        content: '';
        display: inline-block;
        background-color: #2e312a;
        margin-left: 16px;
        margin-bottom: 6px;
        width: 150px;
        height: 1px;
    }
    .lessonContent p{
        line-height: 22px;
        text-align: justify;
        word-break: break-word;
    }
    .lessonContent p:first-letter{
        font-size: 38px;
    }
    .lessonName{
        padding-bottom: 0.7em;
        padding-top: 0.7em;
        color: white;
        background-color: #cacaca;
        margin-top: 5px;
        padding-left: 10px;

    }
    .floatImageContent {
        float:right;
        max-width: 350px;
    }
    .lessonParent ul {
        height:0;
        overflow-y:hidden;
        transform:scaleY(0);
        transition:0.3s;
    }
    .lessonParent.opened ul{
        transition: .3s ease-out;
        padding-left: 10px;
        display: block;
        background-color: #1D9FB3;
        height:initial;
        transform:scaleY(1);
    }
    .lessonParent.opened ul li{
        transition:.3s ease-out;
        padding-top: 0.7em;
        background-color: #1D9FB3;
    }
    
    .lessonParent.opened .lessonName {
        transition: 1.2s;
        background-color: #1D9FB3;
    }
    .lessonContent{
        width: 68%;
        -webkit-box-shadow: 0px 0px 60px -19px rgba(0,0,0,0.41);
        -moz-box-shadow: 0px 0px 60px -19px rgba(0,0,0,0.41);
        box-shadow: 0px 0px 60px -19px rgba(0,0,0,0.41);
    }
</style>

<div class="lessonsWrapper">
    <h1>lesson page</h1>
    <div class="lessonPage">
        <aside>
            <?php
            global $post;
            $tmp = wp_get_post_terms( $post->ID, 'lessons_tax' );
            $terms = get_terms( array(
                'taxonomy' => 'lessons_tax',
                'hide_empty' => false,
            ) );

            foreach($terms as $t) :

                ?>
                <div class="lessonParent <?php if( $tmp[0]->term_id == $t->term_id ){ echo 'opened'; }?>">
                    <div class="lessonName"><?= $t->name; ?></div>
                    <ul>
                        <?php
                        $lessons = new WP_Query( [
                            'post_type' => 'lessons',
                            'orderby' => 'date',
                            'order' => 'ASC',
                            'tax_query' => [
                                [
                                    'taxonomy' => 'lessons_tax',
                                    'field'    => 'id',
                                    'terms'    => $t->term_id
                                ]
                            ]
                        ] );
                        if($lessons->have_posts()) {
                            while($lessons->have_posts()) {
                                $lessons->the_post();
                                ?>
                                <li><a href="<?= get_the_permalink(); ?>"><?= get_the_title();?></a></li>
                                <?php
                            }
                        }
                        ?>

                    </ul>
                </div>

            <?php endforeach; wp_reset_postdata(); ?>

        </aside>
        <div class="lessonContent">
            <?php

            while ( have_posts() ) :

                the_post();
                $headline = get_field('headline',$post->ID);
                ?>
                <h2> <?= $headline; ?></h2>
                <div class="contentWrapper">
                    <img  class="floatImageContent" src="<?= the_post_thumbnail_url($post->ID,'full') ?>" alt="">
                    <p class="contentText">
                        <?= get_the_content(); ?>
                    </p>
                </div>
                 
                <?php wpb_set_post_views(get_the_ID()); ?> 
                <div class="views"><?= nice_likes() ; ?> <?=wpb_get_post_views(get_the_ID()) ?> </div><br>
            <?php
            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</div>




<?php get_footer(); ?>

<script>

    $('.lessonName').on('click',function (e) {
        e.preventDefault();
        $(this).parent().toggleClass('opened');
    })


</script>
