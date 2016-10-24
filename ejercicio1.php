<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cifra=$_POST['cifra'];
$valordolar='1.088';
$total= $cifra * $valordolar;
echo "El resultado de convertir $cifra es $total";