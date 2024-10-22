<!DOCTYPE html>
<html>
<head>
<title>Números Não Comuns</title>
</head>
<body>
<form method="post">
       Vetor 1 (separados por vírgula): <input type="text" name="vetor1" required><br>
       Vetor 2 (separados por vírgula): <input type="text" name="vetor2" required><br>
<input type="submit" value="Gerar Vetor Não Comum">
</form>
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $vetor1 = explode(',', $_POST['vetor1']);
       $vetor2 = explode(',', $_POST['vetor2']);
       $nao_comuns = array_diff(array_merge($vetor1, $vetor2), array_intersect($vetor1, $vetor2));
       echo "Números não comuns: " . implode(", ", $nao_comuns);
   }
   ?>
</body>
</html>