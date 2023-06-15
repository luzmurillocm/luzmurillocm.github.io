<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 7</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .casilla{
            height: 50px;
        }
        .escalera{
            background-image: url('escalera.png');
            background-size: cover;
        }
        .serpiente{
            background-image: url('serpiente.png');
            background-size: 85%;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <?php
        $colores = ["#efbbff", "#d896ff", "#beaefa", "#99cccc", "#f1cbff", "#ff7b7b", "#1ebbd7"];
    ?>
    <div class="container">
    <h1>Practica 7 - Tablero de serpiente y escaleras</h1><hr>
        <form action="">
        <div class="row">
            <?php
            for($i=100; $i>0; $i--){
                if($i == 22 || $i == 13 || $i == 5 || $i == 9 || $i == 16 ){
                    echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                }else if($i == 28 || $i == 15 || $i == 2 || $i == 65 || $i == 99 ){
                    echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                
                }else{
                    echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                }  
              }
            ?>
            </div>
        </form>
    </div>
</body>
</html>