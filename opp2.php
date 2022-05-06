<?php

class User{
  
  private $firstName;
  public $lastName;
  
  public function hello(){
    return "hello ".$this->firstName."\n";
  }
  
  public function setFirstName($name){
    $this->firstName = $name;
  }
  
  public function getFirstName(){
    return $this->firstName;
  }
}

$user1 = new User();
$user1->setFirstName("Alan");
echo $user1->getFirstName();
//$person = new User();
//$person->firstName = "Alan";
//$person->$astName = "Soyusa";

//echo $person-hello();