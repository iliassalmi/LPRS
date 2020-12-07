<?php

require('../modele/contact.php');////utilisation du modele
require('../manager/manager.php');//utilisation du manager

$reservation = new reservation($_POST['nom'],$_POST['message'],$_POST['mail']);//on appelle le modele reservation
$manager = new Manager();//on appelle le manager
$manager->reservation($reservation);

?>
