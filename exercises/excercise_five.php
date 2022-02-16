<?php
function result_thirty($number_one, $number_two){
    $verification_data = $number_one + $number_two;
    if($verification_data == 30 or $number_one == 30 or $number_two == 30){
        return "true";
    }else{
        return "false";
    }
}
print_r (result_thirty(30, 1));