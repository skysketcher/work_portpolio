<?php

//print_r($_POST);

//die();

require("inc.config.php");



# Known variables

$_POST['fname'] = isset($_POST['fname'])?trim(stripslashes($_POST['fname'])):'';

$_POST['pno'] = isset($_POST['pno'])?trim(stripslashes($_POST['pno'])):'';

$_POST['email'] = isset($_POST['email'])?trim(stripslashes($_POST['email'])):'';

$_POST['btimetocal'] = isset($_POST['btimetocal'])?trim(stripslashes($_POST['btimetocal'])):'';



$_POST['event'] = isset($_POST['event'])?trim(stripslashes($_POST['event'])):'';

$_POST['pickupdate'] = isset($_POST['pickupdate'])?trim(stripslashes($_POST['pickupdate'])):'';

$_POST['pickuptime'] = isset($_POST['pickuptime'])?trim(stripslashes($_POST['pickuptime'])):'';

$_POST['returntime'] = isset($_POST['returntime'])?trim(stripslashes($_POST['returntime'])):'';

$_POST['PickupLocation'] = isset($_POST['PickupLocation'])?trim(stripslashes($_POST['PickupLocation'])):'';

$_POST['stop'] = isset($_POST['stop'])?trim(stripslashes($_POST['stop'])):'';

$_POST['AdditionalStop1'] = isset($_POST['AdditionalStop1'])?trim(stripslashes($_POST['AdditionalStop1'])):'';

$_POST['AdditionalStop2'] = isset($_POST['AdditionalStop2'])?trim(stripslashes($_POST['AdditionalStop2'])):'';

$_POST['dropoff'] = isset($_POST['dropoff'])?trim(stripslashes($_POST['dropoff'])):'';

$_POST['message'] = isset($_POST['message'])?trim(stripslashes($_POST['message'])):'';

$_POST['rflight'] = isset($_POST['rflight'])?trim(stripslashes($_POST['rflight'])):'';



$_POST['servicetype1'] = isset($_POST['servicetype1'])?trim(stripslashes($_POST['servicetype1'])):'';

$_POST['servicetype2'] = isset($_POST['servicetype2'])?trim(stripslashes($_POST['servicetype2'])):'';

$_POST['limousine'] = isset($_POST['limousine'])?trim(stripslashes($_POST['limousine'])):'';

$_POST['noofpax'] = isset($_POST['noofpax'])?trim(stripslashes($_POST['noofpax'])):'';



$_POST['couponcode'] = isset($_POST['couponcode'])?trim(stripslashes($_POST['couponcode'])):'';


$_POST['ncard'] = isset($_POST['ncard'])?trim(stripslashes($_POST['ncard'])):'';

$_POST['ccard'] = isset($_POST['ccard'])?trim(stripslashes($_POST['ccard'])):'';

$_POST['expdate'] = isset($_POST['expdate'])?trim(stripslashes($_POST['expdate'])):'';

$_POST['security'] = isset($_POST['security'])?trim(stripslashes($_POST['security'])):'';

$_POST['zipcode'] = isset($_POST['zipcode'])?trim(stripslashes($_POST['zipcode'])):'';

$_POST['streetaddress'] = isset($_POST['streetaddress'])?trim(stripslashes($_POST['streetaddress'])):'';

$_POST['city'] = isset($_POST['city'])?trim(stripslashes($_POST['city'])):'';

$_POST['state'] = isset($_POST['state'])?trim(stripslashes($_POST['state'])):'';

$_POST['agree'] = isset($_POST['agree'])?trim(stripslashes($_POST['agree'])):'';



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



$mail->IsSMTP();

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

$stamp1 = @date('Y/m/d H:i:s');

#$mail->Subject = '[C'.$stamp.'] - '.$_POST['subject'];

#$mail->Subject = 'New FREE Quote has been requested from '.$_POST['name'];

$mail->Subject = 'ANZLIMO INC. - Reservation';

$mail->Body    = $_POST['message'];



# Throw HTML away, first. Use it only with HTML emails.

#$mail->AltBody = $_POST['message'];





$message_admin = "

Hello! {$config['admin_name']},

<strong>{$_POST['fname']} </strong>has placed a reservation.

Here are the details:<br>

<table bgcolor=\"#FFFFFF\" cellpadding=\"5\" cellspacing=\"1\" width=\"100%\">

<tr style=\"background:#66A9BD; color:#000; padding:5px;\">

<td colspan=\"2\"><strong>Customer Information</strong></td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Full Name:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['fname']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Phone Number:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['pno']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Email:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['email']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Best Time to Call:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['btimetocal']}</td>

</tr>

<tr style=\"background:#66A9BD; color:#000; padding:5px;\">

<td colspan=\"2\"><strong>Trip Information</strong></td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Event:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['event']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Pick up Date:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['pickupdate']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Pick up Time:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['pickuptime']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Return Time:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['returntime']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Pick up Location:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['PickupLocation']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">stop:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['stop']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Drop Off:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['dropoff']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Message: </td>

<td bgcolor=\"#D5EAF0\">{$_POST['message']}</td>

</tr>
<tr>

<td bgcolor=\"#dcf6fd\">Return Flight Information:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['rflight']}</td>

</tr>

<tr style=\"background:#66A9BD; color:#000; padding:5px;\">

<td colspan=\"2\"><strong>Choose Service Type & Limousine</strong></td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Choose Service Type:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['servicetype1']}, {$_POST['servicetype2']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Limousine:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['limousine']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Number of Passengers:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['noofpax']}</td>

</tr>

<tr style=\"background:#66A9BD; color:#000; padding:5px;\">

<td colspan=\"2\"><strong>Discounts or Promotions</strong></td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Coupon Code:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['couponcode']}</td>

</tr>

<tr style=\"background:#66A9BD; color:#000; padding:5px;\">

<td colspan=\"2\"><strong>Credit Card Information</strong></td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Name on the Credit Card:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['ncard']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Credit Card Number:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['ccard']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Expiration Date:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['expdate']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Security Code:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['security']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Billing Zip Code:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['zipcode']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">Street Address:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['streetaddress']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">City:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['city']}</td>

</tr>

<tr>

<td bgcolor=\"#D5EAF0\">State:</td>

<td bgcolor=\"#D5EAF0\">{$_POST['state']}</td>

</tr>

<tr>

<td bgcolor=\"#dcf6fd\">Agree Terms:</td>

<td bgcolor=\"#dcf6fd\">{$_POST['agree']}</td>

</tr>



</table>

";



$mail->Body    = $message_admin;



if($mail->Send())

{

	

	die(header('Location: thankyou.php'));

}

else

{

	

	die(header('Location: sorry.php'));

}

?>