<?php

/**
 * Created by PhpStorm.
 * User: Juan
 * Date: 5/07/2017
 * Time: 6:01 PM
 */
class FormModel
{
    public $siteName;
    public $siteLocation;
    public $wellNro;
    public $sampleId;
    public $date;
    public $wellDiameter;
    public $tubingDiameter;
    public $wellDepthInf;
    public $wellDepthSup;
    public $staticDepth;
    public $purgePumpType;
    public $totalWellDepth;
    public $wellCapacity;
    public $wellVolume;
    public $pumpVolume;
    public $tubingCapacity;
    public $tubingLength;
    public $flowCellVolume;
    public $equipVolume;
    public $initPumpDepth;
    public $finalPumpDepth;
    public $initTimePurge;
    public $finalTimePurge;
    public $totalVolumePurged;
    public $sampledBy;
    public $sampleSig;
    public $initSampleTime;
    public $endSampleTime;
    public $pumpDepthWell;
    public $tubingMaterial;
    public $fieldFiltered;
    public $filterSize;
    public $filterType;
    public $pumpDecon;
    public $deconTubing;
    public $duplicate;
    public $remarks;
    public $readings;
    public $samplings;

    /**
     * @param mixed $siteName
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
    }

    /**
     * @param mixed $siteLocation
     */
    public function setSiteLocation($siteLocation)
    {
        $this->siteLocation = $siteLocation;
    }

    /**
     * @param mixed $wellNro
     */
    public function setWellNro($wellNro)
    {
        $this->wellNro = $wellNro;
    }

    /**
     * @param mixed $sampleId
     */
    public function setSampleId($sampleId)
    {
        $this->sampleId = $sampleId;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @param mixed $wellDiameter
     */
    public function setWellDiameter($wellDiameter)
    {
        $this->wellDiameter = $wellDiameter;
    }

    /**
     * @param mixed $tubingDiameter
     */
    public function setTubingDiameter($tubingDiameter)
    {
        $this->tubingDiameter = $tubingDiameter;
    }

    /**
     * @param mixed $wellDepthInf
     */
    public function setWellDepthInf($wellDepthInf)
    {
        $this->wellDepthInf = $wellDepthInf;
    }

    /**
     * @param mixed $wellDepthSup
     */
    public function setWellDepthSup($wellDepthSup)
    {
        $this->wellDepthSup = $wellDepthSup;
    }

    /**
     * @param mixed $staticDepth
     */
    public function setStaticDepth($staticDepth)
    {
        $this->staticDepth = $staticDepth;
    }

    /**
     * @param mixed $purgePumpType
     */
    public function setPurgePumpType($purgePumpType)
    {
        $this->purgePumpType = $purgePumpType;
    }

    /**
     * @param mixed $totalWellDepth
     */
    public function setTotalWellDepth($totalWellDepth)
    {
        $this->totalWellDepth = $totalWellDepth;
    }

    /**
     * @param mixed $wellCapacity
     */
    public function setWellCapacity($wellCapacity)
    {
        $this->wellCapacity = $wellCapacity;
    }

    /**
     * @param mixed $wellVolume
     */
    public function setWellVolume($wellVolume)
    {
        $this->wellVolume = $wellVolume;
    }

    /**
     * @param mixed $pumpVolume
     */
    public function setPumpVolume($pumpVolume)
    {
        $this->pumpVolume = $pumpVolume;
    }

    /**
     * @param mixed $tubingCapacity
     */
    public function setTubingCapacity($tubingCapacity)
    {
        $this->tubingCapacity = $tubingCapacity;
    }

    /**
     * @param mixed $tubingLength
     */
    public function setTubingLength($tubingLength)
    {
        $this->tubingLength = $tubingLength;
    }

    /**
     * @param mixed $flowCellVolume
     */
    public function setFlowCellVolume($flowCellVolume)
    {
        $this->flowCellVolume = $flowCellVolume;
    }

    /**
     * @param mixed $equipVolume
     */
    public function setEquipVolume($equipVolume)
    {
        $this->equipVolume = $equipVolume;
    }

    /**
     * @param mixed $initPumpDepth
     */
    public function setInitPumpDepth($initPumpDepth)
    {
        $this->initPumpDepth = $initPumpDepth;
    }

    /**
     * @param mixed $finalPumpDepth
     */
    public function setFinalPumpDepth($finalPumpDepth)
    {
        $this->finalPumpDepth = $finalPumpDepth;
    }

    /**
     * @param mixed $initTimePurge
     */
    public function setInitTimePurge($initTimePurge)
    {
        $this->initTimePurge = $initTimePurge;
    }

    /**
     * @param mixed $finalTimePurge
     */
    public function setFinalTimePurge($finalTimePurge)
    {
        $this->finalTimePurge = $finalTimePurge;
    }

    /**
     * @param mixed $totalVolumePurged
     */
    public function setTotalVolumePurged($totalVolumePurged)
    {
        $this->totalVolumePurged = $totalVolumePurged;
    }

    /**
     * @param mixed $sampledBy
     */
    public function setSampledBy($sampledBy)
    {
        $this->sampledBy = $sampledBy;
    }

    /**
     * @param mixed $sampleSig
     */
    public function setSampleSig($sampleSig)
    {
        $this->sampleSig = $sampleSig;
    }

    /**
     * @param mixed $initSampleTime
     */
    public function setInitSampleTime($initSampleTime)
    {
        $this->initSampleTime = $initSampleTime;
    }

    /**
     * @param mixed $endSampleTime
     */
    public function setEndSampleTime($endSampleTime)
    {
        $this->endSampleTime = $endSampleTime;
    }

    /**
     * @param mixed $pumpDepthWell
     */
    public function setPumpDepthWell($pumpDepthWell)
    {
        $this->pumpDepthWell = $pumpDepthWell;
    }

    /**
     * @param mixed $tubingMaterial
     */
    public function setTubingMaterial($tubingMaterial)
    {
        $this->tubingMaterial = $tubingMaterial;
    }

    /**
     * @param mixed $fieldFiltered
     */
    public function setFieldFiltered($fieldFiltered)
    {
        $this->fieldFiltered = $fieldFiltered;
    }

    /**
     * @param mixed $filterSize
     */
    public function setFilterSize($filterSize)
    {
        $this->filterSize = $filterSize;
    }

    /**
     * @param mixed $filterType
     */
    public function setFilterType($filterType)
    {
        $this->filterType = $filterType;
    }

    /**
     * @param mixed $pumpDecon
     */
    public function setPumpDecon($pumpDecon)
    {
        $this->pumpDecon = $pumpDecon;
    }

    /**
     * @param mixed $deconTubing
     */
    public function setDeconTubing($deconTubing)
    {
        $this->deconTubing = $deconTubing;
    }

    /**
     * @param mixed $duplicate
     */
    public function setDuplicate($duplicate)
    {
        $this->duplicate = $duplicate;
    }

    /**
     * @param mixed $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     * @param mixed $readings
     */
    public function setReadings($readings)
    {
        $this->readings = $readings;
    }

    /**
     * @param mixed $samplings
     */
    public function setSamplings($samplings)
    {
        $this->samplings = $samplings;
    }


}

?>