<?php

$numero = 50;
$texto = "<br> salida de texto";
$boolean = true;

echo $numero;
echo $texto;
echo $boolean;

echo "<br>";
//Arrays
//Arrays predefinidos
$array = array("elemento1", 2 , "elemento 3");
echo $array[0];

//Arrays asociativos o personalizados
$asociativo = array("clave1" => "elemento 1", "clave2" => 2 );
echo $asociativo["clave1"];
echo $asociativo["clave2"];