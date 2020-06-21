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

  <body id="cellphonepage">
  	<?php
	include ('include/header.php');
	?>
    <section class="serviceContent">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<h2 class="center">Cell Phone Repair</h2>
                    <img src="img/cellphonerepair.png" alt="cell phone repair" class="img-responsive">
                    <h3>Cell Phone Repair Made Easy</h3>
                    <p>Your cell phone drops to the cement and you have that moment of fear and panic as you watch it fall in slow motion. Have you felt this before? If so, you’re not alone. Let’s face it – smartphones are expensive.</p>
                    <p>And if you didn’t get the insurance or warranty when you purchase the mobile phone, you might think that you’re out of luck. This isn’t actually the case. We’re going to cover some tips that will help make cell phone repair easy! You just need to choose the right company to do the work.</p>
                    <h3>Cell Phone Repair in Clarksville</h3>
                    <p>Here’s a look at why you should call Wipe and Restore for all your cell phone repair needs in Clarksville – or the surrounding area. While we may look like a computer repair shop, think about it – what are smartphones, just small computers!</p>
                    <p><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Knowledgeable – The first reason you should choose us for <ins>cell phone</ins> repair needs is that we’re very knowledgeable about different phones on the market. This means you will get your cell phone fixed right. Whether it’s a broken iPhone or an Android that won’t boot-up, we know how to find out what’s wrong – and fix it. </p>
                    <p><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Experienced – Not only do we have knowledge about cell phones, we have the experience fixing them! You can Google all day and night for a week and read posts online, but if you don’t have firsthand experience fixing mobile phones, you’re just wasting time. We see lots of cellphones whose owners tried fix them and ended up making the problem worse. </p>
                    <p><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp; Fair and Friendly – Being able to speak with someone you can understand on the phone when you call for service or to ask questions is a rarity today. We are a locally, family owned business, it’s just like speak to a friend. A lot of companies that offer cell phone repair don’t care about anything other than taking your money. Wipe and Restore is different, <strong>WE GUARANTEE OUR WORK!</strong></p>
                    <p><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp; Affordable – Last but certainly not least, you have to consider the cost of getting your cell phone repaired. At Wipe and Restore, you’re going to get a fair and     reasonable price for fixing your smartphone. The phone and monthly service is high enough, you don’t need to pay an arm and a leg to get your cellphone fixed.</strong></p>
                    <div class="well">
                    <h4 class="center note">At Wipe and Restore we want to earn your business by making sure your cellphone is fix right the first time at a price that you can afford. If your smartphone isn’t working and you need it fixed fast, then give us a call at 812-725-8700 today for all your cell phone repair needs.</h4>
                    </div>
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
