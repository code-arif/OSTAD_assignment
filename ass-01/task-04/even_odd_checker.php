<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>

<body>
    <div class="main_container">
        <h2 class="heading">Even Odd Check</h2>
        <form method="post" action="">
            <input class="form_input" type="number" id="number" name="number" placeholder="Enter your number" required>
            <button type="submit"> Check </button>
        </form>
        <div id="result">
            <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $number = $_POST['number'];

                    //check
                    if($number % 2 == 0) //This line checks if the number is divisible by 2. if it is...
                    {
                        echo"$number is even";
                    }else{
                        echo "$number is odd";
                    }
                }
            ?>
        </div>
    </div>

</body>

</html>