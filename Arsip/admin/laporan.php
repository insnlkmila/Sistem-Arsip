<?php
include 'config.php';
require('../tampilan/pdf/fpdf.php');

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',20);
$pdf->Image('../tampilan/img/logo1.png',1,1,3,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,' ',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Dinas DUKCAPIL',0,'L');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,' ',0,'L');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,' ',0,'L');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(25.5,0.7,"Laporan Data Arsip Akte Kelahiran",0,10,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(1, 0.8, 'No', 1, 0, 'C');
$pdf->Cell(5, 0.8, 'Nama', 1, 0, 'C');
$pdf->Cell(6.5, 0.8, 'Tempat,Tanggal Lahir', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Alamat', 1, 0, 'C');
$pdf->Cell(3.5, 0.8, 'Tanggal Input', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Keterangan', 1, 1, 'C');

$pdf->SetFont('Arial','',10);
$no=1;
$query=mysql_query("select * from arsip_akte");
while($lihat=mysql_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(5, 0.8, $lihat['nama'],1, 0, 'C');
	$pdf->Cell(6.5, 0.8, $lihat['kota'].','.$lihat['tgl_lahir'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['alamat'],1, 0, 'C');
	$pdf->Cell(3.5, 0.8, $lihat['tgl_input'], 1, 0,'C');
	$pdf->Cell(6, 0.8, $lihat['keterangan'],1, 1, 'C');
	

	$no++;
}

$pdf->Output("laporan_data_arsip.pdf","I");

?>
