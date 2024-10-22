<!DOCTYPE html>
<html>
<head>
<title>Contar Números entre 100 e 200</title>
</head>
<body>
<form method="post">
       Números (separados por vírgula): <input type="text" name="numeros" required><br>
<input type="submit" value="Contar">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $numeros = explode(',', $_POST['numeros']);
       $contador = 0;
       foreach ($numeros as $num) {
           $num = trim($num);
           if ($num == 0) break;
           if ($num >= 100 && $num <= 200) {
               $contador++;
           }
       }
       echo "Números entre 100 e 200: " . $contador;
   }
   ?>
</body>
</html>