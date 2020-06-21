<?php
require_once "vendor/autoload.php";

  $capresponse = $_POST['g-recaptcha-response'];
  $captcha = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6Le88yEUAAAAAJkvdGzuxy-QTxcPBI5tsq4294Tj&response='.$capresponse);
  $captcha = json_decode($captcha);
  if ($captcha->success) {


	$admin_name = "Arnal Home Stay";
	$admin_address = "aakash@dotweb.com.np";
	$admin_subject="Arnal Home Stay :: Room form submission";
	$user_name = $_POST['name'];
	$user_address = $_POST['email'];
	$user_subject= $_POST['subject'];
// $mail_content_user=file_get_contents("http://localhost/phpmail/user_content.php");
// $mail_content_admin=file_get_contents("http://localhost/phpmail/admin_content.php?id=1");
	$mail_content_user='<table align="center" border="1" bordercolor="lightgrey" cellpadding="0" cellspacing="0" width="600" >
						<tr>
							<td  colspan="2" align="center" style="padding: 40px 0 30px 0;border-bottom:0;" bgcolor="white" >
								<img src="http://arnalhomestay.com/images/logo.png" alt="Arnal Home Stay" width="300" height="62" style="display: block;" />
							</td>
						</tr>

						<tr>
							<td style="padding:20px 0 20px 10px">
								Dear '.$user_name.'!<br /><br />
								This is an automatically generated Delivery Status Notification to assure that your e-mail has just reached us. 
								We would first like to thank you for choosing our service and are glad to receive the e-mail along with the information attached to it. 
								We will get back to you shortly with the best possible service that we have in offer.<br/><br/>
								.<br/><br/>
								Regards,<br/>
								The Management Team,<br/>
								' . $admin_name.'</td>
							</tr></table>';

	$mail_content_admin='<table align="center" border="1" bordercolor="lightgrey" cellpadding="0" cellspacing="0" width="600" >
						<tr>
							<td  colspan="2" align="center" style="padding: 40px 0 30px 0;border-bottom:0;" bgcolor="white" >
								<img src="http://arnalhomestay.com/images/logo.png" alt="Arnal Home Stray" width="300" height="62" style="display: block;" />
							</td>
						</tr>
						<tr><td colspan="2" style="padding: 20px;">
							<table border="0" cellpadding="0" cellspacing="0" width="100%" bgcolor="grey" style="color:#fff;">
								<tr bgcolor="#fff" style="color:#000;">
									<td colspan="2" style="padding:20px 0 20px 10px">
										A request form has been submitted on the website on '.date("m/d/Y H:i:s").', following is the result of the submission.
									</td>
								</tr>

								<tr bgcolor="#F44336">
									<td style="padding:20px 0 20px 10px">
										Name:
									</td>
									<td style="padding:20px 0 20px 10px">'.$user_name.'</td>
								</tr>
								<tr>
									<td style="padding:20px 0 20px 10px">
										Email:
									</td>
									<td style="padding:20px 0 20px 10px">'.$user_address.'</td>
								</tr>
								<tr bgcolor="#F44336">
									<td style="padding:20px 0 20px 10px">
										Subject:
									</td>
									<td style="padding:20px 0 20px 10px">'.$user_subject.'</td>
								</tr>
								<tr>
									<td style="padding:20px 0 20px 10px">
										Message:
									</td>
									<td style="padding:20px 0 20px 10px">'.$_POST["message"].'</td>
								</tr>
							</table></td></tr>

						</table>' ;
        // echo $mail_content_admin."<br>";
        // echo $mail_content_user;
        // die();
        $mailtouser=usermail($admin_name,$admin_address,$user_name,$user_address,$admin_subject,$mail_content_user);
        $mailtoadmin=adminmail($admin_name,$admin_address,$user_name,$user_address,$user_subject,$mail_content_admin);

        // echo $mailtouser;
        // echo $mailtoadmin;
        // die();

        if(!$mailtouser && !$mailtoadmin){
            $msg=$mailtoadmin;
            header("Location:contact.php?msg=$msg");

        }
        if($mailtouser && $mailtoadmin){
            $msg=$mailtoadmin;
            header("Location:contact.php?msg=$msg");
            
        }


}







// ------------------------------------------------------------------------------------------------------ //
    function usermail($admin_name,$admin_address,$user_name,$user_address,$admin_subject,$mail_content_user){
        $usermail = new PHPMailer;

//Enable SMTP debugging. 
//$usermail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
        $usermail->isSMTP();            
//Set SMTP host name                          
        $usermail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
        $usermail->SMTPAuth = true;                          
//Provide username and password     
        $usermail->Username = "submission.webform@gmail.com";                 
        $usermail->Password = "DotWebForm520";                           
//If SMTP requires TLS encryption then set it
        $usermail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
        $usermail->Port = 587;                                   

        $usermail->From = "submission.webform@gmail.com";
        $usermail->FromName = $admin_name;
        $usermail->addAddress($user_address, $user_name);
        $usermail->isHTML(true);
        $usermail->AddReplyTo($admin_address, $admin_name);
        $usermail->Subject = $admin_subject;
        $usermail->Body = $mail_content_user;
// $usermail->AltBody = "This is the plain text version of the email content";

        if(!$usermail->send()) 
        {
                        return $msg='error';
// echo "Mailer Error: " . $usermail->ErrorInfo;
        } 
        else 
        {
                        return $msg='success';
// echo "User to Admin: Message has been sent successfully";
        }
    }
// ------------------------------------------------------------- //

    function adminmail($admin_name,$admin_address,$user_name,$user_address,$user_subject,$mail_content_admin){
        $adminmail = new PHPMailer;

//Enable SMTP debugging. 
//$adminmail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
        $adminmail->isSMTP();            
//Set SMTP host name                          
        $adminmail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
        $adminmail->SMTPAuth = true;                          
//Provide username and password     
        $adminmail->Username = "submission.webform@gmail.com";                 
        $adminmail->Password = "DotWebForm520";                           
//If SMTP requires TLS encryption then set it
        $adminmail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
        $adminmail->Port = 587;                                   

        $adminmail->From = "submission.webform@gmail.com";
        $adminmail->FromName = $user_name;
        $adminmail->addAddress($admin_address, $admin_name);
        $adminmail->isHTML(true);
        $adminmail->AddReplyTo($user_address, $user_name);
        $adminmail->Subject = $user_subject;
        $adminmail->Body = $mail_content_admin;
// $adminmail->AltBody = "This is the plain text version of the email content";

        if(!$adminmail->send()) 
        {
                        return $msg='error';
    // echo "Mailer Error: " . $adminmail->ErrorInfo;
        } 
        else 
        {
                        return $msg='success';
            // echo "User to Admin: Message has been sent successfully";
        }
    }

