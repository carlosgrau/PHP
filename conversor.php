<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$moneda=$_POST['lista_actual']; 
$moneda2=$_POST['lista_despues'];   
$cifra=$_POST['cifra'];
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

switch($moneda and $moneda2){
    case $moneda=="euro" and $moneda2=="dolar1";
        $total=$cifra * $euro_dolar;
        echo "El valor de tu conversion es $total";
        break;
    
    
    
    
    
    
    
    
}