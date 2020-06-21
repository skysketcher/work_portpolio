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

    <title>Limo in Palentine</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for anzLimo -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animateicon.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body id="thankyou">
  		<?php 
		include ('include/header.php');
	?>
      <section class="center msg">
      	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<p>Sorry the request didnot went through please try again.</p>
                    <p>Looking forward to meeting with you @ our office.</p>
                    <p>
                    	<strong>AnzLimo Inc</strong><br />
                        1010 N Sterling AvePalatine, IL 60067 <br />
                        (224) 836-1789 (Call Us) <br />
                        (847) 830-3527 (Text Us) <br />
                        limos@anzlimo.com <br />
                    </p>
                </div>
            </div>
        </div>
      </section>
     <?php 
   	include ('include/footer.php');
   ?>
<!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/gen_validatorv31.js" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script> 
	<script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.fleetslider').slick({
	 /* infinite: true,
	  speed: 1500,
	  fade: true,
	  cssEase: 'linear',
	  autoplay: true,
	  autoplaySpeed: 4000,
	  arrows:true,*/
	   centerMode: true,
  centerPadding: '30px',
  slidesToShow: 3,
  autoplay: true,
   autoplaySpeed: 4000,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
	  });
    });
  </script>
   <script type="text/javascript">
    $(document).ready(function(){
      $('.testimonialslider').slick({
	  infinite: true,
	  cssEase: 'linear',
	  autoplay: true,
	  autoplaySpeed: 4000,
	  });
    });
  </script>
  
  </body>
</html>
