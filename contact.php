<?php

require_once('PHPMailer/PHPMailerAutoload.php');
if(isset($_POST['submit'])) 
{

    $recipient='ngan.pickery@gmail.com';
    $sender=$_POST['sender'];
    $senderEmail=$_POST['senderemail'];
    $senderTel=$_POST['sendertel'];
    $message=$_POST['message'];

	//$headers = "From:".$senderEmail;

	//mail ($recipient, $sender, $message, $headers);

	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '465';
	$mail->isHTML();
	$mail->Username = 'nganpickerysender@gmail.com';
	$mail->Password = 'SenderMail';
	$mail->SetFrom($sender);
	$mail->Subject = $sender." <".$senderEmail."> ".$senderTel;
	$mail->Body = $message;
	$mail->AddAddress($recipient);
	$mail->Send();

}

?>
