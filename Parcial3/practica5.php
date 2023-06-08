<?php

    $cuadros = $_POST["cuadro"];

    for($i=0; $i<count($cuadros); $i++){
        echo $cuadros[$i]. ",";
        if($cuadros[$i] != "X" && $cuadros[$i] != "O"){
            echo "<h2>Solo se permite x y/o O</h2>";
            return;
        }
    }

        /*
        [0][1][2]
        [ ][ ][ ]
        [ ][ ][ ]
        */
        if($cuadros[0] == "X" && $cuadros[1] == "X" && $cuadros[2] == "X"){
            echo "<h1>Ganador [X]</h1>";
            echo "[X][X][X]<br>";
            echo "[ ][ ][ ]<br>";
            echo "[ ][ ][ ]";
            return;
        } else if($cuadros[0] == "O" && $cuadros[1] == "O" && $cuadros[2] == "O"){
            echo "<h1>Ganador [O]</h1>";
            echo "[O][O][O]<br>";
            echo "[ ][ ][ ]<br>";
            echo "[ ][ ][ ]";
        }

            /*
            [ ][ ][ ]
            [3][4][5]
            [ ][ ][ ]
            */
            if($cuadros[3] == "X" && $cuadros[4] == "X" && $cuadros[5] == "X"){
                echo "<h1>Ganador [X]</h1>";
                echo "[ ][ ][ ]<br>";
                echo "[X][X][X]<br>";
                echo "[ ][ ][ ]";
             return;
            } else if($cuadros[3] == "O" && $cuadros[4] == "O" && $cuadros[5] == "O"){
                echo "<h1>Ganador [O]</h1>";
                echo "[ ][ ][ ]<br>";
                echo "[O][O][O]<br>";
                echo "[ ][ ][ ]";
            }

            /*
            [ ][ ][ ]
            [ ][ ][ ]
            [6][7][8]
            */
            if($cuadros[6] == "X" && $cuadros[7] == "X" && $cuadros[8] == "X"){
                echo "<h1>Ganador [X]</h1>";
                echo "[ ][ ][ ]<br>";
                echo "[ ][ ][ ]<br>";
                echo "[X][X][X]";
                return;
            } else if($cuadros[6] == "O" && $cuadros[7] == "O" && $cuadros[8] == "O"){
                echo "<h1>Ganador [O]</h1>";
                echo "[ ][ ][ ]<br>";
                echo "[ ][ ][ ]<br>";
                echo "[O][O][O]";
            }

             /*
            [0][ ][ ]
            [3][ ][ ]
            [6][ ][ ]
            */
            if($cuadros[0] == "X" && $cuadros[3] == "X" && $cuadros[6] == "X"){
                echo "<h1>Ganador [X]</h1>";
                echo "[X][ ][ ]<br>";
                echo "[X][ ][ ]<br>";
                echo "[X][ ][ ]";
                return;
            } else if($cuadros[0] == "O" && $cuadros[3] == "O" && $cuadros[6] == "O"){
                echo "<h1>Ganador [O]</h1>";
                echo "[O][ ][ ]<br>";
                echo "[O][ ][ ]<br>";
                echo "[O][ ][ ]";
            }

             /*
            [ ][1][ ]
            [ ][4][ ]
            [ ][7][ ]
            */
            if($cuadros[1] == "X" && $cuadros[4] == "X" && $cuadros[7] == "X"){
                echo "<h1>Ganador [X]</h1>";
                echo "[ ][X][ ]<br>";
                echo "[ ][X][ ]<br>";
                echo "[ ][X][ ]";
                return;
            } else if($cuadros[1] == "O" && $cuadros[4] == "O" && $cuadros[7] == "O"){
                echo "<h1>Ganador [O]</h1>";
                echo "[ ][O][ ]<br>";
                echo "[ ][O][ ]<br>";
                echo "[ ][O][ ]";
            }

             /*
            [ ][ ][2]
            [ ][ ][5]
            [ ][ ][8]
            */
            if($cuadros[2] == "X" && $cuadros[5] == "X" && $cuadros[8] == "X"){
                echo "<h1>Ganador [X]</h1>";
                echo "[ ][ ][X]<br>";
                echo "[ ][ ][X]<br>";
                echo "[ ][ ][X]";
                return;
            } else if($cuadros[2] == "O" && $cuadros[5] == "O" && $cuadros[8] == "O"){
                echo "<h1>Ganador [O]</h1>";
                echo "[ ][ ][O]<br>";
                echo "[ ][ ][O]<br>";
                echo "[ ][ ][O]";
            }

            /*
            [0][ ][ ]
            [ ][4][ ]
            [ ][ ][8]
            */
            if($cuadros[0] == "X" && $cuadros[4] == "X" && $cuadros[8] == "X"){
                echo "<h1>Ganador [X]</h1>";
                echo "[X][ ][ ]<br>";
                echo "[ ][X][ ]<br>";
                echo "[ ][ ][X]";
                return;
            } else if($cuadros[0] == "O" && $cuadros[4] == "O" && $cuadros[8] == "O"){
                echo "<h1>Ganador [O]</h1>";
                echo "[O][ ][ ]<br>";
                echo "[ ][O][ ]<br>";
                echo "[ ][ ][O]";
            }

             /*
            [ ][ ][2]
            [ ][4][ ]
            [6][ ][ ]
            */
            if($cuadros[2] == "X" && $cuadros[4] == "X" && $cuadros[6] == "X"){
                echo "<h1>Ganador [X]</h1>";
                echo "[ ][ ][X]<br>";
                echo "[ ][X][ ]<br>";
                echo "[X][ ][ ]";
                return;
            } else if($cuadros[2] == "O" && $cuadros[4] == "O" && $cuadros[6] == "O"){
                echo "<h1>Ganador [O]</h1>";
                echo "[ ][ ][O]<br>";
                echo "[ ][O][ ]<br>";
                echo "[O][ ][ ]";
            }

            function pintaLineaGanadora($p1, $p2, $p3, $cuadros){
                $color = "border:1px solid black; padding: 10px; margin: 2px";
            }
     
     
     



?>