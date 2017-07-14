

$(document).ready(function () {
    var id = $("#pointId").val();
    getFormsPoint(id);




})


function printSave(){
    window.print();
}


function getFormsPoint(idPoint) {
    $.ajax({
        url: "Modules/Ajax.php",
        method: "POST",
        cache: false,
        data: {"idPoint": idPoint},
        success: function (request) {
            showFormsList(request);
        }
    })
}

function showFormsList(data){
    var datos = JSON.parse(data);
    console.log(datos)
    var table = $("#table-forms");
    for(i = 0; i < datos.length; i++){
        var row =  table[0].insertRow(0);
        for(j = 0; j < 3;j++){
            var cell = row.insertCell(j);

            switch (j) {
                case 0:
                    var element = document.createElement("h4");
                    element.innerHTML = "Form of "+datos[i].date+" / "+datos[i].purging_init;
                    break;
                case 1:
                    var element = document.createElement("a");
                    element.innerHTML = "View";
                    element.setAttribute("class","link")
                    break;
                case 2:
                    var element = document.createElement("a");
                    element.innerHTML = "Download";
                    break;
                default:
                    break;
            }
            element.id = "input"+i+j;
            element.name = "input"+i+j;
            cell.appendChild(element);
        }
    }
}