<?php

require_once('conexao.php');

if(!isset($_SESSION["dados_usuario"]))
{
    // Usuário não logado! Redireciona para a página de login
    header("Location: views/clientes/login.html");
exit;
}else{
    header('Location: views/clientes/seila.php');
}