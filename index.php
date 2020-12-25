<?php 

	require 'PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username= 'davidsarka242@gmail.com';
	$mail->Password= 'my password';

	$mail->setFrom('davidsarka242@gmail.com','Davido Mailer');
	$mail->addAddress('davidsaka242@gmail.com');
	$mail->addReplyTo('davidsaka242@gmail.com');


	$mail->isHTML(true);
	$mail->Subject='PHP Mailer Subject';
	$mail->Body='<h1 align="center">Click this My MD Link</h1><br><h4 align=center>Like this shit mehn</h4>';
	if($mail->send()){
		echo "<h2 style='color: red; text-align:center;'>Message not sent</h2>";
	}
	else{
		echo "<h2 style='color: green; text-align:center;'>Message Sent Successfully!</h2>";
	};

// 	$mail->smtpConnect(
//     array(
//         "ssl" => array(
//             "verify_peer" => false,
//             "verify_peer_name" => false,
//             "allow_self_signed" => true
//         )
//     )
// ); 
	
?>
