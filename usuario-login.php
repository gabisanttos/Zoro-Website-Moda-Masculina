<?php
include 'conexao.php';
require 'conexao.php';

$nome = $_POST["nome"];
$senha = $_POST["senha"]; 

if(isset($_POST["login"])){

    $sql = "SELECT * FROM cadusuario WHERE (nome='".$nome."' AND senha='".md5($senha)."');";
    $r = $conexao->query($sql);
    if($r){
        $_SESSION['nome'] = $nome;
        echo "<script>window.location.replace('index.html');</script>";
    }
}
else {
  echo '<script>alert("Desculpe, não foi possível iniciar uma sessão.")</script>';
  echo '<script>window.location.href="tela-de-login.html"</script>';
}