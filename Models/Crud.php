<?php
require_once "Conexion.php";

class OperationData extends Conexion
{

    public function insertFormModel($data)
    {
        $response = true;
        $stmt = Conexion::conectar()->prepare("INSERT INTO `form`(`site_name`, `site_location`, `well_nro`, `sample_id`, `date`, `well_diameter`, `tubing_diameter`, `well_scr_depth_inf`, `well_scr_depth_sup`, `static_depth_water`, `purge_pump_type`,`well_capacity`, `well_volume_purge`,`pump_volume`,`tubing_capacity`,`tubing_length`,`flow_cell`,`equipment_volume_purge`, `initial_pump_depth`, `final_pump_depth`, `purging_init`, `purging_end`, `total_volume_purged`,`sampled_by`, `sample_signature`, `sampling_init`, `sampling_end`, `pump_depth_well`, `tubing_material`, `field_filtered`, `filter_size`, `filtration_equip_type`, `decontamination_pump`, `decontamination_tubing`, `duplicate`, `remarks`, `point_id`) VALUES (:siteName,:siteLocation,:wellNro,:sampleId,:dateF,:wellDiameter,:tubingDiameter,:wellDepthInf,:wellDepthSup,:staticDepth,:purgePumpType,:wellCapacity,:wellVolume,:pumpVolume,:tubingCap,:tubingLen,:flowCell,:equipVolume,:initPumpDepth,:finalPumpDepth,:initTimePurge,:finalTimePurge,:totalVolumePurged,:sampledBy,:sampleSig,:initSampleTime,:endSampleTime,:pumpDepthWell,:tubingMaterial,:fieldFiltered,:filterSize,:filterType,:pumpDecon,:deconTubing,:duplicate,:remarks,:point)");


        $stmt->bindParam(":siteName", $data["siteName"], PDO::PARAM_STR);
        $stmt->bindParam(":siteLocation", $data["siteLocation"], PDO::PARAM_STR);
        $stmt->bindParam(":wellNro", $data["wellNro"], PDO::PARAM_STR);
        $stmt->bindParam(":sampleId", $data["sampleId"], PDO::PARAM_STR);
        $stmt->bindParam(":dateF", $data["date"], PDO::PARAM_STR);
        $stmt->bindParam(":wellDiameter", $data["wellDiameter"], PDO::PARAM_INT);
        $stmt->bindParam(":tubingDiameter", $data["tubingDiameter"], PDO::PARAM_INT);
        $stmt->bindParam(":wellDepthInf", $data["wellDepthInf"], PDO::PARAM_INT);
        $stmt->bindParam(":wellDepthSup", $data["wellDepthSup"], PDO::PARAM_INT);
        $stmt->bindParam(":staticDepth", $data["staticDepth"], PDO::PARAM_INT);
        $stmt->bindParam(":purgePumpType", $data["purgePumpType"], PDO::PARAM_STR);
        $stmt->bindParam(":wellCapacity", $data["wellCapacity"], PDO::PARAM_INT);
        $stmt->bindParam(":wellVolume", $data["wellVolume"], PDO::PARAM_INT);
        $stmt->bindParam(":pumpVolume", $data["pumpVolume"], PDO::PARAM_INT);
        $stmt->bindParam(":tubingCap", $data["tubingCapacity"], PDO::PARAM_INT);
        $stmt->bindParam(":tubingLen", $data["tubingLength"], PDO::PARAM_INT);
        $stmt->bindParam(":flowCell", $data["flowCellVolume"], PDO::PARAM_INT);
        $stmt->bindParam(":equipVolume", $data["equipVolume"], PDO::PARAM_INT);
        $stmt->bindParam(":initPumpDepth", $data["initPumpDepth"], PDO::PARAM_INT);
        $stmt->bindParam(":finalPumpDepth", $data["finalPumpDepth"], PDO::PARAM_INT);
        $stmt->bindParam(":initTimePurge", $data["initTimePurge"], PDO::PARAM_STR);
        $stmt->bindParam(":finalTimePurge", $data["finalTimePurge"], PDO::PARAM_STR);
        $stmt->bindParam(":totalVolumePurged", $data["totalVolumePurged"], PDO::PARAM_INT);
        $stmt->bindParam(":sampledBy", $data["sampledBy"], PDO::PARAM_STR);
        $stmt->bindParam(":sampleSig", $data["sampleSig"], PDO::PARAM_STR);
        $stmt->bindParam(":initSampleTime", $data["initSampleTime"], PDO::PARAM_STR);
        $stmt->bindParam(":endSampleTime", $data["endSampleTime"], PDO::PARAM_STR);
        $stmt->bindParam(":pumpDepthWell", $data["pumpDepthWell"], PDO::PARAM_INT);
        $stmt->bindParam(":tubingMaterial", $data["tubingMaterial"], PDO::PARAM_STR);
        $stmt->bindParam(":fieldFiltered", $data["fieldFiltered"], PDO::PARAM_STR);
        $stmt->bindParam(":filterSize", $data["filterSize"], PDO::PARAM_STR);
        $stmt->bindParam(":filterType", $data["filterType"], PDO::PARAM_STR);
        $stmt->bindParam(":pumpDecon", $data["pumpDecon"], PDO::PARAM_BOOL);
        $stmt->bindParam(":deconTubing", $data["deconTubing"], PDO::PARAM_BOOL);
        $stmt->bindParam(":duplicate", $data["duplicate"], PDO::PARAM_BOOL);
        $stmt->bindParam(":remarks", $data["remarks"], PDO::PARAM_STR);
        $stmt->bindParam(":point", $data["point"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            $stmt2 = Conexion::conectar()->prepare("SELECT id FROM `form` ORDER By id LIMIT 1");
            if ($stmt2->execute()) {
                $id = $stmt2->fetch();
                $readings = $data['readings'];
                for ($i = 0; $i < count($readings); $i++) {
                    $stmt3 = Conexion::conectar()->prepare("INSERT INTO `reading`(`form_id`, `time`, `volume_purged`,     `cumul_volume_purged`, `purge_rate`, `depth_water`, `ph`, `temperature`, `conductance`, `dissolved_oxygen`, `turbidity`, `color`, `odor`) VALUES (:formId,:timeP,:volumePurged,:cumulVolume,:purgeRate,:depthWater,:ph,:temperature,:conductance,:dissolvedOxy,:turbidity,:color,:odor)");
                    $stmt3->bindParam(":formId", $id[0], PDO::PARAM_INT);
                    $stmt3->bindParam(":timeP", $readings[$i][0], PDO::PARAM_STR);
                    $stmt3->bindParam(":volumePurged", $readings[$i][1], PDO::PARAM_INT);
                    $stmt3->bindParam(":cumulVolume", $readings[$i][2], PDO::PARAM_INT);
                    $stmt3->bindParam(":purgeRate", $readings[$i][3], PDO::PARAM_INT);
                    $stmt3->bindParam(":depthWater", $readings[$i][4], PDO::PARAM_INT);
                    $stmt3->bindParam(":ph", $readings[$i][5], PDO::PARAM_INT);
                    $stmt3->bindParam(":temperature", $readings[$i][6], PDO::PARAM_INT);
                    $stmt3->bindParam(":conductance", $readings[$i][7], PDO::PARAM_INT);
                    $stmt3->bindParam(":dissolvedOxy", $readings[$i][8], PDO::PARAM_INT);
                    $stmt3->bindParam(":turbidity", $readings[$i][9], PDO::PARAM_INT);
                    $stmt3->bindParam(":color", $readings[$i][10], PDO::PARAM_STR);
                    $stmt3->bindParam(":odor", $readings[$i][11], PDO::PARAM_STR);
                    if($stmt3->execute()){
                        $response = $response&true;
                    }else{
                        $stmt5 = Conexion::conectar()->prepare("DELETE FROM `form` WHERE id = :idForm");
                        $stmt5->bindParam(":idForm", $id, PDO::PARAM_INT);
                        $stmt5->execute();
                        return false;
                    }
                }
                $samplings = $data['samplings'];
                for ($i = 0; $i < count($samplings); $i++) {
                    $stmt4 = Conexion::conectar()->prepare("INSERT INTO `sampling`(`form_id`,`sample_id`, `nro_container`, `material_code`, `volume`, `preservative_used`, `total_vol_added`, `final_ph`, `intended_analysis`, `sampling_equip_code`, `sample_pump_flow_rate`) VALUES (:formId,:sampleId,:nroContainer,:materialCode,:volume,:preservative,:totalVol,:finalPh,:intentedA,:samplingCode,:sampleFlow)");
                    $stmt4->bindParam(":formId", $id[0], PDO::PARAM_INT);
                    $stmt4->bindParam(":sampleId", $samplings[$i][0], PDO::PARAM_STR);
                    $stmt4->bindParam(":nroContainer", $samplings[$i][1], PDO::PARAM_INT);
                    $stmt4->bindParam(":materialCode", $samplings[$i][2], PDO::PARAM_STR);
                    $stmt4->bindParam(":volume", $samplings[$i][3], PDO::PARAM_INT);
                    $stmt4->bindParam(":preservative", $samplings[$i][4], PDO::PARAM_STR);
                    $stmt4->bindParam(":totalVol", $samplings[$i][5], PDO::PARAM_INT);
                    $stmt4->bindParam(":finalPh", $samplings[$i][6], PDO::PARAM_INT);
                    $stmt4->bindParam(":intentedA", $samplings[$i][7], PDO::PARAM_STR);
                    $stmt4->bindParam(":samplingCode", $samplings[$i][8], PDO::PARAM_STR);
                    $stmt4->bindParam(":sampleFlow", $samplings[$i][9], PDO::PARAM_INT);
                    if($stmt4->execute()){
                        $response = $response&true;
                    }else{
                        $stmt6 = Conexion::conectar()->prepare("DELETE FROM `form` WHERE id = :idForm");
                        $stmt6->bindParam(":idForm", $id, PDO::PARAM_INT);
                        $stmt6->execute();
                        return false;
                    }
                }

            } else {
                return false;
            }
        } else{
            return false;
        }
       return $response;
    }

    public function getPointsModel($idProject){
        $stmt = Conexion::conectar()->prepare("SELECT id,code FROM `sample_point` WHERE project_id = :projectId");
        $stmt->bindParam(":projectId",$idProject,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProjectsModel(){
        $stmt = Conexion::conectar()->prepare("SELECT id,name,location FROM `project`");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getFormDataModel($idForm){
        $stmt = Conexion::conectar()->prepare("SELECT `id`, `site_name`, `site_location`, `well_nro`, `sample_id`, `date`, `well_diameter`, `tubing_diameter`, `well_scr_depth_inf`, `well_scr_depth_sup`, `static_depth_water`, `purge_pump_type`, `well_capacity`, `well_volume_purge`, `pump_volume`, `tubing_capacity`, `tubing_length`, `flow_cell`, `equipment_volume_purge`, `initial_pump_depth`, `final_pump_depth`, `purging_init`, `purging_end`, `total_volume_purged`, `sampled_by`, `sample_signature`, `sampling_init`, `sampling_end`, `pump_depth_well`, `tubing_material`, `field_filtered`, `filter_size`, `filtration_equip_type`, `decontamination_pump`, `decontamination_tubing`, `duplicate`, `remarks`, `point_id` FROM `form` WHERE id = :idForm");
        $stmt->bindParam(":idForm",$idForm,PDO::PARAM_INT);
        $stmt->execute();
        $array =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        for($i=0; $i<count($array);$i++){
            $idForm = $array[$i]["id"];
            $stmt2 = Conexion::conectar()->prepare("SELECT `id`,`time`, `volume_purged`, `cumul_volume_purged`, `purge_rate`,  `depth_water`, `ph`, `temperature`, `conductance`, `dissolved_oxygen`, `turbidity`, `color`, `odor` FROM `reading` WHERE form_id = :idForm");
            $stmt2->bindParam(":idForm",$idForm,PDO::PARAM_INT);
            $stmt2->execute();
            $array[$i]["readings"] = $stmt2->fetchAll(PDO::FETCH_ASSOC);

            $stmt2 = Conexion::conectar()->prepare("SELECT `id`, `sample_id`, `nro_container`, `material_code`, `volume`, `preservative_used`, `total_vol_added`, `final_ph`, `intended_analysis`, `sampling_equip_code`, `sample_pump_flow_rate`, `remarks_sampling` FROM `sampling` WHERE form_id = :formId");
            $stmt2->bindParam("formId",$idForm,PDO::PARAM_INT);
            $stmt2->execute();
            $array[$i]["samplings"] = $stmt2->fetchAll(PDO::FETCH_ASSOC);

        }
        return $array;
}

    public function getFormsPointModel($idPoint){
        $stmt = Conexion::conectar()->prepare("SELECT `id`,`date`,`purging_init` FROM `form` WHERE point_id = :pointId");
        $stmt->bindParam(":pointId",$idPoint,PDO::PARAM_INT);
        $stmt->execute();
        $array =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }


    public function getPreDataModel($idPoint){
        $stmt = Conexion::conectar()->prepare("SELECT point.code, pr.name, pr.location  FROM sample_point point 
INNER JOIN project pr on point.project_id = pr.id
WHERE point.id = :idPoint");

        $stmt->bindParam(":idPoint",$idPoint,PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }




}

?>