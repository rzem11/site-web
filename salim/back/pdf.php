<?php
//include connection file
include_once("config1.php");;
include_once("../libs/fpdf.php");
 
class PDF extends FPDF
{
// Page header

function Header()
{
    // Logo
    $this->Image('logo.png',10,2,25);
    $this->SetFont('Arial','B',15);
    $this->Cell(60);
    $this->Cell(60,10,'E-rayen site web pour les meubles et decorations',5,0,'C');
    $this->Ln(25);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(60,10,'Liste des livraison',5,0,'C');
    // Line break
    $this->Ln(15);
}
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$display_heading = array('codeC'=>'ID Commande', 'idL'=>'ID Livraison', 'dateL'=>'Date', 'idLivreur'=>'ID Livreur', 'descL'=>'Etat');
$sql="SELECT * FROM livraison"; 
$result = mysqli_query($con,$sql);
$header = mysqli_query($con, "SHOW columns FROM livraison");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','',12);
foreach($header as $heading) {
$pdf->Cell(38,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(38,12,$column,1);
}
$pdf->Output();
?>
