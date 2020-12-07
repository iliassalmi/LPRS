<?php
class offre{//classe pour les evenements avec setteur et getteur
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

$this->_nom = $nom ;

}
public function setDescription($description){

$this->_description = $description ;

}

public function setDuree($duree){

$this->_duree = $duree ;

}
public function setLocalisation($localisation){

$this->_localisation = $localisation ;

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
