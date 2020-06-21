<?php
$stamp = @date('YmdHis');

$config = array(
	# SMTP details to login and generate emails
	'smtp_host'     => 'mail.speedlinewebsolution.com',
	'smtp_username' => 'mail@speedlinewebsolution.com',
	'smtp_password' => '}}weLQ!Uc}0C',
	'smtp_port'     =>  26, # 25, 465, 587, 443, 9095, ...
	'smtp_authenticate' => true,

	# Who receives the contacts?
	'admin_name'  => 'Frisco Car Services', # Name of the website or administrator (self)
	'admin_email' => 'info@friscocarservices.com', # Email of the adminstrator
	'admin_reply' => true, # Should we inform admin while writing a reply to the sender?
);

# No cache anything
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
header('Last-Modified: '.gmdate('D, d M Y H:i:s' ).' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');

session_start();
?>