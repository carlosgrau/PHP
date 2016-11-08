<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;
$suma=0;
foreach ($v as $indice => $valor)
{
 echo "El elemento de indice $indice vale $valor <br>";
 $suma=$v[1]+$v[30]+$v['e']+$v['hola'];
}
 echo "La suma de todos los valores es:$suma";