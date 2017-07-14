<?php
require_once "../Controllers/formController.php";
require_once "../Models/Crud.php";

class Ajax{


    public function insertForm($data){
        $response = formController::insertFormController($data);
        return $response;
    }

    public function getPointsProject($idProject){
        $response = formController::getPointsController($idProject);
        echo json_encode($response);
    }

    public function getProjects(){
        $response = formController::getProjectsController();
        echo json_encode($response);
    }

    public function getFormsPoint($idPoint){
        $response = formController::getFormsPointController($idPoint);
        echo json_encode($response);
    }

    public function getPreData($idPoint){
        $response = formController::getPreDataController($idPoint);
        echo json_encode($response);
    }

}

if(isset($_POST['myData'])){
    $a = new Ajax();
    $a ->insertForm($_POST['myData']);
}

if(isset($_POST['idProject'])){
    $a = new Ajax();
    $a ->getPointsProject($_POST['idProject']);
}

if(isset($_POST['idPoint'])){
    $a = new Ajax();
    $a ->getFormsPoint($_POST['idPoint']);
}

if(isset($_POST['preData'])){
    $a = new Ajax();
    $a ->getPreData($_POST['preData']);
}

if(isset($_POST['getProjects'])){
    $a = new Ajax();
    $a ->getProjects();
}
?>