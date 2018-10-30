<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{



// En-tête
function Header()
{
    // Logo
    $this->Image('http://localhost/MadrassAppBeta/res/images/madrassapplogo.png',10,10,60);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(80);
    // Titre
    $this->Cell(30,50,'Bulletin de notes',2,0,'C');
    // Saut de ligne
    $this->Ln(50);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}




// Chargement des données
function LoadData($file)
{
    // Lecture des lignes du fichier
    $lines = file($file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(';',trim($line));
    return $data;
}

// Tableau simple
function BasicTable($data)
{
    // En-tête
   
    // Données
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(0,10,$col,0);
        $this->Ln();
    }
}



}

$pdf = new PDF();
// Titres des colonnes
// Chargement des données
$data = $pdf->LoadData('monbulletin.txt');
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->BasicTable($data);
$pdf->Output();
?>



