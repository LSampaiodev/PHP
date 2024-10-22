<?php
$num1 = 10;
$num2 = 15;
$soma = $num1 + $num2;
if ($soma > 20) {
   $soma += 8;
} else {
   $soma -= 5;
}
echo "Resultado: " . $soma;
?>