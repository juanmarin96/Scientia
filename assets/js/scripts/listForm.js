

$(document).ready(function () {
    var id = $("#pointId").val();
    getFormsPoint(id);

    $(document).on("click",".link",function () {
        /*$("#viewModal").modal("show");*/
        var id = this.dataset.idformat;
        getFormData(id);
    })

    $(document).on("click",".download",function () {
        generatePdf()
    })

    $('input').prop('readonly', true);
    $('textarea').prop('readonly', true);


})

function generatePdf(){
    var html = document.getElementById("container-all").innerHTML;
    $.ajax({
        url: "pdfGenerator.php",
        method: "POST",
        cache: false,
        data: {"html": html},
        success: function (request) {

        }
    })
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
                    element.setAttribute("class","download")
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
    console.log(data[0]["site_name"])
    $("#siteName").val(data[0]["site_name"]);
    $("#siteLocation").val(data[0]["site_location"]);
    $("#WellNro").val(data[0]["well_nro"]);
    $("#sampleId").val(data[0]["sample_id"]);
    $("#date").val(data[0]["date"]);
    $("#wellDiameter").val(data[0]["well_diameter"]);
    $("#tubingDiameter").val(data[0]["tubing_diameter"]);
    $("#wsi_inf").val(data[0]["well_scr_depth_inf"]);
    $("#wsi_sup").val(data[0]["well_scr_depth_sup"]);
    $("#staticDepth").val(data[0]["static_depth_water"]);
    $("#typePump").val(data[0]["purge_pump_type"]);
    $("#wellCapacity").val(data[0]["well_capacity"]);
    //var wellVolume = ( wellDepthSup - staticDepth ) * wellCapacity;

    $("#pumpVolume").val(data[0]["pump_volume"]);
    $("#tubingCapacity").val(data[0]["tubing_capacity"]);
    $("#tubingLength").val(data[0]["tubing_length"]);
    $("#flowCellVolume").val(data[0]["flow-cell"]);
    //var equipVolume = +pumpVolume + (tubingCapacity * tubingLength) + +flowCellVolume;
    $("#initPumpDepth").val(data[0]["initial_pump_depth"]);
    $("#finalPumpDepth").val(data[0]["final_pump_depth"]);
    $("#initTimePurge").val(data[0]["purging_init"]);
    $("#finalTimePurge").val(data[0]["purging_end"]);
    $("#totalVolumePurged").val(data[0]["total_volume_purged"]);
    $("#sampledBy").val(data[0]["sampled_by"]);
    $("#sampleSig").val(data[0]["sample_signature"]);
    $("#initSampleTime").val(data[0]["sampling_init"]);
    $("#endSampleTime").val(data[0]["sampling_end"]);
    $("#pumpDepthWell").val(data[0]["pump_depth_well"]);
    $("#tubingMaterial").val(data[0]["tubing_material"]);
    $("input[name=filtered]:checked").val(data[0]["field_filtered"]);
    $("#filterSize").val(data[0]["filter_size"]);
    $("#filterType").val(data[0]["filtration_equip_type"]);
    $("input[name=deconPump]:checked").val(data[0]["decontamination_pump"]);
    $("input[name=deconTubing]:checked").val(data[0]["decontamination_tubing"]);
    $("input[name=duplicate]:checked").val(data[0]["duplicate"]);
    $("#remarks").val(data[0]["remarks"]);
    fillRedingsTable(data[0]["readings"]);
    fillSamplingTable(data[0]["samplings"]);
}

function fillRedingsTable(readings) {
    var rowsCount = $("#purginTable")[0].rows.length
    var table = $("#purginTable")
    if (readings.length > 0) {
        for (i = 0; i < readings.length; i++) {
            var row = table[0].insertRow(rowsCount);
            row.setAttribute("class", "purgingData");
            for (j = 0; j < 12; j++) {
                var cell = row.insertCell(j);
                var element = document.createElement("input");
                element.setAttribute("readonly",true);
                switch (j) {
                    case 0:
                        element.type = "time";
                        element.value = readings[i]["time"];
                        break;
                    case 1:
                        element.type = "number";
                        element.value = readings[i]["volume_purged"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 2:
                        element.type = "number";
                        element.value = readings[i]["cumul_volume_purged"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 3:
                        element.type = "number";
                        element.value = readings[i]["purge_rate"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 4:
                        element.type = "number";
                        element.value = readings[i]["depth_water"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 5:
                        element.type = "number";
                        element.value = readings[i]["ph"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 6:
                        element.type = "number";
                        element.value = readings[i]["temperature"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 7:
                        element.type = "number";
                        element.value = readings[i]["conductance"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 8:
                        element.type = "number";
                        element.value = readings[i]["dissolved_oxygen"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 9:
                        element.type = "number";
                        element.value = readings[i]["turbidity"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 10:
                        element.type = "text";
                        element.value = readings[i]["color"];
                        break;
                    case 11:
                        element.type = "text";
                        element.value = readings[i]["odor"];
                        break;
                }

                element.id = "purging" + i + j;
                element.name = "purging" + i + j;
                cell.appendChild(element);
            }
        }
    } else {
        alert("número de filas")
    }
}

function fillSamplingTable(samplings) {
    var rowsCount = $("#samplingTable")[0].rows.length;
    var table = $("#samplingTable");
    if (samplings.length > 0) {
        for (i = 0; i < samplings.length; i++) {
            var row = table[0].insertRow(rowsCount);
            row.setAttribute("class", "samplingData");
            for (j = 0; j < 10; j++) {
                var cell = row.insertCell(j);
                var element = document.createElement("input");
                element.setAttribute("readonly",true);
                switch (j) {
                    case 0:
                        element.type = "text";
                        element.value = samplings[i]["sample_id"];
                        break;
                    case 1:
                        element.type = "number";
                        element.value = samplings[i]["nro_container"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",1);
                        break;
                    case 2:
                        element.type = "text";
                        element.value = samplings[i]["material_code"];
                        break;
                    case 3:
                        element.type = "number";
                        element.value = samplings[i]["volume"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 4:
                        element.type = "text";
                        element.value = samplings[i]["preservative_used"];
                        break;
                    case 5:
                        element.type = "number";
                        element.value = samplings[i]["total_vol_added"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 6:
                        element.type = "number";
                        element.value = samplings[i]["final_ph"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                    case 7:
                        element.type = "text";
                        element.value = samplings[i]["intended_analysis"];
                        break;
                    case 8:
                        element.type = "text";
                        element.value = samplings[i]["sampling_equip_code"];
                        break;
                    case 9:
                        element.type = "number";
                        element.value = samplings[i]["sample_pump_flow_rate"];
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001);
                        break;
                }

                element.id = "sampling" + i + j;
                element.name = "sampling" + i + j;
                cell.appendChild(element);
            }
        }
    } else {
        alert("número de filas")
    }
}
