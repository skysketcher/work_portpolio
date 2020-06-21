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

    <title>ANZ Limo Inc</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for anzLimo -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animateicon.css">
     
    <!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.min.css"> 
      <!--- Time picker -->
    
      <link href="css/timepicki.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="pointtopoint">
  	<?php 
		include ('include/header.php');
	?>
     <section class="aboutbanner">
     	<div class="container">
        	<div class="row">
            	<div class="col-md-12 center">
                	<h1>anzlimo</h1>
                     <div class="dividerbox">
                        <div class="dividerline"></div>
                        <i class="fa fa-star"></i>
                        <div class="dividerline"></div>
                    </div>
                    <p>We are the most popular limousine service in Illinois.</p>
                </div>
            </div>
        </div>
     </section><!--aboutus banner-->
     <section class="contentpage">
     	<div class="container">
        	<div class="row">
            	<div class="col-sm-6">
                	<img src="images/banner-point.jpg" alt="Wedding anzlimo" class="img-responsive aboutCar">
                </div>
                <div class="col-sm-6">
                	<h2>anzlimo Point to Point Transportation</h2>
                    <p>When you are searching for advantageous, Suitable and trustable Point-to-Point, City-to-City chauffeured transportation, look no more distant than anzlimo Inc. Whether going inside city, or city-to-city, our unrivaled service, security and on interest adaptability make going with us a joy. Our chauffeur service can drop you off and lift you up later on.</p>
                </div>
                <div class="col-md-12">
                   <ul class="pointlist">
                        	<li class="faa-parent animated-hover"><i class="fa fa-circle-o faa-burst"></i>&nbsp;&nbsp;&nbsp; <span>anzlimo's Point to Point service may be as quick as any option method for go to close-by urban communities, however it is way more comfortable, protected and gainful. Indeed, it is simply perfect for business travel.</span></li>
                        	<li class="faa-parent animated-hover"><i class="fa fa-circle-o faa-burst"></i>&nbsp;&nbsp;&nbsp; <span>Choose your takeoff time as indicated by your own schedule. Our door to door service verifies that you are not late, ever.</span></li>
                        	<li class="faa-parent animated-hover"><i class="fa fa-circle-o faa-burst"></i>&nbsp;&nbsp;&nbsp; <span>We do everything possible to make your journey as comfortable as could be expected under the circumstances. Whether its four-way front seat force controls for additional legroom or the climate controls to keep the temperature simply right, we make your solace and security is our first need.</span></li>
                        	<li class="faa-parent animated-hover"><i class="fa fa-circle-o faa-burst"></i>&nbsp;&nbsp;&nbsp; <span>Similarly, as with all our chauffeured services, you can pick and choose the vehicle you need to go in from an extensive variety of the finest and most recent model luxury vehicles from our fleet.</span></li>
                        </ul>
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
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script> <script type="text/javascript" src="slick/slick.min.js"></script>

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
