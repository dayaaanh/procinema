<?php
	include 'plantilla3.php';
	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');

	$conexion = new Conexion();
	$con = $conexion->conectarBD();
	$query = "SELECT nom_usuario, SUM(precio) as ventas FROM USUARIO, TICKETCOMPRA WHERE 
     TICKETCOMPRA.cod_usuario=USUARIO.cod_usuario GROUP BY nom_usuario;";

	$resultado = $con->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'NOMBRE EMPLEADO',1,0,'C',1);
	$pdf->Cell(70,6,'VENTAS TOTALES',1,1,'C',1);
	

	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['nom_usuario']),1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['ventas']),1,1,'C');
		
	}
	$pdf->Output();
?>
