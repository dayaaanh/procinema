<?php
	
	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/admin/PHPExcel/Classes/PHPExcel.php');
	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/util/Conexion.php');
	
	$conexion = new Conexion();
	$con = $conexion->conectarBD();
	$sql = "SELECT nom_confiteria ,descripcion, COUNT(cod_ticket) as cantidad_comprada FROM CONFITERIA,TICKETCOMPRA WHERE
    TICKETCOMPRA.cod_confiteria=CONFITERIA.cod_confiteria GROUP BY nom_confiteria,descripcion;";
	$resultado = $con->query($sql);
	$fila = 7; 
	
	$gdImage = imagecreatefromjpeg('images/logojpg.jpg');
	

	$objPHPExcel  = new PHPExcel();
	
	
	$objPHPExcel->getProperties()->setCreator("Marko robles")->setDescription("Reporte de combos más vendidos");
	

	$objPHPExcel->setActiveSheetIndex(0);
	$objPHPExcel->getActiveSheet()->setTitle("Reporte");
	
	$objDrawing = new PHPExcel_Worksheet_MemoryDrawing();
	$objDrawing->setName('Logotipo');
	$objDrawing->setDescription('Logotipo');
	$objDrawing->setImageResource($gdImage);
	$objDrawing->setRenderingFunction(PHPExcel_Worksheet_MemoryDrawing::RENDERING_PNG);
	$objDrawing->setMimeType(PHPExcel_Worksheet_MemoryDrawing::MIMETYPE_DEFAULT);
	$objDrawing->setHeight(90);
	$objDrawing->setCoordinates('A1');
	$objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
	
	$estiloTituloReporte = array(
    'font' => array(
	'name'      => 'Arial',
	'bold'      => true,
	'italic'    => false,
	'strike'    => false,
	'size' =>13
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_NONE
	)
    ),
    'alignment' => array(
	'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloTituloColumnas = array(
    'font' => array(
	'name'  => 'Arial',
	'bold'  => true,
	'size' =>10,
	'color' => array(
	'rgb' => 'FFFFFF'
	)
    ),
    'fill' => array(
	'type' => PHPExcel_Style_Fill::FILL_SOLID,
	'color' => array('rgb' => '538DD5')
    ),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
    'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	);
	
	$estiloInformacion = new PHPExcel_Style();
	$estiloInformacion->applyFromArray( array(
    'font' => array(
	'name'  => 'Arial',
	'color' => array(
	'rgb' => '000000'
	)
    ),
    'fill' => array(
	'type'  => PHPExcel_Style_Fill::FILL_SOLID
	),
    'borders' => array(
	'allborders' => array(
	'style' => PHPExcel_Style_Border::BORDER_THIN
	)
    ),
	'alignment' =>  array(
	'horizontal'=> PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
	'vertical'  => PHPExcel_Style_Alignment::VERTICAL_CENTER
    )
	));
	
	$objPHPExcel->getActiveSheet()->getStyle('A1:C4')->applyFromArray($estiloTituloReporte);
	$objPHPExcel->getActiveSheet()->getStyle('A6:C6')->applyFromArray($estiloTituloColumnas);
	
	$objPHPExcel->getActiveSheet()->setCellValue('B3', '  REPORTE DE CLIENTES CON MÁS PUNTOS');
	$objPHPExcel->getActiveSheet()->mergeCells('B3:C3');
	
	$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	$objPHPExcel->getActiveSheet()->setCellValue('A6', 'NOMBRE');
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(70);
	$objPHPExcel->getActiveSheet()->setCellValue('B6', 'DESCRIPCIÓN COMBO');
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
	$objPHPExcel->getActiveSheet()->setCellValue('C6', 'NÚMERO DE VENTAS');

	
	while($rows = $resultado->fetch_assoc()){
		
		$objPHPExcel->getActiveSheet()->setCellValue('A'.$fila, $rows['nom_confiteria']);
		$objPHPExcel->getActiveSheet()->setCellValue('B'.$fila, $rows['descripcion']);
		$objPHPExcel->getActiveSheet()->setCellValue('C'.$fila, $rows['cantidad_comprada']);
		$fila++; 
	}
	
	$fila = $fila-1;
	
	$objPHPExcel->getActiveSheet()->setSharedStyle($estiloInformacion, "A7:C".$fila);
	
	$filaGrafica = $fila+2;
	

	$writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

	
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="ReporteVentaConfiteria.xlsx"');
	header('Cache-Control: max-age=0');
	
	$writer->save('php://output');
?>
