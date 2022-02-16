<?php
function if_string($string){
    $word = "if";
    
    if(strpos($string, $word) !== false){
        return $new_string = "if ". $string;
    }else{
        return $string;
    }
}
print_r(if_string("if this"));

