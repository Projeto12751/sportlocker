<?php

require_once(__DIR__.'/classe_query.php');
require_once(__DIR__.'/modelo/clientes_model.php');
require_once(__DIR__.'/modelo/produtos_model.php');
require_once(__DIR__.'/modelo/fornecedor_model.php');
require_once(__DIR__.'/constante.php');

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sportslocker";

//conecta-se ao banco de dados MyQSL

$conexao = new mysqli(
    $servidor,
    $usuario,
    $senha,
    $banco
);

//caso algo tenha dado errado, exibe uma mensagem de erro

if(mysqli_connect_errno()) {
    trigger_error(mysqli_connect_error());
}