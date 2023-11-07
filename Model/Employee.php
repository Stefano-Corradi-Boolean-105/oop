<?php


class Employee extends User {

  public $level;

  public function __construct(string $_name, string $lastname, int $_age, Address $_address, int $_level){

    // eridito il costruttore del genitore passandogli i parametri
    parent::__construct( $_name,  $lastname,  $_age,  $_address);

    $this->level = $_level; 

    $this->setDiscount();
  }

  public function setDiscount(){
    if($this->age > 65){
      $this->discount = 50;
    }else{
      $this->discount = $this->level * 10;
    }
  }

}