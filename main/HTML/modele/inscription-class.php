<?php
class inscription{//classe inscription avec setteur et getteur
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

$this->_nom = $nom ;

}
public function setPrenom($prenom){

$this->_prenom = $prenom ;

}

public function setMdp($mdp){

$this->_mdp = $mdp ;

}
public function setMail($mail){
  $this->_mail = $mail ;

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
