<?php
$usuario_db   = 'root';
$senha_db     = '';
$servidor_db  = 'localhost';
$porta_db     = '3306';
$database_db  = 'login';

try{
    $conexao = mysqli_connect($servidor_db,$usuario_db,$senha_db,$database_db,$porta_db);
    $sql = "
        -- DROP DATABASE IF EXISTS login;
        CREATE DATABASE IF NOT EXISTS login;
        USE login;

        CREATE TABLE IF NOT EXISTS tb_login (
        id_login				INT NOT NULL AUTO_INCREMENT,
        usuario				    VARCHAR(255) NOT NULL UNIQUE,
        senha					VARCHAR(255) NOT NULL,
        nivel					CHAR(1) NOT NULL,
        PRIMARY KEY(id_login)
        );

        INSERT IGNORE INTO tb_login (usuario, senha, nivel) VALUES 
        ('admin','123','a'),
        ('user','321','u');
    ";
    $banco_dados = mysqli_execute_query($conexao, $sql);
}catch(Exception $e){
    if(mysqli_connect_errno())
    {
        echo "
            <script>alert('Ops, Algo de errado não esta certo com o Bando de Dados.');</script>
            <p>ERRO: 01 - Conexão com o Banco de dados com problemas...</p>
        ";
        exit;
        die;
    }
}
?>