<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$serie = $_POST['serie']; //esto es un string
$vector = explode(":", $serie); //pasamos a un array, cada elemento es un número
$suma = 0; //antes de empezar a sumar elementos
foreach ($vector as $elemento) {
    $suma += $elemento;
}
echo "El resultado de la suma es $suma";
