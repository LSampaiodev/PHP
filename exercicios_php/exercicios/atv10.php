<!DOCTYPE html>
<html>
<head>
<title>Somar Positivos e Contar Negativos</title>
</head>
<body>
<form method="post">
       Números (separados por vírgula): <input type="text" name="numeros" required><br>
<input type="submit" value="Processar">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $numeros = explode(',', $_POST['numeros']);
       $soma_positivos = 0;
       $total_negativos = 0;
       foreach ($numeros as $num) {
           $num = trim($num);
           if ($num > 0) {
               $soma_positivos += $num;
           } elseif ($num < 0) {
               $total_negativos++;
           }
       }
       echo "Soma dos Positivos: " . $soma_positivos . "<br>Total de Negativos: " . $total_negativos;
   }
   ?>
</body>
</html>