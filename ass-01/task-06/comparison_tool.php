<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>

<body>
    <div class="main_container">
        <h2 class="heading">Comparison Tool</h2>
        <form method="post" action="">
            <input class="form_input" type="number" name="number_01" placeholder="Enter your first number" required>
            <input class="form_input" type="number" name="number_02" placeholder="Enter your second number" required>

            <button type="submit">Compare</button>
        </form>
        <div id="result">
            <!-- PHP -->
            <?php
            //condition
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                $number_01 = $_POST['number_01'];
                $number_02 = $_POST['number_02'];

                //find out large number with ternary operator
                $largeNumber = ($number_01 == $number_02) ? "Two numbers are equal": (($number_01 > $number_02) ? "$number_01 is larger than $number_02" : "$number_02 is larger than $number_01");

                echo $largeNumber;
            }
            ?>
        </div>
    </div>

</body>

</html>