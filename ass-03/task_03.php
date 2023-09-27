<?php
//======Array Sorting======

$grades = array(85, 92, 78, 88, 95);
function grades_descending($grades) {
    rsort($grades);
    echo "<pre>";
    print_r($grades);
}
grades_descending($grades);
