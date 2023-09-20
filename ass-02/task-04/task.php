<?php
function printFibonacci($count) {
    $first = 0;
    $second = 1;

    echo $first . "</br>" . $second . "</br>";

    for ($i = 2; $i < $count; $i++) {
        $next = $first + $second;
        echo $next . "</br>";

        $first = $second;
        $second = $next;
    }
}
printFibonacci(15);
