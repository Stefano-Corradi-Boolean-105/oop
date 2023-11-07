<?php

class Membership{

  private $name;
  private $price;
  private $start_date;

  public function __construct(string $_name, float $_price, string $_date){
    $this->name = $_name;
    $this->price = $_price;
    $this->start_date = $_date;
  }

  public function getName(){
    return $this->name;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getStartDate(){
    return $this->start_date;
  }

  public function getMembershipDetail(){
    return "$this->name | $this->price | $this->start_date";
  }

}