<?php	

	require_once($_SERVER["DOCUMENT_ROOT"] .'/procinema/procinema/admin/pdf/fpdf.php');
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('images/logoC.png', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, utf8_decode('REPORTE VENTAS DE LOS OPERARIOS'),0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'ProCinema - Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>