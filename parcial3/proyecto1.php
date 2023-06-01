<?php

    echo"<h1>hola mundo</h1>";
    
    echo"<hr>";

    $nombre = "luis";
    $edad = 18;

    if($edad > 16){
        echo $nombre . "es mayor de edad";
    }else{
        echo $nombre . "es menor de edad";
    }

    echo"<br></br>";
    for($i=0; $i<10; $i++){
        echo $i. "<br>";
    }

?>