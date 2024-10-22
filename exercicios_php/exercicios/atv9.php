<!DOCTYPE html>
<html>
<head>
<title>Imprimir SOL</title>
</head>
<body>
<form method="post">
       Quantidade de vezes: <input type="number" name="vezes" required><br>
<input type="submit" value="Imprimir">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $vezes = $_POST['vezes'];
       for ($i = 0; $i < $vezes; $i++) {
           echo "SOL<br>";
       }
   }
   ?>
</body>
</html>