<?php

require('../modele/inscription-class.php');//utilisation du modele
require('../manager/manager.php');//utilisation du manager

$inscription = new inscription($_POST['nom'], $_POST['prenom'], $_POST['mdp'], $_POST['mail']);//on appelle le modele Inscription
$manager=new Manager();//on appelle le manager
$manager->inscription($inscription);



?>
