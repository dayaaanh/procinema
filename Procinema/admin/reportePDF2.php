<?php
	include 'plantilla2.php';
	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');

	$conexion = new Conexion();
	$con = $conexion->conectarBD();
	$query = "SELECT nom_confiteria ,descripcion, COUNT(cod_ticket) as cantidad_comprada FROM CONFITERIA,TICKETCOMPRA WHERE
    TICKETCOMPRA.cod_confiteria=CONFITERIA.cod_confiteria GROUP BY nom_confiteria,descripcion;";

	$resultado = $con->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(40,6,'NOMBRE COMBO',1,0,'C',1);
	$pdf->Cell(110,6,'DESCRIPCION COMBO',1,0,'C',1);
	$pdf->Cell(45,6,utf8_decode('NÚMERO DE VENTAS'),1,1,'C',1);

	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(40,6,utf8_decode($row['nom_confiteria']),1,0,'C');
		$pdf->Cell(110,6,utf8_decode($row['descripcion']),1,0,'C');
		$pdf->Cell(45,6,utf8_decode($row['cantidad_comprada']),1,1,'C');
	}
	$pdf->Output();
?>
