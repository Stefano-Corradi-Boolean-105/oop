<?php

class PremiumUser extends User{

  public $membership;

  public function __construct(string $_name, string $lastname, int $_age, Address $_address, Membership $_membership){

    parent::__construct( $_name,  $lastname,  $_age,  $_address);

    $this->membership = $_membership;

  }

  public function getUserInfo(){
    $user_info = parent::getUserInfo();
    return $user_info. ", Membership: " .$this->membership->getMembershipDetail();
  }

}