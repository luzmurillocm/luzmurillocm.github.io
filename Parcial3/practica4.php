<?php

$calificacion=0;
$nombre=$_POST["nombre"];

$pregunta1=$_POST["pregunta1"];
$pregunta2=$_POST["pregunta2"];
$pregunta3=$_POST["pregunta3"];
$pregunta4=$_POST["pregunta4"];
$pregunta5=$_POST["pregunta5"];
$pregunta6=$_POST["pregunta6"];
$pregunta7=$_POST["pregunta7"];
$pregunta8=$_POST["pregunta8"];
$pregunta9=$_POST["pregunta9"];
$pregunta10=$_POST["pregunta10"];

echo "Tu nombre es: ".$nombre;


echo "<h3> Pregunta 1, respuesta seleccionada: (".$pregunta1.")</h3>";

if($pregunta1=="a"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}

echo "<h3>Pregunta 2, respuesta seleccionada: (".$pregunta2.")</h3>";
if($pregunta2=="a"){
    $calificacion++; 
    echo "<img src='correcta.png' width='3%'><hr>";       
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 3, respuesta seleccionada: (".$pregunta3.")</h3>";

if($pregunta3=="b"){
    $calificacion++;   
    echo "<img src='correcta.png' width='3%'><hr>";     
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 4, respuesta seleccionada: (".$pregunta4.")</h3>";
if($pregunta4=="a"){
    $calificacion++;        
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 5, respuesta seleccionada: (".$pregunta5.")</h3>";
if($pregunta5=="a"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 6, respuesta seleccionada: (".$pregunta6.")</h3>";
if($pregunta6=="a" || $pregunta6=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 7, respuesta seleccionada: (".$pregunta7.")</h3>";

if($pregunta7=="c"){
    echo "<img src='correcta.png' width='3%'><hr>";
    $calificacion++;
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 8, respuesta seleccionada: (".$pregunta8.")</h3>";

if($pregunta8=="a"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 9, respuesta seleccionada: (".$pregunta9.")</h3>";
if($pregunta9=="a"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
echo "<h3>Pregunta 10, respuesta seleccionada: (".$pregunta10.")</h3>";
if($pregunta10=="a"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($calificacion>5 && $calificacion<=8){
    echo "Felicidades!!! Pasaste con " .$calificacion;
    echo "<img src='normal.png' width='3%'>";

}elseif($calificacion<5){
    echo "No eres fan. Sacaste " . $calificacion;
    echo "<img src='triste.png' width='10%'><hr>";
}elseif($calificacion>8){
    echo "Eres un fan de verdad!!! Terminaste con calificacion de ". $calificacion;
    echo "<img src='feliz.png' width='3%'><hr>";
}
?>