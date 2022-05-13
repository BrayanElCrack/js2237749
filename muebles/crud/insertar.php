<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/jquery-3.6.0.min"></script>
		<script src="js/bootstrap.min"></script>	
	</head>
	
	<body>
	<p>&nbsp;</p>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">AGREGAR PRODUCTO</h3>

			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
				<br>
					<label for="codigo" class="col-sm-2 control-label">Codigo del producto</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" required>
					</div>
				</div>
				
				<div class="form-group">
				<br>
					<label for="seccion" class="col-sm-2 control-label">Seccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="seccion" name="seccion" placeholder="Seccion" required>
					</div>
				</div>
				
				<div class="form-group">
				<br>
					<label for="producto" class="col-sm-2 control-label">Nombre del producto</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="producto" name="producto" placeholder="producto">
					</div>
				</div>
				
					<div class="form-group">
					<br>
					<label for="origen" class="col-sm-2 control-label">Pais de origen</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="origen" name="origen" placeholder="Origen">
					</div>
				</div>
						
				<div class="form-group">
					<label for="importado" class="col-sm-2 control-label">¿El producto es importado?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
						<br>
							<input type="radio" id="importe" name="importe" value="verdadero" checked> VERDADERO
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="importe" name="importe" value="falso"> FALSO
						</label>
					</div>
				</div>
					
					<div class="form-group">
					<br>
					<label for="precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="precio" name="precio" placeholder="Precio">
					</div>
				</div>
			
				
				<div class="form-group">
				<br>
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>