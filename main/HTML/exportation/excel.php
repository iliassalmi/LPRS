<?php
try{
  $dbco = new PDO('mysql:host=localhost;dbname=lprs; charset=utf8','root','');
  $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM utilisateur";
  $sth = $dbco->prepare($sql);
  $sth->execute();

  $newReservations = $sth->fetchAll();

  $excel = "";
  $excel .=  "ID\tNom\tPrenom\tMdp\tMail\tRole\tToken\n";

  foreach($newReservations as $row) {
      $excel .= "$row[id]\t$row[nom]\t$row[prenom]\t$row[mdp]\t$row[mail]\t$row[role]\t$row[token]\n";
  }

  header("Content-type: application/vnd.ms-excel");
  header("Content-disposition: attachment; filename=liste-compte.xls");

  print $excel;
  exit;
           }
           catch(PDOException $e){
               echo "Erreur : " . $e->getMessage();
           }
?>
