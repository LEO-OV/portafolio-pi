var registro = "<tr><th class='hdTaskL' colspan='3'>Lista de Tareas</th></tr>";
var rowId = 0;

function task(){
    let task = document.getElementById("desTask").value;

    if (task.trim() == ""){
        alert("Campo de texto vacio.");
    } else{
        
        rowId += 1;

        registro += "<tr id='"+rowId+"'><td class='col1'><input type='checkbox'></td> <td class='col2'>"+task+"</td> <td class='col3'><a onclick='delTask(\""+rowId+"\")'><img src='../../img/borrar.png'></a></td></tr>";

        document.getElementById("taskList").innerHTML = registro;

    }
        
}

function delTask(rowId){
    let row = document.getElementById(rowId);

    if (row)
        row.remove();

    
}

function delAllTasks(){
    registro = "<tr><th>Lista de Tareas</th></tr>";
    document.getElementById("taskList").innerHTML = "";
    rowId = 0;

}