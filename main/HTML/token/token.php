<?php

$bdd = new PDO('mysql:host=localhost;dbname=lprs;charset=utf8','root','');

if(isset($_GET['token']) && $_GET['token'] != '')
{
  $stmt = $bdd->prepare('SELECT mail FROM utilisateur WHERE token = ?');
  $stmt->execute([$_GET['token']]);
  $email = $stmt->fetchColumn();

  if($email)
  {
    ?>





      <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>Mdp</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <body>

  <div class="wrapper">
  <div class="inner">
  <form method="post">
  <h3>Nouveau mot de passe</h3>
  <p>Validez votre nouveau mot de passe.</p>


            <label class="form-group">
              <input type="password" id="myInput" name="newPassword" class="form-control" value="" required>
              <span for="">Mot de passe</span>
              <span class="border"></span>
<br>


            </label>

  <center>

          <button type="submit" name="Confirmer">Valider
 </center>
  </button>

            <?php
          }
        }


          if(isset($_POST['newPassword']))
          {
            $hashedPassword = md5($_POST['newPassword']);
            $sql = "UPDATE utilisateur SET mdp = ?, token = NULL WHERE mail = ?";
            $stmt = $bdd->prepare($sql);
            $stmt->execute([$hashedPassword, $email]);
            echo "Mot de passe modifié avec succès !";
          }
          else
          {
             echo 'Erreur.';
          }





         ?>

  </form>
  </div>
  </div>

  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
  </html>
