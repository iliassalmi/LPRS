<?php
class inscription{
  private $_nom;
  private $_prenom;
  private $_mdp;
  private $_mail;

public function __construct($nom,$prenom,$mdp,$mail){
  $this->setNom($nom);
  $this->setPrenom($prenom);
  $this->setMdp($mdp);
  $this->setMail($mail);
}

public function setNom($nom){
  //if(is_string ($nom)){
$this->_nom = $nom ;
  //}
//else {
  //echo"t nul";
//}
}
public function setPrenom($prenom){
//  if(is_string ($prenom)){
$this->_prenom = $prenom ;
//  }
//else {
  //echo"t nul";
}

public function setMdp($mdp){
  //if(is_string ($nom)){
$this->_mdp = $mdp ;
  //}
//else {
  //echo"t nul";
//}
}
public function setMail($mail){
  //if(is_string ($nom)){
$this->_mail = $mail ;
  //}
//else {
  //echo"t nul";
//}
}
public function getNom(){
  return $this->_nom;
}
public function getPrenom(){
  return $this->_prenom;
}
public function getMdp(){
  return $this->_mdp;
}
public function getMail(){
  return $this->_mail;
}
}




 ?>
