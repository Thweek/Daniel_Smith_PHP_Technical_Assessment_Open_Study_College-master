<?php

require_once "../databases/cars.php";

function findCar($vehicleReg, $carDatabase){
    foreach($carDatabase as $key => $val) {
        if($val['vehicleReg'] === $vehicleReg){
            return $carDatabase[$key];
        }
    }
    return null;
}

