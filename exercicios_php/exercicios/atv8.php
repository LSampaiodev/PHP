<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="tudo">
	<form method="POST">
		<label>Digite um número</label>
		<input type="text" name="numero"><br>
		<input class="btn" type="submit" name="btnCalcular" value="Calcular"/>
	</form>
<?php
	$numero = $_POST["numero"];
	$numero1 = 1;
	$produto = 1;
		while ($numero1 <= $numero) {
			echo $numero1 ."<br>";
			$produto = $numero1 * $produto;
			$numero1 ++;
		}
		echo "O produto é: " .($produto);
?>

	</div>
</body>
</html>