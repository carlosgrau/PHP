<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$moneda = $_POST['lista_actual']; 
$moneda2 = $_POST['lista_despues']; 
$cifra = $_POST['valor'];
$euro_dolar = 1.36; 
$euro_libra = 0.82; 
$euro_rupia = 85.40; 
$dolar_euro = 0.73; 
$dolar_libra = 0.60; 
$dolar_rupia = 62.51; 
$libra_euro = 1.21; 
$libra_dolar = 1.65; 
$libra_rupia = 103.66; 
$rupia_euro = 0.011; 
$rupia_dolar = 0.015; 
$rupia_libra = 0.009;   
 
echo "Tu moneda vale:"; 
 
switch ($moneda and $moneda2) { 
     
    case $moneda == "dolar" and $moneda2 == "euro1":      
       $total=$cifra * $dolar_euro;
    echo "$total";
    break; 
     
    case $moneda == "dolar" and $moneda2 == "libra1": 
        $total=$cifra * $dolar_libra;
    echo "$total";   
    break;                    
}