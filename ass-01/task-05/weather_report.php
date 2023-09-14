<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Calculator</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>

<body>
    <div class="main_container">
        <h2 class="heading">Weather Calculator</h2>
        <form method="post" action="">
            <input class="form_input" type="number" name="temp" placeholder="Enter your temperature in &deg;C" required>
            <button type="submit"> Check </button>
        </form>
        <div id="result">
            <?php
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $temp = $_POST['temp'];

                    //check temp
                    if($temp < 0){
                        echo"Woh!! it's freezing!";
                    }else if($temp >= 0 && $temp < 14){
                        echo "The weather is cool";
                    }else if($temp >= 14 && $temp < 25){
                        echo "The weather is warm";
                    }else{
                        echo "The weather is hot!";
                    }
                }
            ?>
        </div>
    </div>

</body>

</html>