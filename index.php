<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Login Seguro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body_index">
    <form action="login.php" method="post" enctype="multipart/form-data" id="login">    
        <h2>Login</h2>
        <div class="input-container">
            <img src="img/user.png" alt="">
            <input type="text" name="txtUsuario" placeholder="Usuário">
        </div>
        <div class="input-container">
            <img src="img/lock-2.png" alt="">
            <input type="password" name="txtSenha" placeholder="Senha">
        </div>
        <input type="submit" class="login-button" name="btnEntrar" value="Entrar">
        <h5>Não tem cadastro, crie <a href="cadastro.php">aqui</a>.</h5>
</form>
    <script src="script.js"></script>
</body>
</html>