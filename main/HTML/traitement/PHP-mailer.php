<?php
public function Mail($donnee){
$mail = new PHPMailer();
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'iliassalmiii@outlook.com';                     // SMTP username
$mail->Password   = '4d2d909e';                               // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port       = 587;                                    // TCP port to connect to

//Recipients
$mail->setFrom('iliassalmiii@outlook.com', 'Nouvelle demande de contact');
$mail->addAddress($donnee->getemail(), 'Contact');     // Add a recipient //Recipients
 $mail->Body    =   $donnee->getmessage();
if(!$mail->Send()) {
  echo '<body onLoad="alert(\'Erreur\')">';
echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';
} else {
   header("location: ../../index.php");
}
?>
