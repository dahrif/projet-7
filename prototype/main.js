function insert(num){
    
    document.calcul.ecran.value = document.calcul.ecran.value+num
}

function equal(){
    var mont = document.calcul.ecran.value;
    document.calcul.ecran.value = eval(mont)
}

function vider(){
    document.calcul.ecran.value = ""
}