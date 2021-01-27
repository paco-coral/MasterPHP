<?php

//Operadores de Incremento y decremento
$year = 2019;
echo '<h1>',$year,'</h1>';

echo 'Incremento: ';
$year++; //$year = $year + 1;
echo '<h1>',$year,'</h1>';

echo 'Decremento: ';
$year--;
echo '<h1>',$year,'</h1>';

echo 'Pre Incremento: ';
++$year;
echo '<h1>',$year,'</h1>';

echo 'Pre Decremento: ';
--$year;
echo '<h1>',$year,'</h1>';

//Ejemplos
echo "<h3>Postincremento</h3>";
$a = 5;
echo "Debe ser 5: " . $a++ . "<br />\n"; //Primero Incrementa pero imprime la misma variable porque tiene pendiente un incremento
echo "Debe ser 6: " . $a . "<br />\n"; // Cuando volvemos a usar la variable se realiza el incremento pendiente

echo "<h3>Preincremento</h3>";
$a = 5;
echo "Debe ser 6: " . ++$a . "<br />\n";
echo "Debe ser 6: " . $a . "<br />\n";

echo "<h3>Postdecremento</h3>";
$a = 5;
echo "Debe ser 5: " . $a-- . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";

echo "<h3>Predecremento</h3>";
$a = 5;
echo "Debe ser 4: " . --$a . "<br />\n";
echo "Debe ser 4: " . $a . "<br />\n";