<?php session_start(); ?>

<?php error_reporting(0);?>
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
   <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker-standalone.css">
   <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css">
   <script language="Javascript">

   function validateform(){

	   

	var name=document.forms['reservation_form']['name'].value;

	if(name=="" || name==null){

		document.getElementById("name").focus();

		alert("Please enter your name");

		return false;	

	}



	var email=document.forms['reservation_form']['email'].value;

	var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;

	if(!pattern.test(email)){

		document.getElementById("email").focus();

		alert("Email address empty or not valid");

		return false;

	}



	var phone=document.forms['reservation_form']['phone'].value;

	var ph=/^\d+$/;

	if(!ph.test(phone)){

		document.getElementById("phone").focus();

		alert("Phone number empty or not valid");

		return false;	

	}

	

	var pumonth=document.forms['reservation_form']['month'].value;

	if(pumonth==00){

		document.getElementById("month").focus();

		alert("Please enter Pickup Date");

		return false;	

	}

	

	var pudate=document.forms['reservation_form']['date'].value;

	if(pudate==00){

		document.getElementById("date").focus();

		alert("Please enter Pickup Date");

		return false;	

	}

	

	var putime=document.forms['reservation_form']['time'].value;

	if(putime==13){

		document.getElementById("time").focus();

		alert("Please enter Pickup Time");

		return false;	

	}

	

	var puhour=document.forms['reservation_form']['hour'].value;

	if(puhour==00){

		document.getElementById("hour").focus();

		alert("Please enter Pickup Time");

		return false;	

	}

	

	var pumeridan=document.forms['reservation_form']['meridan'].value;

	if(pumeridan==00){

		document.getElementById("meridan").focus();

		alert("Please enter Pickup Time");

		return false;	

	}

	

	

	var payment=document.forms['reservation_form']['payment'].value;

	//if(payment==0){

		

		//alert("Please enter Payment Options");

		//return false;	

	//}

	if( payment== 995){

		var ccname=document.forms['reservation_form']['ccname'].value;

		if(ccname=="" || ccname==null){

			alert("Please enter credit card holder name");

			return false;

		}

		var ccno=document.forms['reservation_form']['ccno'].value;

		if(ccno=="" || ccno==null){

			alert("Please enter credit card number");

			return false;

		}else{

			var v = "0123456789";

			var w = "";

			for (i=0; i < ccno.length; i++) {

				x = ccno.charAt(i);

				if (v.indexOf(x,0) != -1)

				w += x;

			}

			// validate number

			j = w.length / 2;

			if (j < 6.5 || j > 8 || j == 7){

				alert('Invalid Credit Card Number');

				return false;

			}

			k = Math.floor(j);

			m = Math.ceil(j) - k;

			c = 0;

			for (i=0; i<k; i++) {

				a = w.charAt(i*2+m) * 2;

				c += a > 9 ? Math.floor(a/10 + a%10) : a;

			}

			for (i=0; i<k+m; i++) c += w.charAt(i*2+1-m) * 1;

			//alert(c);

			if(c%10 != 0){

				alert('Invalid Credit Card Number');

				return false;

			}

			

			

		}

		var ccdate=document.forms['reservation_form']['ccdate'].value;

		if (ccdate == 'MM/YY') {

			alert('Enter Expiry Date!');

			return false;

		}

		if(ccdate.length!= 5) {

			alert('Invalid Expiry Date!');

			return false;	

		}

		

		var sp= ccdate.match(/../g);

		var tt = ccdate.split('');

		if (tt[2] != '/') {

			alert('Invalid Expiry Date!');  

			return false; 

		}

		

		if(sp[0]>12 || sp[0]<1){

			alert('Invalid Expiry Date!');  

			return false; 

		}

		

		var csc=document.forms['reservation_form']['csc'].value;

		var code=/^\d{3}$/;

		var cod=/^\d{4}$/;

		if(!code.test(csc)){

			 if(!cod.test(csc)){ 

		 		alert("CSC code invalid or empty");

				return false;

			 }

		}

		var czipcode=document.forms['reservation_form']['czipcode'].value;

		var zip=/^\d{5}$/;

		if(!zip.test(czipcode)){ 

			alert("Zip code invalid or empty");

			return false;

		}

		

		if (reservation_form.yes.checked == false){

			alert ('You must check authorize button!');

        	return false;

		}

		

	}

	

	if( payment== 100){

		var details=document.forms['reservation_form']['mail[details]'].value;

		if(details=="" || details==null){

			alert("Please enter comment and detail info");

			return false;

		}

	}

	



	//var dropoffairport=document.forms['reservation_form']['dropoffairport'].value;

	//if(dropoffairport==00){

		//document.getElementById("dropoffairport").focus();

		//alert("Please Select Dropoff Airport");

		//return false;	

	//}

	

	

	var security=document.forms['reservation_form']['security_code'].value;

	if(security=="" || security==null){

		document.getElementById("security_code").focus();

		alert("Please enter the security code");

		return false;	

	}else if(security.length!=5){

		document.getElementById("security_code").focus();

		alert("Security code must be 5 character long");

		return false;	

	}

   }



   

   </script>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        
        <script>

    $(document).ready(function(){

		$('#show-hide1').hide();

		$('#show-hide2').hide();

		$('#payment').change(function(){

 			var value = $(this).val();

			if(value == '995'){

				$('#show-hide1').show();

			}else{

				$('#show-hide1').hide();

			}

			});

			

			$('#payment').change(function(){

 			var value = $(this).val();

			if(value == '100'){

				$('#show-hide2').show();

			}else{

				$('#show-hide2').hide();

			}

			});

		});

		</script>



		<!-- Credit card -->
  </head>
  <body id="reservation">
		<?php
			include ('include/header.php');
		 ?>
    <!-- /.Reservation start-->
    <section class="welcome reserve">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                		<div class="">
                        	<div class="">
                            	<div class="">
						<?php if($_SESSION['mail_send']=='ok'){?>

						<div >

									<h4 class="sent">Reservation message sent.</h4>

									<p style="color:#03C">Thank you for contacting us. We have received your booking. We will respond you as soon as possible.</p>

								</div>
                                <?php unset($_SESSION['mail_send']);}else{?>
                	<h3><span>Reservation</span></h3>
                    <div>

								<?php if($_SESSION['security_fail']=='error'){?>

								<h4 class="error">Error Sending Email</h4>

								<p style="color:#900">Error: This message could not be sent. Please enter the correct Security Code and try it again.</p>

								<br/>

								<?php unset($_SESSION['security_fail']);}else if($_SESSION['mail_send']=='not'){?>

								<h4 class="error">Message failed</h4>

								<p style="color:#900">This is probably due to wrong recipient or configurations. However, you can retry.</p>

								<br/>

								<?php unset($_SESSION['mail_send']);}?>

							</div>
                	<form name="reservation_form" method="post" action="reservation-send.php"  onsubmit="return validateform();">
                    	<h4>1. Personal Information :</h4>
                      <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name" placeholder="John Smith" name="name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" placeholder="johnsmith@example.com" name="email">
                      </div>
                      <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" placeholder="Company Name" name="company">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone No. *</label>
                        <input type="text" class="form-control" id="phone" placeholder="Do not use any symbol: (), - or space." name="phone">
                      </div>
                      <h4>2. Occassions:</h4>
                      <div class="form-group">
                        <label for="occassions">Occassions</label>
                        <select name="occassions" id="occassions"  class="form-control state">

															<option value="Choose One" >Choose One</option>

															<option value="Airport Transportation" >Airport Transportation</option>

															<option value="Anniversary">Anniversary </option>

															<option value="A Night on the Town">A Night on the Town</option>

															<option value="Bachelor Party">Bachelor Party</option>

															<option value="Bachelorette Party">Bachelorette Party</option>

															<option value="Bar &ndash; Hopping">Bar &ndash; Hopping</option>

															<option value="Boy's Night Out">Boy's Night Out</option>

															<option value="Birthday Party">Birthday Party</option>

															<option value="Casino">Casino</option>

															<option value="Christmas Party">Christmas Party</option>

															<option value="Concerts">Concerts</option>

															<option value="Corporate Events">Corporate Events</option>

															<option value="Engagement">Engagement</option>

															<option value="Father's Day">Father's Day</option>

															<option value="Girl's Night Out">Girl's Night Out</option>

															<option value="Graduation">Graduation</option>

															<option value="Halloween Party">Halloween Party</option>

															<option value="Homecoming">Homecoming</option>

															<option value="Independence Day - 4th of July">Independence Day - 4th of July</option>

															<option value="Mother's Day">Mother's Day</option>

															<option value="New Years Eve">New Years Eve </option>

															<option value="Prom Night">Prom Night</option>

															<option value="Quinceanera">Quinceanera</option>

															<option value="Sporting Events">Sporting Events</option>

															<option value="Sweet Sixteen">Sweet Sixteen</option>

															<option value="Valentine's Day">Valentine's Day</option>

															<option value="Wedding">Wedding</option>

															<option value="Other">Other</option>

														</select>
                      </div>
                      <div class="col-sm-6 nospace">
                      	<div class="form-group">
                            <label for="noofpax">No. of Passangers</label>
                            <select name="noofpax"  class="form-control">

															<option>0</option>

															<option>1</option>

															<option>2</option>

															<option>3</option>

															<option>4</option>

															<option>5</option>

															<option>6</option>

															<option>7</option>

															<option>8</option>

															<option>9</option>

															<option>10</option>

															<option>11</option>

															<option>12</option>

															<option>13</option>

															<option>14</option>

															<option>15</option>

															<option>16</option>

															<option>17</option>

															<option>18</option>

															<option>19</option>

															<option>20</option>

															<option>21</option>

															<option>22</option>

															<option>23</option>

															<option>24</option>

														</select>
                      	</div>
                      </div>
                      <div class="col-sm-6 nospace1">
                      	<div class="form-group">
                            <label for="noofhrs">No. of Hours</label>
                            <select name="noofhrs"  class="form-control">

															<option>3</option>

															<option>4</option>

															<option>5</option>

															<option>6</option>

															<option>7</option>

															<option>8</option>

															<option>9</option>

															<option>10</option>

															<option>Airport Transfer</option>

															<option>Special Events</option>

														</select>
                      	</div>
                      </div>
                      <div class="clearfix"></div>
                      <h4>3. Pick Up Information</h4>
                      <div class="form-group">
                      <label for="datetime">Pick Up Date &amp; Time</label>
                        <div class='input-group date' id='datetimepicker8'>
                            <input type='text' class="form-control" name="datetime"/>
                            <span class="input-group-addon">
                                <span class="fa fa-calendar">
                                </span>
                            </span>
                        </div>
                    </div>
					  <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker8').datetimepicker({
                                 
                                });
                            });
                        </script>
    
                      	<label>Pick Up Address</label>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="mail[call_me]" value="Yes"  id="pickupfrom"> Check this for Pick Up at Airport
                        </label>
                      </div>
                      <div  id="showhidepickup">
                      	<div class="form-group">
                        <label for="pickupaddress">Address</label>
                        <input type="text" class="form-control" id="pickupaddress" name="pickupaddress">
                      	</div>
                      	<div class="form-group">
                        <label for="pickupcity">City</label>
                        <input type="text" class="form-control" id="pickupcity" name="pickupcity">
                      	</div>
                      	<div class="form-group">
                        <label for="zcode">Zip Code</label>
                        <input type="text" class="form-control" id="zcode" name="zcode">
                      	</div>
                      </div>
                      <div id="airportpickup" style="display:none;">
                      	<div class="form-group">
                            <label for="pairport">Airport</label>
                            <select size="1" name="pickup_airport" id="pairport"   class="form-control">

																			<option value="Choose Airport ">Choose Airport </option>

																			<option value="Dallas-Fort Worth International Airport">Dallas-Fort Worth International Airport</option>

																			<option value="Dallas Love Field Airport">Dallas Love Field Airport</option>

																			<option value="Others">Others</option>

																		</select>
                      	</div>
                      <div class="form-group">
                      <label for="datetimepicker3">Arrival Time</label>
                        <div class='input-group date' id='datetimepicker3'>
                            <input type='text' class="form-control" name="arrivaltime"/>
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
					   <script type="text/javascript">
							$(function () {
								$('#datetimepicker3').datetimepicker({
									format: 'LT'
								});
							});
						</script>
                        <div class="form-group">
                            <label for="topairline">Airline</label>
                            <select size="1" name="pickup-ariportname" id="topairline"   class="form-control">

																			<option value="Choose Airline"> Choose Airline</option>

																			<option value="Air Canada"> Air Canada</option>

																			<option value="Air China"> Air China</option>

																			<option value="Air France"> Air France</option>

																			<option value="Air New Zealand"> Air New Zealand</option>

																			<option value="Air Tran Airways"> Air Tran Airways</option>

																			<option value="Alaska Airlines"> Alaska Airlines</option>

																			<option value="All Nippon"> All Nippon</option>

																			<option value="American Airlines"> American Airlines</option>

																			<option value="America West Airline"> America West Airline</option>

																			<option value="ATA Airlines"> ATA Airlines</option>

																			<option value="Asiana"> Asiana</option>

																			<option value="British Airways"> British Airways</option>

																			<option value="Cathay Pacific"> Cathay Pacific</option>

																			<option value="China Airlines"> China Airlines</option>

																			<option value="Continental Airlines"> Continental Airlines</option>

																			<option value="Delta Airlines"> Delta Airlines</option>

																			<option value="EVA Airways"> EVA Airways</option>

																			<option value="Frontier Airlines"> Frontier Airlines</option>

																			<option value="Hawaiian Airlines"> Hawaiian Airlines</option>

																			<option value="Horizon Air"> Horizon Air</option>

																			<option value="Japan Airline"> Japan Airline</option>

																			<option value="Jet Blue"> Jet Blue</option>

																			<option value="KLM"> KLM</option>

																			<option value="Korean Air"> Korean Air</option>

																			<option value="Lufthansa"> Lufthansa</option>

																			<option value="Mexicana"> Mexicana</option>

																			<option value="Midwest Airlines"> Midwest Airlines</option>

																			<option value="Northwest Airlines"> Northwest Airlines</option>

																			<option value="Private Jet"> Private Jet</option>

																			<option value="Philippine Air"> Philippine Air</option>

																			<option value="Qantas Airways"> Qantas Airways</option>

																			<option value="Singapore Air"> Singapore Air</option>

																			<option value="Southwest Airlines"> Southwest Airlines</option>

																			<option value="Spirit Airlines"> Spirit Airlines</option>

																			<option value="Taca International"> Taca International</option>

																			<option value="United Airlines"> United Airlines</option>

																			<option value="US Airways"> US Airways</option>

																			<option value="Virgin America"> Virgin America</option>

																			<option value="Virgin Atlantic"> Virgin Atlantic</option>

																			<option value="other"> other</option>

																		</select>
                      	</div>
                        <div class="form-group">
                        <label for="flightno">Flight Number</label>
                        <input type="text" class="form-control" id="flightno" name="pickup-flight_no">
                      	</div>
                      </div>
                        <h4>4. Drop Off Information</h4>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="mail[call_me]" value="Yes"  id="dropofffrom"> Check this for Drop Off at Airport
                        </label>
                      </div>
                      <div  id="showhidedropoff">
                      	<div class="form-group">
                        <label for="dropoffaddress">Address</label>
                        <input type="text" class="form-control" id="dropoffaddress" name="dropoffaddress">
                      	</div>
                      	<div class="form-group">
                        <label for="dropoffcity">City</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="dropoffcity">
                      	</div>
                      	<div class="form-group">
                        <label for="exampleInputEmail1">Zip Code</label>
                        <input type="text" class="form-control" id="dropoffzip" name="dropoffzip">
                      	</div>
                      </div>
                      <div id="airportdropoff" style="display:none;">
                      	<div class="form-group">
                            <label for="dropoffairport">Airport</label>
                            <select size="1" name="dropoffairport" id="dropoffairport"   class="form-control">

																			<option value="Choose Airport ">Choose Airport </option>

																			<option value="Dallas-Fort Worth International Airport">Dallas-Fort Worth International Airport</option>

																			<option value="Dallas Love Field Airport">Dallas Love Field Airport</option>

																			<option value="Others">Others</option>

																		</select>
                      	</div>
                      <div class="form-group">
                      <label for="datetimepicker4">Depature Time</label>
                        <div class='input-group date' id='datetimepicker4'>
                            <input type='text' class="form-control" name="depaturetime"/>
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                    </div>
					   <script type="text/javascript">
							$(function () {
								$('#datetimepicker4').datetimepicker({
									format: 'LT'
								});
							});
						</script>
                        <div class="form-group">
                            <label for="topairline">Airline</label>
                            <select size="1" name="dropoff-ariportname" id="topairline"   class="form-control">

																			<option value="Choose Airline"> Choose Airline</option>

																			<option value="Air Canada"> Air Canada</option>

																			<option value="Air China"> Air China</option>

																			<option value="Air France"> Air France</option>

																			<option value="Air New Zealand"> Air New Zealand</option>

																			<option value="Air Tran Airways"> Air Tran Airways</option>

																			<option value="Alaska Airlines"> Alaska Airlines</option>

																			<option value="All Nippon"> All Nippon</option>

																			<option value="American Airlines"> American Airlines</option>

																			<option value="America West Airline"> America West Airline</option>

																			<option value="ATA Airlines"> ATA Airlines</option>

																			<option value="Asiana"> Asiana</option>

																			<option value="British Airways"> British Airways</option>

																			<option value="Cathay Pacific"> Cathay Pacific</option>

																			<option value="China Airlines"> China Airlines</option>

																			<option value="Continental Airlines"> Continental Airlines</option>

																			<option value="Delta Airlines"> Delta Airlines</option>

																			<option value="EVA Airways"> EVA Airways</option>

																			<option value="Frontier Airlines"> Frontier Airlines</option>

																			<option value="Hawaiian Airlines"> Hawaiian Airlines</option>

																			<option value="Horizon Air"> Horizon Air</option>

																			<option value="Japan Airline"> Japan Airline</option>

																			<option value="Jet Blue"> Jet Blue</option>

																			<option value="KLM"> KLM</option>

																			<option value="Korean Air"> Korean Air</option>

																			<option value="Lufthansa"> Lufthansa</option>

																			<option value="Mexicana"> Mexicana</option>

																			<option value="Midwest Airlines"> Midwest Airlines</option>

																			<option value="Northwest Airlines"> Northwest Airlines</option>

																			<option value="Private Jet"> Private Jet</option>

																			<option value="Philippine Air"> Philippine Air</option>

																			<option value="Qantas Airways"> Qantas Airways</option>

																			<option value="Singapore Air"> Singapore Air</option>

																			<option value="Southwest Airlines"> Southwest Airlines</option>

																			<option value="Spirit Airlines"> Spirit Airlines</option>

																			<option value="Taca International"> Taca International</option>

																			<option value="United Airlines"> United Airlines</option>

																			<option value="US Airways"> US Airways</option>

																			<option value="Virgin America"> Virgin America</option>

																			<option value="Virgin Atlantic"> Virgin Atlantic</option>

																			<option value="other"> other</option>

																		</select>
                      	</div>
                        <div class="form-group">
                        <label for="flightno">Flight Number</label>
                        <input type="text" class="form-control" id="flightno" name="dropoff-flight_no">
                      	</div>
                      </div>
                         <h4>5. Payment Options</h4>
                        <div class="form-group">
                            <select name="payment"  id="payment" class="form-control">

                                <option value="0" selected="selected">--Select your option--</option>

                                <option value="995">Credit Card</option>

                                <option value="100">Cash</option>

                            </select>
                      	</div>
                        <div id="show-hide1">
                        <label for="ccname">Name of the Card Holder :</label>
                        <input type="text" value="" name="ccname" id="ccname" class="form-control"/>
                        
                        <label for="ccno">Credit card number :</label>
						<input type="text" class="form-control" name="ccno" id="ccno" maxlength="16" value="eg:000000000000000" onblur="if (this.value == '') {this.value = 'eg:000000000000000';}" onfocus="if (this.value == 'eg:000000000000000') {this.value = '';}"/>
                                                        
                        <label for="ccdate"> Expiry date :</label>
                        <input type="text" class="form-control" name="ccdate" id="ccdate" value="MM/YY" onblur="if (this.value == '') {this.value = 'MM/YY';}" onfocus="if (this.value == 'MM/YY') {this.value = '';}"/>
                        
                        <label for="csc"> CSC code :</label>
						<input type="text" class="form-control" value="" name="csc" id="csc" />
                        
                        <label for="czipcode">Zip Code :</label>
						<input type="text" class="form-control" value="" name="czipcode" id="czipcode"/>
                        
                        <div class="checkbox">
                            <label>
                              <input type="checkbox" value="accept" name="yes" > I authorize that All Star Limousine can make charges on this account for my Transportation need.
                            </label>
                          </div>
                        
                        </div>
                    <div id="show-hide2">
                        <label>Comment &amp; detail info</label>
                        <textarea name="details" class="form-control"></textarea>
                    </div>
                    
                    <h4>7. Enter the image security code as shown below</h4>
                    <p class="captcha-img"> <img src="captcha/blank.png" class="captcha" id="captcha_image" /> <a href="#" class="captcha_refresh" id="captcha_refresh">&nbsp;&nbsp;<img src="img/reload.png" alt="Reload" ></a></p>

												<?php if(isset($_GET['captcha']) && $_GET['captcha']==0){?>

												<font color="#000">Incorrect captcha code</font>

												<?php }?><br>

												<input name="security_code" type="text" id="security_code" /><br><br>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                <?php } ?>
                </div>
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
			<script src="js/moment-with-locales.js"></script>
	<script src="js/bootstrap-datetimepicker.js"></script>
    
<script language="javascript" src="js/validate_reservation.js"></script> 
        
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
   <script type="text/javascript">

$(document).ready(function(){

		$('#showhidepickup').show();

		$('#pickupfrom').change(function(){

 			

			if (this.checked){

				$('#airportpickup').show();

				$('#showhidepickup').hide();

			}else{

				$('#airportpickup').hide();

				$('#showhidepickup').show();

			}

			});

		});	



</script>
	<script type="text/javascript">

$(document).ready(function(){

		$('#showhidedropoff').show();

		$('#dropofffrom').change(function(){

 			

			if (this.checked){

				$('#airportdropoff').show();

				$('#showhidedropoff').hide();

			}else{

				$('#airportdropoff').hide();

				$('#showhidedropoff').show();

			}

			});

		});	



</script>
  </body>
</html>
