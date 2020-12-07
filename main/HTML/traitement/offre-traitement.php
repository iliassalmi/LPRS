<?php

require('../modele/offre-class.php');// on appelle le modele
require('../manager/manager.php');//on appelle le manager

$offre = new offre($_POST['nom'], $_POST['description'], $_POST['duree'], $_POST['localisation']);//on appelle le modele offre
$manager=new Manager();//on appelle le manager
$manager->offre($offre);


?>
