
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
    $this->Cell(30,50,'Attestation d\'inscription',2,0,'C');
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
}

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$str = utf8_decode('Je soussigné, Mme Abaakil Alaoui Directrice du Lycée mySchool Certifie que '  . $chkoun[0]['prenomStudent']. ' ' .$chkoun[0]['nomStudent']. ' est  scolarisé(e) au lycée dans le cadre des échanges scolaires   organisés par lycée pendant l\'année scolaire 2017- 2018 en classe de 1ère.');

$pdf->MultiCell(0,10,$str,0,1);
$str2 = utf8_decode(" Fait    à     ............,  le    ............ / ............ /    2017
Pour faire valoir, ce que de droit, établi ce jour en 2 exemplaires
Signature du Proviseur Cachet de l'établissement " );
$pdf->Ln(20);
$pdf->MultiCell(0,10,$str2,0,1);  

$pdf->Output();
?>

