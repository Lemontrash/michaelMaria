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

<div class="fullpage">

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
                        <?php
                        $args = array(
                            'posts_per_page' =>6,
                            'post_type' => 'testimonials'
                        );

                        $query = new WP_Query( $args );

                        // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {

                                $query->the_post();
                                $age = get_field('job',$post->ID);
                                $testimonial_image_url = get_field('testimonials_photo',$post->ID);

//                                $text = the_content();
//                                $age = the_title();
                                ?>
                                <div class="TBTestimonialRow">
                                    <img src="" class="TBTestimonialImg">
                                    <div class="TBTTxtBlock">
                                        <span class="TBTestimonialTxt"><?= get_the_content(); ?></span>
                                        <span class="TBTestimonialCredentials"><?= $age; ?></span>
                                    </div>
                                </div>
                                <?php
                            }
                        }

                        wp_reset_postdata();
                        ?>
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



<!-- Fourth Block -->

	<div class="section">
			<div class="main_wrapper">
				<div class="FourthBlock">
					<h2 class="FBHeading">בלוג</h2>


					<div class="FBPostSliderRow">
						<div class="FBPostSliderItem">
							<img src="<?= get_bloginfo('template_url'); ?>/assets/img/SliderItem1.png" class="FBPostSliderImg">
							<h4 class="FBPostSliderHeading">היאכטות היקרות בעולם</h4>
							<span class="FBPostSliderTxt">אם בשלב הסקיצה העיצובית עדיין לא קיים הטקסט הרלוונטי, לא מומלץ למקם טקסט אמיתי אחר</span>
							<a href="#toPost" class="FBPostSliderButton">קרא עוד</a>
						</div>
						<div class="FBPostSliderItem">
							<img src="<?= get_bloginfo('template_url'); ?>/assets/img/SliderItem2.png" class="FBPostSliderImg">
							<h4 class="FBPostSliderHeading">שיטות קשירה מתקדמות</h4>
							<span class="FBPostSliderTxt">אם בשלב הסקיצה העיצובית עדיין לא קיים הטקסט הרלוונטי, לא מומלץ למקם טקסט אמיתי אחר</span>
							<a href="#toPost" class="FBPostSliderButton">קרא עוד</a>
						</div>
						<div class="FBPostSliderItem">
							<img src="<?= get_bloginfo('template_url'); ?>/assets/img/SliderItem3.png" class="FBPostSliderImg">
							<h4 class="FBPostSliderHeading">היאכטות היקרות בעולם</h4>
							<span class="FBPostSliderTxt">אם בשלב הסקיצה העיצובית עדיין לא קיים הטקסט הרלוונטי, לא מומלץ למקם טקסט אמיתי אחר</span>
							<a href="#toPost" class="FBPostSliderButton">קרא עוד</a>
						</div>
					</div>


				</div>
			</div>
	</div>


<!-- Fifth Block -->

	<div class="section">
			<div class="form_wrapper">
				<div class="FifthBlock">
					<h2 class="FifthBHeading">להפלגת היכרות ללא תשלום מלאו את הטופס</h2>
					

                <?php echo $response; ?>
                <form action="<?php the_permalink(); ?>" method="post">

                	<input type="hidden" name="submitted" value="1">

					<p><input type="submit" class="FifthBButton">!שלח עכשיו</p>

					<p><label for="message_telephone"><input type="text" class="FifthBEmail" placeholder="טלפון" name="message_telephone" value="<?php echo esc_attr($_POST['message_telephone']); ?>"></label></p>

                  	<p><label for="message_email"><input type="text" class="FifthBEmail" placeholder="מייל" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>

                  	<p><label for="name"><input type="text" class="FifthBName" placeholder="ייאיר לב" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>

                </form>

				<!-- 	<a href="#send" class="FifthBButton">!שלח עכשיו</a>
					<input type="text" class="FifthBPhone" placeholder="טלפון">
					<input type="email" class="FifthBEmail" placeholder="מייל">
					<input type="telephone" class="FifthBName" placeholder="יאיר לב"> -->
				</div>
			</div>
	</div>

<?php
  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";
  }

  //response messages
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $telephone = $_POST['message_telephone'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($telephone)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    
  if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
?>
             
              
</div>

<?php
get_footer();
?>