<?php
class modifier_profils_class{//classe modification du profils avec setteur et getteur 
public $_nom;
public $_prenom;
public $_mail;
public $_mdp;


public function __construct($nom,$prenom,$mdp,$mail){
$this->setNom($nom);
$this->setPrenom($prenom);
$this->setMail($mail);
$this->setMdp($mdp);

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
