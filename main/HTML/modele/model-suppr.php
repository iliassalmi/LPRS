<?php


class suppression{//classe suppression avec setteur et getteur 
  private $_mail;

  public function __construct($mail){
    $this->setMail($mail);
  }

  public function setMail($mail){
  $this->_mail = $mail ;
  }
  public function getMail(){
    return $this->_mail;
  }
}

?>
