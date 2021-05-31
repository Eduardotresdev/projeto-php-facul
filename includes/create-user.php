<?php
include_once("../database/connection.php");

if (isset($_POST['save'])) {
    $nome = $_POST['nome'];
    $password = $_POST['senha'];

    if (!$connection) {
        die('Não foi possível conectar ao Banco de Dados');
    }
    $sql = "INSERT INTO usuario (usuario, senha) 
    VALUES ('$nome', '$password')";
    mysqli_query($connection, $sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($connection);
    header('Location: ../painel.php');
}