
<?php
require "class.php";

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

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="" method="post">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="row header">
            <div class="col-md-8">
              <p>Calculator</p>
            </div>
          </div>
          <div class="row teaxtbox">
            <div class="col-md-12 padding-reset">
            <input type="hidden" name="x" value="<?php echo $x ?>">
            <input type="hidden" name="y" value="<?php echo $y ?>">
            <input type="hidden" name="operation" value="<?php echo $operation ?>">
            <input type="text" name="afficheur" readonly value="<?php echo $afficheur ?>"><br>
            </div>
          </div>
          <div class="row commonbutton">
            <div class="col-md-3">
            <input type="submit" name="nombre" value="1">
            </div>
            <div class="col-md-3">
            <input type="submit" name="nombre" value="2">
            </div>
            <div class="col-md-3">
            <input type="submit" name="nombre" value="3">
            </div>
            <div class="col-md-3">
                <input type="submit" name="init" value="C">
                </div>
           
            <div class="col-md-3">
            <input type="submit" name="nombre" value="4">
            </div>
            <div class="col-md-3">
              <input type="submit" name="nombre" value="5">
            </div>
            <div class="col-md-3">
              <input type="submit" name="nombre" value="6">
            </div>
            <div class="col-md-3">
            <input type="submit" name="operation" value="+">
            </div>
            <div class="col-md-3">
              <input type="submit" name="nombre" value="7">
            </div>
            <div class="col-md-3">
              <input type="submit" name="nombre" value="8">
            </div>
            <div class="col-md-3">
              <input type="submit" name="nombre" value="9">
            </div>
            <div class="col-md-3">
            <input type="submit" name="operation" value="-">
            </div>
          </div>
          <div class="row conflict">
            <div class="col-md-12">
              <div class="row">
              <div class="col-md-9">
                <input type="submit" name="nombre" value="0">
              </div>
              <div class="col-md-3">           
                <input type="submit" name="operation" value="*">
              </div>
              <div class="col-md-9">
                <input type="submit" name="egale" value="=">
                </div>
              <div class="col-md-3">
                <input type="submit" name="operation" value="/">
              </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </body>
</html>