<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$letras=$_POST['letras'];
      
$totalletras = 0;
            for($i=0;$i< strlen($letras);$i++){
                switch ($letras[$i]){
                    case 'a':
                    case 'e':
                    case 'i':
                    case 'o':
                    case 'u': $totalletras++;
                break;
                
            }            
                }
        echo "El total de vocales de esa frase es:$totalletras";