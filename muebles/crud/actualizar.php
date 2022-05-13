<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM productos WHERE id_producto = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>

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
				<h3 style="text-align:center">ACTUALIZAR PRODUCTO</h3>

			</div>
			
			<form class="form-horizontal" method="POST" action="guardar_actualizacion.php" autocomplete="off">
								
				<div class="form-group">
				<br>
					<label for="seccion" class="col-sm-2 control-label">Seccion</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="seccion" name="seccion" placeholder="Seccion" value="<?php echo $row['seccion'];?>"required>
					</div>
				</div>
                <input type="hidden" id="id" name="id" value="<?php echo $row['id_producto']; ?>" />
				
				<div class="form-group">
				<br>
					<label for="producto" class="col-sm-2 control-label">Nombre del producto</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="producto" name="producto" placeholder="producto"value="<?php echo $row['producto'];?>"required>
					</div>
				</div>
				
					<div class="form-group">
					<br>
					<label for="origen" class="col-sm-2 control-label">Pais de origen</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="origen" name="origen" placeholder="Origen" value="<?php echo $row['origen'];?>"required>
					</div>
				</div>
						
				<div class="form-group">
					<label for="importado" class="col-sm-2 control-label">¿El producto es importado?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
						<br>
							<input type="radio" id="importe" name="importe" value="verdadero" <?php if(($row['importado']=='verdadero')||($row['importado']=='VERDADERO')) echo 'checked'; ?>> VERDADERO
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="importe" name="importe" value="falso"<?php if(($row['importado']=='falso')||($row['importado']=='FALSO')) echo 'checked'; ?>> FALSO
						</label>
					</div>
				</div>
					
					<div class="form-group">
					<br>
					<label for="precio" class="col-sm-2 control-label">Precio</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="precio" name="precio" placeholder="Precio" value="<?php echo $row['precio'];?>"required>
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