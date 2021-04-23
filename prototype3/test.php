<?php 
class Calculatrice {
    private $x;
    private $y;
    private $operation;

    function __construct($a,$b,$operation){
        $this->x = $a;
        $this->y = $b;
        $this->operation = $operation;
    }

    function calculer(){
        $solution = null;
        switch($this->operation){
            case"+" : $solution = $this->x + $this->y;
            break;
            case"-" : $solution = $this->x - $this->y;
            break;
        }
        return $solution;
    }
}

    $x = null;
    $y = null;
    $operation = null;
    $afficheur = "";
    $solution = null;

if(isset($_POST['x'])) $x = $_POST['x'];
if(isset($_POST['y'])) $y = $_POST['y'];
if(isset($_POST['operation'])) $operation = $_POST['operation'];


if(isset($_POST['number'])){
    $number = $_POST['number'];
    if($operation == null){
        if($x == null) $x = $number;
        else $x = floatval($x . $number);
    }
    else{
        if($y == null) $y = $nubmer;
        else $y = floatval($y . $number);
    }
} 

if(isset($_POST['egale'])){
    $egale = $_POST['egale'];

    $calculatrice = new calculatrice($x,$y,$operation);
    $solution = $calculatrice->calculer($x,$y,$operation);
}

if($solution != null) $afficheur = $solution;
else{
    if($x != null) $afficheur = $afficheur ."$x";
    if($operation != null) $afficheur .= " " .$operation ." " ;
    if($y != null) $afficheur .= $y ;
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
    <input type="text" name="x" value="<?php echo $x ?>">
    <input type="text" name="y" value="<?php echo $y ?>">
    <input type="text" name="operation" value="<?php echo $operation ?>">
    <input type="text" name="afficheur" value="<?php echo $afficheur ?>">
    <input type="submit" namue="number" value="1">
    <input type="submit" namue="number" value="2">
    <input type="submit" namue="operation" value="+">
    <input type="submit" namue="egale" value="=">
    <input type="submit" namue="init" value="C">
    </form>
</body>
</html>