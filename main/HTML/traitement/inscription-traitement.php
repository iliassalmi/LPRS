<?php

require('../modele/inscription-class.php');
require('../manager/manager.php');

$inscription = new inscription($_POST['nom'], $_POST['prenom'], $_POST['mdp'], $_POST['mail']);
$manager=new Manager();
$manager->inscription($inscription);



?>
