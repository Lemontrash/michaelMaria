<?php
/*
Template Name: AboutUs
*/
//require 'curl.php';
insertAll();
getAllDataFromDb();
exit();
get_header();

?>
    <style>
        h1{
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 64px;
            color: #1D9FB3;
        }
        .our-team-wrapper{
            display: flex;
            flex-direction: row;
            justify-content: center;
            margin-bottom: 20px;
        }
        .our-team-element{
            padding: 35px 76px 20px 76px;
            flex-direction: column;
            border-left: solid 1px #ececec;
        }
        .our-team-element:nth-child(even){
            padding:108px 50px 20px 76px;
        }
        .our-team-element:last-child{
            padding: 108px 50px 20px 76px;
            flex-direction: column;
            border-left: solid 0px #ececec;
        }
        .our-team-element h2{
            word-break: break-all;
            max-width: 280px;
            margin-top: 88px;
            color: #1D9FB3;
            font-size: 20px;
        }
        .our-team-element h3, p{
            word-break: break-all;
            max-width: 280px;
            font-weight: 200;
            font-size: 14px;
            margin-top: -12px;
            /*color: #1D9FB3;*/
            /*font-size: 20px;*/
        }
        .photo{
            max-height: 180px;
            max-width: 180px;
        }


    </style>



    <div class="main_wrapper" style="direction: ltr;">
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

        <h1>הצוות שלנו</h1>

        <div class="our-team-wrapper">
            <?= ourTeam(); ?>
        </div>

    </div>




<?php
get_footer();
?>