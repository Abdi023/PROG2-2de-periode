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

$number = array('ali','ahmed',49);

print_r($number);
// echo $number[1] . "<br>";

echo '<br>';

$names = array('first_name' => 'abdi' , 'last_name' => 'abdikarim');

print_r($names);

echo '<br>';

echo $names['first_name'] . " " . $names['last_name'];

?>
</body>
</html>