<?php
class modifier_profils_class{
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
//if(is_string ($nom)){
$this->_nom = $nom ;

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
//echo".";
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
