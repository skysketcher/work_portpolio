<?php

require("inc.config.php");



# Known variables

$_POST['name'] = isset($_POST['name'])?trim(stripslashes($_POST['name'])):'';
$_POST['address'] = isset($_POST['address'])?trim(stripslashes($_POST['address'])):'';
$_POST['phone'] = isset($_POST['phone'])?trim(stripslashes($_POST['phone'])):'';

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

	$_SESSION['failed']='failed';
	die(header('Location: contact.php'));

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
$mail->Subject = $_POST['subject'];;
$mail->Body    = $_POST['message'];

# Throw HTML away, first. Use it only with HTML emails.
#$mail->AltBody = $_POST['message'];


$message_admin = "
Hello! {$config['admin_name']},
<strong>{$_POST['name']} </strong>has sent you the message.
Here are the details:<br>
<table>
<tr>
<td>Name:</td>
<td>{$_POST['name']}</td>
</tr>
<tr>
<td>Phone:</td>
<td>{$_POST['phone']}</td>
</tr>
<tr>
<td>Email:</td>
<td>{$_POST['email']}</td>
</tr>
<td>Subject:</td>
<td>{$_POST['subject']}</td>
</tr>
<tr>
<td>Message:</td>
<td>{$_POST['message']}</td>
</tr>
</table>
";
$mail->Body    = $message_admin;

if($mail->Send())
{
	$_SESSION['success']='success';
	die(header('Location: contact.php'));
	
}
else
{
	$_SESSION['error']='not';
	die(header('Location: contact.php'));
	
	
}

?>