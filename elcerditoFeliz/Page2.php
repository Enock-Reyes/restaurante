<?php
require 'fpdf/fpdf.php';


class PDF extends FPDF
{
    function header()
    {
        $this->Image('images/el-encuentro.jpg', 5, 5, 40);
        $this->SetFont('Arial', 'B', 15);
        $this->Cell(30);
        $this->Cell(120, 10, 'Reporte General de Salidas:', 0, 0, 'C');
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
