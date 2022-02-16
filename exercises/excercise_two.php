<?php
function missing_numbers($data)
{
    $array_range = range($data[0], max($data));

    return array_diff($array_range, $data);
}

$number_array = [1,2,6,7];

print_r(missing_numbers($number_array));
