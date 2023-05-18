<?php
include_once "connect.php";
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];
$conexao = new Connection();

$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' ";
$res = $conexao->Execute($sql);

if (sizeof($res) > 0) {
    $_SESSION['id'] = $res[0]["id"];
    $_SESSION['email'] = $res[0]['email'];
    header("location: view.php");
} else {
    header("location: index.php?acao=1");
}
