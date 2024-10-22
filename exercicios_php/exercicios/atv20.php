<!DOCTYPE html>
<html>
<head>
<title>Matriz Ímpares e Pares</title>
</head>
<body>
<?php
   $matriz = [
       [1, 2, 3, 4, 5],
       [6, 7, 8, 9, 10],
       [11, 12, 13, 14, 15],
       [16, 17, 18, 19, 20],
       [21, 22, 23, 24, 25]
   ];
   $impares = [];
   $pares = [];
   echo "Matriz completa:<br>";
   foreach ($matriz as $linha) {
       foreach ($linha as $valor) {
           echo $valor . " ";
           if ($valor % 2 == 0) {
               $pares[] = $valor;
           } else {
               $impares[] = $valor;
           }
       }
       echo "<br>";
   }
   echo "Matriz com números ímpares:<br>";
   foreach ($impares as $valor) {
       echo $valor . " ";
   }
   echo "<br>";
   echo "Matriz com números pares:<br>";
   foreach ($pares as $valor) {
       echo $valor . " ";
   }
   ?>
</body>
</html>