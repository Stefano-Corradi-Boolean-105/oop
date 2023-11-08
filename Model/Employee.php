<?php


class Employee extends User {

  use Position;

  public $level;

  public function __construct(string $_name, string $lastname, int $_age, Address $_address, int $_level, float $_lat = null, float $_lng = null) {

    // eridito il costruttore del genitore passandogli i parametri
    parent::__construct( $_name,  $lastname,  $_age,  $_address);

    $this->level = $_level; 

    $this->lat = $_lat;
    $this->lng = $_lng;

    $this->setDiscount();

  }

  public function setDiscount(){
    if($this->age > 65){
      $this->discount = 50;
    }else{
      $this->discount = $this->level * 10;
    }
  }

  public function getUserInfo(){
    $user_info = parent::getUserInfo();
    return $user_info. ", Level: $this->level";
  }

}