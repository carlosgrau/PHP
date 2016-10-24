<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//ESPECIFICAMOS EL TAMAÑO DE VECES QUE QUEREMOS PONER
$TAM=4;

function potencia ($vector1, $vector2)
    {
    $resultado= pow($vector1, $vector2);
    return $resultado;
    }
echo "<table>";
for ($num1=1; $num1<=$TAM; $num1++)
//  ESTO ES PARA EL BUCLE QUE CUENTE HASTA EL NUMERO QUE SE ESPECIFIQUE EN TAM
//    I QUE TE CONVIERTA TODAS LAS VECES QUE LO HACE EN COLUMNAS POR EL <TR>    
    {
    echo "<tr>";
    for ($num2=1; $num2<=$TAM; $num2++)
//    PRIMERO HACE UNA COLUMNA Y EMPIEZA LA POTENCIA POR CADA VEZ QUE LO 
//    HAGA TE CREA UNA COL DIFERENTE POR EL <TD>
    echo "<td>". potencia($num1,$num2). "</td>";
    echo "</tr>";
    }
    echo "</table>";