<?php
class offre{
  private $_nom;
  private $_description;
  private $_duree;
  private $_localisation;

public function __construct($nom,$description,$duree,$localisation){
  $this->setNom($nom);
  $this->setDescription($description);
  $this->setDuree($duree);
  $this->setLocalisation($localisation);
}

public function setNom($nom){
  //if(is_string ($nom)){
$this->_nom = $nom ;
  //}
//else {
  //echo"t nul";
//}
}
public function setDescription($description){
//  if(is_string ($description)){
$this->_description = $description ;
//  }
//else {
  //echo"t nul";
}

public function setDuree($duree){
  //if(is_string ($duree)){
$this->_duree = $duree ;
  //}
//else {
  //echo"t nul";
//}
}
public function setLocalisation($localisation){
  //if(is_string ($localisation)){
$this->_localisation = $localisation ;
  //}
//else {
  //echo"t nul";
//}
}
public function getNom(){
  return $this->_nom;
}
public function getDescription(){
  return $this->_description;
}
public function getDuree(){
  return $this->_duree;
}
public function getLocalisation(){
  return $this->_localisation;
}
}




 ?>
