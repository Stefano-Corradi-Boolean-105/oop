<?php

class Address{

  public $street;
  public $city;
  public $postcode;
  public static $country = 'Italy';

  public function __construct($_street, $_city, $_postcode){
    $this->street = $_street;
    $this->city = $_city;
    $this->postcode = $_postcode;
  }

  public function getFullAddress(){
    return "$this->street, $this->postcode $this->city";
  }

}