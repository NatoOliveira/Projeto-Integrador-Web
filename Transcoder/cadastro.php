<?php
    session_start();
    include("conexao.php");
    
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

    $result_usuario ="INSERT INTO usuarios (username, email, senha, created) VALUES ('$username', '$email', '$senha', NOW())";
    $resultado_usuario = mysqli_query($conexao, $result_usuario);

    if(mysqli_insert_id($conexao)){
        echo "Usuário cadastrado com sucesso!";
    }
    else{
        echo "Erro".mysqli_connect_error($conexao);
    }
?>