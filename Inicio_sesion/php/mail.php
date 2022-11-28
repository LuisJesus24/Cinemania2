<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$codigo = rand(1000,9999);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'Luis.jesus.g.a.14@gmail.com';                     //SMTP username
    $mail->Password   = 'ektrkewmbjihgcma';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('Luis.jesus.g.a.14@gmail.com', 'Verifica tu correo');
    $mail->addAddress($email, 'verifica tu correo');     //Add a recipient

    //Content
    $mail->isHTML(true);         
                            //Set email format to HTML
    $mail->Subject = 'Confirmacion de reservacion cinemania';
    $mail->Body    = '<html>
    <head>
        <meta charset="UTF8" />
      <title>Verificacion de correo</title>
    </head>
    <body>
      <p>tu codigo de verificacion es!:</p>
      <p> <a 
         href="http://localhost/cinemania/Inicio_sesion/confirm.php?email='.$email.'">
        Verificar cuenta </a> 
        </p>
     <h2>'.$codigo.'</h2>
      
    </body>
    </html>
    ';
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo 'Message has been sent';
    $enviado=false;
    if($mail->send()){
          $enviado=true;
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}