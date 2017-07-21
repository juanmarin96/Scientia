

$(document).ready(function () {
    var id = $("#pointId").val();
    getFormsPoint(id);

    $(document).on("click",".link",function () {
        /*$("#viewModal").modal("show");*/
        var id = this.dataset.idformat;
        getFormData(id);
    })

    $('input').prop('readonly', true);

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
                    element.setAttribute("data-idFormat", datos[i].id)
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

function getFormData(id){
    $.ajax({
        url: "Modules/Ajax.php",
        method: "POST",
        cache: false,
        data: {"formData": id},
        dataType : "json",
        success: function (request) {
            console.log(request);
            showForm(request);
        }
    })
}

function showForm(data){
    $("#viewModal").modal("show");
    $("#siteName").val();
    $("#siteLocation").val();
    $("#WellNro").val();
    $("#sampleId").val();
    $("#date").val();
    $("#wellDiameter").val();
    $("#tubingDiameter").val();
    $("#wsi_inf").val();
    $("#wsi_sup").val();
    $("#staticDepth").val();
    $("#typePump").val();
    $("#wellCapacity").val();
    //var wellVolume = ( wellDepthSup - staticDepth ) * wellCapacity;

    $("#pumpVolume").val();
    $("#tubingCapacity").val();
    $("#tubingLength").val();
    $("#flowCellVolume").val();
    //var equipVolume = +pumpVolume + (tubingCapacity * tubingLength) + +flowCellVolume;
    $("#initPumpDepth").val();
    $("#finalPumpDepth").val();
    $("#initTimePurge").val();
    $("#finalTimePurge").val();
    $("#totalVolumePurged").val();
    $("#sampledBy").val();
    $("#sampleSig").val();
    $("#initSampleTime").val();
    $("#endSampleTime").val();
    $("#pumpDepthWell").val();
    $("#tubingMaterial").val();
    $("input[name=filtered]:checked").val();
    $("#filterSize").val();
    $("#filterType").val();
    $("input[name=deconPump]:checked").val();
    $("input[name=deconTubing]:checked").val();
    $("input[name=duplicate]:checked").val();
    $("#remarks").val();
    //var readings = returnJsonTablePurging();
    //var samplings = returnJsonTableSampling();

}