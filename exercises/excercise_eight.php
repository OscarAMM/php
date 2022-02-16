<?php
function max_number($number_one, $number_two, $number_three){
    //asign the numbers into array
    $array = [$number_one, $number_two, $number_three];
    //gets the max number of a given array
    $max_value = max($array);

    return $max_value;
}

print_r(max_number(5, 40, 1));