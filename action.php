<?php
include_once "connect.php";
$acao = $_GET["acao"];

$conexao = new Connection();

// Inserir dados de usuarios
if ($acao == 1) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    $sql1 = "SELECT * FROM usuarios WHERE email= '$email'";
    $result = $conexao->Execute($sql1);

    if (sizeof($result) > 0) {
        header("location: register.php?acao=1");
        die();
    } else {
        $sql = "INSERT INTO usuarios(nome,senha,email) VALUES ('$nome','$senha','$email')";
        $conexao->Execute($sql);
        header("location: view.php?acao=1");
        die();
    }
}
