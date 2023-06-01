<?php

$nombre = $_GET ["nombre"];

echo "Nombre: " .$nombre ."<br><br>";

$edad = $_GET ["edad"];

echo "Edad: " .$edad ."<br><br>";

$escuela = $_GET ["escuela"];

echo "Escuela: " .$escuela ."<br><br>";

$fecha_ingreso = $_GET ["fecha_ingreso"];

echo "Fecha de ingreso: " .$fecha_ingreso ."<br><br>";

$direccion = $_GET ["dirección"];

echo "Dirección: " .$direccion ."<br><br>";

if($edad >=18){
    echo "Es MAYOR de edad" . "<br><br>";
}else{
    echo "Es MENOR de edad" . "<br><br>";
}

if($escuela =="Cetis 107"){
    echo "<div style='background-color:blue;'>Cetis 107</div>";
}else if($escuela =="CBTIS 224"){
    echo "<div style='background-color:red;'>CBTIS 224</div>";
}else if($escuela =="COBAES"){
    echo "<div style='background-color:green;'>COBAES</div>";
}
?>