	<header>
    	<div class="container">
        	<div class="row">
            	<div class="col-md-4 pull-left">
                	<a href="https://www.facebook.com/anzlimo" target="_blank"><i class="fa fa-facebook-square"></i></a>
                	<a href="https://twitter.com/AnZLimo" target="_blank"><i class="fa fa-twitter-square"></i></a>
                	<a href="https://plus.google.com/112849233816993114830" target="_blank"><i class="fa fa-google-plus-square"></i></a>
                </div>
                <div class=".col-md-6 .col-md-offset-2 pull-right">
                	<a href="tel:2248361789"><i class="fa fa-phone"></i><span>Call Us (224) 836-1789</span></a>
                    <a href="sms:8478303527"><i class="fa fa-comment"></i><span>Text Us (847) 830-3527</span></a>
                	<a href="mailto:limos@anzlimo.com"><i class="fa fa-envelope"></i><span>limos@anzlimo.com</span></a>
</a>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive" alt="anzLimo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="cmn-t-underline indexlink" href="index.php">Home</a></li>
            <li><a class="cmn-t-underline aboutlink" href="aboutus.php">About us</a></li>
          	<li><a class="cmn-t-underline reservationlink" href="reservation.php">Reservation</a></li> 
            <li><a class="cmn-t-underline contactlink" href="contact.php">Contact us</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--tabs-->
    <section class="navtab">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                    <nav class="navbar">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".subnavbar-collapse">
               <span style="color:#fff;padding-right:5px;" class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
            </button>
          <a class="navbar-brand visible-xs quotemob" data-toggle="modal" data-target="#myModal" href="#">request a quote</a><a class="navbar-brand visible-xs pull-right" data-toggle="collapse" data-target=".subnavbar-collapse" href="#">Services</a>
        </div>
        <div id="navbar" class="subnavbar-collapse navbar-collapse collapse">
          <ul class="nav navbar-nav">
                    	<li><a class="airportlink" href="airport.php">Airport</a></li>
                    	<li><a class="weddinglink" href="wedding.php">Wedding</a></li>
                    	<li><a class="promlink" href="prom.php">Prom</a></li>  
                    	<li><a class="quinceaneralink" href="quin.php">Quinceanera</a></li>
            			<li><a class="pointtopointlink" href="pointtopoint.php">Point to point</a></li> 
            			<li><a class="hidden-xs" href="#" data-toggle="modal" data-target="#myModal">Request a Quote</a><!-- Modal -->
                    </li>    
          </ul>
        </div><!--/.nav-collapse -->
    </nav>
                </div>
                
            </div>
        </div>
    </section>
     <!-- Modal -->
                    <?php 
						include ('include/quote.php');
					?>