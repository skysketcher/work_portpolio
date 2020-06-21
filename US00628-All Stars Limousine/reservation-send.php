<?php



$email = $_POST['email'];

require("inc.config.php");

# Known variables

$_POST['name'] = isset($_POST['name'])?trim(stripslashes($_POST['name'])):'';

$_POST['email'] = isset($_POST['email'])?trim(stripslashes($_POST['email'])):'';

$_POST['company'] = isset($_POST['company'])?trim(stripslashes($_POST['company'])):'';

$_POST['phone'] = isset($_POST['phone'])?trim(stripslashes($_POST['phone'])):'';



$_POST['occassions'] = isset($_POST['occassions'])?trim(stripslashes($_POST['occassions'])):'';

$_POST['noofpax'] = isset($_POST['noofpax'])?trim(stripslashes($_POST['noofpax'])):'';

$_POST['noofhrs'] = isset($_POST['noofhrs'])?trim(stripslashes($_POST['noofhrs'])):'';

$_POST['datetime'] = isset($_POST['datetime'])?trim(stripslashes($_POST['datetime'])):'';



$_POST['month'] = isset($_POST['month'])?trim(stripslashes($_POST['month'])):'';

$_POST['date'] = isset($_POST['date'])?trim(stripslashes($_POST['date'])):'';

$_POST['time'] = isset($_POST['time'])?trim(stripslashes($_POST['time'])):'';

$_POST['hour'] = isset($_POST['hour'])?trim(stripslashes($_POST['hour'])):'';

$_POST['meridan'] = isset($_POST['meridan'])?trim(stripslashes($_POST['meridan'])):'';

$_POST['pickupaddress'] = isset($_POST['pickupaddress'])?trim(stripslashes($_POST['pickupaddress'])):''; 

$_POST['pickupcity'] = isset($_POST['pickupcity'])?trim(stripslashes($_POST['pickupcity'])):'';

$_POST['zcode'] = isset($_POST['zcode'])?trim(stripslashes($_POST['zcode'])):'';

//airport

$_POST['pickup_airport'] = isset($_POST['pickup_airport'])?trim(stripslashes($_POST['pickup_airport'])):'';

$_POST['arrivaltime'] = isset($_POST['arrivaltime'])?trim(stripslashes($_POST['arrivaltime'])):'';

$_POST['arrival-hour'] = isset($_POST['arrival-hour'])?trim(stripslashes($_POST['arrival-hour'])):'';

$_POST['arrival-minute'] = isset($_POST['arrival-minute'])?trim(stripslashes($_POST['arrival-minute'])):'';

$_POST['arrival-ampm'] = isset($_POST['arrival-ampm'])?trim(stripslashes($_POST['arrival-ampm'])):''; 

$_POST['pickup-ariportname'] = isset($_POST['pickup-ariportname'])?trim(stripslashes($_POST['pickup-ariportname'])):'';

$_POST['pickup-flight_no'] = isset($_POST['pickup-flight_no'])?trim(stripslashes($_POST['pickup-flight_no'])):'';



  

$_POST['dropoffaddress'] = isset($_POST['dropoffaddress'])?trim(stripslashes($_POST['dropoffaddress'])):'';

$_POST['dropoffcity'] = isset($_POST['dropoffcity'])?trim(stripslashes($_POST['dropoffcity'])):'';

$_POST['dropoffzip'] = isset($_POST['dropoffzip'])?trim(stripslashes($_POST['dropoffzip'])):'';

$_POST['dropoffairport'] = isset($_POST['dropoffairport'])?trim(stripslashes($_POST['dropoffairport'])):'';

$_POST['depaturetime'] = isset($_POST['depaturetime'])?trim(stripslashes($_POST['depaturetime'])):'';

$_POST['dropoff-ariportname'] = isset($_POST['dropoff-ariportname'])?trim(stripslashes($_POST['dropoff-ariportname'])):'';

$_POST['dropoff-flight_no'] = isset($_POST['dropoff-flight_no'])?trim(stripslashes($_POST['dropoff-flight_no'])):'';



$_POST['payment'] = isset($_POST['payment'])?trim(stripslashes($_POST['payment'])):''; 

$_POST['ccname'] = isset($_POST['ccname'])?trim(stripslashes($_POST['ccname'])):'';

$_POST['ccno'] = isset($_POST['ccno'])?trim(stripslashes($_POST['ccno'])):'';

$_POST['ccdate'] = isset($_POST['ccdate'])?trim(stripslashes($_POST['ccdate'])):'';

$_POST['csc'] = isset($_POST['csc'])?trim(stripslashes($_POST['csc'])):'';

$_POST['czipcode'] = isset($_POST['czipcode'])?trim(stripslashes($_POST['czipcode'])):'';



$_POST['security_code'] = isset($_POST['security_code'])?trim($_POST['security_code']):'';

$_POST['submit_button'] = isset($_POST['submit_button'])?trim($_POST['submit_button']):'';



if($security_failed)

{

	$_SESSION['security_fail']= 'error';

	die(header('Location: reservation.php'));

}









/*

$_POST['security_code'] = isset($_POST['security_code'])?trim($_POST['security_code']):'';

# The captcha section

$_SESSION['security_code'] = isset($_SESSION['security_code'])?$_SESSION['security_code']:'';



$security_failed = $_POST['security_code']=='' || $_SESSION['security_code']!=strtoupper($_POST['security_code']);



# This will protect from re-sending using browser's REFRESH button

$_SESSION['security_code'] = '';



if($security_failed)

{

	die(header('Location: message-error.php'));

}

*/

require("phpmailer/class.phpmailer.php");



$mail = new PHPMailer();



//$mail->IsSMTP();

$mail->Host     = $config['smtp_host'];

$mail->SMTPAuth = $config['smtp_authenticate'];

$mail->Username = $config['smtp_username'];

$mail->Password = $config['smtp_password'];

$mail->Port     = $config['smtp_port'];



# Sender who filled up the form

$mail->From = $_POST['email'];

$mail->FromName = $_POST['name'];



$mail->AddAddress($config['admin_email'], $config['admin_name']);



$mail->AddReplyTo($_POST['email'], $_POST['name']); # Who filled the form?

if($config['admin_reply']==true)

{

	# Alert admin as well while replying

	$mail->AddReplyTo($config['admin_email'], $config['admin_name']);

}



#$mail->WordWrap = 50;

$mail->IsHTML(true);

$stamp1 = @date('YmdHis');

#$mail->Subject = '[C'.$stamp.'] - '.$_POST['subject'];

#$mail->Subject = 'New FREE Quote has been requested from '.$_POST['name'];

$mail->Subject = 'New Reservation via Website';

//$mail->Body    = $_POST['message'];



# Throw HTML away, first. Use it only with HTML emails.

#$mail->AltBody = $_POST['message'];





$message_admin = "

<table bgcolor='#cccccc'cellpadding='5' cellspacing='1' style='width:650px; margin:0 auto;' >

	<tr>

		<td colspan='2'>Hello {$config['admin_name']}, You have a New Reservation from ".$stamp1.". Here are the details:<br>		</td>

	</tr> 	

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>1. Personal Information</strong></td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Name:</td>

		<td bgcolor='#ffffff'>{$_POST['name']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Email:</td>

		<td bgcolor='#e2e2e2'>{$_POST['email']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Company:</td>

		<td bgcolor='#ffffff'>{$_POST['company']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Phone:</td>

		<td bgcolor='#e2e2e2'>{$_POST['phone']}</td>

	</tr>

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>2. Occassions:</strong></td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Occassions:</td>

		<td bgcolor='#ffffff'>{$_POST['occassions']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>No. of Passangers:</td>

		<td bgcolor='#e2e2e2'>{$_POST['noofpax']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>No. of Hours:</td>

		<td bgcolor='#ffffff'>{$_POST['noofhrs']}</td>

	</tr>

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>3. Pick Up Information:</strong></td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Pick up Date and Time:</td>

		<td bgcolor='#e2e2e2'>{$_POST['datetime']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Pickup Address:</td>

		<td bgcolor='#e2e2e2'>{$_POST['pickupaddress']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Pickup City:</td>

		<td bgcolor='#ffffff'>{$_POST['pickupcity']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Zip Code:</td>

		<td bgcolor='#e2e2e2'>{$_POST['zcode']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Airport:</td>

		<td bgcolor='#ffffff'>{$_POST['pickup_airport']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Arrival Time:</td>

		<td bgcolor='#e2e2e2'>{$_POST['arrivaltime']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Airline:</td>

		<td bgcolor='#e2e2e2'>{$_POST['pickup-ariportname']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Flight Number:</td>

		<td bgcolor='#ffffff'>{$_POST['pickup-flight_no']}</td>

	</tr>

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>4. Drop off information :</strong></td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Address:</td>

		<td bgcolor='#ffffff'>{$_POST['dropoffaddress']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>City:</td>

		<td bgcolor='#e2e2e2'>{$_POST['dropoffcity']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Zip:</td>

		<td bgcolor='#e2e2e2'>{$_POST['dropoffzip']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Airport:</td>

		<td bgcolor='#e2e2e2'>{$_POST['dropoffairport']}</td>

	</tr>
	
		<tr>

		<td bgcolor='#e2e2e2' width='250'>Depature Time:</td>

		<td bgcolor='#e2e2e2'>{$_POST['depaturetime']}</td>   

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Airline:</td>

		<td bgcolor='#e2e2e2'>{$_POST['dropoff-ariportname']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Flight Number:</td>

		<td bgcolor='#ffffff'>{$_POST['dropoff-flight_no']}</td>

	</tr>

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>5. Payment options:</strong></td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Card Holder Name:</td>

		<td bgcolor='#ffffff'>{$_POST['ccname']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Credit Card Number:</td>

		<td bgcolor='#e2e2e2'>{$_POST['ccno']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff'>Expiry date:</td>

		<td bgcolor='#ffffff'>{$_POST['ccdate']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2'>CSC code:</td>

		<td bgcolor='#e2e2e2'>{$_POST['csc']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff'>Zip code:</td>

		<td bgcolor='#ffffff'>{$_POST['czipcode']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2'>Authorize:</td>

		<td bgcolor='#e2e2e2'>{$_POST['yes']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff'>Special Message:</td>

		<td bgcolor='#ffffff'>{$_POST['details']}</td>

	</tr>

</table>

";

//client message body

$message_client = "

<table bgcolor='#cccccc'cellpadding='5' cellspacing='1' style='width:650px; margin:0 auto;' >

	<tr>

		<td colspan='2' bgcolor='#FF5146'><img src='http://www.addislimousine.com/images/logo.png'></td>

	</tr>

	<tr>

		<td colspan='2'>Hello Customer ID is: ".$stamp1."<br></td>

	</tr> 	

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>1. Personal Information</strong></td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Name:</td>

		<td bgcolor='#ffffff'>{$_POST['name']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Email:</td>

		<td bgcolor='#e2e2e2'>{$_POST['email']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Company:</td>

		<td bgcolor='#ffffff'>{$_POST['company']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Phone:</td>

		<td bgcolor='#e2e2e2'>{$_POST['phone']}</td>

	</tr>

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>2. Occassions:</strong></td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Occassions:</td>

		<td bgcolor='#ffffff'>{$_POST['occassions']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>No. of Passangers:</td>

		<td bgcolor='#e2e2e2'>{$_POST['noofpax']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>No. of Hours:</td>

		<td bgcolor='#ffffff'>{$_POST['noofhrs']}</td>

	</tr>

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>3. Pick Up Information:</strong></td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Pick up Date:</td>

		<td bgcolor='#e2e2e2'>{$_POST['month']}, {$_POST['date']}, {$_POST['year']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Pick up Time:</td>

		<td bgcolor='#ffffff'>{$_POST['hour']}:{$_POST['time']} {$_POST['meridan']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Pickup Address:</td>

		<td bgcolor='#e2e2e2'>{$_POST['pickupaddress']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Pickup City:</td>

		<td bgcolor='#ffffff'>{$_POST['pickupcity']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Zip Code:</td>

		<td bgcolor='#e2e2e2'>{$_POST['zcode']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Airport:</td>

		<td bgcolor='#ffffff'>{$_POST['pickup_airport']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Arrival Time:</td>

		<td bgcolor='#e2e2e2'>{$_POST['arrival-hour']}:{$_POST['arrival-minute']} {$_POST['arrival-ampm']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Airline:</td>

		<td bgcolor='#ffffff'>{$_POST['pickup-ariportname']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Airline:</td>

		<td bgcolor='#e2e2e2'>{$_POST['pickup-ariportname']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Flight Number:</td>

		<td bgcolor='#ffffff'>{$_POST['pickup-flight_no']}</td>

	</tr>

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>4. Drop off information :</strong></td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Address:</td>

		<td bgcolor='#ffffff'>{$_POST['dropoffaddress']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>City:</td>

		<td bgcolor='#e2e2e2'>{$_POST['dropoffcity']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>City:</td>

		<td bgcolor='#e2e2e2'>{$_POST['dropoffzip']}</td>

	</tr>

	<tr>

		<td colspan='2' bgcolor='#8d8d8d' color='#fff717'><strong>5. Payment options:</strong></td>

	</tr>

	<tr>

		<td bgcolor='#ffffff' width='250'>Card Holder Name:</td>

		<td bgcolor='#ffffff'>{$_POST['ccname']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2' width='250'>Credit Card Number:</td>

		<td bgcolor='#e2e2e2'>{$_POST['ccno']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff'>Expiry date:</td>

		<td bgcolor='#ffffff'>{$_POST['ccdate']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2'>CSC code:</td>

		<td bgcolor='#e2e2e2'>{$_POST['csc']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff'>Zip code:</td>

		<td bgcolor='#ffffff'>{$_POST['czipcode']}</td>

	</tr>

	<tr>

		<td bgcolor='#e2e2e2'>Authorize:</td>

		<td bgcolor='#e2e2e2'>{$_POST['yes']}</td>

	</tr>

	<tr>

		<td bgcolor='#ffffff'>Special Message:</td>

		<td bgcolor='#ffffff'>{$_POST['details']}</td>

	</tr>

</table>

";



//Second mail to the client

$mail->Body    = $message_admin;

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

$headers .= "From: $email" . "\r\n";



$a = mail($email, $mail->Subject, $message_client, $headers);

$b = mail($config['admin_email'], $mail->Subject, $message_admin, $headers);

//mail($to,$subject, $mail->Body,$headers);





if($b && $a)

{

	$_SESSION['mail_send']= 'ok';

	die(header('Location: reservation.php'));

}

else

{

	$_SESSION['mail_send']= 'not';

	die(header('Location: reservation.php'));

}

?>