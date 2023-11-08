<?php

class User{
  public $name;
  public $lastname;
  public $discount = 0;
  public $address;
  protected $age;
  private $email;

  public function __construct(string $_name, string $lastname, int $_age, Address $_address){
    if(empty($_name) || empty($lastname) || empty($_age) ){
      throw new Exception('Dati non completi');
    }
    $this->name = $_name;
    $this->lastname = $lastname;
    $this->address = $_address;
    $this->setAge($_age);
  }

  /// SETTER ///////////////////////////

  public function setEmail($email){
    if($this->checkValidMail($email)){
      $this->email = $email;
    }else{
      throw new Exception('L\'indirizzo email ' . $email . ' non è valido');
    }
  }


  public function setAge($_age){
    if(is_numeric($_age) && $_age > 0 && $_age < 120){
      $this->age = $_age;
      $this->setDiscount();
    }else{
      throw new Exception('L\'età deve essere compresa tra 0 e 120');
    }   
  }

  public function setDiscount(){
    if($this->age > 65){
      $this->discount = 15;
    }
  }

  /// GETTER ///////////////////////////
  public function getFullName(){
    return "$this->name $this->lastname";
  }

  public function getAge(){
    return $this->age;
  }

  public function getEmail(){
    return $this->email;
  }

  public function getUserInfo(){
    return "Name: $this->name, Lastname: $this->lastname, Age: $this->age";
  }


  /// STATIC ////////////////////////

  public static function sayHello($person){
    return 'Ciao ' . $person;
  }

  /// UTILS ////////////

  private function checkValidMail($email){
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
  }

}