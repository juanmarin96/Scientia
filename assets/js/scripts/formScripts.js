$(document).ready(function () {
    var id = $("#idPoint").val();
    initFields(id);
    addRowPurging(1);
    $("#date").prop('readonly', true);
    $("#siteName").prop('readonly', true);
    $("#siteLocation").prop('readonly', true);
    $("#WellNro").prop('readonly', true);
    $("#sampleId").prop('readonly', true);


    $("#saveData").click(function () {
        sendData();
    });

    $("input:invalid").change(function () {
        $(this).removeClass("invalid-input");
    });

    $("#addRow").click(function () {
        var num = $("#numberRows").val();
        addRowPurging(num);
    });

    $("#addRowS").click(function () {
        var num = $("#numberRowsSam").val();
        addRowSampling(num);
    });

    $("#removeRowP").click(function () {
        removeRows($("#purginTable"),"purgingData");
    });

    $("#removeRowS").click(function () {
        removeRows($("#samplingTable"),"samplingData");
    });

    $("#wsi_sup").change(function () {
        $("#valueP1").text($("#wsi_sup").val());
    })

    $("#staticDepth").change(function () {
        $("#valueP2").text($("#staticDepth").val());
    })

    $("#wellCapacity").on('blur',function () {
        var total = ($("#wsi_sup").val() - $("#staticDepth").val()) * $("#wellCapacity").val();
        $("#totalVolume").val(total);
    })





})

function initFields(idPoint) {
    $.ajax({
        url: "Modules/Ajax.php",
        method: "POST",
        cache: false,
        data: {preData: idPoint},
        dataType: 'json',
        success: function (request) {
            setData(request)
        }
    })
}

function setData(data) {
    var now = new Date();
    var day = ("0" + now.getDate()).slice(-2);
    var month = ("0" + (now.getMonth() + 1)).slice(-2);
    var today = now.getFullYear() + "-" + (month) + "-" + (day);

    $("#date").val(today);
    $("#siteName").val(data.name);
    $("#siteLocation").val(data.location);
    $("#WellNro").val(data.code);
    $("#sampleId").val(data.code);
    addRowSampling(1);
}

function addRowPurging(numRows) {
    var rowsCount = $("#purginTable")[0].rows.length
    var table = $("#purginTable")
    if (numRows > 0) {
        for (i = 0; i < numRows; i++) {
            var row = table[0].insertRow(rowsCount);
            row.setAttribute("class", "purgingData");
            for (j = 0; j < 12; j++) {
                var cell = row.insertCell(j);
                var element = document.createElement("input");
                element.required = true; ;

                switch (j) {
                    case 0:
                        element.type = "time";
                        break;
                    case 10:
                        element.type = "text";
                        break;
                    case 11:
                        element.type = "text";
                        break;
                    default:
                        element.type = "number";
                        element.setAttribute("min", 0);
                        element.setAttribute("step",0.0001)
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


function removeRows(table,className) {
    var rowCount = table[0].rows.length;
    var row = table[0].rows[rowCount-1];
    if(row.className==className){
        table[0].deleteRow(rowCount-1);
    }else{
        alert("You can not delete more rows")
    }
}

function addRowSampling(numRows){
    var rowsCount = $("#samplingTable")[0].rows.length;
    var table = $("#samplingTable")
    if (numRows > 0) {
        for (i = 0; i < numRows; i++) {
            var row = table[0].insertRow(rowsCount);
            row.setAttribute("class", "samplingData");
            for (j = 0; j < 10; j++) {
                var cell = row.insertCell(j);
                var element = document.createElement("input");
                element.required = true; ;
                if (j == 1 || j == 3 || j == 5 || j == 6 || j == 9) {
                    element.type = "number";
                    element.setAttribute("min", 0);
                    element.setAttribute("step", 0.0001);
                    if(j==5){
                        element.required = false; ;
                    }

                } else if (j == 0 || j == 2 || j == 4 || j == 7 || j == 8) {
                    if(j==0){
                        element.value = $("#sampleId").val();
                    }
                    if(j==4){
                        element.required = false; ;
                    }
                    element.type = "text";
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

function prepareData() {
    var siteName = $("#siteName").val();
    var siteLocation = $("#siteLocation").val();
    var wellNro = $("#WellNro").val();
    var sampleId = $("#sampleId").val();
    var date = $("#date").val();
    var wellDiameter = $("#wellDiameter").val();
    var tubingDiameter = $("#tubingDiameter").val();
    var wellDepthInf = $("#wsi_inf").val();
    var wellDepthSup = $("#wsi_sup").val();
    var staticDepth = $("#staticDepth").val();
    var purgePumpType = $("#typePump").val();
    var wellCapacity = $("#wellCapacity").val();
    var wellVolume = ( wellDepthSup - staticDepth ) * wellCapacity;

    var pumpVolume = $("#pumpVolume").val();
    var tubingCapacity = $("#tubingCapacity").val();
    var tubingLength = $("#tubingLength").val();
    var flowCellVolume = $("#flowCellVolume").val();
    var equipVolume = +pumpVolume + (tubingCapacity * tubingLength) + +flowCellVolume;
    var initPumpDepth = $("#initPumpDepth").val();
    var finalPumpDepth = $("#finalPumpDepth").val();
    var initTimePurge = $("#initTimePurge").val();
    var finalTimePurge = $("#finalTimePurge").val();
    var totalVolumePurged = $("#totalVolumePurged").val();
    var sampledBy = $("#sampledBy").val();
    var sampleSig = $("#sampleSig").val();
    var initSampleTime = $("#initSampleTime").val();
    var endSampleTime = $("#endSampleTime").val();
    var pumpDepthWell = $("#pumpDepthWell").val();
    var tubingMaterial = $("#tubingMaterial").val();
    var fieldFiltered = $("input[name=filtered]:checked").val();
    var filterSize = $("#filterSize").val();
    var filterType = $("#filterType").val();
    var pumpDecon = $("input[name=deconPump]:checked").val();
    var deconTubing = $("input[name=deconTubing]:checked").val();
    var duplicate = $("input[name=duplicate]:checked").val();
    var remarks = $("#remarks").val();
    var readings = returnJsonTablePurging();
    var samplings = returnJsonTableSampling();
    var point = $("#idPoint").val();

    var data = {
        "siteName": siteName,
        "siteLocation": siteLocation,
        "wellNro": wellNro,
        "sampleId": sampleId,
        "date": date,
        "wellDiameter": wellDiameter,
        "tubingDiameter": tubingDiameter,
        "wellDepthInf": wellDepthInf,
        "wellDepthSup": wellDepthSup,
        "staticDepth": staticDepth,
        "purgePumpType": purgePumpType,
        "wellCapacity": wellCapacity,
        "wellVolume": wellVolume,
        "pumpVolume": pumpVolume,
        "tubingCapacity": tubingCapacity,
        "tubingLength": tubingLength,
        "flowCellVolume": flowCellVolume,
        "equipVolume": equipVolume,
        "initPumpDepth": initPumpDepth,
        "finalPumpDepth": finalPumpDepth,
        "initTimePurge": initTimePurge,
        "finalTimePurge": finalTimePurge,
        "totalVolumePurged": totalVolumePurged,
        "sampledBy": sampledBy,
        "sampleSig": sampleSig,
        "initSampleTime": initSampleTime,
        "endSampleTime": endSampleTime,
        "pumpDepthWell": pumpDepthWell,
        "tubingMaterial": tubingMaterial,
        "fieldFiltered": fieldFiltered,
        "filterSize": filterSize,
        "filterType": filterType,
        "pumpDecon": pumpDecon,
        "deconTubing": deconTubing,
        "duplicate": duplicate,
        "remarks": remarks,
        "readings": readings,
        "samplings": samplings,
        "point": point
    }
    return data;
}

function sendData() {
    if ($('#formData')[0].checkValidity()) {
        var data = prepareData();
        console.log(data)
        $.ajax({
            url: "Modules/Ajax.php",
            method: "POST",
            cache: false,
            data: {myData: data},
            dataType: 'json',
            success: function (request) {
                console.log(request)
            }

        })
    } else {
        $("input:invalid")[0].focus();
        $("input:invalid").each(function () {
            $(this).addClass("invalid-input");
        })
    }


}

function returnJsonTablePurging() {
    var data = []
    var rowsCount = $(".purgingData");
    for (i = 0; i < rowsCount.length; i++) {
        var row = new Array();
        for (j = 0; j < rowsCount[i].cells.length; j++) {
            var value = rowsCount[i].cells[j].firstChild.value;
            row.push(value);
        }
        data.push(row)
    }
    return data;
}

function returnJsonTableSampling() {
    var data = []
    var rowsCount = $(".samplingData");
    for (i = 0; i < rowsCount.length; i++) {
        var row = new Array();
        for (j = 0; j < rowsCount[i].cells.length; j++) {
            var value = rowsCount[i].cells[j].firstChild.value;
            row.push(value);
        }
        data.push(row)
    }
    return data;
}


