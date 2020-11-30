<?php

require('../modele/offre-class.php');
require('../manager/manager.php');

$offre = new offre($_POST['nom'], $_POST['description'], $_POST['duree'], $_POST['localisation']);
$manager=new Manager();
$manager->offre($offre);


?>
