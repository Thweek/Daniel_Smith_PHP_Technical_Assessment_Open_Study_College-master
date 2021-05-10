<?php

class User {
    //Need users email
    public string $email;
    public  $basket;

    public function __construct($email){
        $this->email = $email;
        $this->basket = [];
    }

    public function addToBasket($vehicleReg){
            $this->basket[] = $vehicleReg;
    }

    public function getBasket(){
        return implode(",", $this->basket);
    }

};