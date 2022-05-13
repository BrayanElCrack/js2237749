<?php 
session_start();

	include("connection.php");
	include("functions.php");
    if(!empty($_POST)){
$correo=$_POST["email"];
  echo "Bienvenid@,$correo";}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="Plan de mejoramiento\css\estilos.css">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>The Home</title>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <div><img src="https://icon-library.com/images/home-logo-icon/home-logo-icon-0.jpg" height="50" ></div>     
</head>
<body>
    <style type="text/css">
	body {
        background: rgb(165, 18, 13);
        background: linear-gradient(0deg, rgb(102, 94, 94) 0%, rgb(204, 34, 34) 100%);
        margin-top: 20px;
        padding: 0;
    }
	</style>

    <br><br>
    <h3>mas cerca de ti...</h3>
    <a href="logout.php">Salir</a>

	<br>


 <header>
    
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="#">THE HOME</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <img src="img/cart.jpeg" class="nav-link dropdown-toggle img-fluid" height="70px"
                                    width="70px" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"></img>
                                <div id="carrito" class="dropdown-menu" aria-labelledby="navbarCollapse">
                                    <table id="lista-carrito" class="table">
                                        <thead>
                                            <tr>
                                                <th>Imagen</th>
                                                <th>Nombre</th>
                                                <th>Precio</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>

                                    <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block">Vaciar Carrito</a>
                                    <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Continuar</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item dropdown" >
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categoría</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://127.0.0.1:5502/index.html#">Comedores</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:5502/index.html#">Sillas</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:5502/index.html#">Cocinas</a></li>
            <li><a class="dropdown-item" href="http://127.0.0.1:5502/index.html#">Sofas</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\Plan de Mejoramiento\signup.php">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="\Plan de Mejoramiento\login.php">inicio de sesión</a>
        </li>
      </ul>
      <header>
       <main>
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 my-4 mx-auto text-center">
            <h1 class="display-4 mt-4">Lista de Productos</h1>
            <p class="lead">Selecciona uno de nuestros productos</p>
        </div>

        <div class="container" id="lista-productos">
            
            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Cocina Moderna</h4>
                    </div>
                    <div class="card-body">
                        <img src="https://static8.depositphotos.com/1356966/902/i/600/depositphotos_9024448-stock-photo-modern-trendy-design-black-wooden.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$/ <span class="">4300000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Madera de la mejor calidad</li>
                            <li>Duración garantizada</li>
                         </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="1">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Cama Flotante</h4>
                    </div>
                    <div class="card-body">
                        <img src="https://orizontal.com.co/wp-content/uploads/2020/04/Aston-letto-bed-lit-capitonne%CC%81-pelle-leather-cuir-01-retocada.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$/ <span class="">850000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Los mejores materiales</li>
                            <li>Instalación gratis</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="2">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Silla acolchada</h4>
                    </div>
                    <div class="card-body">
                        <img src="https://i.blogs.es/c42bef/81klat3i8el._ac_sl1500_/450_1000.jpeg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$/ <span class="">170000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Pinturas acrilicas</li>
                            <li>Hecho en colombia</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="3">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Comedor de 6 puestos</h4>
                    </div>
                    <div class="card-body">
                        <img src="https://www.amacasaydecoracion.cl/wp-content/uploads/89027622_610715449774897_1663852523535990784_n.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$/ <span class="">510000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Buenos acabados</li>
                            <li>Madera resistente</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="4">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Escritorio estudiantil</h4>
                    </div>
                    <div class="card-body">
                        <img src="https://www.sams.com.mx/images/product-images/img_small/980024806s.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$/ <span class="">355000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Variedad de diseños</li>
                            <li>Cualquier medidas</li>
                            <li>Hechos a mano</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="5">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Cortinas de terciopelo</h4>
                    </div>
                    <div class="card-body">
                        <img src="https://ae01.alicdn.com/kf/Hf53c56bc03a1423b8a615529f42125eda/Cortinas-de-terciopelo-italiano-de-doble-Color-para-dormitorio-cortina-gruesa-para-ventana-cenefa-para-sala.jpg_Q90.jpg_.webp" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$/ <span class="">82000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Elige tu diseño</li>
                            <li>Diferentes tamaños</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="6">Comprar</a>
                    </div>
                </div>

            </div>

            <div class="card-deck mb-3 text-center">
                
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Lamparas vintage</h4>
                    </div>
                    <div class="card-body">
                        <img src="https://www.decoora.com/wp-content/uploads/2017/02/ca90a932c7ffef7f9b6e24628ae414a4-830x567.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$/ <span class="">210000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Hecho en china</li>
                            <li>Lista para instalar</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="7">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Escultura mujer</h4>
                    </div>
                    <div class="card-body">
                        <img src="https://sc04.alicdn.com/kf/Ha11786b52f2749e88b03c419b544427bf.jpg" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$/ <span class="">25000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Tamaño: 30cm</li>
                            <li></li>
                            <li>Hecho en metal</li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="8">Comprar</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-bold">Puertas de madera</h4>
                    </div>
                    <div class="card-body">
                        <img src="data:image/jpeg;base64,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" class="card-img-top">
                        <h1 class="card-title pricing-card-title precio">$/. <span class="">375000</span></h1>

                        <ul class="list-unstyled mt-3 mb-4">
                            <li></li>
                            <li>Estilos personalizados</li>
                            <li>Medidas: 185m x 1m</li>
                            <li></li>
                        </ul>
                        <a href="" class="btn btn-block btn-primary agregar-carrito" data-id="9">Comprar</a>
                    </div>
                </div>

            </div>


        </div>
    </main>
<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
           
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Tienda online donde puedes comprar: Decoración para el hogar, muebles, herramientas, materiales de construcción y más.</p>
            
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2022 <b>The Home</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
 <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
</body>

</html>