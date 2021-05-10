<?php
    function processCheckout($inputs){
        switch($inputs){
            case 'Pay in Full':
                return [true, "Pay in full successful!"];
                break;
            case 'Finance':
                return [true, "Our partnered finance provider will set up monthly payments for the car."];
                break;
            case 'Direct Debit':
                return [true, "Direct debit successfully set up!"];
                break;
            default:
                echo "Please choose a payment method.";
        }
    };