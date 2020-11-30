<?php

require('../modele/contact.php');
require('../manager/manager.php');

$reservation = new reservation($_POST['nom'],$_POST['message'],$_POST['mail']);
$manager = new Manager();
$manager->reservation($reservation);

?>
