<?php

$calificacion=0;

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

if($pregunta1=="a"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($pregunta2=="a"){
    $calificacion++; 
    echo "<img src='correcta.png' width='3%'><hr>";       
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($pregunta3=="c"){
    $calificacion++;   
    echo "<img src='correcta.png' width='3%'><hr>";     
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($pregunta4=="c"){
    $calificacion++;        
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($pregunta5=="b"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($pregunta6=="a"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($pregunta7=="b"){
    echo "<img src='correcta.png' width='3%'><hr>";
    $calificacion++;
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($pregunta8=="c"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
if($pregunta9=="c"){
    $calificacion++;
    echo "<img src='correcta.png' width='3%'><hr>";
}else{
    echo "<img src='incorrecta.png' width='3%'><hr>";       
}
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
    echo "<img src='triste.png' width='3%'><hr>";
}elseif($calificacion>8){
    echo "Eres un fan de verdad!!! Terminaste con calificacion de ". $calificacion;
    echo "<img src='feliz.png' width='3%'><hr>";
}
?>