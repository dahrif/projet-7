<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="number1"><br>
    <input type="text" name="number2"><br>
    <input type="submit" name="addition" value="addition"><br>
    
    <?php 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST ["number1"];
    $num2 = $_POST ["number2"];
    
        echo $num1 + $num2;
 }
    ?>
</body>
</html>