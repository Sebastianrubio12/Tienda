<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastian-Supermercado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@200&display=swap" rel="stylesheet">
</head>
<body>



<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Ofertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contactanos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Fundaciòn Jimenez
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Proyectos comunitarios</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Producto" aria-label="Search">
          <button class="btn btn-outline-info" type="submit">Buscar Producto</button>
        </form>
      </div>
    </div>
</nav>

  <section id="banner">

    <div>
       <h1>BIENVENIDOS</h1>
       <a href="" class="btn btn-info">Conoce más</a> 
    </div>

  </section>

  


    <?php 


            //Base de datos
     
            $productos=array(
                "producto1"=>array("nombre"=>"Jamon","precio"=>"5.000","marca"=>"Zenú","Descripcion"=>"JAMON ZENU X 450 GR SANDWICH","foto"=>"https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3515157-1000-1000/7701101280645-1.jpg?v=637279379720170000"),
                "producto2"=>array("nombre"=>"Aceite","precio"=>"7.500","marca"=>"Premier","Descripcion"=>"ACEITE PREMIER X 1000 CC GIRASOL","foto"=>"https://jumbocolombiafood.vteximg.com.br/arquivos/ids/196260-1000-1000/7701018007281.jpg?v=636231964318470000"),
                "producto3"=>array("nombre"=>"Sal","precio"=>"700","marca"=>"Refisal","Descripcion"=>"SAL REFISAL X 130 GR","foto"=>"https://s.cornershopapp.com/product-images/1062579.jpg?versionId=xMudDR2eEJFkNAQXlSb4ynRv7vUn1YtW"),
                "producto4"=>array("nombre"=>"Azucar","precio"=>"1.200","marca"=>"Manuelita","Descripcion"=>"AZUCAR MANUELITA X 1000 GR BLANCA","foto"=>"https://jumbocolombiafood.vteximg.com.br/arquivos/ids/174691-1000-1000/7702406000150.png.jpg?v=636112866944830000"),
                "producto5"=>array("nombre"=>"Leche","precio"=>"2.200","marca"=>"Colanta","Descripcion"=>"LECHE COLANTA X 1000 ML ENTERA","foto"=>"https://metrocolombiafood.vteximg.com.br/arquivos/ids/161293-1000-1000/7702129003650-2.jpg?v=636670254575170000")
            );


    ?>


<div class="container">

 

  <div class="row row-cols-1 row-cols-md-3 g-4">  

    <?php foreach($productos as $producto):?>

          <div class="col-4 mt-5 mb-4"> 
            <div class="card h-100">
            
            <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> <?php echo($producto["nombre"])?> <?php echo($producto["marca"])?></h5>
              <p class="card-text"><?php echo($producto["Descripcion"])?></p>
              <h2><?php echo($producto["precio"]."$")?></h2>
              <button type="button" class="btn btn-primary">Agregar al carrito <a href=""><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="6" cy="19" r="2" />
  <circle cx="17" cy="19" r="2" />
  <path d="M17 17h-11v-14h-2" />
  <path d="M6 5l14 1l-1 7h-13" />
</svg></a></button>
                
              <button type="button" class="btn btn-warning">Comprar <a href=""><i class="fas fa-credit-card"></i></a></button>
            </div>
          </div>

          </div>

    
     <?php endforeach ?>
      
    </div>


  </div>


  <footer class="fondoFooter">

  <div class="container-fluid">
      <div class="row">
          <div class="col-6 p-5 text-end text-white">

              <p>Sebastian Rubio Jimenez &copy;</p>
              <p>Medellín-Colombia</p>
              <p>CESDE-2021</p>

          </div>
          <div class="col-6 p-5 text-white">
              <a href=""><i class="fab fa-tiktok fondoIcono"></i></a>
              <a href=""><i class="fab fa-linkedin-in fondoIcono"></i></a>
              <p>&#9751; rubiosebas4gmail.com</p>
              <p>&phone;3113673481</p>
          </div>
      </div>
  </div>
</div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script> 


</body>
</html>