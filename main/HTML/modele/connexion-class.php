<?php

class connexion{//classe connexion avec setteur et getteur
  private $_mail;
  private $_mdp;

public function __construct($mail,$mdp){
  $this->setMail($mail);
  $this->setMdp($mdp);
}

public function setMail($mail){

$this->_mail = $mail ;

}


public function setMdp($mdp){

$this->_mdp = $mdp;

}

public function getMail(){
  return $this->_mail;
}


public function getMdp(){
  return $this->_mdp;
}
}




 ?>
