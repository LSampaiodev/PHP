<!DOCTYPE html>
<html>
<head>
<title>Imprimir Palavra em Padrão</title>
</head>
<body>
<form method="post">
       Palavra: <input type="text" name="palavra" required><br>
<input type="submit" value="Gerar Padrão">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $palavra = $_POST['palavra'];
       for ($i = 1; $i <= 4; $i++) {
           echo str_repeat($palavra . " ", $i) . "<br>";
       }
   }
   ?>
</body>
</html>