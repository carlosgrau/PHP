<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero=$_POST ['numero'];
$binario = "";
while($numero > 0){
    $resto=$numero % 2;
   $binario=$resto.$binario;
   echo "El proceso es $resto /2 =$binario</br>";
    $numero=(int)($numero / 2);
}
echo "El numero en binario es $binario";