<?php
include('smtp/PHPMailerAutoload.php');


function smtp_mailer($to,$subject, $msg,$attachment){
	$mail = new PHPMailer(); 
	//$mail->SMTPDebug=2;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "justfordemo2017@gmail.com";
	$mail->Password = 'Murari@1992';
	$mail->SetFrom("justfordemo2017@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;	
	$mail->AddAttachment($attachment);
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		echo 'Sent';
	}
}
?>