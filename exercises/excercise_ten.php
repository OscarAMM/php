<?php 
function range_numbers($one, $two){
    
    $opciones = array(
        'options' => array('min_range' => 40, 'max_range' => 50)
    );

    $filter_data_one = (filter_var($one, FILTER_VALIDATE_INT, $opciones)) ? true : false;
    $filter_data_two = (filter_var($two, FILTER_VALIDATE_INT, $opciones)) ? true : false;

    if($filter_data_one === true && $filter_data_two === true){
        echo "true";
    }else{
        echo "false";
    }
}

print_r(range_numbers(45, 50));
