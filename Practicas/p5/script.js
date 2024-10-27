var registro = "<tr><th>Nombre</th><th>Correo</th><th>Decisión</th><th>Género</th><th>Fecha de nacimiento</th><th>Color favorito</th><th>Estatura [cm]</th></tr>"
var estilo = 0;

function val_field(){

    const inputs = document.querySelectorAll('input');
    let vField = true;
    let error_message = "";
    let vRadio = false;
    let vCheckbox = false; 
    let decision = "";
    
    for (let  i = 0; i < inputs.length; i++){
        //Verifica que los campos han sido llenado
        if (inputs[i].type == 'checkbox' && !vCheckbox){
            if (inputs[i].checked) 
                vCheckbox = true;
        } else if (inputs[i].type == 'radio' && !vRadio){
            if (inputs[i].checked) 
                vRadio = true;

        } else if  ( (inputs[i].type == 'datetime-local' && inputs[i].value == false) || (inputs[i].type == 'text' && inputs[i].value.trim() == '') ){
            vField = false;
            error_message += "El campo "+inputs[i].name+" debe ser llenado.\n";
        } 
        
    }
    
    if (!vRadio || !vCheckbox || !vField){
        //Mensaje de alerta que muestra los campos que no han sido llenados
        if (!vCheckbox)
            error_message += "Debe seleccionar al menos una opción del campo decide.\n";
        if (!vRadio)
            error_message += "Debe seleccionar al menos una opción del campo género.\n";   

        alert(error_message);

    } else {

        //Agregar renglón a la tabla

        if (estilo%2 == 0) 
           registro = registro + "<tr class=\"renglon1\">";
        else 
            registro = registro + "<tr class=\"renglon2\">";
        
        x = document.getElementById("nombre").value;
        registro = registro + "<td>" + x + "</td>";

        x = document.getElementById("correo").value;
        registro = registro + "<td>" + x + "</td>";
        
        x = "";
        for (let  i = 0; i < inputs.length; i++){
            if (inputs[i].type == 'checkbox' && inputs[i].checked){
                x += inputs[i].value+" ";
            }
        }
        registro = registro + "<td>" + x+ "</td>";

        x = document.querySelector('input[name=genero]:checked');
        registro = registro + "<td>" + x.value + "</td>";

        x = document.getElementById("fecha-nacimiento").value;
        registro = registro + "<td>" + x + "</td>";

        x = document.getElementById("color").value;
        registro = registro + "<td>" + x + "</td>";
        
        x = document.getElementById("estatura").value;
        registro = registro + "<td>" + x + "</td>";

        registro = registro + "</tr>";
        document.getElementById("resultado").innerHTML = registro;

        //Vaciar campos
        for (let  i = 0; i < inputs.length; i++){

            if ( inputs[i].type === 'text' || inputs[i].type === 'datetime-local') 
                inputs[i].value = "";
            else 
                inputs[i].checked = false;
        }
        
        estilo += 1;
    }
}

