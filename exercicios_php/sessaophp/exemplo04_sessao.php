<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho com sessao php</title>
    <?php
    session_start();
    $_SESSION["NOME"]= $_POST["NOME"];
    $_SESSION["SENHA"]= $_POST["SENHA"];
    ?>
</head>
<body>
    <b>Funcionario: </b><?php echo $_SESSION["NOME"]?>, LOGADO COM SUCESSO.<br>
    <b>Data de conexão: </b><?php echo date["d/m/y"]?><br>
    <b>Hora de conexão: </b><?php echo date["H:i:s"]?><br>
    <br>
    <a href="exemplo04_pag.php">Área de administrador</a><br>
</body>
</html>