<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">   
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="js/popper.min.js"></script>
    <!-- ESTILO -->
    <link rel="stylesheet" href="../muebles/css/styles.css">
    <!-- TITULO -->
    <title>catalogo</title>
</head>

<body>
   <style type="text/css">
	body {
    
	background: linear-gradient(0deg, rgb(102, 94, 94) 10%, rgb(245, 236, 236) 100%);
	margin-top: 20px;
    padding: 0;
}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: #4e4646;
		background-color: lightblue;
		border: none;
		border-radius: 5px;
	}

	#box{

		background-color: grey;
		width: 600px;
		padding: 20px;
		border-radius: 5px;
		align: center;
	}

	</style>
	 
    <h2 class="categories__title">Categoria Muebles</h2>

    <section class="carousel" >
        <div class="carousel__container"  >

            <div class="carousel-item" >

                <a href="producto.html"><img class="carousel-item__img" src="\muebles\img\baño.jpg" alt="producto"></a>
                <div class="carousel-item__details">
                    <div>
                        <a href="carrito.php" class="btn btn-block btn-primary agregar-carrito" >Comprar</a>
                    </div>
                    <p class="carousel-item__details--title">Mueble baño</p>
                    <p class="carousel-item__details--subtitle">precio: $ 250.000</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="carousel-item__img" src="\muebles\img\camarote.jpg" alt="" />
                <div class="carousel-item__details">
                    <div>
                        <a href="carrito.php" class="btn btn-block btn-primary agregar-carrito" >Comprar</a>
                    </div>
                    <p class="carousel-item__details--title">Camarote</p>
                    <p class="carousel-item__details--subtitle">precio: $ 1.200.000</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="carousel-item__img" src="\muebles\img\sillas.jpg" alt="" />
                <div class="carousel-item__details">
                    <div>
                        <a href="carrito.php" class="btn btn-block btn-primary agregar-carrito" >Comprar</a>
                    </div>
                    <p class="carousel-item__details--title">sillas barra</p>
                    <p class="carousel-item__details--subtitle">precio: $ 135.000</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="carousel-item__img" src="\muebles\img\cocina.jpg" alt="" />
                <div class="carousel-item__details">
                    <div>
                        <a href="carrito.php" class="btn btn-block btn-primary agregar-carrito" >Comprar</a>
                    </div>
                    <p class="carousel-item__details--title">Muebles cocina</p>
                    <p class="carousel-item__details--subtitle">precio: $ 999.990</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="carousel-item__img" src="\muebles\img\cama king.jpg" alt="" />
                <div class="carousel-item__details">
                    <div>
                        <a href="carrito.php" class="btn btn-block btn-primary agregar-carrito" >Comprar</a>
                    </div>
                    <p class="carousel-item__details--title">Cama King</p>
                    <p class="carousel-item__details--subtitle">precio: $ 2. 199.990</p>
                </div>
            </div>

    </section>
    <footer class="footer">
        <a href="/">Terminos de uso</a>
        <a href="/">Declaración de privacidad</a>
        <a href="/">Centro de ayuda</a>
    </footer>

</body>

</html>