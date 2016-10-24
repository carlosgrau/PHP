<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$num=1;
echo "<table>";
for($num1=1;$num1<=10;$num1++){
    echo '<tr>';
    {
        for($num2=1;$num2<=10;$num2++){
        echo "<td>",$num, "</td>";
        $num=$num+1;
        }
    }
    
    echo '</tr>';
}
echo "</table>";    
    
 ?>   