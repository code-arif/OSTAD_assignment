<?php
//=====Multidimensional Array=====

$student_grades = [
    "Tamim" => ["Math" => 85, "English" => 92, "Science" => 78],
    "Sakib" => ["Math" => 88, "English" => 95, "Science" => 90],
    "Mahmudullah" => ["Math" => 75, "English" => 82, "Science" => 88]
];

function calculate_average_grades($student_grades) {
    
    echo "========Average======= </br>";

    foreach ($student_grades as $student => $grades) {
        $averageGrade = array_sum($grades) / count($grades);
        echo "$student: $averageGrade </br>";
    }
}

calculate_average_grades($student_grades);