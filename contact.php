<?php

if (isset($_POST['email'])) {
  
    /*$email_to = "bernardo.broscheit@gmail.com";
    $email_subject = "Contacto desde sitio web";

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre".$_POST ['name']. "\n";
    $email_message .= "Email:".$_POST ['email']. "\n";
    $email_message .= "Motivo:".$_POST['subject']."\n";
    $email_message .= "Comentario:".$_POST ['message']."\n\n";
    

$headers = 'From:'.$email_from."\r\n".
'Reply-to:' .$email_from."\r\n".
'X-Mailer:PHP/'.phpversion( );
@mail($email_to,$email_subject,$email_message ,$headers );

echo "  !el formulario fue enviado con exito!";*/
  $name = $_POST['name'];
  //$subject = $_POST['name'];
  //$subject = $_POST['phone'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "bernardo.broscheit@gmail.com";
  $headers = "For: ".$subject;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.html");
}


 ?>