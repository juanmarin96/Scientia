/**
 * Created by Juan on 6/07/2017.
 */

$(document).ready(function () {
    getProjects();

    $("#tukeyButton").click(function () {
        var id = $("#idProjectTP").val()
        getPoints(id)
    })
    $("#LucieButton").click(function () {
        var id = $("#idProjectSL").val()
        getPoints(id)
    })
    $("#VolusiaButton").click(function () {
        var id = $("#idProjectVC").val()
        getPoints(id)
    })

})

function getProjects() {
    $.ajax({
        url: "Modules/Ajax.php",
        method: "POST",
        cache: false,
        data: {"getProjects": 1},
        success: function (request) {
            setInputs(request);
        }
    })
}

function setInputs(data) {
    var datos = JSON.parse(data);
    var inputs = $(".inputId");
    for (i = 0; i < inputs.length; i++) {
        inputs[i].setAttribute("value", datos[i].id)
    }
}


function getPoints(idProject) {
    $.ajax({
        url: "Modules/Ajax.php",
        method: "POST",
        cache: false,
        data: {"idProject": idProject},
        success: function (request) {
            showPoints(request);
        }
    })
}


function showPoints(data) {
    $("#pointList").empty();
    var datos = JSON.parse(data);
    for (i = 0; i < datos.length; i++) {
        $("#pointList").append('<li>' + '<a href="http://localhost/Scientia/formsList.php?id=' + datos[i].id + '" class="pointLink">'+'View forms for '+ datos[i].code + '</a>' + '</li>')
    }
}


