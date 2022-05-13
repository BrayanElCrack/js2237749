<?php
	include 'plantilla.php';
	require 'connection.php';
	
//crear la consulta
	$sql = "SELECT * FROM users";
	$resultado = $mysqli->query($sql);
	
	
	$pdf = new PDF();//use la clase PDF de FPDF
	$pdf->AliasNbPages();//use la funcion AliasNbPages() para el total de paginas
	$pdf->AddPage();//use la funcion AddPage() para agregar las paginas segun los datos
	
	$pdf->SetFillColor(232,232,232);//establece el color de la celda para el encabezado
	$pdf->SetFont('Arial','B',12);//define la fuente
	$pdf->Cell(50,6,'SECCION',1,0,'C',1);//define el tamaño de las celdas para el informe
	$pdf->Cell(20,6,'ID',1,0,'C',1);
	$pdf->Cell(70,6,'PRODUCTO',1,0,'C',1);
	$pdf->Cell(30,6,'PRECIO',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);//define la fuente para el contenido del informe
	
	while($row = $resultado->fetch_assoc())//recorre la tabla productos para buscar los productos existentes
	{
		$pdf->Cell(50,6,utf8_decode($row['seccion']),1,0,'C');//muestra el contenido de la base da datos
		$pdf->Cell(20,6,$row['id_producto'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['producto']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['precio']),1,1,'C');
	}
	$pdf->Output();//genera el pdf
?>