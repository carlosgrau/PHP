<?php

$dni=$_POST['dni'];
$cocientedni=$dni/23;
//number_format($cocientedni [","$decimal = 0])
//echo "nomber_format($cocientedni)";
$totaldni=$cocientedni*23;
echo "<strong>$totaldni</strong></br>";
$finaldni=$dni-$totaldni;
echo "$finaldni</br>";
    