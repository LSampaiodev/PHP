<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com sessao
    </title>
    <?php
    session_start();
    if($_SESSION["NOME"]!= "MASTER"){
        session_destroy();
        header("location:exemplo04.php");

    }
</head>
<body>
    
</body>
</html>