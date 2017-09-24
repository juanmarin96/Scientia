<?php
include('mpdf/mpdf.php');
$html = $_POST["html"];
$mpdf = new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output('Files/archivo.pdf','F');
exit;
?>