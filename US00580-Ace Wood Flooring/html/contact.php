<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wood flooring Sanding and Refinishing Missoula</title>
       <meta name="description" content="Looking for Hardwood Flooring Missoula MT and  Wood Flooring Installation Missoula MT? Ace Wood Flooring is a Missoula, locally owned and operated flooring company serving the entire Montana area. we provide best service  in Missoula, MT" />
    <meta name="keywords" content="hardwood flooring Missoula mt, wood floor repairs missoula , hardwood sanding and refinishing missoula, missoula hardwood mt, hardwood flooring installation, custom hardwood montana" />

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="format-detection" content="telephone=no">
    <meta name="copyright" content="Ace Wood Flooring">
    <meta name="generator" content="Speedline Web Solution" />
    <meta name="language" content="EN">
    <meta name="author" content="Ace Wood Flooring">
    <meta name="distribution" content="local">
    <meta name="geo.placename" content="1627 S 5th St W, Missoula, MT 59801, USA" />
    <meta name="geo.position" content="46.8647450;-114.0213620" />
    <meta name="geo.region" content="US-Montana" />
    <meta name="ICBM" content="46.8647450, -114.0213620" />
    <meta name="rating" content="general">


    <link href="http://www.acewoodflooringmt.com/" rel="canonical"/>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    
	<link rel=”publisher” href=”https://plus.google.com/116074401914751420415/posts“/>
    <!-- Place this tag in your head or just before your close body tag. -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Add lightbox -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
    <!-- Custom styles -->
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
    <!--web-font-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    
    
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="contact">
  <!--Header-->
  	<?php 
		include ('include/header.php');
	?>
  <!--End Header-->
  <!--Content-->
    <section id="welcome">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12 center">
                	<img src="img/contact-us.jpg" alt="ace wood flooring" class="img-responsive">
            	</div>
                <div class="col-md-12">
                <div class="popup">
                    <?php  if(isset($_SESSION['success'])){ ?>
                    <div class="alert alert-success" role="alert">
                    <h3 class="sent">Message sent successfully.</h3>
                    <p>Thank you for contacting us. We have received your queries. We will respond you as soon as possible.</p>
                    </div>
                    
                    <?php unset($_SESSION['success']);}
					elseif(isset($_SESSION['error']))  {?>
                    <div class="alert alert-danger" role="alert">
                    <h3 class="sent">Message failed.</h3>
                    <p>Something went wrong. Please try again.</p>
                    </div>
                    <?php unset($_SESSION['error']);}
					elseif(isset($_SESSION['failed']))  {?>
                    <div class="alert alert-danger" role="alert">
                    <h3 class="sent">Message Error.</h3>
					<p>You did not type the security code correctly. Our policy is to avoid messages from spammers.</p>
                    </div>
                    
                    
                    <?php unset($_SESSION['failed']);}
					
					?>
					
                   </div>
                   </div>
                <div class="col-md-8">
                	<h2>Send Us Your Queries</h2>
                	<form class="form-horizontal" name="contact_form" method="post" action="message-send.php">
                      <div class="form-group">
                        <label for="exampleInputName2" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleInputName2" name="name" placeholder="Jane Doe">
                        </div>
                      </div>           
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="john@doe.com"  name="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword3" name="subject">
                        </div>
                      </div><div class="form-group">
                        <label for="textarea" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                      	<textarea name="message" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10"><p><img src="captcha/blank.png" class="captcha" id="captcha_image" alt="" />
                                                <a href="#" id="captcha_refresh"><img src="img/reload.png"></a></p></div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2" class="col-sm-2 control-label" name="name">Security Code</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="securuty" name="security_code">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-10 col-sm-2">
                          <button type="submit" class="btn btn-default pull-right">Submit</button>
                        </div>
                      </div>
                    </form>
                </div>
                <div class="col-md-4">
                	<h2>Ace Wood Flooring</h2>
                    <ul class="contactInfo">
                    	<li><a href="#"><i class="fa fa-map-marker"></i>1627 S 5th St W Missoula,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mt 59801 USA</a></li>
                    	<li><a href="tel:4063706253"><i class="fa fa-phone"></i>406-370-6253</a></li>
                    	<li><a href="mailto:chuck6321@yahoo.com"><i class="fa fa-envelope"></i>chuck6321@yahoo.com</a></li>
                    </ul>
                </div>
        	</div>
        </div>
    </section>
  <!--End Content-->
  <!--Footer-->
  	<?php 
		include ('include/footer.php');
	?>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/gen_validatorv31.js" type="text/javascript"></script>
    <script src="js/validate.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
    <script>
           $(document).ready(function() {
            var stickyNavTop = $('.nav').offset().top;
             
            var stickyNav = function(){
            var scrollTop = $(window).scrollTop();
                  
            if (scrollTop > stickyNavTop) { 
                $('.topnav').addClass('sticky');
            } else {
                $('.topnav').removeClass('sticky'); 
            }
            };
             
            stickyNav();
             
            $(window).scroll(function() {
                stickyNav();
            });
            });
    </script>
       
    <script type="text/javascript" src="venobox/venobox.js"></script>
  <script>
	  $(document).ready(function(){
	
		/* default settings */
		$('.venobox').venobox(); 
	
		/* auto-open #firstlink on page load */
		$("#firstlink").venobox().trigger('click');
	});
  </script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({
	  infinite: true,
	  speed: 1500,
	  fade: true,
	  cssEase: 'linear',
	  autoplay: true,
	  autoplaySpeed: 4000,
	  arrows:true
	  });
    });
  </script>
   <script type="text/javascript">
    $(document).ready(function(){
      $('.testimonial').slick({
	  infinite: true,
	  cssEase: 'linear',
	  autoplay: true,
	  autoplaySpeed: 4000,
	  });
    });
  </script>
  <!-- SITE end --> 

	<script language="javascript" src="js/validate.js"></script> 
    <script type="text/javascript">
    
    
    
      var _gaq = _gaq || [];
    
      _gaq.push(['_setAccount', 'UA-19084563-28']);
    
      _gaq.push(['_trackPageview']);
    
    
    
      (function() {
    
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    
      })();
    
    
    
    </script>
  </body>
</html>
<?php session_destroy(); ?>