<?php

$args = array(
    'posts_per_page' =>-1,
    'post_type' => 'yacht',
);

$query = new WP_Query( $args );

// Цикл
if ( $query->have_posts() ) {
    $counter = 0;

    while ( $query->have_posts() ) {

        $query->the_post();
    ?>
        <aside>
            <?= do_shortcode('[post_gallery]') ?>

            <?= get_the_content() ?>
        </aside>
        <div class="lessonContent">
            <div class="options">
                price = <?= get_field('price',$post->ID) ?>
                <br>
                country = <?= get_field('country',$post->ID) ?>
                <br>
                type = <?= get_field('type',$post->ID) ?>
                <br>
                length = <?= get_field('length',$post->ID) ?>
                <br>
                adults = <?= get_field('adults',$post->ID) ?>
                <br>
                children = <?= get_field('children',$post->ID) ?>
                <br>
                year = <?= get_field('year',$post->ID) ?>
                <br>
                loa = <?= get_field('loa',$post->ID) ?>m
                <br>
                beam = <?= get_field('beam',$post->ID) ?>m
                <br>
                projec = <?= get_field('projec',$post->ID) ?>m
            </div>
            <hr>
        </div>
        </div>
        <?php
    }
}
wp_reset_postdata();

get_footer();
?>
