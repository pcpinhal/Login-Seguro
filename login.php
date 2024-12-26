<?php
include_once 'conexao.php';

function recebe_post($input) {
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    $input = filter_var($input, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $input = strip_tags($input);
    $input = stripslashes($input);
    return preg_replace("/[^a-zA-Z0-9_@.-]/", "", $input); 
}
  
try{
    $usuario = recebe_post($_POST['txtUsuario']);
    $senha = recebe_post($_POST['txtSenha']);    
    if((!empty($usuario)) && (!empty($senha)))
    {
        $sql = "SELECT * FROM tb_login WHERE usuario = '$usuario';";
        $resp1 = mysqli_execute_query($conexao, $sql);
        if($dados1 = mysqli_fetch_array($resp1))
        {
            echo "achou o usuario: $dados1[usuario]";
            $sql = "SELECT * FROM tb_login WHERE id_login = $dados1[id_login] AND senha = $senha;";
            $resp2 = mysqli_execute_query($conexao, $sql);
            if($dados2 = mysqli_fetch_array($resp2))
            {
                echo "achou a senha: $dados2[senha]";
            }else{
                echo "nao achou a senha/senha incorreta";
            }
        }else{
            echo "nao achou usuario";
        }
    }else{
        header("Location: index.php");
        exit();
    }
}catch(Exception $e){
    echo "ERROUUUUUU";
}
$resp1 = mysqli_execute_query($conexao, $sql);
?>