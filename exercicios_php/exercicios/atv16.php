<!DOCTYPE html>
<html>
<head>
<title>Classificar Números Par ou Ímpar</title>
</head>
<body>
<form method="post">
       Números (separados por vírgula): <input type="text" name="numeros" required><br>
<input type="submit" value="Classificar">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $numeros = explode(',', $_POST['numeros']);
       foreach ($numeros as $num) {
           $num = trim($num);
           if ($num % 2 == 0) {
               echo $num . " é Par<br>";
           } else {
               echo $num . " é Ímpar<br>";
           }
       }
   }
   ?>
</body>
</html>