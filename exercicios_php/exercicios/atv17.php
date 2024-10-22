<!DOCTYPE html>
<html>
<head>
<title>Análise de Vetores</title>
</head>
<body>
<form method="post">
       Números (separados por vírgula): <input type="text" name="numeros" required><br>
<input type="submit" value="Analisar">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $numeros = explode(',', $_POST['numeros']);
       $maior = max($numeros);
       $menor = min($numeros);
       $pares = 0;
       $soma = 0;
       foreach ($numeros as $num) {
           $num = trim($num);
           if ($num % 2 == 0) {
               $pares++;
           }
           $soma += $num;
       }
       $percentual_pares = ($pares / count($numeros)) * 100;
       $media = $soma / count($numeros);
       echo "Maior: " . $maior . "<br>";
       echo "Menor: " . $menor . "<br>";
       echo "Percentual de Pares: " . $percentual_pares . "%<br>";
       echo "Média: " . $media;
   }
   ?>
</body>
</html>