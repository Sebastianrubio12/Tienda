<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

    <?php 

        $producto1="papas";
        $producto2="arroz";
        $producto3="platano";
        $producto4="zanahoria";
        $producto5="huevos";
        $producto6="arepas";
        $producto7="pan integral";
        $producto8="cafe";
        $producto9="papel higienico";
        $producto10="pasta dental";
        $producto11="rexona";
        $producto12="aceite";
        $producto13="azucar";
        $producto14="sal";
        $producto15="leche";
        $producto16="lentejas";
        $producto17="frijoles";
        $producto18="chicharron";
        $producto19="quesito";
        $producto20="carnes frias";
        
        $precio1=5000;
        $precio2=5000;
        $precio3=3500;
        $precio4=4250;
        $precio5=12000;
        $precio6=6500;
        $precio7=3800;
        $precio8=5000;
        $precio9=8000;
        $precio10=3500;
        $precio11=14600;
        $precio12=3000;
        $precio13=1500;
        $precio14=700;
        $precio15=4000;
        $precio16=1500;
        $precio17=3000;
        $precio18=20000;
        $precio19=4500;
        $precio20=25000;

        //ARREGLO DE UNA DIMENSION(UNIDEMENSIONAL):
        $productos=array("papas","arroz","platano","zanahoria","huevos","arepas","pan","cafe","papel","crema","rexona","aceite","azucar","sal","leche","lentejas","frijol","chicha","quesito","carnes frias");

     print_r($productos);
     echo("<br>");
     echo("<br>");
     echo($productos[7]);
     echo("<br>");
     echo("<br>");

     $precios=array(5000,5000,3500,4250,120000,6500,3800,5000,8000,3500,146000,3000,1500,700,4000,1500,3000,20000,4500,25000);


     print_r($precios);
     echo("<br>");
     echo("<br>");
     echo($precios[7]);



     //ARREGLOS ASOCIATIVOS
     $productosAsociativo=array("cajon1"=>"papas","cajon2"=>"arroz","cajon3"=>"platano","cajon4"=>"zanahoria","cajon5"=>"huevos","cajon6"=>"arepas","cajon7"=>"pan","cajon8"=>"cafe","cajon9"=>"papel","cajon10"=>"crema","cajon11"=>"rexona","cajon12"=>"aceite","cajon13"=>"azucar","cajon14"=>"sal","cajon15"=>"leche","cajon16"=>"lentejas","cajon17"=>"frijol","cajon18"=>"chicha","cajon19"=>"quesito","cajon20"=>"carnes frias");
        echo("<br>");
        echo("<br>");
        print_r($productosAsociativo);

        $precios=array("precio1"=>5000,"precio2"=>5000,"precio3"=>3500,"precio4"=>4250,"precio5"=>120000,"precio6"=>6500,"precio7"=>3800,"precio8"=>5000,"precio9"=>8000,"precio10"=>3500,"precio11"=>146000,"precio12"=>3000,"precio13"=>1500,"precio14"=>700,"precio15"=>4000,"precio16"=>1500,"precio17"=>3000,"precio18"=>20000,"precio19"=>4500,"precio20"=>25000);


            
            echo("<br>");
            echo("<br>");
            print_r($precios);
            echo("<br>");
            echo($precios["precio5"])
            

    ?>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>