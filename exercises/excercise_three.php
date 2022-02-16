<?php
function sum_digits($num_one, $num_two){
    if($num_one === $num_two){
        $triple_sum = ($num_one + $num_two) * 3;

        return $triple_sum;
    }else{
        $sum = $num_one + $num_two;

        return $sum;
    }
}

print_r(sum_digits(2,2));