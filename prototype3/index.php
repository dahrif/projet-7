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
    $solution = null ;
    switch($this->operation){
        case '+' : $solution = $this->x + $this->y;
        break;
        case '-' : $solution = $this->x - $this->y;
        break;
        case '*' : $solution = $this->x + $this->y;
        break;
        case '/' : $solution = $this->x - $this->y;
        break;
    }
    return $solution;
}
}

//initialiser les variables
$x=null;
$y=null;
$operation=null;
$afficheur="";
$solution=null;


// Récupération des variables de la page
if(isset($_POST['x'])) $x=$_POST['x'];
if(isset($_POST['y'])) $y=$_POST['y'];
if(isset($_POST['operation'])) $operation = $_POST['operation'];


// Ajouter la valeur du nombre au X ou Y
if(isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    if($operation == null){
        if( $x == null) $x = $nombre ;
        else $x =floatval($x . $nombre);
    }
    else{
        if($y == null) $y=$nombre;
        else $y =floatval($y . $nombre);
    }
}


//calculer
if(isset($_POST['egale'])){
    $egale = $_POST['egale'];

$calculatrice = new calculatrice($x,$y,$operation);
$solution = $calculatrice -> calculer($x,$y,$operation);
}

if($solution != null) $afficheur = $solution;
else{
    if($x != null) $afficheur = $afficheur. "$x" ;
    if($operation != null) $afficheur .=  " ". $operation ." " ;
    if($y != null) $afficheur .= $y ;
    
}


//init
if(isset($_POST['init'])){
    $egale = $_POST['init'];
    $x=null;
    $y=null;
    $operation=null;
    $afficheur="";
    $solution=null;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Document</title>
</head>

<body>

<div class="container">

<form action="" method="post">
    <input  type="hidden" name="x" value="<?php echo $x ?>" >
    <input type="hidden" name="y" value="<?php echo $y ?>">
    <input  type="hidden" name="operation" value="<?php echo $operation ?>">
    <input readonly class="form-control form-control-lg " type="text" name="afficheur" value="<?php echo $afficheur ?>"><br>
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="1">
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="2">
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="3">
    <input class="btn btn-primary mb-3" type="submit" name="init" value="C"><br>
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="4">
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="5">
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="6">
    <input class="btn btn-primary mb-3" type="submit" name="operation" value="+"><br>
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="7">
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="8">
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="9">
    <input class="btn btn-primary mb-3" type="submit" name="operation" value="-"><br>
    <input class="btn btn-primary mb-3" type="submit" name="nombre" value="0">  
    <input class="btn btn-primary mb-3" type="submit" name="operation" value="*">
    <input class="btn btn-primary mb-3" type="submit" name="operation" value="/">
    <input class="btn btn-primary mb-3" type="submit" name="egale" value="=">
    
</form>
    </div>
</body>
</html>
