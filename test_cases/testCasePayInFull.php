<?php
require_once "../classes/User.php";
require_once "../databases/cars.php";
require_once "../functions/findCar.php";
require_once "../functions/add.php";
require_once "../functions/processCheckout.php";

echo "Welcome to Dan's Deals".'<br>'.'<br>';

//Created user
    $user = new User("person@blueyonder.co.uk");

//Chose the car with registration FD5 SD2
    $registrationNumber = "JYR 72P";
    $user->addToBasket($registrationNumber);

//Chosen checkoutMethod
    $checkoutMethod = "Pay in Full";

//Checking if anything added to basket
    if($user->getBasket() !== ""){

        //Calculating new cost with payment method
        $newPrice = add(findCar($registrationNumber, $carDatabase)['price'], $checkoutMethod);

        //Message confirming price
        echo "The car with registration number $registrationNumber is £$newPrice with the $checkoutMethod payment method.".'<br>'.'<br>';
        
        //Confirming whether payment method succeeded
        echo processCheckout($checkoutMethod)[1].'<br>'.'<br>';

        //Message letting user know order was completed
        echo "Thank you $user->email your order completed successfully, thank you for shopping at Dan's Deals.".'<br>'.'<br>';
    }
?>