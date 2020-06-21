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
       <!-- Form Validation -->
    <script>
	function validation () {
		
		var name=document.forms['reservation-limo']['fname'].value;
        if(name == 'Full Name' || name == ""){
		  document.getElementById('fname').focus();
            alert("Please enter full name");
            return false;
        }
	   
	   var cnumber=document.forms['reservation-limo']['pno'].value;
	   if(cnumber =='Contact Number' || cnumber == "") {
		   document.getElementById('pno').focus();
		   alert (" Please enter Phone Number.");
		   return false;
    	}
    		var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
    		var email=document.forms['reservation-limo']['email'].value;
		if(email == 'Email' || email == ""){
		document.getElementById('email').focus();
		alert ("Please enter your email");
		return false;
		}
		else if(!pattern.test(email)){
		document.getElementById("email").focus();
		alert("Invalid email address");
		return false;
		}
		
		var btimetocal=document.forms['reservation-limo']['btimetocal'].value;
		if( btimetocal == "") {
			document.getElementById('btimetocal').focus();
		   	alert ("Please Enter your Best Time to Call");
		   	return false;
		}
		
		
		//Credit Card Validation
		
		var ccno=document.forms['reservation-limo']['ccard'].value;
		if(ccno=="" || ccno==null){
			document.getElementById('ccard').focus();
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
				document.getElementById('ccard').focus();
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
				document.getElementById('ccard').focus();
				alert('Invalid Credit Card Number');
				return false;
			}
			
			
		}
		var ccdate=document.forms['reservation-limo']['expdate'].value;
		if (ccdate == 'MM/YY') {
			document.getElementById('expdate').focus();
			alert('Enter Expiry Date!');
			return false;
		}
		if(ccdate.length!= 5) {
			document.getElementById('expdate').focus();
			alert('Invalid Expiry Date!');
			return false;	
		}
		
		var sp= ccdate.match(/../g);
		var tt = ccdate.split('');
		if (tt[2] != '/') {
			document.getElementById('expdate').focus();
			alert('Invalid Expiry Date!');  
			return false; 
		}
		
		if(sp[0]>12 || sp[0]<1){
			document.getElementById('expdate').focus();
			alert('Invalid Expiry Date!');  
			return false; 
		}
		
		var csc=document.forms['reservation-limo']['security'].value;
		var code=/^\d{3}$/;
		var cod=/^\d{4}$/;
		if(!code.test(csc)){
			 if(!cod.test(csc)){
				 document.getElementById('security').focus(); 
		 		alert("Security code invalid or empty");
				return false;
			 }
		}
		var czipcode=document.forms['reservation-limo']['zipcode'].value;
		var zip=/^\d{5}$/;
		if(!zip.test(czipcode)){ 
			document.getElementById('zipcode').focus(); 
			alert("Zip code invalid or empty");
			return false;
		}
		
		
		var streetaddress=document.forms['reservation-limo']['streetaddress'].value;
	   if( streetaddress == "") {
		   document.getElementById('streetaddress').focus();
		   alert (" Please Enter Street Address.");
		   return false;
    	}
		
		var city=document.forms['reservation-limo']['city'].value;
	   if(city == "") {
		   document.getElementById('city').focus();
		   alert (" Please Enter Your City.");
		   return false;
    	}
		
		var state=document.forms['reservation-limo']['state'].value;
	   if(state == "") {
		   document.getElementById('state').focus();
		   alert (" Please Enter Your state.");
		   return false;
    	}
		
		if(document.getElementById('agree').checked == false) {
			alert ("Your must agree our terms!");
			return false;
		}		
		
	}
	</script>
    <!-- Form Validation End -->
<!--- Phone Validation -->
<script language="javascript">

var zChar = new Array(' ', ' ', '.', '.', '.');
var maxphonelength = 13;
var phonevalue1;
var phonevalue2;
var cursorposition;

function ParseForNumber1(object){
phonevalue1 = ParseChar(object.value, zChar);
}
function ParseForNumber2(object){
phonevalue2 = ParseChar(object.value, zChar);
}

function backspacerUP(object,e) {
if(e){
e = e
} else {
e = window.event
}
if(e.which){
var keycode = e.which
} else {
var keycode = e.keyCode
}

ParseForNumber1(object)

if(keycode >= 48){
ValidatePhone(object)
}
}

function backspacerDOWN(object,e) {
if(e){
e = e
} else {
e = window.event
}
if(e.which){
var keycode = e.which
} else {
var keycode = e.keyCode
}
ParseForNumber2(object)
}

function GetCursorPosition(){

var t1 = phonevalue1;
var t2 = phonevalue2;
var bool = false
for (i=0; i<t1.length; i++)
{
if (t1.substring(i,1) != t2.substring(i,1)) {
if(!bool) {
cursorposition=i
bool=true
}
}
}
}

function ValidatePhone(object){

var p = phonevalue1

p = p.replace(/[^\d]*/gi,"")

if (p.length < 3) {
object.value=p
} else if(p.length==3){
pp=p;
d4=p.indexOf('')
d5=p.indexOf('.')
if(d4==-1){
pp=" "+pp;
}
if(d5==-1){
pp=pp+".";
}
object.value = pp;
} else if(p.length>3 && p.length < 7){
p =" " + p;
l30=p.length;
p30=p.substring(0,4);
p30=p30+"."

p31=p.substring(4,l30);
pp=p30+p31;

object.value = pp;

} else if(p.length >= 7){
p =" " + p;
l30=p.length;
p30=p.substring(0,4);
p30=p30+"."

p31=p.substring(4,l30);
pp=p30+p31;

l40 = pp.length;
p40 = pp.substring(0,8);
p40 = p40 + "."

p41 = pp.substring(8,l40);
ppp = p40 + p41;

object.value = ppp.substring(0, maxphonelength);
}

GetCursorPosition()

if(cursorposition >= 0){
if (cursorposition == 0) {
cursorposition = 2
} else if (cursorposition <= 2) {
cursorposition = cursorposition + 1
} else if (cursorposition <= 5) {
cursorposition = cursorposition + 2
} else if (cursorposition == 6) {
cursorposition = cursorposition + 2
} else if (cursorposition == 7) {
cursorposition = cursorposition + 4
e1=object.value.indexOf('.')
e2=object.value.indexOf('.')
if (e1>-1 && e2>-1){
if (e2-e1 == 4) {
cursorposition = cursorposition - 1
}
}
} else if (cursorposition < 11) {
cursorposition = cursorposition + 3
} else if (cursorposition == 11) {
cursorposition = cursorposition + 1
} else if (cursorposition >= 12) {
cursorposition = cursorposition
}

var txtRange = object.createTextRange();
txtRange.moveStart( "character", cursorposition);
txtRange.moveEnd( "character", cursorposition - object.value.length);
txtRange.select();
}

}

function ParseChar(sStr, sChar)
{
if (sChar.length == null)
{
zChar = new Array(sChar);
}
else zChar = sChar;

for (i=0; i<zChar.length; i++)
{
sNewStr = "";

var iStart = 0;
var iEnd = sStr.indexOf(sChar[i]);

while (iEnd != -1)
{
sNewStr += sStr.substring(iStart, iEnd);
iStart = iEnd + 1;
iEnd = sStr.indexOf(sChar[i], iStart);
}
sNewStr += sStr.substring(sStr.lastIndexOf(sChar[i]) + 1, sStr.length);

sStr = sNewStr;
}

return sNewStr;
}
</script>
<!--- Phone Validation End -->
  </head>

  <body id="reservation">
  		<?php 
		include ('include/header.php');
	?>
       
       <!--reservation form-->
     <section class="contentpage">
     	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div class="popup">
                    					
                   </div>
                	<h2>Reserve Our Limo Today!</h2>
                    <p>ANZ Limo is committed to providing a exceptional customer service and offers a variety of limousines to accommodate your luxury transportation needs.</p><p>

At ANZ Limo Limousine, Inc., our goal is to exceed your expectations, and every member of our team is dedicated to providing the excellent service you deserve. Our quality limousines are loaded with amenities to provide the luxurious, stylish ride you're looking for. And our professional drivers will go out of their way to cater to your needs while providing a safe, smooth ride from start to finish.</p>
                    <form name="reservation-limo" method="post" action="reservation-limo-submit.php" onSubmit=" return validation();">
                    <h3 class="highlight">Customer Information</h3>
                      <div class="form-group">
                        <label for="fname">Name (Required)</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Jane Doe">
                      </div>
                      <div class="form-group">
                        <label for="pno">Phone Number (Required)</label>
                        <input type="text" class="form-control" id="pno" name="pno" placeholder="123 456 7890" onKeyDown="javascript:backspacerDOWN(this,event);" onKeyUp="javascript:backspacerUP(this,event);">
                      </div>
                      <div class="form-group">
                        <label for="email">Email (Email)</label>
                         <input type="email" class="form-control" id="email" placeholder="john@doe.com"  name="email">
                      </div>
                      <div class="form-group">
                        <label for="btimetocal">Best Time to Call </label>
                         <input type="text" class="form-control" id="btimetocal" name="btimetocal">
                          <script type="text/javascript">
											$(document).ready(function() {
												$('#btimetocal').timepicker({
													showPeriod: true,
													showLeadingZero: true
												});
											});
										</script>
                      </div>
                      <h3 class="highlight">Trip Information</h3>
                      <em>Please write instructions, additional stops info or any other information in the message field below</em>
                       <div class="form-group">
                        <label for="event">Event Type</label>
                         <select name="event" id="event" class="form-control">
                                            	<option value="0"> -- Event Type -- </option>
                                                <option>Airport Transportation</option>
                                                <option>Corporate Transportation</option>
                                                <option>Wedding</option>
                                                <option>Quinceañera</option>
                                                <option>cotillion</option>
                                                <option>Charter</option>
                                                <option>Point A to Point B</option>
                                                <option>Anniversary</option>
                                                <option>Bachelorette Party</option>
                                                <option>Bachelor Party</option>
                                                <option>Prom</option>
                                                <option>Home Comings</option>
                                                <option>Home Comings</option>
                                                <option>Just a Night Out</option>
                                                <option>Birthdays</option>
                                                <option>Hourly Rentals</option>
                                                <option>Sporting Events</option>
                                                <option>Engagement</option>
                                                <option>Hallowen Party</option>
                                                <option>New Year Eve</option>
                                                <option>Valentine Day Special</option>
                                                <option>Sweet Sixteen</option>
                                                <option>Others</option>
                                            </select>
                      </div>
                      <div class="form-group">
                        <label for="date1">Pick up Date</label>
                         <input type="text" class="form-control" id="date1" name="pickupdate" placeholder="dd/mm/yr" >
                      </div>
                      <div class="form-group">
                        <label for="pickuptime">Pick up Time</label>
                         <input type="text" class="form-control"  name="pickuptime" id="pickuptime">
                         <script type="text/javascript">
											$(document).ready(function() {
												$('#pickuptime').timepicker({
													showPeriod: true,
													showLeadingZero: true
												});
											});
										</script>
                      </div>
                      <div class="form-group">
                        <label for="returntime">Return Time</label>
                         <input type="text" class="form-control"  name="returntime" id="returntime">
                         <script type="text/javascript">
											$(document).ready(function() {
												$('#pickuptime').timepicker({
													showPeriod: true,
													showLeadingZero: true
												});
											});
										</script>
                      </div>
                      <div class="form-group">
                        <label for="pickuplocation">Pick Up Location</label>
                         <input type="text" class="form-control" name="PickupLocation" id="pickuplocation">
                      </div>
                      <div class="form-group">
                        <label for="pickuplocation">Stop</label>
                         <select name="stop" id="stop" class="form-control">
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
                                            </select>
                      </div>
                      <div class="form-group">
                        <label for="dropoff">Drop Off</label>
                         <input type="text" class="form-control" name="dropoff" id="dropoff">
                      </div>
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Type your message here..."></textarea>
                      </div>
                      <h3 class="highlight">Choose Service Type & Limousine</h3>
                      <div class="form-group">
                        <label for="check"><em>Please select one or both if applicable</em></label><br />
                        	<input type="checkbox" name="servicetype1" value="Point to Point Service"> &nbsp;Point to Point Service<br />
                              <em>Point to Point service includes a pick up from location A and Drop off at location B without any additional stops and waiting time between the stops.</em><br /><br />
                            <input type="checkbox" name="servicetype2" value="Charter Service"> &nbsp;Charter Service<br />
                               <em>A charter service is a hire of limousine for X amount of hours with unlimited stops and mileage at no additional cost*. You will keep the limousine and chauffeur for the entire time. </em>
                      </div>
                      <div class="form-group">
                        <label for="limousine">Requested Limousine</label>
                         <input type="text" class="form-control" name="limousine" id="limousine">
                      </div>
                      <div class="form-group">
                        <label for="noofpax">Number of Passengers</label>
                         <input type="text" class="form-control" name="noofpax" id="noofpax">
                      </div>
                      <h3 class="highlight">Discounts or Promotions</h3>
                      <div class="form-group">
                        <label for="couponcode">Coupon Code</label>
                         <input type="text" class="form-control" name="couponcode" id="couponcode">
                      </div>
                      <h3 class="highlight">Credit Card Information</h3>
                      <div class="form-group">
                        <label for="ncard">Name on the Credit Card</label>
                         <input type="text" class="form-control" name="ncard" id="ncard">
                      </div>
                      <div class="form-group">
                        <label for="ccard">Credit Card Number</label>
                         <input type="text" class="form-control" name="ccard" id="ccard">
                      </div>
                      <div class="form-group">
                        <label for="expdate">Expiration Date</label>
                         <input type="text" class="form-control" name="expdate" id="expdate" placeholder="MM/YY">
                      </div>
                      <div class="form-group">
                        <label for="security">Security Code</label>
                         <input type="text" class="form-control" name="security" id="security">
                      </div>
                      <div class="form-group">
                        <label for="zipcode">Billing Zip Code</label>
                         <input type="text" class="form-control" name="zipcode" id="zipcode">
                      </div>
                      <div class="form-group">
                        <label for="streetaddress">Street Address</label>
                         <input type="text" class="form-control" name="streetaddress" id="streetaddress">
                      </div>
                      <div class="form-group">
                        <label for="city">City</label>
                         <input type="text" class="form-control" name="city" id="city">
                      </div>
                      <div class="form-group">
                        <label for="state">State</label>
                         <input type="text" class="form-control" name="state" id="state">
                      </div>
                      <div class="form-group">
                        
                       <label class="checkbox-inline">
                          <input type="checkbox" name="agree" id="agree"> I agree the <a href="#" onClick="document.getElementById('printcoupon').style.display='inline';">Terms and conditions</a></em>
                        </label>
                      </div>
                      <button type="submit" class="btn btn-default btncolor">Submit</button>
                    </form>
                    <br />
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
