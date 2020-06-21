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

    <title>All Star Limousine</title>

   
	<link rel="stylesheet" type="text/css" href="css/import.css">
   
    
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
		<?php
			include ('include/header.php');
		 ?>
    <!-- /.Rates start-->
        <img src="img/contact.jpg" alt="banner" class="img-responsive" style="width:100%;">
    <section class="welcome rate">
    	<div class="container">
        	<div class="row">
            	<div class="col-sm-8">
                	<h3><span>We Treasure Your Feedback</span></h3>
                   <form action="quote-send1.php" method="post">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                      </div>
                      <div class="form-group">
                        <input type="tel" class="form-control" id="phone" placeholder="Phone" name="phone">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Tell us how you feel using our service..." name="message"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default pull-right">Submit</button>
                    </form>
                </div>
                <div class="col-sm-4">
                	<div class="contactDetails">
                    <h3><span>Limousine</span> Service</h3>
                     <div class="footerContact clearfix">
                    	<i class="glyphicon glyphicon-home" aria-hidden="true"></i>
						<p><span>9980 Williford Trail <br>Frisco, TX 75033</span></p>
                    </div>
                    <div class="footerContact clearfix">
                    	<i class="glyphicon glyphicon-phone" aria-hidden="true"></i>
						<p><a href="tel:2147721725"><span>214 772 1725</span></a></p>
                    </div>
                    <div class="footerContact clearfix">
                    	<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<p><a href="mailto:info@allstarslimousinellc.com">info@allstarslimousinellc.com</a></p>
                    </div>
                    </div>
                </div>
            </div>
        </div><!--container-->
    </section>
    <!-- /.welcome -->
    <?php
			include ('include/footer.php');
		 ?>
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script> 
    <!--Home-page Slider-->
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({
	  infinite: true,
	  speed: 1500,
	  fade: true,
	  cssEase: 'linear',
	  autoplay: true,
	  autoplaySpeed: 1300,
	  arrows:true
	  });
    });
  </script>
   <!--Home-page Slider - End-->
  </body>
</html>
