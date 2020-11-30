<?php
class reservation{
  private $_nom;
  private $_message;
  private $_mail;


public function __construct($nom,$message,$mail){
  $this->setNom($nom);
  $this->setMessage($message);
  $this->setMail($mail);

}

public function setNom($nom){
//  if(empty($nom)){

//  }
//else {
  $this->_nom = $nom ;

}

public function setMessage($message){
//  if(empty($message)){

//  }
//else {
$this->_message = $message ;
}

public function setMail($mail){
  //if(empty($mail)){

  //}
//else {
  $this->_mail = $mail ;
}

public function getNom(){
  return $this->_nom;
}
public function getMail(){
  return $this->_mail;
}
public function getMessage(){
  return $this->_message;
}

}




 ?>
