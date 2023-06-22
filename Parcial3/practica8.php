<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 8 - Juego de Lotería</title>
    <link rel="stylesheet" href="bootstrap.css">
    <style>
        .ficha{
            background-image: url('ficha loteria.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .color{
            opacity: 0.3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Juego de la Lotería</h1><hr>
        <form action="practica8.php" method="POST">
            <?php
            if(isset($_POST["carta1"])){
                $carta1 = $_POST["carta1"];
                $carta2 = $_POST["carta2"];
            }else{
                $carta1 = [];
                $total = 0;
                while($total < 16){
                    $numero = rand(1,54);
                    if(array_search($numero, $carta1) === false){
                        $carta1[$total] = $numero;
                        $total ++;
                    }
                }

                $carta2 = [];
                $total = 0;
                while($total < 16){
                    $numero = rand(1,54);
                    if(array_search($numero, $carta2) === false){
                        $carta2[$total] = $numero;
                        $total ++;
                    }
                }

            }
              
            ?>
            <input type="submit" value="Dar carta" name="carta" class="btn btn-primary"><hr>
            <div class="row">
                <div class="col-6">
                    <div class="row m-1">
                    <?php
                        //Pintar carta 1
                        for($i=0; $i<16; $i++){
                            $numero = rand(1,54);
                            echo "<div class='col-3 p-0'><img src='loteria/".$numero.".jpg' class='img-thumbnail'></div>";
                        }
                    ?>
                    </div>
                   
                </div>
                <div class="col-6">
                <div class="row m-1">
                    <?php
                        //Pintar carta 1
                        for($i=0; $i<16; $i++){
                            $numero = rand(1,54);
                            echo "<div class='col-3 p-0'><img src='loteria/".$numero.".jpg' class='img-thumbnail'></div>";
                        }
                    ?>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>






