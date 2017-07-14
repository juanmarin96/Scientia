<?php
session_start();
if(!isset($_SESSION["user"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="assets/js/scripts/documentScripts.js"></script>
<!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body style="background-color:#d6f5d6;">
<div class="alert alert-success">
	     <div class="container-fluid">
					<div class="alert-icon">
						<i class="material-icons"></i>
					</div>
					<button type="button" class="close">
						<span><a href="logout.php">Logout</a></span>
					</button>
	            	<b>Welcome</b> <?php echo ''.$_SESSION["user"].''; ?>
	     </div>
</div>


<div class="container">
  <h2></h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Florida Power & Light, Turkey Point Nuclear, Florida.</a></li>
    <li><a data-toggle="tab" href="#menu2">Florida Power & Light, Saint Lucie Power Station, Florida.</a></li>
    <li><a data-toggle="tab" href="#menu3">Volusia County, Florida.</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Florida Power & Light, Turkey Point Nuclear, Florida.</h3>
        <input class="inputId" id="idProjectTP" type="hidden">
	  <div class="row">
          <div class="col-md-6 col-sm-6"><img src="assets\img\projectos/turkey.jpg" width="700" height="700" class="img-responsive"/></div>
	  
      <div class="col-md-6 col-sm-6"><p style="font-size:25px;text-align:left">We've serviced this facility, providing numerous services including: environmental consulting for compliance, water monitoring, recycling initiatives, and full spectrum water sampling activities.</p>
      </div>
      <div>
          <a id="tukeyButton" class="btn btn-default"  data-toggle="modal" data-target="#exampleModalLong">View Points</a>
      </div>
	</div>
	</div>
    <div id="menu2" class="tab-pane fade">
      <h3>Florida Power & Light, Saint Lucie Power Station, Florida.</h3>
        <input class="inputId" id="idProjectSL" type="hidden">
      <div class="row">
		<div class="col-md-6 col-sm-6"><img src="assets\img\projectos/turkey.jpg" width="700" height="700" class="img-responsive"/></div>
	  
			<div class="col-md-6 col-sm-6"><p style="font-size:25px">We've conducted ground water environmental monitoring sampling activities for the facilities radiochemistry programs.</p>
            </div>
          <div>
              <a id="LucieButton" class="btn btn-default" data-toggle="modal" data-target="#exampleModalLong">View Points</a>
          </div>
	   </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Volusia County, Florida.</h3>
        <input class="inputId" id="idProjectVC" type="hidden">
       <div class="row">
		<div class="col-md-6 col-sm-6"><img src="assets\img\projectos/turkey.jpg" width="700" height="700" class="img-responsive"/></div>
	  
			<div class="col-md-6 col-sm-6"><p style="font-size:25px;text-align:left">We've provided Geographic Information Services to assist in the conversion of some of its CAD files to its GIS enterprise system which is used by internal and external customers.</p>
            </div>
           <div>
               <a id="VolusiaButton" class="btn btn-default" data-toggle="modal" data-target="#exampleModalLong">View Points</a>
           </div>
	   </div>
    </div>
  </div>
</div>
<!--MODAL-->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Sampling Points for Tukey Plant</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul id="pointList">

                </ul>
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