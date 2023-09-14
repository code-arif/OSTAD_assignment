<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Temperature</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>

<body>
    <div class="main_container">
        <h2 class="heading">Temperature Conversion</h2>
        <form method="post" action="" onsubmit="return validateForm();">
            <input class="form_input" type="text" id="temp" name="temp" placeholder="Enter Temperature" required>
            <select class="form_input" name="conversion" required>
                <option value="c_f">Celsius to Fahrenheit</option>
                <option value="f_c">Fahrenheit to Celsius</option>
                <option value="c_k">Celsius to Kelvin</option>
                <option value="k_c">Kelvin to Celsius</option>
                <option value="f_k">Fahrenheit to Kelvin</option>
                <option value="k_f">Kelvin to Fahrenheit</option>
            </select>
            <button type="submit">Convert</button>
        </form>
        <div id="result">
            <!-- PHP code for calculation -->
            <?php
            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                $temp = $_POST['temp'];
                $conversion = $_POST['conversion'];

                // Check if the input temperature is numeric
                if (is_numeric($temp)) {
                    if ($conversion == 'c_f') {
                        $result = ($temp * 9/5) + 32;
                        echo "$result &deg;F";
                    } else if ($conversion == 'f_c') {
                        $result = ($temp - 32) * 5/9;
                        echo "$result &deg;C";
                    } else if ($conversion == 'c_k') {
                        $result = $temp + 273.15;
                        echo "$result Kelvin";
                    } else if ($conversion ==  'k_c') {
                        $result = $temp - 273.15;
                        echo "$result &deg;C";
                    }else if ($conversion ==  'f_k') {
                        $result = ($temp - 273.15) * 9/5 +32;
                        echo "$result K";
                    }else if ($conversion ==  'k_f') {
                        $result = ($temp - 32) * 5/9 + 273.15;
                        echo "$result &deg;F";
                    }else {
                        echo "Please select a valid conversion type";
                    }
                } else {
                    echo "Please enter a valid numeric temperature";
                }
            }
            ?>
        </div>
    </div>


    <!-- prevent false data -->
    <script>
        function validateForm() {
            var tempInput = document.getElementById("temp").value;
            if (isNaN(tempInput)) {
                alert("Please enter a valid numeric temperature");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>