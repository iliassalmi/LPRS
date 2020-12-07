<?php



require('../modele/model-suppr.php');//on appelle le modele
require('../manager/manager.php');//on appelle le manager

$suppression = new suppression($_POST['mail']);//on appelle le modele qui gere la suppression de l'utilisateur
$manager=new Manager();//on appelle le manager
$manager->suppression($suppression);



?>
