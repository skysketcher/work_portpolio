<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Wild Bear Furniture</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="robots" content="index, follow" />

<meta name="keywords" content="Rustic log Furniture, Furniture of America, Themed Area Rugs, Big Tree/Big Sleep Furniture, Mountian Woods Aspen Log Collection, Sunny Design, Essentials Furniture" />

<meta name="description" content="We provide wide range of Rustic log Furniture, Furniture of America, Themed Area Rugs, Big Tree/Big Sleep Furniture, Mountian Woods Aspen Log Collection, Sunny Design, Essentials Furniture in Big Bear lake, CA 92315 and surrounding areas" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />

<!--Font-->
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,400italic,700' rel='stylesheet' type='text/css'>


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/wildbear-furniture-logo.png"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li class="active"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3298.1891820370465!2d-116.89608199999998!3d34.24371599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c4b477ec23e3db%3A0x39020ec98cb3d920!2sWild+Bear+Furniture!5e0!3m2!1sen!2s!4v1432918678002" ></iframe>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Get in touch with us by filling <strong>contact form below</strong></h4>
				<form id="contactform" action="message-send.php" method="post" class="validateform" name="contact_form">
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
							<input type="text" name="subject" placeholder="Enter your subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation">
							</div>
						</div>
						<div class="col-lg-12 margintop10 field">
							<textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
							<div class="validation">
							</div>
						</div>
                        <div class="col-lg-4 field">
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
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/google-code-prettify/prettify.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/gen_validatorv31.js" type="text/javascript"></script>
<script src="js/validate.js" type="text/javascript"></script>
</body>
</html>
<?php session_destroy(); ?>