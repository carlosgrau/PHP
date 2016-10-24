<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero= $POST['numero'];
    for($i=1;$i<=10;$i++){//Esto es el bucle por el cual multiplica
            echo "$numero x $i =", $numero,"<br>";
    }   