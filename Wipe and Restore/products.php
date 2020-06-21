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

  <body id="productpage">
  	<?php
	include ('include/header.php');
	?>
    <section class="serviceContent">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<h2 class="center">Computer Products: New & Used</h2>
                    <img src="img/products.png" alt="computer products" class="img-responsive">	
                    <p class="center">Our new computer products come with original factory warranties. Most used products are backed by our own Wipe and Restore 90 day limited warranty. Be sure to ask our knowledgeable repair technicians about warranty details on your specific product.</p>
                    <h3>A Wide Variety of Computer Products:</h3>
                    <div class="row">
                    	<div class="col-sm-6 col-md-3">
                        	<ul>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Custom-Built Computers & Laptops</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Used Desktop Computers</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Used Laptops, Tablets, etc.</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Used MACs</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Universal Power Supplies-For Laptops</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Hard Drives</li>
                            </ul>
                        </div>
                    	<div class="col-sm-6 col-md-3">
                        	<ul>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;RAM (memory)</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;PCI Cards (audio, video, etc)</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Monitors</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Printers</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;VGA Cables</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;HDMI Cables</li>
                            </ul>
                        </div>
                    	<div class="col-sm-6 col-md-3">
                        	<ul>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Laptop Bags</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Keyboards</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Docking Stations</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Power Supply Units</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Power Cords</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Routers</li>
                            </ul>
                        </div>
                    	<div class="col-sm-6 col-md-3">
                        	<ul>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;USB Hubs</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Webcams</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Cellphones</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Tablets</li>
                            	<li><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;I Pads</li>
                            </ul>
                        </div>
                    </div>
                    <p class="center">Wipe and Restore can replace any computer parts you need. Did your hard drive crash? No problem. We can install a new one that is under factory warranty. Need more RAM? We have that too! Did a power surge fry your motherboard or ethernet connection? No sweat. Wipe and Restore has you covered.</p>
                    <p class="center">If you don’t see the item you need listed above, please give us a call. We probably have it.</p>
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
