<?php
require 'fpdf/fpdf.php';


class PDF extends FPDF
{
    function header()
    {
        $this->Image('images/cerdito.png', 5, 5, 25);
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(30);
        $this->Cell(120, 10, 'Detalle General de Bodegas:', 0, 0, 'C');
        $this->Ln(20);
        
        
    }
    function Footer()
    {
        
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0,10, 'Pagina 1 de 1', $this->PageNo().'/{nb}',0,0, 'C' );
    }
    
}


?>
