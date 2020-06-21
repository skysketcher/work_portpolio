<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Frisco Car Service offer Frisco Airport and Limousine service to and from DFW airport and all other corporate transportation. Call us today: 972-832-0799 for Booking">
    <meta name="keywords" content="frisco car service, frisco airport car and limousine service, dfw airport transportation, frisco limousine service, corporate car service">
    <title>Frisco Car Services | Frisco Airport Car and Limousine Service</title>
	<meta name="robots" content="index,follow">
<meta property="og:type" content="website"/>
<meta name="google-site-verification" content="Code from Google Webmaster tools"/>
<meta name="msvalidate.01" content="Code from Bing Webmaster tools"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="language" content="EN">
<meta name="author" content=" Frisco Car Service">
<meta name="distribution" content="local">
<meta name="geo.placename" content="8745 Gary Burns Drive, Frisco, TX 75034, USA" />
<meta name="geo.position" content="33.1490010;-96.8070600" />
<meta name="geo.region" content="US-Texas" />
<meta name="ICBM" content="33.1490010, -96.8070600" />
<meta name="rating" content="general">
<link href="http://www.friscocarservices.com/" rel="canonical"/>
<link rel="publisher" href="https://plus.google.com/b/116103000933745292371/116103000933745292371/about">
	
	<!-- core CSS -->
    <link rel="stylesheet" type="text/css" href="css/import.css">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,500,700,600,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>	
    <link rel="stylesheet" media="only screen and (max-width: 767px)" href="css/max-768px.css" />
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="contact">

      <?php 
		include ('include/header.php');
	?><!--/header-->


    <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
        </div>
        <div class="gmap-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3340.2608276733536!2d-96.86631310000003!3d33.154778699999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c3bd9ee882cf9%3A0x107d9efb640f729c!2s2770+Main+St+%23285%2C+Frisco%2C+TX+75034%2C+USA!5e0!3m2!1sen!2sus!4v1434501229722" frameborder="0" style="border:0"></iframe>
                        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Drop Your Message</h2>
            </div> 
            <div class="row contact-wrap"> 
            <div class="popup">
                    <?php  if(isset($_SESSION['success'])){ ?>
                    
                    <h3 class="sent">Message sent successfully.</h3>
                    <p style="color:#0A7D00;">Thank you for contacting us. We have received your queries. We will respond you as soon as possible.</p>
                    
                    <?php unset($_SESSION['success']);}
					elseif(isset($_SESSION['error']))  {?>
                    <h3 class="sent">Message failed.</h3>
                    <p style="color:#C74350;">Something went wrong. Please try again.</p>
                    <?php unset($_SESSION['error']);}
					elseif(isset($_SESSION['failed']))  {?>
                    <h3 class="sent">Message Error.</h3>
					<p style="color:#C74350;">You did not type the security code correctly. Our policy is to avoid messages from spammers.</p>
                    
                    
                    <?php unset($_SESSION['failed']);}
					
					?>
                <div class="status alert alert-success" style="display: none"></div>
                <form  class="contact-form" name="contact_form" method="post" action="message-send.php">
           
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>                    
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
                        </div>  
                        <div class="form-group">    
                        <p><img src="captcha/blank.png" class="captcha" id="captcha_image" alt="reload" />
                                                <a href="#" id="captcha_refresh"><img src="images/reload.png" alt="reload"></a></p>
                         </div>   
                        <div class="form-group">
                            <label>Security Code *</label>
                            <input type="text" name="security_code" class="form-control" required>
                        </div>               
                        <div class="form-group">
                            <button type="submit" name="submit_button" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div>
        </div><!--/.container-->
    </section><!--/#contact-page-->
  <?php 
		include ('include/footer.php');
	?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
<script src="js/gen_validatorv31.js" type="text/javascript"></script>
<script src="js/validate.js" type="text/javascript"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
<?php session_destroy(); ?>