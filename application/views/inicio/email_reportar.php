<?php

	$email_responsavel = $_POST["email"];
	$mensagem 		   = $_POST["msg"];

	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'To: Portal Século - <'.$email_responsavel.'>' . "\r\n";
	$headers .= 'From: Portal Século <'.$email_responsavel.'>' . "\r\n";


	$headers = '
		<b>Mensagem:</b> '.$mensagem.'<br> 
	';


	$envia = mail("hugo.mesquita@seculomanaus.com.br", "Reportar Bug - Site Seculo Manaus", $email_responsavel, $headers);

	if($envia):
		echo "<h2>Mensagem enviada com sucesso!</h2>";
	else:
		echo "<h2>Erro ao enviar mensagem!</h2>";
	endif;
?>