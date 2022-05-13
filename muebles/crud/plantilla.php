<?php
	
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('images/logo.png', 5, 5, 20 );//sintaxis Image('ruta',posision x, posicion y, tamaño)
			$this->SetFont('Arial','B',15);//selecion de la fuente a usar ('tipo fuente','subtipo',tamaño)
			$this->Cell(50);//celda en blanco para que conserve el encabezado (tamaño)
			$this->Cell(120,10, 'Reporte De Productos Existentes',0,0,'C'); //celda titulo(ancho, altura,'titulo', contorno, salto de linea,'alineacion')
			$this->Ln(20);//salto de lunea(puntos)
		}
		
		function Footer()
		{
			$this->SetY(-15);//tamaño del pie de pagina en este caso le digo que desde el borde de la hoja 15 puntos hacia arriba por eso es -15
			$this->SetFont('Arial','I', 8);//selecion de la fuente a usar ('tipo fuente','subtipo',tamaño)
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );//celda para agregar el numero de pagina (alineacion entre la celda, tamaño, 'texto'. funcion de fpdf PageNo.variable para el total de paginas,contorno, salto de linea,'alineacion)
		}		
	}
?>