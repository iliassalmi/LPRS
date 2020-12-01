<?php



require('../modele/model-suppr.php');
require('../manager/manager.php');

$suppression = new suppression($_POST['mail']);
$manager=new Manager();
$manager->suppression($suppression);



?>
