<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>


    <?php 


            //Base de datos
     
            $productos=array(
                "producto1"=>array("nombre"=>"Jamon","precio"=>5000,"marca"=>"Zenú","foto"=>"https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3515157-1000-1000/7701101280645-1.jpg?v=637279379720170000"),
                "producto2"=>array("nombre"=>"Aceite","precio"=>7500,"marca"=>"Premier","foto"=>"https://jumbocolombiafood.vteximg.com.br/arquivos/ids/196260-1000-1000/7701018007281.jpg?v=636231964318470000"),
                "producto3"=>array("nombre"=>"Sal","precio"=>700,"marca"=>"Refisal","foto"=>"https://s.cornershopapp.com/product-images/1062579.jpg?versionId=xMudDR2eEJFkNAQXlSb4ynRv7vUn1YtW"),
                "producto4"=>array("nombre"=>"Azucar","precio"=>1200,"marca"=>"Manuelita","foto"=>"https://jumbocolombiafood.vteximg.com.br/arquivos/ids/174691-1000-1000/7702406000150.png.jpg?v=636112866944830000"),
                "producto5"=>array("nombre"=>"Leche","precio"=>2200,"marca"=>"Colanta","foto"=>"https://metrocolombiafood.vteximg.com.br/arquivos/ids/161293-1000-1000/7702129003650-2.jpg?v=636670254575170000")
            );


    ?>

<div class="row row-cols-1 row-cols-md-3 g-4">  

 <?php foreach($productos as $producto):?>

    <div class="col"> 
    <div class="card h-100">
      <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>

    </div>

   


 <?php endforeach ?>
    
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>