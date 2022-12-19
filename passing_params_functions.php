<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

function greeting($message){
    echo $message;

}

greeting("hello student");

function calculate($number1, $number2, $number3){
    $sum = $number1 * $number2 + $number3;
    echo "<h2> $sum </h2>";
}

calculate(12,24, 90);

    ?>
</body>
</html>