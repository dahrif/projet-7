<?php
class Calculatrice{
    private $x;
    private $y;
    private $operation;

    function __construct($a,$b,$operation) {
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
   

    // Initialisation des variables
    $x = null;
    $y = null;
    $operation = null;
    $afficheur = "";
    $solution = null;

    // Traitement

    // Récupération des variables de la page
    if(isset($_POST['x'])) $x = $_POST['x'];
    if(isset($_POST['y'])) $y = $_POST['y'];
    if(isset($_POST['operation'])) $operation = $_POST['operation'];

    // Ajouter la valeur du nombre au X ou Y
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        if($operation == null){
            if($x == null) $x = $nombre;
            else $x = floatval($x . $nombre);
        }else{
            if($y == null) $y = $nombre;
            else $y = floatval($y . $nombre);
        }
    }

    if(isset($_POST['egale'])){
        $egale = $_POST['egale'];
    
        // Calcule
        $calculatrice = new Calculatrice($x,$y,$operation);
        $solution = $calculatrice->calculer($x,$y,$operation);
      
    }
    // Affichage 
    if($solution != null) $afficheur = $solution;
    else{
        if($x != null) $afficheur = $afficheur . "$x" ;
        if($operation != null) $afficheur .= " " .$operation ." ";
        if($y != null) $afficheur .= $y;
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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype calculatrice</title>
</head>
<body>
<form action="" method="post">
    <input type="hidden" name="x" value="<?php echo $x ?>">
    <input type="hidden" name="y" value="<?php echo $y ?>">
    <input type="hidden" name="operation" value="<?php echo $operation ?>">
    <input type="text" name="afficheur" value="<?php echo $afficheur ?>">
    <input type="submit" name="nombre" value="1"  ></input>
    <input type="submit" name="nombre" value="2"  ></input>
    <input type="submit" name="nombre" value="3"  ></input>
    <input type="submit" name="operation" value="+"  ></input>
    <input type="submit" name="operation" value="-"  ></input>
    <input type="submit" name="egale" value="="  ></input>
    <input type="submit" name="init" value="C"  ></input>

</form>
    
</body>
</html>