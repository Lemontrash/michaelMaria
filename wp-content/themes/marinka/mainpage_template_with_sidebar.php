<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>


<aside style="width: 20%; height: 100%">
    12312312
</aside>

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