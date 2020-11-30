<?php

require('../modele/mdp-class.php');
require('../manager/manager.php');

$mdp = new mdp($_POST['email']);
$manager=new Manager();
$manager->mdp($mdp);



?>
