<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'janaelmartins@gmail.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "JMVTI:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Você recebeu uma nova mensagem.\n\n"."Detalhes:\n\nNome: $name\n\nFone: $phone\n\nEmail: $email_address\n\nMensagem:\n$message";
$headers = "From: suporte@jmvti.com.br\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>