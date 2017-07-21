<?php
session_start();
if(!isset($_SESSION["user"])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="assets/css/form_style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="assets/js/scripts/listForm.js"></script>
</head>
<body>
<input  id="pointId" type="hidden" value="<?php echo $_GET["id"]?>">
<a class="btn btn-lg btn-default" href="document.php">Come Back</a>
<h1>FORMS POINT</h1>
<a class="btn btn-lg btn-default" href="form.php?idPoint=<?php echo $_GET["id"] ?>" id="addForm">+ ADD NEW FORM</a>
<table border="1" id="table-forms">

</table>
<!--MODAL-->
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sampling Points for Tukey Plant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="container-all" class="row">
                        <input type="hidden" id="idPoint" value="<?php echo $_GET["idPoint"]?>">
                        <!--CABECERA DE DATOS-->
                        <a class="btn btn-default btn-lg" style="float: left;" href="formsList.php?id=<?php echo $_GET["idPoint"]?>">Come Back</a>
                        <h1 class="text-center">GROUNDWATER SAMPLING LOG</h1>
                        <table border="1" class="table-responsive table-style">
                            <tr>
                                <td colspan="2">
                                    <label for="siteName">SITE NAME:</label>
                                    <input id="siteName" name="siteName" type="text" required>
                                </td>
                                <td colspan="1">
                                    <label for="siteLocation">SITE LOCATION:</label>
                                    <input id="siteLocation" name="siteLocation" type="text" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="wellNro">WELL NO:</label>
                                    <input id="WellNro" name="wellNro" type="text" required>
                                </td>
                                <td>
                                    <label for="sampleId">SAMPLE ID:</label>
                                    <input id="sampleId" name="sampleId" type="text" required>
                                </td>
                                <td>
                                    <label for="date">DATE:</label>
                                    <input id="date" name="date" type="date" required style="width: 150px;">
                                </td>
                            </tr>
                        </table>
                        <!--CUERPO DE LA FORMA-->
                        <br>
                        <table border="1" id="purginTable"  class="table-responsive table-style">
                            <tr>
                                <th colspan="12"><h3 class="text-center">PURGING DATA</h3></th>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label for="wellDiameter">WELL DIAMETER (inches):</label>
                                    <input id="wellDiameter" name="wellDiameter" type="number" min="0" step="0.0001">
                                </td>
                                <td colspan="2">
                                    <label for="tubingDiameter">TUBING DIAMETER (inches):</label>
                                    <input id="tubingDiameter" name="tubingDiameter" type="number" min="0" step="0.0001">
                                </td>
                                <td colspan="4">
                                    <h6 style="font-weight: bold">WELL SCREEN INTERVAL DEPTH:</h6>
                                    <input id="wsi_inf" name="wsi_inf" type="number" min="0" step="0.0001" required style="width:100px;">
                                    <label for="wsi_inf">feet to</label>

                                    <input id="wsi_sup" name="wsi_sup" type="number" min="0" step="0.0001" required style="width:100px;">
                                    <label for="wsi_sup">feet</label>
                                </td>
                                <td colspan="2">
                                    <label for="staticDepth">STATIC DEPTH TO WATER (feet):</label>
                                    <input type="number" name="staticDepth" id="staticDepth" min="0" step="0.0001">
                                </td>
                                <td colspan="2">
                                    <label for="typePump">PURGE PUMP TYPE OR BAILER:</label>
                                    <input type="text" name="typePump" id="typePump">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="12">
                                    <p><span style="font-weight: bold;">WELL VOLUME PURGE:   1 WELL VOLUME</span> =  (TOTAL WELL DEPTH   –   STATIC DEPTH TO WATER)    X    WELL CAPACITY
                                        (only fill out if applicable)
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-xs-6">
                                            <p id="valueP1">0</p>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-xs-6">
                                            <p id="valueP2">0</p>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-xs-6">
                                            <input placeholder="WELL CAPACITY (gallons/foot)" style="float: left" type="number" id="wellCapacity" name="wellCapacity" min="0" step="0.0001">
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-xs-6">
                                            <input id="totalVolume" type="number" step="0.0001" readonly  placeholder="RESULT">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="12">
                                    <p><span style="font-weight: bold;">EQUIPMENT VOLUME PURGE:  1 EQUIPMENT VOL.</span> = PUMP VOLUME + (TUBING CAPACITY        X        TUBING LENGTH) + FLOW CELL VOLUME
                                        (only fill out if applicable)
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-2 col-md-2 col-xs-2">
                                            <input placeholder="PUMP VOLUME(gallons)" style="float: left" id="pumpVolume" name="pumpVolume" type="number" step="0.0001">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-xs-2">
                                            <input placeholder="TUBING CAPACITY (gallons/foot)" style="float: left" id="tubingCapacity" name="tubingCapacity" type="number" step="0.0001">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-xs-2">
                                            <input placeholder="TUBING LENGTH (feet)" style="float: left" id="tubingLength" name="tubingLength" type="number" step="0.0001">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-xs-2">
                                            <input placeholder="FLOW CELL VOLUME (gallons)" style="float: left" id="flowCellVolume" name="flowCellVolume" type="number" step="0.0001">
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-xs-2">
                                            <input type="number" readonly step="0.0001" placeholder="RESULT">
                                        </div>





                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <label>INITIAL PUMP OR TUBING DEPTH IN WELL (feet):</label>
                                    <input type="number" id="initPumpDepth" name="initPumpDepth" min="0" step="0.0001" required>
                                </td>
                                <td colspan="3">
                                    <label>FINAL PUMP OR TUBING DEPTH IN WELL (feet):</label>
                                    <input type="number" id="finalPumpDepth" name="finalPumpDepth" min="0" step="0.0001" required>
                                </td>
                                <td colspan="2">
                                    <label>PURGING
                                        INITIATED AT:
                                    </label>
                                    <input type="time" id="initTimePurge" name="initTimePurge" required>
                                </td>
                                <td colspan="2">
                                    <label>PURGING ENDED AT:
                                    </label>
                                    <input type="time" id="finalTimePurge" name="finalTimePurge" required>
                                </td>
                                <td colspan="2">
                                    <label>TOTAL VOLUME PURGED (gallons):
                                    </label>
                                    <input type="number" id="totalVolumePurged" name="totalVolumePurged" min="0" step="0.0001" required>
                                </td>
                            </tr>
                            <tr>
                                <th>TIME</th>
                                <th>VOLUME PURGED (gallons)</th>
                                <th>CUMUL.
                                    VOLUME
                                    PURGED
                                    (gallons)
                                </th>
                                <th>PURGE
                                    RATE
                                    (gpm)
                                </th>
                                <th>DEPTH
                                    TO
                                    WATER
                                    (feet)
                                </th>
                                <th>pH
                                    (standard units)
                                </th>
                                <th>TEMP.
                                    (OC)
                                </th>
                                <th>COND.
                                    (circle units)
                                    &#956mhos/cm
                                    or  &#956S/cm
                                </th>
                                <th>DISSOLVED
                                    OXYGEN
                                    (circle units)
                                    mg/L  or
                                    % saturation
                                </th>
                                <th>TURBIDITY
                                    (NTUs)
                                </th>
                                <th>COLOR
                                    (describe)
                                </th>
                                <th>ODOR
                                    (describe)
                                </th>
                            </tr>
                        </table>
                        <div style="text-align: right;">
                            <a id="addRow" class="btn btn-default btn-xs">Add row</a>
                            <input id="numberRows" type="number" style="width: 50px;" min="1" value="1">-
                            <a id="removeRowP" class="btn btn-default btn-xs">Remove row</a>
                        </div>
                        <p><span style="font-weight: bold">WELL CAPACITY (Gallons Per Foot):</span>   0.75” = 0.02;      1” = 0.04;      1.25” = 0.06;      2” = 0.16;      3” = 0.37;      4” = 0.65;      5” = 1.02;      6” = 1.47;      12” = 5.88
                        </p>
                        <p>
                            <span style="font-weight: bold">TUBING INSIDE DIA. CAPACITY (Gal./Ft.):</span>   1/8" = 0.0006;      3/16" = 0.0014;      1/4" = 0.0026;       5/16" = 0.004;       3/8" = 0.006;       1/2" = 0.010;       5/8" = 0.016
                        </p>
                        <p>
                            <span style="font-weight: bold">PURGING EQUIPMENT CODES:</span> <span style="font-weight: bold">B</span> = Bailer; <span style="font-weight: bold">BP</span>= Bladder Pump; <span style="font-weight: bold">ESP</span>= Electric Submersible Pump; <span style="font-weight: bold">PP</span> = Peristaltic Pump;<span style="font-weight: bold">O</span>= Other (Specify)
                        </p>



                        <table border="1" id="samplingTable" class="table-responsive table-style">
                            <tr>
                                <th colspan="10"><h3 class="text-center">SAMPLING DATA</h3></th>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <label>SAMPLED BY (PRINT) / AFFILIATION:</label>
                                    <input type="text" id="sampledBy" name="sampledBy" required>
                                </td>
                                <td colspan="3">
                                    <label>SAMPLER(S) SIGNATURE(S):</label>
                                    <input type="text" id="sampleSig" name="sampleName" required>
                                </td>
                                <td colspan="2">
                                    <label>SAMPLING INITIATED AT:
                                    </label>
                                    <input type="time" id="initSampleTime" name="initSampleName" required>
                                </td>
                                <td colspan="2">
                                    <label>SAMPLING ENDED AT:</label>
                                    <input type="time" id="endSampleTime" name="endSampleTime" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <label>PUMP OR TUBING DEPTH IN WELL (feet):</label>
                                    <input id="pumpDepthWell" name="pumpDepthWell" type="number" min="0" step="0.0001" required>
                                </td>
                                <td colspan="2">
                                    <label>TUBING MATERIAL CODE:</label>
                                    <input type="text" id="tubingMaterial" name="tubingMaterial" required>
                                </td>
                                <td colspan="2">
                                    <h4>FIELD-FILTERED:</h4>
                                    <label for="yesFiltered">YES</label>
                                    <input id="yesFiltered" type="radio" value="1" name="filtered" checked style="width: 20px;">
                                    <label for="noFiltered">NO</label>
                                    <input id="noFiltered" type="radio" value="0" name="filtered" style="width: 20px;">
                                </td>
                                <td colspan="2">
                                    <label>FILTER SIZE (&#956m):</label>
                                    <input type="number" id="filterSize" name="filterSize" min="0" step="0.0001">
                                </td>
                                <td colspan="2">
                                    <label>Filtration Equipment Type:</label>
                                    <input type="text" id="filterType" name="filterType">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <h4>FIELD DECONTAMINATION:</h4>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>PUMP</h4>
                                            <label>YES:</label>
                                            <input type="radio" id="pumpDeconYes" name="deconPump" value="1" checked style="width: 20px;">
                                            <label>NO:</label>
                                            <input type="radio" id="pumpDeconNo" name="deconPump" value="0" style="width: 20px;">
                                        </div>
                                        <div class="col-lg-6" >
                                            <h4>TUBING(replaced)</h4>
                                            <label>YES:</label>
                                            <input type="radio" id="deconTubingYes" name="deconTubing" value="1" checked style="width: 20px;">
                                            <label>NO:</label>
                                            <input type="radio" id="deconTubingNo" name="deconTubing" value="0" style="width: 20px;">
                                        </div>
                                    </div>
                                </td>
                                <td colspan="5">
                                    <h4>DUPLICATE</h4>
                                    <label>YES:</label>
                                    <input type="radio" id="duplicateYes" name="duplicate" value="1" checked style="width: 20px;">
                                    <label>NO:</label>
                                    <input type="radio" id="duplicateNo" name="duplicate" value="0" style="width: 20px;">
                                </td>
                            </tr>
                            <tr>
                                <th colspan="4">
                                    SAMPLE CONTAINER SPECIFICATION
                                </th>
                                <th colspan="3">
                                    SAMPLE PRESERVATION
                                </th>
                                <th rowspan="2">
                                    INTENDED ANALYSIS AND/OR METHOD
                                </th>
                                <th rowspan="2">
                                    SAMPLING EQUIPMENT CODE
                                </th>
                                <th rowspan="2">
                                    SAMPLE PUMP FLOW RATE (mL per minute)
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    SAMPLE ID CODE
                                </th>
                                <th>
                                    # CONTAINERS
                                </th>
                                <th>
                                    MATERIAL CODE
                                </th>
                                <th>
                                    VOLUME
                                </th>
                                <th>
                                    PRESERVATIVE USED
                                </th>
                                <th>
                                    TOTAL VOL ADDED IN FIELD (mL)
                                </th>
                                <th>
                                    FINAL pH
                                </th>
                            </tr>
                        </table>
                        <div style="text-align: right;">
                            <a id="addRowS" class="btn btn-default btn-xs">Add row</a>
                            <input id="numberRowsSam" type="number" style="width: 50px;" min="1" value="1">-
                            <a id="removeRowS" class="btn btn-default btn-xs">Remove row</a>
                        </div>
                        <div>
                            <h6>REMARKS:</h6>
                            <textarea style="min-height: 80px;width: 100%;" id="remarks" name="remarks"></textarea>

                            <p>
                                <span style="font-weight: bold;">MATERIAL CODES:</span> <span style="font-weight: bold">AG</span> = Amber Glass;<span style="font-weight: bold">CG</span> = Clear Glass;<span style="font-weight: bold">PE</span>= Polyethylene;<span style="font-weight: bold">PP</span>= Polypropylene;<span style="font-weight: bold">S</span>= Silicone;<span style="font-weight: bold">T</span>= Teflon;<span style="font-weight: bold">O</span>= Other (Specify)
                            </p>
                            <p>
                                <span style="font-weight: bold;">SAMPLING EQUIPMENT CODES:</span> <span style="font-weight: bold">APP</span> = After Peristaltic Pump;<span style="font-weight: bold">B</span> = Bailer;<span style="font-weight: bold">BP</span>= Bladder Pump;<span style="font-weight: bold"> ESP</span>= Electric Submersible Pump;
                            </p>
                            <p>
                                <span style="font-weight: bold">RFPP</span>= Reverse Flow Peristaltic Pump;<span style="font-weight: bold">SM</span>= Straw Method (Tubing Gravity Drain);<span style="font-weight: bold">O</span>= Other (Specify)
                            </p>
                            <p>
                                NOTES:	1.  The above do not constitute all of the information required by Chapter 62-160, F.A.C.
                                2.  STABILIZATION CRITERIA  FOR RANGE OF VARIATION OF LAST THREE CONSECUTIVE  READINGS (SEE  FS 2212, SECTION 3)
                                pH: + 0.2 units  Temperature: + 0.2 oC  Specific Conductance:  + 5%  Dissolved Oxygen: all readings < 20% saturation (see Table FS 2200-2); optionally, + 0.2 mg/L or + 10% (whichever is greater)  Turbidity: all readings < 20 NTU; optionally + 5 NTU or + 10% (whichever is greater)

                            </p>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>


