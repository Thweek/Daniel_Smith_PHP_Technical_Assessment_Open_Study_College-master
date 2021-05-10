<?php

function add($initialPrice, $checkoutMethod){
    switch($checkoutMethod){
        case 'Pay in Full':
            return number_format($initialPrice, 2, ".", ",");
            break;
        case 'Finance':
            return number_format($initialPrice+50, 2, ".", ",");
            break;
        case 'Direct Debit':
            return number_format($initialPrice+100, 2, ".", ",");
            break;
        default:
            echo "Please choose a payment method.";
    }
}