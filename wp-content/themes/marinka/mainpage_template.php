<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<script>
    function show() {
        var foo = document.getElementsByClassName('TBTHiddenContent')[0];
        if (foo.style.display === 'none' || foo.style.display === '' ){

            foo.style.display = 'flex';
        }
        else {
            foo.style.display = 'none';
        }
    }
</script>

<div class="fullpage" >

	<div class="section">
		<div class="main_wrapper">
			<div class="FirstBlock">
				<div class="FBBanner" style="background-size:cover; background-image:url(<?= get_bloginfo('template_url'); ?>/assets/img/BannerImg.png">
					<div class="FBBannerHiddenContent" id = '1'>
						<h2 class="FBBannerHHeading">שייט נהרות ושייט תעלות</h2>
						<p class="FBBannerHTxt1"><span class="HeadingLine">|</span>שייט עצמאי בנהרות ובתעלות</p>
						<p class="FBBannerHTxt2">שייט קרוז בנהרות הגדולים</p>
					</div>
				</div>
				<div class="FBCategoryRow">
					<a href="#" class="FBCategoryItem" style="background-size:cover; background-image:url(<?= get_bloginfo('template_url'); ?>/assets/img/CategoryItem1.png">											<h2 class="FBCategoryHeading">מכירת יאכטות</h2>
					</a>
					<a href="#" class="FBCategoryItem" style="background-size:cover; background-image:url(<?= get_bloginfo('template_url'); ?>/assets/img/CategoryItem2.png">
						<h2 class="FBCategoryHeading">בית ספר ומועדון יאכטות</h2>
					</a>
					<a href="#" class="FBCategoryItem" style="background-size:cover; background-image:url(<?= get_bloginfo('template_url'); ?>/assets/img/CategoryItem3.png">											<h2 class="FBCategoryHeading">השכרת יאכטות</h2>
					</a>
				</div>
			</div>
		</div>
	</div>


	<!-- Second Block -->

	<div class="section">
        <?= ourTeam(); ?>
			<div class="main_wrapper">
				<div class="SecondBlock">
					<div class="SBTxtBlock" style="background-size:cover; background-image:url(<?= get_bloginfo('template_url'); ?>/assets/img/SecondBlock1Back.png">
						<div class="SBTxtSection0">
							<h2 class="SBTxtHeading">קצת עלינו</h2>
							<div class="SBTxtHr">
							</div>
						</div>
						<div class="SBTxtSection1">
							<span class="SBTxt">
								בית הספר ומועדון השייט Sea Time הוקם בשנת 2010 במרינה תל אביב ושם לעצמו למטרה להפוך את עולם השייט והיאכטות לנגיש יותר עבור כל אחד ואחת המבקשים להגשים חלום ולהשיט יאכטה בים. אנו מאמינים שלהפליג לומדים בים ולכן כבר מהרגע הראשון נפליג על היאכטה בכדי ללמוד ולהכיר את המפרשים והרוח בים+. לימודי השייט מתאימים לכולם והקורסים השונים בבית הספר מיועדים הן לשייטים מתחילים מהרמה הבסיסית ביותר ועד לקורסים מתקדמים לסקיפרים מקצועיים
							</span>
						</div>
						<div class="SBTxtSection2">
							<span class="SBTxt">
								כל התלמידים הם חלקממועדון היאכטות והם נהניםמהפלגות על מגוון היאכטות שיש למועדוןבמרינה תל אביב. חלק ניכר מפעילות המועדוןמבוצע בחו"ל, כולל קורסים לסקיפרים, טיולי יאכטות מאורגנים, תחרויות שייט בעולם ועוד. אנו מתגאים בכך שתמיד יש לנו מה להציע לכל סקיפר המחפש בית חם ורוצה להפליג, ללמוד ולהתמקצע, מועדון היאכטות מציע בנוסף הפלגות מקצועיות ומודרכות וכן הפלגות חברים פתוחות. מועדון היאכטותSea Timeמשקיע את מרב האמצעים על מנת לשמר את היאכטות ברמת תחזוקה גבוהה המאפשרת חווית שייט אידאלית הן לתלמידים והן לחברי המועדון.
							</span>
						</div>
					</div>
					
					<div class="SBImgBlock" style="background-size:cover; background-image:url(<?= get_bloginfo('template_url'); ?>/assets/img/SecondBlock2Back.png">
						<div class="SBTxtLine">קצת עלינו</div>
					</div>
				</div>
			</div>
	</div>



<!-- Third Block -->


	<div class="section">
			<div class="main_wrapper">
				<div class="ThirdBlock" style="background-size:cover; background-image:url(<?= get_bloginfo('template_url'); ?>/assets/img/TestimonialsBack.png">
					<div class="TBHeadingBlock">
						<h1 class="TBHeading">מה לקוחות חושבים עלינו</h1>
						<div class="TBTxtHr"></div>
					</div>
					<div class="TBTVisibleContent">
						<div class="TBTestimonialRowR">
							<img src="<?= get_bloginfo('template_url'); ?>/assets/img/TestimonialsPhoto1.png" class="TBTestimonialImgR">
							<div class="TBTTxtBlock">
								<span class="TBTestimonialTxt">	החוויה שלי בסיטיים היית מצויינת ומעבר לכך אני מרגיש שייכת למשפחה אני חייב לציין שההדרכות ברמה מאוד גבוה וההתנהלות מאוד חוויתית</span>
								<span class="TBTestimonialCredentials">	שלומית מלכה, 21 תל אביב</span>
							</div>
						</div>
						<div class="TBTestimonialRow">
							<img src="<?= get_bloginfo('template_url'); ?>/assets/img/TestimonialsPhoto2.png" class="TBTestimonialImg">
							<div class="TBTTxtBlock">
								<span class="TBTestimonialTxt">	החוויה שלי בסיטיים היית מצויינת ומעבר לכך אני מרגיש שייכת למשפחה אני חייב לציין שההדרכות ברמה מאוד גבוה וההתנהלות מאוד חוויתית</span>
								<span class="TBTestimonialCredentials">	יהודה לוי , 35 תל אביב</span>	
							</div>
						</div>
					</div>
					
					<a href="#more" class="TBTButton" onclick="show()">קרא עוד</a>

					<div class="TBTHiddenContent">
                        <?= hiddenContentOnButton() ?>
<!---->
<!--						<div class="TBTestimonialRow">-->
<!--							<img src="--><?//= get_bloginfo('template_url'); ?><!--/assets/img/TestimonialsPhoto2.png" class="TBTestimonialImg">-->
<!--							<div class="TBTTxtBlock">-->
<!--								<span class="TBTestimonialTxt">	החוויה שלי בסיטיים היית מצויינת ומעבר לכך אני מרגיש שייכת למשפחה אני חייב לציין שההדרכות ברמה מאוד גבוה וההתנהלות מאוד חוויתית</span>-->
<!--								<span class="TBTestimonialCredentials">	יהודה לוי , 35 תל אביב</span>	-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="TBTestimonialRowR">-->
<!--							<img src="--><?//= get_bloginfo('template_url'); ?><!--/assets/img/TestimonialsPhoto1.png" class="TBTestimonialImgR">-->
<!--							<div class="TBTTxtBlock">-->
<!--								<span class="TBTestimonialTxt">	החוויה שלי בסיטיים היית מצויינת ומעבר לכך אני מרגיש שייכת למשפחה אני חייב לציין שההדרכות ברמה מאוד גבוה וההתנהלות מאוד חוויתית</span>-->
<!--								<span class="TBTestimonialCredentials">	שלומית מלכה, 21 תל אביב</span>-->
<!--							</div>-->
<!--						</div>-->
					</div>
				</div>
			</div>
	</div>

<!--    --><?php //
//    $args = array(
//        'posts_per_page' =>-1,
//        'post_type' => 'post',
//    );
//
//    $query = new WP_Query( $args );
//
//    // Цикл
//    if ( $query->have_posts() ) {
//        $counter = 0;
//
//        while ( $query->have_posts() ) {
//
//            $query->the_post();
//            $age = get_field('job',$post->ID);
//            $testimonial_image_url = get_field('testimonials_photo',$post->ID);
//
//            ?>
<!--            <div class="FBPostSliderItem">-->
<!--                <img src="--><?//= get_bloginfo('template_url'); ?><!--/assets/img/SliderItem1.png" class="FBPostSliderImg">-->
<!--                <h4 class="FBPostSliderHeading">--><?//= get_the_title(); ?><!--</h4>-->
<!--                <span class="FBPostSliderTxt"> --><?//= get_the_content(); ?><!-- </span>-->
<!--                <a href="#toPost" class="FBPostSliderButton">קרא עוד</a>-->
<!--            </div>-->
<!--            --><?php
//        }
//    }
//
//    wp_reset_postdata();
//    ?>

<!-- Fourth Block -->

	<div class="section">
			<div class="main_wrapper">
				<div class="FourthBlock">
					<h2 class="FBHeading">בלוג</h2>


					<div class="FBPostSliderRow" >

                        <?= postsSlider() ?>

				    </div>
			</div>
	</div>


<!-- Fifth Block -->



             
              
</div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?= get_bloginfo('template_url'); ?>/assets/slick/slick.min.js"></script>
    <script type="text/javascript">
        // var el = document.getElementsByClassName('FBPostSliderItem');
        // for (var a in el){
        //     a.style.width = "300px";
        // }
        // document.getElementsByClassName('FBPostSliderItem').forEach(function (element) {
        //     element.style.width = '200px';
        // });
        $('.FBPostSliderRow').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    </script>
<?php
get_footer();
?>