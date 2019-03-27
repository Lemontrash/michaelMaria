<?php

get_header();
?>
<div class="lessonPage">
    <aside>
        <?php
            $terms = get_terms( array(
                'taxonomy' => 'lessons_tax',
                'hide_empty' => false,
            ) );
//            echo '<pre>';
//            var_dump($terms);
//            echo '</pre>';
            foreach($terms as $t) : ?>
                <div class="lessonParent">
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

           echo get_the_content();
           echo '<br>';
           echo wpb_set_post_views(get_the_ID());

           echo wpb_get_post_views(get_the_ID());


        endwhile; // End of the loop.
        ?>
    </div>
</div>
<?php get_footer(); ?>
