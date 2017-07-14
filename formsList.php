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
</body>
</html>


