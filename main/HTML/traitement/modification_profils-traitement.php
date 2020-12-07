<?php
session_start();
require_once('../modele/modification_profils_class.php');//on appelle le modele
require_once('../manager/manager.php');//on appelle le manager

$modification_profils_class = new modifier_profils_class($_POST['nom'], $_POST['prenom'], $_POST['mdp'], $_POST['mail']);//on appelle le modele de modification d'utilisateur
$manager = new Manager();
$manager->modification_user($modification_profils_class,$_SESSION['id']);







?>
