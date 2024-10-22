<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="atv7.php" method="POST"<?php $_SERVER["PHP_SELF"] ?>>
Name Book: <input type="text" name="livro"><br>
Type User: <input type="text" name="user"><br>
<input type="submit"><br>
<?php
if ($_POST["user"] == "aluno") {
    echo " O livro e " . $_POST["livro"] . ".<br>";
    echo " O " . $_POST["user"] . " tem 3 dias para devolver.";
} else {
    echo " O livro e " . $_POST["livro"] . ".<br>";
    echo " O ". $_POST["user"] . " tem 10 dias para devolver.";
}
?>
</form>

</body>
</html>