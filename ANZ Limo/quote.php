<?php

require("inc.config.php");



# Known variables

$_POST['name'] = isset($_POST['name'])?trim(stripslashes($_POST['name'])):'';
$_POST['number'] = isset($_POST['number'])?trim(stripslashes($_POST['number'])):'';
$_POST['email'] = isset($_POST['email'])?trim(stripslashes($_POST['email'])):'';
$_POST['date'] = isset($_POST['date'])?trim(stripslashes($_POST['date'])):'';
$_POST['time'] = isset($_POST['time'])?trim(stripslashes($_POST['time'])):'';

$_POST['location'] = isset($_POST['location'])?trim(stripslashes($_POST['location'])):'';
$_POST['destination'] = isset($_POST['destination'])?trim(stripslashes($_POST['destination'])):'';
$_POST['event-type'] = isset($_POST['event-type'])?trim(stripslashes($_POST['event-type'])):'';
$_POST['vehicle-type'] = isset($_POST['vehicle-type'])?trim(stripslashes($_POST['vehicle-type'])):'';
$_POST['submit'] = isset($_POST['submit'])?trim($_POST['submit']):'';


# The captcha section

$_SESSION['security_code'] = isset($_SESSION['security_code'])?$_SESSION['security_code']:'';



$security_failed = $_POST['security_code']=='' || $_SESSION['security_code']!=strtoupper($_POST['security_code']);



# This will protect from re-sending using browser's REFRESH button

$_SESSION['security_code'] = '';



if($security_failed)

{

	$_SESSION['failed']='failed';
	die(header('Location: index.php'));

}



require("phpmailer/class.phpmailer.php");

$mail = new PHPMailer();
#$mail->IsSMTP();
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
$mail->Subject = 'New Quote via website';
$mail->Body    = $_POST['message'];

# Throw HTML away, first. Use it only with HTML emails.
#$mail->AltBody = $_POST['message'];


$message_admin = "
Hello! {$config['admin_name']},
<strong>{$_POST['name']} </strong>has sent you the message.
Here are the details:<br>
<table bgcolor='#cccccc'cellpadding='5' cellspacing='1' style='width:650px; margin:0 auto;' >
	<tr>
		<td colspan='2' bgcolor='#FF5146'><img src='http://www.anzlimo.com/images/logo.png'></td>
	</tr>
	<tr>
	<td colspan='2'>Here are the reservation details:<br></td>
	</tr>
	<tr>
		<td bgcolor='#ffffff' width='250'>Name:</td>
		<td bgcolor='#ffffff'>{$_POST['name']}</td>
	</tr>
	<tr>
		<td bgcolor='#e2e2e2' width='250'>Contact Number:</td>
		<td bgcolor='#e2e2e2'>{$_POST['number']}</td>
	</tr>
	<tr>
		<td bgcolor='#ffffff' width='250'>Email:</td>
		<td bgcolor='#ffffff'>{$_POST['email']}</td>
	</tr>
	<tr>
		<td bgcolor='#e2e2e2' width='250'>Date:</td>
		<td bgcolor='#e2e2e2'>{$_POST['date']}</td>
	</tr>
	<tr>
		<td bgcolor='#e2e2e2' width='250'>Time:</td>
		<td bgcolor='#e2e2e2'>{$_POST['time']}</td>
	</tr>
	<tr>
		<td bgcolor='#ffffff' width='250'>Pickup Location:</td>
		<td bgcolor='#ffffff'>{$_POST['location']}</td>
	</tr>
	<tr>
		<td bgcolor='#e2e2e2' width='250'>Destination:</td>
		<td bgcolor='#e2e2e2'>{$_POST['destination']}</td>
	</tr>
	<tr>
		<td bgcolor='#e2e2e2' width='250'>Event Type:</td>
		<td bgcolor='#e2e2e2'>{$_POST['event-type']}</td>
	</tr>
	<tr>
		<td bgcolor='#e2e2e2' width='250'>Select Vehicle:</td>
		<td bgcolor='#e2e2e2'>{$_POST['vehicle-type']}</td>
	</tr>
</table>
";
$mail->Body    = $message_admin;

if($mail->Send())
{
	$_SESSION['success']='success';
	die(header('Location: index.php'));
	
}
else
{
	$_SESSION['error']='not';
	die(header('Location: index.php'));
	
	
}

?>