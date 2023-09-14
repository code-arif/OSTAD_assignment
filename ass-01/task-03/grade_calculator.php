<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>

<body>
    <div class="main_container">
        <h2 class="heading">Grade Calculator</h2>
        <form method="post" action="">
            <input class="form_input" type="number" id="temp" name="score_01" placeholder="Enter your score" required>
            <input class="form_input" type="number" id="temp" name="score_02" placeholder="Enter your score" required>
            <input class="form_input" type="number" id="temp" name="score_03" placeholder="Enter your score" required>

            <button type="submit">Average</button>
        </form>
        <div id="result">
            <!-- PHP code for grade calculation -->
            <?php
            //condition
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $score_01 = $_POST['score_01'];
                $score_02 = $_POST['score_02'];
                $score_03 = $_POST['score_03'];

                //calculate average score
                $avg = ($score_01 + $score_02 +$score_03) / 3;

                $avg = round($avg, 2);

                //find out grade
                if($avg >= 80 && $avg <= 100){
                    $grd = 'A+';
                }else if($avg >= 70 && $avg <= 79){
                    $grd = 'A';
                }else if($avg >= 60 && $avg <= 69){
                    $grd = 'A-';
                }else if($avg >= 50 && $avg <= 59){
                    $grd = 'B';
                }else if($avg >= 40 && $avg <= 49){
                    $grd = 'C';
                }else if($avg >= 33 && $avg <= 39){
                    $grd = 'D';
                }else if($avg <= 32 && $avg >= 0){
                    $grd = 'F';
                }else {
                    $grd = 'Enter valid Input';
                }

                //print result
                echo "Your average score: $avg </br>";
                echo "Grade: $grd";
            }
            ?>
        </div>
    </div>

</body>

</html>