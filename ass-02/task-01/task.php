<?php
//=============task-1.1=================
//print even numbers using a for loop
function printEvenNumbers($start, $end, $step) {
    if ($start % 2 != 0) {
        $start += 1; //make it even.
    }

    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . "</br>";
    }
}

//print even numbers
printEvenNumbers(1, 20, 2);


//==============task-1.2=================
//print even numbers using a while loop
function printEvenNumbersWhile($start, $end, $step) {
    if ($start % 2 != 0) {
        $start += 1; //make it even.
    }

    while ($start <= $end) {
        echo $start . "</br>";
        $start += $step;
    }
}
printEvenNumbersWhile(1, 20, 2);

//================task-1.3================
//print even numbers using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    if ($start % 2 != 0) {
        $start += 1; //make it even.
    }

    do {
        echo $start . "</br>";
        $start += $step;
    } while ($start <= $end);
}
printEvenNumbersDoWhile(1, 20, 2);

