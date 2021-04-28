<?php 
class Calculatrice{
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
            case "+" : $solution = $this->x + $this->y;
                break;
            case "-" : $solution = $this->x - $this->y;
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
    }else{
        if($y == null) $y = $number;
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


if(isset($_POST['init'])){
    $init = $_POST['init'];
    $x = null;
    $y = null;
    $operation = null;
    $afficheur = "";
    $solution = null;

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
<div class="container">
    <form class="form" action="" method="post">
    <input class="" type="text" name="x" value="<?php echo $x ?>">
    <input class="" type="text" name="y" value="<?php echo $y ?>">
    <input class="" type="text" name="operation" value="<?php echo $operation ?>">
    <input class="" type="text" name="afficheur" value="<?php echo $afficheur ?>">
    <input class="" type="submit" name="number" value="1"></input>
    <input class="" type="submit" name="number" value="2"></input>
    <input class="" type="submit" name="operation" value="+"></input>
    <input class="" type="submit" name="operation" value="-"></input>
    <input class="" type="submit" name="egale" value="="></input>
    <input class="" type="submit" name="init" value="C"></input>
    </form>
</div>
</body>
</html>