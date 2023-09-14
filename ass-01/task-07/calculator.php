<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>

<body>
    <div class="container">
        <h2 class="heading">Basic Calculator</h2>
        <form method="post" action="">
            <input type="number" step="0.01" name="number_01" placeholder="Enter first number" required><br>
            <input type="number" step="0.01" name="number_02" placeholder="Enter second number" required><br>
            <select name="operation">
                <option value="add">addition</option>
                <option value="subtract">subtraction</option>
                <option value="multiply">multiplication</option>
                <option value="divide">Division</option>
                <option value="binary">binary</option>
                <option value="octal">Octal</option>
                <option value="hexadecimal">hexadecimal</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $number_01 = $_POST['number_01'];
                $number_02 = $_POST['number_02'];
                $operation = $_POST['operation'];

                // Switch case
                switch ($operation) {
                    // Addition
                    case 'add':
                        $result = $number_01 + $number_02;
                        echo "Addition: $result";
                        break;

                    // Subtraction
                    case 'subtract':
                        $result = $number_01 - $number_02;
                        echo "Subtract: $result";
                        break;

                    // Multiplication
                    case 'multiply':
                        $result = $number_01 * $number_02;
                        echo "Multiply: $result";
                        break;

                    // Division
                    case 'divide':
                        if ($number_02 != 0) {
                            $result = $number_01 / $number_02;
                            echo "Divide: $result";
                        } else {
                            echo "Result: Infinity";
                        }
                        break;

                    // Binary
                    case 'binary':
                        echo "Binary: " . decbin($number_01);
                        break;

                    // Octal
                    case 'octal':
                        echo "Octal: " . decoct($number_01);
                        break;

                    // Hexadecimal
                    case 'hexadecimal':
                        echo "Hexadecimal: " . dechex($number_01);
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
