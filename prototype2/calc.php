<?php 
function calculer($x,$y,$operation){
    $solution=null;
    switch($operation){
        case'+': $solution = $x + $y;
        break;
        case '-': $solution = $x - $y;
        break;
    }
    return $solution;
}

$x = null;
$y = null;
$operation = null;
$solution = null;
$affichage = '';

if(isset($_POST['x'])){
    $x = $_POST['x'];}

if(isset($_POST['y'])){
    $y = $_POST['y'];}

if(isset($_POST['operation'])){
    $operation = $_POST['operation'];}


if(isset($_POST['number'])){
    $number =  $_POST['number'];
    if($operation = null){
        if($x = null){ $x = $number;}
        else{$x = floatval($x . $number);}}
}
else{
    if($y = null){ $y = $number;}
        else{$y = floatval($y . $number);}}


if (isset($_POST['egale'])){
    $egale = $_POST['egale'];
}

$solution = calculer($x,$y,$operation);

if($solution != null){
    $affichage = $solution;
} else{
    
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="hidden" name="x" value="<?php echo $x ?>">
    <input type="hidden" name="y" value="<?php echo $y ?>">
    <input type="hidden" name="operation" value="<?php echo $operation ?>">
    <input type="text" name="affichage" value="<?php echo $affichage ?>">
    <input type="button" name="number" value="1">
    <input type="button" name="number" value="2">
    <input type="button" name="number" value="3">
    <input type="button" name="operation" value="+">
    <input type="button" name="operation" value="-">
    <input type="button" name="egale" value="=">
    </form>
</body>
</html>