<?php 
require("/home/usuario/diretoriodeinstalação/PHPMailer-master/src/PHPMailer.php"); 
require("/home/usuario/diretoriodeinstalação/PHPMailer-master/src/SMTP.php"); 
 $mail = new PHPMailer\PHPMailer\PHPMailer(); 
 $mail->SMTPDebug = 2; 
 $mail->Debugoutput = 'html';
 $mail->IsSMTP(); // enable SMTP 
 $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only 
 $mail->SMTPAuth = true; // authentication enabled 
 $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail 
 $mail->Host = "servidor.hostgator.com.br"; 
 $mail->Port = 465; // or 587 
 $mail->IsHTML(true); 
 $mail->Username = "contato@infoedesigner.com.br"; 
 $mail->Password = "=DAa1l1d2s2"; 
 $mail->SetFrom("contato@infoedesigner.com.br"); 
 $mail->Subject = "Assunto da mensagem"; 
 $mail->Body = "Escreva o texto do email aqui"; 
 $mail->AddAddress("destino@dominio.com.br"); 
    if(!$mail->Send()) { 
       echo "Mailer Error: " . $mail->ErrorInfo; 
    } else { 
       echo "Mensagem enviada com sucesso"; 
    } 
?> 