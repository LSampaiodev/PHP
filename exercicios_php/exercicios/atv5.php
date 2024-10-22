<?php
$lado1 = 7;
$lado2 = 7;
$lado3 = 7;
if ($lado1 == $lado2 && $lado2 == $lado3) {
   echo "E um Triângulo Equilátero";
} elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
   echo "E um Triângulo Isósceles";
} else {
   echo "E um Triângulo Escaleno";
}
?>