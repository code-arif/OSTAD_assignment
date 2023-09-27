<?php
//=====Array Manipulation=====

$numbers = range(1, 10);
function remove_even_numbers($numbers) {
    $odd_numbers = array();
    
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $odd_numbers[] = $number;
        }
    }
    
    echo "<pre>";
    print_r($odd_numbers);
}
remove_even_numbers($numbers);