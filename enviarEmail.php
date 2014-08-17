<?php

require("phpmailer/class.phpmailer.php");


if (!isset($_POST['email']) || !isset($_POST['nomeRemetente']) || 
	empty($_POST['email']) || empty($_POST['nomeRemetente']) || 
	!isset($_POST['mensagem']) || empty($_POST['mensagem']) )
{
	die('corrupted data');
}
else
{
	
	
	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host     = "smtp.picarellidiagnosticos.com.br";
	$mail->Port     = 465;
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'alain@picarellidiagnosticos.com.br';                            // SMTP username
	$mail->Password = 'pto2phil';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
	
	
	$mail->From = 'alain@picarellidiagnosticos.com.br';
	$mail->FromName = 'Alain Dutra';
	$mail->AddAddress('alain.dutra@gmail.com');
	$mail->AddAddress('delonsp.ad272@m.evernote.com');
	
	$mail->AddReplyTo('alain@picarellidiagnosticos.com.br', 'reply');
	$email = nl2br($_POST['email']);
	$telefone = nl2br($_POST['telefone']);
	$nome = nl2br($_POST['nomeRemetente']);
	$texto = nl2br($_POST['mensagem']);
	//$mail->AddCC('');
	//$mail->AddBCC('');
	
	$mail->WordWrap = 50;      
	$mail->IsHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = 'Contato do Site';
	$mail->Body    =  "<!DOCTYPE html>
		<html lang='pt-br'>
		    <head>
			<meta charset='utf-8'>
			<title>Contato do Site</title>
	
		    </head>
		    <body>
		    <h4><em>Contato do Site picarellidiagnosticos.com.br</em></h4>
		    <h4>Nome: {$nome}</h4>
		    <h4>Telefone: {$telefone}</h4>
		    <h4>Email para resposta: {$email}</h4>
		    <h4>Mensagem:</h4>
		    <blockquote>{$texto}</blockquote>	
		    
		    </body>
	    </html>";
   
	if(!$mail->Send()) {
	  echo 'Message was not sent.';
	  echo 'Mailer error: ' . $mail->ErrorInfo;
	  
	} else {
	  echo('Email enviado com sucesso.');
	}
} 
?>


