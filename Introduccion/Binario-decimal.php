<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$numero=$_POST[ 'numero' ];
        $decimal=0;
        $valorposicion=1;
    for($i=  strlen($numero)-1;$i>=0; $i--){
        
        $decimal =$decimal + $valorposicion * $numero[ $i ];
        $valorposicion=$valorposicion*2;
        
    }
    echo "$decimal";