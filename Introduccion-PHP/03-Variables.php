<?php
//Una Variable es un contenedor de información, puedo almacenar cualquier valor en ella
$miVariable = "Hola Mundo desde una variable";
echo "<h1>".$miVariable."</h1>";

//Tipo de Variables en PHP
//Al declarar una variable php ya me reconoce el tipo de dato que contiene esa variable
$a = 5; //(int o entero)
$b = "Hola Mundo"; //(cadena (String))
$c = true; //(Valor tipo Boolean: true - false)
$d = 4.40; //(double o punto decimal)
//$e = new Calculadora("x"); //(Tipo de datos con Objetos)
//$f = array("fecha" => date('d.m.Y')); //(Colección de Datos)
$g = date('d.m.Y');
$h = NULL; //(Tipo de dato null)

echo "La variable $a es de tipo : ".gettype($a)."<br>";
echo "La variable $b es de tipo : ".gettype($b)."<br>";
echo "La variable $c es de tipo : ".gettype($c)."<br>";
echo "La variable $d es de tipo : ".gettype($d)."<br>";
echo "La variable $g es de tipo : ".gettype($g)."<br>";
echo "La variable $h es de tipo : ".gettype($h)."<br>";

//Debuggear Variable
echo "Variable Debuggeada :";
echo "<br>";
$newVariable[] ="Hola Ecuador";
$newVariable[] ="Hola Ecuador";
var_dump($newVariable);







