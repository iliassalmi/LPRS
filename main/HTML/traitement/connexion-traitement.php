<?php
session_start();//session démarrer
require('../manager/manager.php');////utilisation du modele
require('../modele/connexion-class.php');//utilisation du manager

$user = new Connexion($_POST['mail'], $_POST['mdp']);//on appelle le modele connexion
$manager = new Manager();//on appelle le manager
$manager->connexion($user);
var_dump($user);
?>
