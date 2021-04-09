function insert(num){
    document.form.ecran.value = document.form.ecran.value+num
}

function equal(){
    var mont = document.form.ecran.value;
    if(mont){
    document.form.ecran.value = eval(mont)
    }
}

function vider(){
    document.form.ecran.value = ""
}