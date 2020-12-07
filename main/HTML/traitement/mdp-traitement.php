<?php

require('../modele/mdp-class.php');//on appelle le modele
require('../manager/manager.php');//on appelle le manager

$mdp = new mdp($_POST['email']);//on appelle le modele mdp
$manager=new Manager();//on appelle le manager
$manager->mdp($mdp);



?>
