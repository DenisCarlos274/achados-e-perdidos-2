<?php
session_start();
include_once("conexao.php");


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Nome: $senha <br>";

$result_usuario = "INSERT INTO test(nome, senha, created) VALUES ('$nome','$senha', NOW())";
$result_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color: green;'> usuario cadastrado com sucesso</p>";
    header ("Location: apresentacao.html");
} else{

    header ("Location: index.php");
}
?>