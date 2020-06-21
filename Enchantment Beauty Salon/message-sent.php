<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="Epsilon, mobile, framework, css3, html5, javascript, retina" />
<meta name="Description" content="Epsilon based mobile retina webpp template!" />
<!--Favicon shortcut link-->
<link type="image/x-icon" rel="shortcut icon" href="images/splash/favicon.ico" />
<link type="image/x-icon" rel="icon" href="images/splash/favicon.ico" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon" sizes="114x114" href="images/splash/splash-icon.png" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" media="screen and (max-device-width: 320px)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@3x.png" sizes="640x1096" />

<!-- Page Title -->
<title>Enchantment Beauty Salon</title>

<!-- Stylesheet Load -->
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<link href="styles/framework-style.css" rel="stylesheet" type="text/css" />
<link href="styles/framework.css" rel="stylesheet" type="text/css" />
<link href="styles/icons.css" rel="stylesheet" type="text/css" />
<link href="styles/retina.css" rel="stylesheet" type="text/css" media="only screen and (-webkit-min-device-pixel-ratio: 2)" />

<!--Page Scripts Load -->
<script src="scripts/jquery.min.js" type="text/javascript"></script>		
<script src="scripts/jquery-ui-min.js" type="text/javascript"></script>
<script src="scripts/contact.js" type="text/javascript"></script>
<script src="scripts/swipe.js" type="text/javascript"></script>
<script src="scripts/klass.min.js" type="text/javascript"></script>
<script src="scripts/photoswipe.js" type="text/javascript"></script>
<script src="scripts/colorbox.js" type="text/javascript"></script>
<script src="scripts/retina.js" type="text/javascript"></script>
<script src="scripts/modernizr.js" type="text/javascript"></script>
<script src="scripts/slicebox.js" type="text/javascript"></script>
<script src="scripts/twitter.js" type="text/javascript"></script>
<script src="scripts/custom.js" type="text/javascript"></script>
</head>

<body>

<?php 
	include ('include/navigation.php');
?>

<div class="header">
	<a href="index.php" class="deploy-share"></a>
	<h4>Get connected!</h4>
	<a href="#" class="deploy-menu"></a>
	<div class="decoration"></div>
</div>

<div class="landing-header">
	<img class="landing-logo" src="images/logo/logo.png" alt="img" />
</div>

<div class="content">
	<div class="decoration"></div>
    
    <div class="container">
    	<h3>Get in touch!</h3>
        <p>A functional, AJAX, PHP contact form with field validation and some nifty animations added to it! Hope you love it!</p>
        <div class="maps-container">
        	<iframe class="responsive-image maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1633.637311011233!2d-90.00797409999998!3d35.02485910000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d562a4e0ff9749%3A0x77aa442ab0dee66b!2s4531+Millbranch+Rd%2C+Memphis%2C+TN+38116%2C+USA!5e0!3m2!1sen!2s!4v1427838660778" width="400" height="300" frameborder="0" style="border:0"></iframe>
    		
    </div>

    <div class="decoration"></div>
	<div class="container no-bottom">
        <div class="contact-form no-bottom"> 
            <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                <div class="notification-box green-box">
                    <h4>YOUR MESSAGE HAS BEEN SENT!</h4>
                    <a href="#" class="close-notification">x</a>
                    <div class="clear"></div>
                    <p>
                        You're message has been successfully sent. Please allow up to 48 hours for us to reply!  
                    </p>  
                </div> 
            </div>
        <form name="contact_form" method="post" action="message-send.php" class="contactForm" id="contactForm">

           
                <fieldset>
                    <span class="formValidationError" >
                        <div class="small-notification red-notification">
                            <p>Error Sending! Please enter your name!</p>
                        </div>
                    </span>             
                    <span class="formValidationError" >
                        <div class="small-notification red-notification">
                            <p>Error Sending! Mail address required!</p>
                        </div>
                    </span> 
                    <span class="formValidationError" >
                        <div class="small-notification red-notification">
                            <p>Error Sending! Valid Email Address Required</p>
                        </div>
                    </span> 
                    <span class="formValidationError" >
                        <div class="small-notification red-notification">
                            <p>Error Sending! Message field is empty!</p>
                        </div>
                    </span>  
                    <div class="formFieldWrap">
                    <p>Thank you for contacting us. We have received your queries. We will respond you as soon as possible.</p>
                        <label class="field-title contactNameField" for="contactNameField">Name:<span>(required)</span></label>
                        <input type="text" name="name" value="" class="contactField requiredField" />
                    </div>
                    <div class="formFieldWrap">
                        <label class="field-title contactEmailField" for="contactEmailField">Email: <span>(required)</span></label>
                        <input type="text" name="email" value="" class="contactField requiredField requiredEmailField"/>
                    </div>
                    <div class="formFieldWrap">
                        <label class="field-title contactNameField" for="contactNameField">Subject:<span>(required)</span></label>
                        <input type="text" name="subject" value="" class="contactField requiredField" />
                    </div>
                     <div class="formTextareaWrap">
                        <label class="field-title contactMessageTextarea" for="contactMessageTextarea">Message: <span>(required)</span></label>
                        <textarea name="message" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                    </div>

                    <div>
                       
                                    <p><img src="captcha/blank.png" class="captcha" id="captcha_image" /></p>
                                    <p><a href="#" id="captcha_refresh">Reload new security image</a> if unreadable </p>
                        
                              <label class="field-title contactEmailField" for="contactEmailField">Secuirty Code:<span>(required)</span></label>
                               <input type="text" name="security_code" value="" class="contactField requiredField"  />
                               
                    </div>
                    
                  
                    <div class="formSubmitButtonErrorsWrap">
                        <input type="submit" class="buttonWrap button grey contactSubmitButton"  value="Submit"  />
                    </div>
                </fieldset>
            </form>  
               <script src="scripts/validate.js" type="text/javascript"></script> 
               <script src="scripts/gen_validatorv31.js" type="text/javascript"></script>
        </div>
    </div>
	<div class="decoration"></div>
</div>

  <?php
include('include/tab-button.php');
?>

</div>

<?php
include('include/footer.php');
?>

</body>


























