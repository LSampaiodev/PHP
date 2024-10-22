<?php
$num1 = 4;
$num2 = 2;  
$num3 = 8;
$numeros = array($num1, $num2, $num3);
rsort($numeros);
foreach ($numeros as $numero) {
   echo $numero . " ";
}
?>