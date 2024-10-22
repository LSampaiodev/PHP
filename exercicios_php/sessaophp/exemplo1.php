<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Salve</label>
    <br>
    <input type="text" name="nome" placeholder="Escreva seu nome pls">
    <br>
    <input type="" name="email" placeholder="Escreva seu email  pls">
    <br>
    <input type="password" name="senha">
    <br>
    <input type="submit" name="bala" value="enviar"/>
    </form>
    <?php
        $nome =  $_POST['nome'];
        $email =  $_POST['email'];
        $senha = $_POST['senha'];
        session_start();
        $_SESSION['senha'] = $senha
        $_SESSION['nome'] = $nome ;
        $_SESSION['email'] = $email;
    ?>
   
    <h3>Sessão de Usuário</h3>
     Bem Vindo , Sr.
       
    <?php echo $_SESSION['nome'];
          echo " do  email: ";
          echo $_SESSION['email'];          
    ?>    
   
</body>
</html>