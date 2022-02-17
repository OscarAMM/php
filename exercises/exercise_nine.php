<?php
function nearest_value($one, $two){
    $val = abs($one - 100);
    $val_two = abs($two - 100);

    if($one === $two){
        return 0; 
    }else{
        if($val < $val_two){

            return $one;
        }else{
            return $two;
        }

    }

}

print_r(nearest_value(80, 20));