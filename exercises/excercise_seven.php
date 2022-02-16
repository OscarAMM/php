<?php
function range_numbers($n_one, $n_two, $n_three){
    $numbers = [$n_one, $n_two, $n_three];
    foreach ($numbers as $in) {
        if($in >= 20 && $in <= 50){
              echo  " Number: ".$in . "Status: true";
        }else{
             echo  " Number: ". $in . "Status: false ";
        }
    }
}

echo range_numbers(3,4,40);