<?php
$num = 30;
if ($num % 10 == 0) {
   echo "Divisível por 10";
} elseif ($num % 5 == 0) {
   echo "Divisível por 5";
} elseif ($num % 2 == 0) {
   echo "Divisível por 2";
} else {
   echo "Não é divisível por 10, 5 ou 2";
}
?> 