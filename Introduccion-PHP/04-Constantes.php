<?php

//Constates
//Es un contenedor de información que no se puede variar
define('nombre','Alexander Coral'); //Constante tipo String
define('web',20); //Constante Tipo Int
echo '<h1>'.nombre.'</h1><br>';
echo '<h1>'.web.'</h1><br>';
echo gettype(web);
echo '<br>';

//Constantes Predefinidas
//Son  constantes que vienen predefinidas con el lenguaje de programación
//Ejemplo
echo phpinfo();
echo __FILE__;
echo __LINE__;
echo PHP_VERSION;
echo PHP_OS;

