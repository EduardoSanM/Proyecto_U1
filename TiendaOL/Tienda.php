<?php session_start();?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>

        <title>Productos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>
    <body>

        <?php
    $carrito_mio=$_SESSION['carrito'];
    $_SESSION['carrito']=$carrito_mio;
    
    // contamos nuestro carrito
    if(isset($_SESSION['carrito'])){
        for($i=0;$i<=count($carrito_mio)-1;$i ++){
        if($carrito_mio[$i]!=NULL){ 
        $total_cantidad = $carrito_mio['cantidad'];
        $total_cantidad ++ ;
        $totalcantidad += $total_cantidad;
        }
    }
}

    ?>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Carrito de Compras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="modal-body">
				<div>
					<div class="p-2">
						<ul class="list-group mb-3">
                            
							<?php
                            $total=0;
							if(isset($_SESSION['carrito'])){
							for($i=0;$i<=count($carrito_mio)-1;$i ++){
							if($carrito_mio[$i]!=NULL){
						
                                      ?>
							<li class="list-group-item d-flex justify-content-between lh-condensed">
								<div class="row col-12" >
									<div class="col-6 p-0" style="text-align: left; color: #000000;"><h6 class="my-0">Cantidad: <?php echo $carrito_mio[$i]['cantidad'] ?> : <?php echo $carrito_mio[$i]['titulo']; ?></h6>
									</div>
									<div class="col-6 p-0"  style="text-align: right; color: #000000;" >
									<span   style="text-align: right; color: #000000;"><?php echo $carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad'];    ?> $</span>
									</div>
								</div>
							</li>
							<?php
							$total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							}
						}
					}
							?>

                    <li class="list-group-item d-flex justify-content-between">
						<span  style="text-align: left; color: #000000;">Total (MX)</span>
							<strong  style="text-align: left; color: #000000;"><?php
                                 $total=0;
							        if(isset($_SESSION['carrito'])){
							            for($i=0;$i<=count($carrito_mio)-1;$i ++){
							        if($carrito_mio[$i]!=NULL){ 
							            $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
							    }
                            }
                    }
                                echo $total;  ?> $</strong>
                            
							</li>
						</ul>
					</div>
				</div>
			</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
        <!--<button-- type="button" class="btn btn-primary">Vaciar carrito</button-->
        <a type="button" class="btn btn-primary" href="borrarcarro.php">Vaciar carrito</a>
      </div>
    </div>
  </div>
</div>


<!-- ********************************************************************************************************************************************* -->
<!-- Este es el Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Gamer Top </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"><i class="fa-solid fa-house-chimney"></i> Página de Inicio</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"> Categorias</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"> Los mas vendidos</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"> Atención al cliente</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mas Opciones</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                            <li><a class="dropdown-item" href="#!">Ayuda</a></li>
                                <li><a class="dropdown-item" href="index.php">Salir</a></li>
                               
                            </ul>
                        </li>
                    </ul>

 

                   <form class="d-flex">


                   <!--    boton Carrito -->
                    
                        <button  type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">
                           
                        <i class="bi-cart-fill me-1"></i>
                            Carrito
                            <?php if(!empty($fullname)) {?>
                            <?php echo $totalcantidad; ?>
                            <?php }?>
                            
                            
                            <!--<span class="badge bg-dark text-white ms-1 rounded-pill">0</span>-->
                        </button>
                        

                    </form>
                </div>
            </div>
        </nav>


       <!-- Header-->
       <header class="bg-warning py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-black">
                    <h1 class="display-4 fw-bolder">Bienvenido a Gamer Top</h1>
                    <p class="lead fw-normal text-dark-50 mb-0">Tu mejor opción en calidad & precios.</p>
                </div>
            </div>
        </header>


        <!-- PRODUCTOS-->
        <section class="bg-dark py-5">
        <div class="text-left text-white">
                    <h1 class="display-4 fw-bolder">Juegos</h1>
                    
                </div>
            <div class="container px-5 px-lg-2 mt-4">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-3">
                        <div class="card h-100">

                                 <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="700" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 1" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />

                            <!-- Product image-->
                            <img class="card-img-top" src="https://ss423.liverpool.com.mx/xl/1110241174.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Halo Infinity</h5>

                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$749.00</span>
                                    $700.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button type="submit" class="text-center"><a class="btn btn-outline-dark mt-auto"> Comprar</a></button>
                            </from>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100">

                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="499" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 2" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://m.media-amazon.com/images/I/71ls7-2FwLL._AC_SL1000_.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Gears 5</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$600.00</span>
                                    $499.00
                                </div>
                            </div>


                            <!-- Product actions-->
                            <from class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Comprar</a></button>
                            </from>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="500" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 3" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://s3.us-east-2.amazonaws.com/ccp-prd-s3-uploads/2020/3/4/41cff3d1d57c11dced8495de593ec20420ae9ba7.jpeg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Modern Warfare</h5>

                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$650.00</span>
                                    $500.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <from class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Comprar</a></button>
                            </from>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="550" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 4" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Product image-->
                            <img class="card-img-top" src="https://images-na.ssl-images-amazon.com/images/I/81XDBmZCsdL._AC._SR360,460.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Assassins Creed Valhalla</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    $550.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <from class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Comprar</a></button>
                                </from>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="650" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 5" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem"></div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsh-u1yx1yAGnRjAV1EjJP18bva3wMz7GvDQSZyBrbvc53MHgA2IKz_VmF2pu9R0B0Ep8&usqp=CAU" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mando Halo 5</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$800.00</span>
                                    $650.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <from class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Comprar</a></button>
                             </from>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="580" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 6" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Product image-->
                            <img class="card-img-top" src="https://nacionbeta.com/wp-content/uploads/2018/02/RG.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mando God Of War "PS4"</h5>
                                    <!-- Product price-->
                                    $580.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <from class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto" >Comprar</a></buton>
                            </from>
                        </div>
                    </div>

                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="650" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 7" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Sale badge-->
                            <!-- Product image-->
                            <img class="card-img-top" src="https://http2.mlstatic.com/D_NQ_NP_719694-MLM32055735772_092019-O.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mando Gears 5</h5>
                                    <!-- Product reviews-->
                                   
                                    <!-- Product price-->
                                    $650.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <form class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto">Comprar</a></button>
                            </from>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                        <form id="formulario" name="formulario" method="post" action="cart.php">
                            <input name="precio" type="hidden" id="precio" value="1350" />
                            <input name="titulo" type="hidden" id="titulo" value="articulo 8" />
                            <input name="cantidad" type="hidden" id="cantidad" value="1" class="pl-2" />
                            <!-- Product image-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <img class="card-img-top" src="https://juntozstgsrvproduction.blob.core.windows.net/default-blob-images/orig_GC01803_1_815333.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mando inalámbrico + Modern Warfare</h5>
                                    <!-- Product reviews-->
                                   
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">$1550.00</span>
                                    $1350.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <from class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <button class="text-center" type="submit"><a class="btn btn-outline-dark mt-auto" >Comprar</a></button>
                            </from>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-3 bg-light">
            <div class="container"><p class="m-0 text-left text-black">Contactanos al correo: GamerTop@gmail.com</p></div>
            <div class="container"><p class="m-0 text-left text-black"> Derecheros Reservados &copy;</p></div>
            

        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>