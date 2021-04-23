<?php
class Calculatrice {
    private $x;
    private $y;
    private $operation;

function __construct($a,$b,$operation){
    $this->$x = $x;
    $this->$y = $y;
    $this->$operation = $operation;
}

function calculer(){
    $operation = null ;
    switch($this->operation){
        case '+' : $solution = $this->$x + $this->$y;
        break;
        case '-' : $solution = $this->$x - $this->$y;
        break;
    }
    return $solution;
}
}

