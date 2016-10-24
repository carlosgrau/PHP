<?php

$dni=$_POST['dni'];
$cocientedni=(int)($dni /23);

$totaldni=$cocientedni*23;
$numerofinal=$dni-$totaldni;
echo "Como calcular la letra ==></br>";
echo " 1º el dni <strong>$dni</strong> dividido entre 23</br>";
echo "2º El numero entero del cociente <strong>$cocientedni</strong> X 23</br>";
echo "3º Ahora restamos el dni <strong>$dni</strong> - <strong>$totaldni</strong> el numero del resultado de la multplicacion</br>";
echo "Esto nos sale el resto que hay que buscar en una tabla especifica cual es su letra</br>";
if($numerofinal==0)
{
echo "La letra de tu dni es la <strong>T</strong> y quedaria $dni T";
}
else{
if($numerofinal==1)
            {
                echo "La letra de tu dni es la <strong>R</strong> y quedaria $dni R";
    }     
    else{
            if($numerofinal==2){
                echo "La letra de tu dni es la <strong>W</strong> y quedaria $dni W";
    }     
    else{
    if($numerofinal==3)
            {
                echo "La letra de tu dni es la <strong>A</strong> y quedaria $dni A";
    }     
    else{
    if($numerofinal==4)
            {
                echo "La letra de tu dni es la <strong>G</strong> y quedaria $dni G";
    }     
    else{
    if($numerofinal==5)
            {
                echo "La letra de tu dni es la <strong>M</strong> y quedaria $dni M";
    }     
    else{
    if($numerofinal==6)
            {
                echo "La letra de tu dni es la <strong>Y</strong> y quedaria $dni Y";
    }     
    else{
    if($numerofinal==7)
            {
                echo "La letra de tu dni es la <strong>F</strong> y quedaria $dni F";
    }     
    else{
    if($numerofinal==8)
            {
                echo "La letra de tu dni es la <strong>P</strong> y quedaria $dni P";
    }     
    else{
    if($numerofinal==9)
            {
                echo "La letra de tu dni es la <strong>D</strong> y quedaria $dni D";
    }     
    else{
    if($numerofinal==10)
            {
                echo "La letra de tu dni es la <strong>X</strong> y quedaria $dni X";
    }     
    else{
    if($numerofinal==11)
            {
                echo "La letra de tu dni es la <strong>B</strong> y quedaria $dni B";
    }     
    else{
    if($numerofinal==12)
            {
                echo "La letra de tu dni es la <strong>N</strong> y quedaria $dni N";
    }     
    else{
            if($numerofinal==13)
            {
                echo "La letra de tu dni es la <strong>J</strong> y quedaria $dni J";
    }     
    else{
    if($numerofinal==14)
            {
                echo "La letra de tu dni es la <strong>Z</strong> y quedaria $dni Z";
    }     
    else{
    if($numerofinal==15)
            {
                echo "La letra de tu dni es la <strong>S</strong> y quedaria $dni S";
    }     
    else{
    if($numerofinal==16)
            {
                echo "La letra de tu dni es la <strong>Q</strong> y quedaria $dni Q";
    }     
    else{
    if($numerofinal==17)
            {
                echo "La letra de tu dni es la <strong>V</strong> y quedaria $dni V";
    }     
    else{
    if($numerofinal==18)
            {
                echo "La letra de tu dni es la <strong>H</strong> y quedaria $dni H";
    }     
    else{
    if($numerofinal==19)
            {
                echo "La letra de tu dni es la <strong>L</strong> y quedaria $dni L";
    }     
    else{
    if($numerofinal==20)
            {
                echo "La letra de tu dni es la <strong>C</strong> y quedaria $dni C";
    }     
    else{
    if($numerofinal==21)
            {
                echo "La letra de tu dni es la <strong>K</strong> y quedaria $dni K";
    }     
    else{
    if($numerofinal==22)
            {
                echo "La letra de tu dni es la <strong>E</strong> y quedaria $dni E";
    }     
    else{
                echo "HAS INTRODUCIDO MAL TU DNI POR FAVOR SON SOLO 8 NUMEROS, GRACIAS";
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
            }
   