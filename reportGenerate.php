<?php
require('fpdf/fpdf.php');

class PDF extends FPDF{
    function Header() {
        $this->AddLink();

        /**
         * name
         * sangria lef
         * sangria top
         * ancho
         * alto
         * tipo imagen
         * link
         */
        $this->Image('img/logo.png',10,10,50,0,'','url');
        /**
         * nombre fuente,
         * estilo
         * tamaño
         */
        $this->SetFont('Arial', 'B', 18);
        $this->Cell('80');
        /**
         * alto
         * acnchio
         * nombre
         * rect mostrar borde
         * salto
         * align
         */
        $this->Cell(30,10,'Bla bla bla', 0, 1, 'C');

        $this->SetFont('Arial', 'B', 14);
        $this->Cell('80');
        /**
         * alto
         * acnchio
         * nombre
         * rect
         * salto
         */
        $this->Cell(30,10,'subtitulo', 0, 1, 'C');

        $this->Ln(10);


    }



    function Footer() {
        $this->SetY(-18);
        $this->SetFont('Arial', 'I', 12);
        $this->AddLink();
        $this->Cell(5,10,"www.wwww.www",0,0,'L');

        $this->SetFont('Arial', 'I', 10);
        $this->Cell(0,10,'Pagina '.$this->PageNo().'de {nb}',0,0,'C');

    }
}




$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 18);
$pdf->Cell(120,12, "Hola Mundo",'B',1,'R',0);
$pdf->Output();


?>