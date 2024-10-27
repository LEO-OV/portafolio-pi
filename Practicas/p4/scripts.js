function evaluar(){
    var calificacion = parseFloat(document.getElementById("cal").value);

    if (calificacion < 0 || calificacion > 10){
            alert("ERROR: La calificación debe ser un número entre 0 y 10 ");
    } else if (calificacion < 6){
        document.getElementById("resultado1").innerHTML = "NA";
    } else if (calificacion < 7.5){
        document.getElementById("resultado1").innerHTML = "S";
    }
    else if (calificacion < 9){
        document.getElementById("resultado1").innerHTML = "B";
    }
    else if (calificacion < 10){
        document.getElementById("resultado1").innerHTML = "MB";
    } else{
        document.getElementById("resultado1").innerHTML = "LAP";
    }
}

function factorial(){
    var numero = parseInt(document.getElementById("fac").value);

    if (numero == 0){
        document.getElementById("resultado2").innerHTML = x+"FACTORIAL: 1";
    } else if (numero < 0){
        document.getElementById("resultado2").innerHTML = x+"FACTORIAL: INDETERMINADO";
    } else {
        var fac = 1;
        for (let i = 1; i <= numero; i++) {
            fac = fac * i;
        }
        document.getElementById("resultado2").innerHTML = "FACTORIAL: " + fac;
    }
}

function formulario(){

    a = document.getElementById("name");
    b = document.getElementById("mail");
    c = document.getElementById("age");
    d = document.getElementById("born");
    e = document.getElementById("color");
    z = document.querySelector('input[name=gen]:checked');
    document.getElementById("resultado3").innerHTML = 
                                                        "<p><br> Nombre: " + a.value + 
                                                        "<br> Correo: " + b.value + 
                                                        "<br> Edad: " + c.value + 
                                                        "<br> Genero: " + z.value +
                                                        "<br> Fecha de nacimiento: " + d.value + 
                                                        "<br> Color favorito: " + e.value + "</p>";
}