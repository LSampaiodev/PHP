<!DOCTYPE html>
<html>
<head>
<title>Tempo para Massa Menor que 0.10</title>
</head>
<body>
<form method="post">
       Massa Inicial: <input type="number" step="0.01" name="massa" required><br>
<input type="submit" value="Calcular">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $massa = $_POST['massa'];
       $tempo = 0;
       while ($massa > 0.10) {
           $massa -= $massa * 0.25;
           $tempo += 30;
       }
       echo "Tempo necessário: " . $tempo . " segundos";
   }
   ?>
</body>
</html>