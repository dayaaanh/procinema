<?php
	include 'plantilla.php';
	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');

	$conexion = new Conexion();
	$con = $conexion->conectarBD();
	$query = "SELECT * FROM CLIENTE ORDER BY puntos DESC";
	$resultado = $con->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'CODIGO',1,0,'C',1);
	$pdf->Cell(40,6,'NOMBRE',1,0,'C',1);
	$pdf->Cell(70,6,'CORREO ELECTRONICO',1,0,'C',1);
	$pdf->Cell(20,6,'PUNTOS',1,1,'C',1);

	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(40,6,utf8_decode($row['cod_cliente']),1,0,'C');
		$pdf->Cell(40,6,utf8_decode($row['nom_cliente']),1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['correo_electronico']),1,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['puntos']),1,1,'C');
	}
	$pdf->Output();
?>


