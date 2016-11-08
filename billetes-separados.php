<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if (isset($_POST['euros']))
            {  
                $monedero=[500,200,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.02,0.01];
                $euros = $_POST['euros']*100;
                $i=0;
                while ($euros>0){
                    $cantidad = (int)($euros / ($monedero[$i]*100));
                   if($cantidad > 0){
                    $euros = $euros%($monedero[$i]*100);
                    echo $euros/100," $cantidad billetes/monedas de ",$monedero[$i],"<br>";
                    }
                    $i++;
                }
            }