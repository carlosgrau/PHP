<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$archivo = fopen("datoscliente.txt", "a");
fwrite($archivo,$nif "," . PHP_EOL);
fwrite($archivo,$nombre "," . PHP_EOL);
fwrite($archivo, apellido1 "," . PHP_EOL);
fwrite($archivo, "apellido2" . PHP_EOL);
fwrite($archivo, "email" . PHP_EOL);
fwrite($archivo, "sexo" . PHP_EOL);
fwrite($archivo, "ocupacion" . PHP_EOL);
fwrite($archivo, "provincia" . PHP_EOL);

fclose($archivo);