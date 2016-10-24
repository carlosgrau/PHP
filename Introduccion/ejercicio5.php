<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cifra=$_POST['cifra'];
$moneda=$_POST['moneda'];
$valordolar='1.088';
$valorlibra='1.12';
$valorrublo='67.77';
$valoryuan='7.36';
$longitud=count($moneda);

        for($i=0;$i<=$longitud;$i++){
      
switch($moneda[$i]){
    
        case $i='dolar':
        $totaldolar= $cifra * $valordolar;
        echo "El resultado de converir $cifra a Dolares es $totaldolar</br>";
        break;
        
        case $i='rublo':
        $totalrublo= $cifra * $valorrublo;
        echo "El resultado de converir $cifra a Rublo es $totalrublo</br>";
        break;
        
       case $i='yuan':
        $totalyuan= $cifra * $valoryuan;
        echo "El resultado de converir $cifra a Yuan es $totalyuan</br>";
        break;
        
       case $i='libra':
        $totallibra= $cifra * $valorlibra;
        echo "El resultado de converir $cifra a Libra es $totallibra</br>";
       break;
        }
          }
          ?>