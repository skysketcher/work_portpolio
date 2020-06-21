<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php 
	require ('include/head.php');
	?>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this Site -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!--Fonts & icons for the site-->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="contactpage">
  	<?php
	include ('include/header.php');
	?>
    <section class="serviceContent">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1434755130184!6m8!1m7!1s4eG1Kp60k97gFW-TRvCyzw!2m2!1d38.308374!2d-85.769437!3f52!4f0!5f0.7820865974627469"></iframe>
	</div>
	<div class="container">
    	<div class="row">
        	<div class="col-sm-6 col-md-6">
            	<h4>From I-65 south</h4>
                <p>Exit #4 / Lewis & Clark Pkwy, Right off the ramp, Drive a few blocks, Turn left at McDonalds onto Eastern Blvd, Turn left into strip mall parking lot (before the library). </p>
            </div>
            <div class="col-sm-6 col-md-6">
            	<h4>From I-65 north</h4>
                <p>Exit #2 / Eastern Blvd, Left off the ramp, Drive about 5 or 6 blocks, Pass the library, Turn right into strip mall parking lot (before McDonald's).</p>
            </div>
        </div>
		<div class="row">
			<div class="col-lg-12 form">
				<h4>Get in touch with us by filling contact form below</h4>
				<form id="contactform" action="message-send.php" method="post" class="validateform" name="contact_form">
                                <div class="popup">
                    <?php  if(isset($_SESSION['success'])){ ?>
                    
                    <h3 class="sent">Message sent successfully.</h3>
                    <p style="color:#0A7D00;">Thank you for contacting us. We have received your queries. We will respond you as soon as possible.</p>
                    
                    <?php unset($_SESSION['success']);}
					elseif(isset($_SESSION['error']))  {?>
                    <h3 class="sent">Message failed.</h3>
                    <p style="color:#C74350;">Something went wrong or Please try again.</p>
                    
                    <?php unset($_SESSION['error']);}
					elseif(isset($_SESSION['failed']))  {?>
                    <h3 class="sent">Message Error.</h3>
					<p style="color:#C74350;">You did not type the security code correctly. Our policy is to avoid messages from spammers.</p>
                    
                    
                    <?php unset($_SESSION['failed']);}
					
					?>
                    </div>
					<div class="row">
						<div class="col-lg-4 field">
							<input type="text" name="name" placeholder="* Enter your full name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="email" placeholder="* Enter your email address" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-4 field">
							<input type="text" name="phone" placeholder="* Enter your contact number" data-rule="phone" data-msg="Please enter a valid number" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 field margintop10">
							<input type="text" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
						</div>
                        <div class="col-lg-4 field margintop10">
                        <p><img src="captcha/blank.png"  class="captcha" id="captcha_image" /> <a href="#" id="captcha_refresh">Reload new security image</a></p>
							<input type="text" name="security_code" placeholder="*Secuirty Code"  />
							<div class="validation">
							</div>
						</div>
                        
						<div class="col-lg-12 margintop10 field">
							<p>
								<button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>
								<span class="pull-right margintop20">* Please fill all required form field, thanks!</span>
							</p>
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>
    <?php
    include ('include/footer.php');
	?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/flickity-docs.js"></script>
<script src="js/gen_validatorv31.js" type="text/javascript"></script>
<script src="js/validate.js" type="text/javascript"></script>
    <!-- Frontpage Demo -->
	<script src="js/owl.carousel.js"></script>
    <script>

    $(document).ready(function($) {
      $("#owl-example").owlCarousel();
    });


    $("body").data("page", "frontpage");

    </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
         <script>
 
		$(function(){
		 
			$(document).on( 'scroll', function(){
		 
				if ($(window).scrollTop() > 100) {
					$('.scroll-top-wrapper').addClass('show');
				} else {
					$('.scroll-top-wrapper').removeClass('show');
				}
			});
		});
</script>
<script>
 
	$(function(){
	 
		$(document).on( 'scroll', function(){
	 
			if ($(window).scrollTop() > 100) {
				$('.scroll-top-wrapper').addClass('show');
			} else {
				$('.scroll-top-wrapper').removeClass('show');
			}
		});
	 
		$('.scroll-top-wrapper').on('click', scrollToTop);
	});
	 
	function scrollToTop() {
		verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
		element = $('body');
		offset = element.offset();
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
	}
</script>
  </body>
</html>
<?php session_destroy(); ?>