<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Recuperation de données des page suivantes //
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';

Class Manager{
  public function suppression($new){
          $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

          $req = $bdd->prepare('DELETE FROM utilisateur WHERE mail= :mail');
          $a = $req->execute(array('mail'=>$new->getMail()));


          if($a == true) {
            header("location: ../vue/dashboard.php");
        }
           else {
             header("location: ../../../dashboardss.php");
          }
}


public function connexion($con){

        $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');


  $red = $bdd->prepare('SELECT * FROM utilisateur WHERE mail=:mail AND mdp=:mdp ');
  $red->execute(array('mail'=> $con->getMail(), 'mdp'=>md5($con->getMdp())));
  $c = $red->fetch();

  var_dump($con);
  if ($c == true) {

    $_SESSION['id'] = $c['id'];
      $_SESSION['role'] = $c['role'];
     header('Location: ../vue/db-profile.php');
  }
  else {
    echo "Mauvais login veuillez réessayer !";

     header('Location:../../../indexx.html');
  }

  }

  public function inscription($new){
          $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

          $req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, mdp, mail) VALUES(:nom, :prenom, :mdp, :mail)');
          $a = $req->execute(array('nom'=>$new->getNom(), 'prenom'=>$new->getPrenom(), 'mdp'=>md5($new->getMdp()), 'mail'=>$new->getMail()));
          $b = $req->fetch();


          $mail = new PHPMailer();
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'irisitalianna75@gmail.com';                     // SMTP username
          $mail->Password   = 'iris75000';                               // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
          $mail->Port       = 587;                                    // TCP port to connect to

          //Recipients
          $mail->setFrom('irisitalianna75@gmail.com', 'Nouvelle demande de contact');
          $mail->addAddress($new->getMail(), 'Contact');     // Add a recipient //Recipients
           $mail->Body    =   'Bonjour bienvenue';
          if(!$mail->Send()) {
            echo '<body onLoad="alert(\'Erreur\')">';
          echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';
          } else {
             header("location: ../../../index.php?key=1234");
          }
}


public function mdp($new){
        $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');


        if(isset($_POST['email']))
        {


          $token = uniqid();
          $url = "http://localhost/LPRS/main/HTML/token/token.php/token?token=$token";

          $message = "Bonjour, voici votre lien pour la réinitialisation : $url";
          $headers = 'Content-Type: text/plain; charset="utf-8"'." ";


          $mail = new PHPMailer();
          $mail->isSMTP();                                            // Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
          $mail->Username   = 'irisitalianna75@gmail.com';                     // SMTP username
          $mail->Password   = 'iris75000';                               // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
          $mail->Port       = 587;                                    // TCP port to connect to

          //Recipients
          $mail->setFrom('irisitalianna75@gmail.com', 'Nouvelle demande de contact');
          $mail->addAddress($new->getEmail(), 'Contact');     // Add a recipient //Recipients
           $mail->Body    =  "http://localhost/LPRS/main/HTML/token/token.php/token?token=$token";
           $sql = "UPDATE utilisateur SET token = ? WHERE mail = ?";
           $stmt = $bdd->prepare($sql);
           $stmt->execute([$token, $_POST['email']]);
           echo 'Mail envoyé!';
          if(!$mail->Send()) {
            echo '<body onLoad="alert(\'Erreur\')">';
          echo '<meta http-equiv="refresh" content="0;URL=../View/contact.php">';
          } else {
             header("location: ../../../index.php");
          }



        }

}


    public function modification_user($user,$id)
    	    {

            $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

    	        $request = $bdd->prepare(" UPDATE utilisateur SET nom = :nom, prenom = :prenom, mail = :mail, mdp = :mdp WHERE id = '$id'");
    	       $a= $request->execute(array(
    	            'nom' => $user->getNom(),
    	            'prenom' => $user->getPrenom(),
    	            'mail' => $user->getMail(),
    	            'mdp' => $user->getMdp(),
    	        ));


    	           header('Location: ../vue/db-profile.php');
    	    }




          public function offre($stage){
                  $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

                  $req = $bdd->prepare('INSERT INTO evenement(nom, description, duree, localisation) VALUES(:nom, :description, :duree, :localisation)');
                  $a = $req->execute(array('nom'=>$stage->getNom(), 'description'=>$stage->getDescription(), 'duree'=>$stage->getDuree(), 'localisation'=>$stage->getLocalisation()));
                  $b = $req->fetch();

          if ($b == true) {
                  //  $_SESSION['id'] = $b['id'];

                    header('Location: ../index.php');


                  }
                  else {
                   echo "Mauvais login veuillez réessayer !";
                  header('Location:../index.php');
                  }
            }

    public function afficheUser($id){

$bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');
$red = $bdd->prepare('SELECT * FROM utilisateur WHERE id=:id');
$red->execute(array('id'=>$_SESSION['id']));
$c = $red->fetch();
  return $c;

}

public function afficheOffre($id){

$bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');
$red = $bdd->prepare('SELECT * FROM evenement WHERE id=:id');
$red->execute(array('id'=>$_SESSION['id']));
$c = $red->fetch();
return $c;

}



public function reservation($k){
        $bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

        $req = $bdd->prepare('INSERT INTO contact(nom, message, mail) VALUES(:nom, :message, :mail)');
        $a = $req->execute(array('nom'=>$k->getNom(),'message'=>$k->getMessage(),
        'mail'=>$k->getMail()));
        header('Location:../../../index.php');
    }
}



?>
