<?php
session_start();
require('../manager/manager.php');
require('../modele/connexion-class.php');

$user = new Connexion($_POST['mail'], $_POST['mdp']);
$manager = new Manager();
$manager->connexion($user);
var_dump($user);
?>
