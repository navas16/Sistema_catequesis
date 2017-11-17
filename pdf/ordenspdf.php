<?php
require('classfpdf/fpdf.php');
include("conexiones.php");
$con=conectar();

$cedula= $_GET['cedula'];

$consultarEstudiante = "SELECT * from nivel_1 where cedula='$cedula'";
$resultEstudiante = mysql_query($consultarEstudiante, $con ) or die(mysql_error());
$rowEstudiante = mysql_fetch_assoc($resultEstudiante);


    $nombre = $rowEstudiante['nombre_estudiante'];
    $apellido = $rowEstudiante['apellido_estudiante'];
    $nombreCompleto = $nombre.' '.$apellido;
    $titulo2= utf8_decode('DICARIA REDENCION DEL SEÑOR');
    $titulo3= utf8_decode('UREÑA EDO.TACHIRA. VENEZUELA');
    $titulo3 = utf8_decode('Parroquia san juan bautista Ureña');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',14);
$pdf->Text(70,20,'DIOCESIS DE SAN CRISTOBAL');

$pdf->SetFont('Arial','B',14);
$pdf->Text(66,30,$titulo2);

$pdf->SetFont('Arial','B',14);
$pdf->Text(66,40,'PARROQUIA SAN JUAN BAUTISTA');

$pdf->SetFont('Arial','B',14);
$pdf->Text(64,50,$titulo3);

$pdf->SetFont('Arial','B',24);
$pdf->Text(78,80,'CERTIFICADO');

$pdf->SetFont('Arial','B',14);
$pdf->Text(100,90,'Para:');

$pdf->Ln(85);
$pdf->SetTextColor(0);
$pdf->Cell(10);
$pdf->SetFont('Arial','B',20);
$pdf->cell(175,10,$nombreCompleto,'1','1','C');

$pdf->SetFont('Arial','B',14);
$pdf->Text(50,120,'Por haber culminado el primer nivel de catequesis');

$pdf->Text(70,130,$titulo3);

$pdf->Text(85,140,'04 de diciembre 2017');

$pdf->Text(80,160,'_____________________');
$pdf->Text(68,170,'LUIS HORACIO USECHE SANCHEZ');
$pdf->Text(93,180,'PARROCO');

$pdf->Output();
?>   
        