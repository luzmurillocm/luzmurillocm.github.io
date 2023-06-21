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
            background-size: 90%;
            background-repeat: no-repeat;
            background-position: center;
        }
        .ficha{
            background-image: url("ficha.png");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }

    </style>
</head>
<body>
   
    <div class="container">
    <h1>Practica 7 - Tablero de serpiente y escaleras</h1><hr>
        <form action="practica7.php" method= "post">
            <input type="submit" value="jugar" class="btn btn-success" >
        <div class="row">
        <?php
        $colores = ["#b1ddd3", "#d896ff", "	#efbbff", "#89cff0", "#f1cbff", "#d896ff", "#c6c4e1"];
        if(isset($_POST["casilla"])){
            $dado= rand(1,12);
            echo"<h2>Resultados del dado: ".$dado."</h2>";
            $casilla=$dado+intval($_POST["casilla"]);
            echo"<h3>El jugador estaba en la casilla ".intval($_POST["casilla"])." y paso a la casilla ".$casilla."</h3>";
            //valida si gano el jugador
            if($casilla >= 100){
                echo"<h1> El Jugador Gano</h1>";
                $casilla = 100;
            }




            //valida la escalera 
            if($casilla == 5){
                $casilla = 16;
                echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 15</h3>";
            }
            if($casilla == 22){
                $casilla = 33;
                echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 15</h3>";
            }
            if($casilla == 9){
                $casilla = 20;
                echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 15</h3>";
            }
            if($casilla == 45){
                $casilla = 56;
                echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 15</h3>";
            }
            if($casilla == 13){
                $casilla = 24;
                echo "<h3> El jugador cayo en una escalera <img src='escalera.png' width='50px'> y subio a la casilla 15</h3>";
            }
            //serpientes
            if($casilla == 17){
                $casilla = 28;
                echo "<h3> El jugador cayo en una serpiente <img src='serpiente.png' width='50px'> y bajo a la casilla 17</h3>";
            }
            if($casilla == 25){
                $casilla = 36;
                echo "<h3> El jugador cayo en una serpiente <img src='serpiente.png' width='50px'> y bajo a la casilla 25</h3>";
            }
            if($casilla == 40){
                $casilla = 51;
                echo "<h3> El jugador cayo en una serpiente <img src='serpiente.png' width='50px'> y bajo a la casilla 40</h3>";
            }
            if($casilla == 54){
                $casilla = 65;
                echo "<h3> El jugador cayo en una serpiente <img src='serpiente.png' width='50px'> y bajo a la casilla 54</h3>";
            }
            if($casilla == 88){
                $casilla = 99;
                echo "<h3> El jugador cayo en una serpiente <img src='serpiente.png' width='50px'> y bajo a la casilla 88</h3>";
            }












        }else{
            $casilla = 0;
        }
            ?>
            <?php
            for($i=100; $i>0; $i--){
                if($casilla == $i){
                    echo "<div class='col-1 card m-1 casilla ficha' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                }else if($i == 22 || $i == 13 || $i == 5 || $i == 9 || $i == 45 ){
                    echo "<div class='col-1 card m-1 casilla escalera' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                }else if($i == 28 || $i == 51 || $i == 36 || $i == 65 || $i == 99 ){
                    echo "<div class='col-1 card m-1 casilla serpiente' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                }else{
                    echo "<div class='col-1 card m-1 casilla' style='background-color:".$colores[rand(0,6)].";'>".$i."</div>";
                }
                
              }
            ?>
            </div>
            <input type="hidden" name="casilla" value="<?php echo $casilla;?>">
        </form>
    </div>
</body>
</html>