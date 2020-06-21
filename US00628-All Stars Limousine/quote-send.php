<?php
//print_r($_POST);
//die();
require("inc.config.php");
ob_start();

# Known variables
$_POST['name'] = isset($_POST['name'])?trim(stripslashes($_POST['name'])):'';
$_POST['phone'] = isset($_POST['phone'])?trim(stripslashes($_POST['phone'])):'';
$_POST['email'] = isset($_POST['email'])?trim(stripslashes($_POST['email'])):'';
$_POST['message'] = isset($_POST['message'])?trim(stripslashes($_POST['message'])):'';
$_POST['pickuptime'] = isset($_POST['pickuptime'])?trim(stripslashes($_POST['pickuptime'])):'';
$_POST['numberofpax'] = isset($_POST['numberofpax'])?trim(stripslashes($_POST['numberofpax'])):'';
$_POST['pickuplocation'] = isset($_POST['pickuplocation'])?trim(stripslashes($_POST['pickuplocation'])):'';
$_POST['destination'] = isset($_POST['destination'])?trim(stripslashes($_POST['destination'])):'';
$_POST['eventtype'] = isset($_POST['eventtype'])?trim(stripslashes($_POST['eventtype'])):'';
$_POST['vehicletype'] = isset($_POST['vehicletype'])?trim(stripslashes($_POST['vehicletype'])):'';
$_POST['contactvia'] = isset($_POST['contactvia'])?trim(stripslashes($_POST['contactvia'])):'';
$_POST['triptype'] = isset($_POST['triptype'])?trim(stripslashes($_POST['triptype'])):'';

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
$mail->Subject = 'New FREE Quote has been requested from Website';
$mail->Body    = $_POST['message'];

# Throw HTML away, first. Use it only with HTML emails.
#$mail->AltBody = $_POST['message'];


$message_admin = "
Hello! {$config['admin_name']},
<strong>{$_POST['name']} </strong>has placed a reservation.
Here are the details:<br>

Full Name: <strong>{$_POST['name']}</strong><br>
Email: <strong>{$_POST['email']}</strong><br>
Contact Number: <strong>{$_POST['phone']}</strong><br>
Message: <strong>{$_POST['message']}</strong><br>
";
$mail->Body    = $message_admin;

if($mail->Send())
{
	die(header('Location: contact-send.php'));
}
else
{
	die(header('Location: contact-send.php'));
}
?>