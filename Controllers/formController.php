<?php

    class formController{

        #registro formulario
        #----------------------------------------------------
        public function insertFormController($data){

            $response = OperationData::insertFormModel($data);
            echo $response;
        }

        public function getPointsController($idProject){
            $response = OperationData::getPointsModel($idProject);
            return $response;
        }

        public function getProjectsController(){
            $response = OperationData::getProjectsModel();
            return $response;
        }

        public function getFormsPointController($idPoint){
            $response = OperationData::getFormsPointModel($idPoint);
            return $response;
        }

        public function getPreDataController($idPoint){
            $response = OperationData::getPreDataModel($idPoint);
            return $response;
        }

    }



/*for($i = 0; $i < count($readings);$i++){
    for($j = 0; $j < count($readings[$i]);$j++){
        echo $readings[$i][$j];
    }
}*/



?>
