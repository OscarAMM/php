<?php 
function absolute_difference($number){
    if($number > 51){
        $difference = ($number - 51) * 3;
        return $difference;
    }else{
        $difference = $number - 51;
        return $difference;
    }
}

$data = absolute_difference(53);
echo $data;