<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero = $_POST['numero']; 
$vector = explode(" ", $numero);
$suma = 0;
$numeros_elemento=count($vector);
foreach ($vector as $elemento) {
    $suma += $elemento;
    $div = $suma / $numeros_elemento;
}
echo "El resultado de la suma es $suma";
echo "</br>";
echo "</br>";
echo "Hay estos numeros $numeros_elemento";
echo "</br>";
echo "</br>";
echo "La media de los numeros es $div";