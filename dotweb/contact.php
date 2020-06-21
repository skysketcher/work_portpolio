<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Dot Web Technologies</title>
    <?php
        include ('inc/linkfiles-header.php');
    ?>
     <link href="css/parsley.css" rel="stylesheet">
    
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/parsley.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body id="contact">
    <?php
  	include ('inc/header.php');
   ?>
       <section class="heading">
           <div class="container">
               <div class="row">
                   <div class="col-xs-12">
                       <h1 class="text-center">Contact Us</h1>
                       <ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="contact.php">Contact Us</a></li>
</ol>
                   </div>
               </div>
           </div>
       </section>
       <section class="aboutContent content">
           <div class="container">
               <div class="row">
                   <div class="col-sm-6">
                       <h1>Contact Us</h1>
                      <p><strong>Contact us by filling out the form below or requesting a quote. Besides feel free to give us a call – we are available to discuss your specific project needs in greater detail to help find the best solution for you and your business.</strong> 
                 </p>
                  <!-- message display -->
          <?php if($_GET['msg']=='success'){ ?>
                    <div class="alert alert-success">
                          <strong>Thankyou!</strong> Your message has been recieved. We will reply you shortly. Keep exploring our services.
                    </div>

              <?php }
              if($_GET['msg']=='error'){ ?>
                  <div class="alert alert-danger">
                    <strong>Error!</strong> Your message couldnt be recieved. Can you recheck your form entry?.
                  </div>

              <?php }
              ?>
             <form method="POST" action="contact_mail.php" id="contactform">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="John Smith">
      </div>
        <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" data-parsley-trigger="change" data-parsley-error-message="<small style='color:red'>Is it a valid email ID?</small>" required placeholder="john@smith.com">
      </div>
        <div class="form-group">
        <label for="text">Phone Number</label>
        <input type="text" class="form-control" name="number" placeholder="9841123456">
      </div>
        <div class="form-group">
        <label for="text">Subject</label>
        <input type="text" class="form-control" name="subject">
      </div>
      <div class="form-group">
        <label for="text">Message</label>  
         <textarea name="message" rows="4" class="form-control" type="text" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="500" data-parsley-minlength-message="<small style='color:red'>Come on! You can send us more message than this..</small>" data-parsley-validation-threshold="10" required placeholder="Type your message here"></textarea>
      </div>
     
            <div class="form-group">
              <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Le88yEUAAAAAOe5qAc5TMq2w4uYaJpAnrDg8Jrp"></div>
              
              </div>
              <div class="form-group">
             <input id="submitBtn" class="btn  pull-right button" type="submit"  value="Send Message" disabled>
             </div>
    </form>
      <script>
         $('#contactform').parsley();
         
function recaptchaCallback() {
   $('#submitBtn').removeAttr('disabled');
};

</script>
      </div>
                   <div class="col-sm-6">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.883045843237!2d85.34077261470065!3d27.720897082786266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb196f09ecb921%3A0xef176c1b806723b2!2sDot+Web+Technologies+Pvt.+Ltd.!5e0!3m2!1sen!2snp!4v1486966237000" style="border:0;width: 100%;height: 600px;" allowfullscreen></iframe>
                   </div>
               </div>
           </div>
       </section>
        <?php
        include ('inc/footer.php');
        include ('inc/linkfile-footer.php');
    ?>
</body>

</html>