<!DOCTYPE html>
<html>
<head>
<title>Anos para Juca Superar Chico</title>
</head>
<body>
<form method="post">
<input type="submit" value="Calcular">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $altura_chico = 1.50;
       $altura_juca = 1.10;
       $anos = 0;
       while ($altura_juca <= $altura_chico) {
           $altura_chico += 0.02;
           $altura_juca += 0.03;
           $anos++;
       }
       echo "Anos necessários: " . $anos;
   }
   ?>
</body>
</html>