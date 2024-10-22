<!DOCTYPE html>
<html>
<head>
<title>Tabuada</title>
</head>
<body>
<form method="post">
       Número: <input type="number" name="num" required><br>
<input type="submit" value="Gerar Tabuada">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $num = $_POST['num'];
       for ($i = 1; $i <= 10; $i++) {
           echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
       }
   }
   ?>
</body>
</html>