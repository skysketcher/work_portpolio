<?php

require("inc.config.php");



# Known variables

$_POST['name'] = isset($_POST['name'])?trim(stripslashes($_POST['name'])):'';

$_POST['email'] = isset($_POST['email'])?trim(stripslashes($_POST['email'])):'';

$_POST['subject'] = isset($_POST['subject'])?trim(stripslashes($_POST['subject'])):'';

$_POST['message'] = isset($_POST['message'])?trim(stripslashes($_POST['message'])):'';

$_POST['security_code'] = isset($_POST['security_code'])?trim($_POST['security_code']):'';

$_POST['submit_button'] = isset($_POST['submit_button'])?trim($_POST['submit_button']):'';



# The captcha section

$_SESSION['security_code'] = isset($_SESSION['security_code'])?$_SESSION['security_code']:'';



$security_failed = $_POST['security_code']=='' || $_SESSION['security_code']!=strtoupper($_POST['security_code']);



# This will protect from re-sending using browser's REFRESH button

$_SESSION['security_code'] = '';



if($security_failed)

{

	die(header('Location: message-error.php'));

}



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

#$mail->IsHTML(false);



#$mail->Subject = '[C'.$stamp.'] - '.$_POST['subject'];

$mail->Subject = $_POST['subject'];

$mail->Body    = $_POST['message'];



# Throw HTML away, first. Use it only with HTML emails.

#$mail->AltBody = $_POST['message'];

$message_admin = "
Hello! {$config['admin_name']},
{$_POST['name']} has sent you the message.
Here are the details:
Name: {$_POST['name']}
Email: {$_POST['email']}
Message: {$_POST['message']}
";
$mail->Body    = $message_admin;


if($mail->Send())

{

	die(header('Location: message-sent.php'));

}

else

{

	die(header('Location: message-failed.php'));

}

?>