<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//recoger los datos del formulario
$frase = $_POST['frase'];
$repeticiones = $_POST['repeticiones'];

for($i=1;$i<=$repeticiones;$i++){
    echo "$i -> $frase <br>\n";
}
