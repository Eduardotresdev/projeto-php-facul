<?php
include_once("../database/connection.php");

if (isset($_POST['save'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $rg = $_POST['rg'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];

    if (!$connection) {
        die('Não foi possível conectar ao Banco de Dados');
    }
    $sql = "INSERT INTO cadastro_cliente (nome, endereco, cidade, 
    bairro, cep, estado, rg, cpf, sexo, data_nascimento, email, telefone) 
    VALUES ('$nome', '$endereco', '$cidade', '$bairro', '$cep', '$estado','$rg', '$cpf', '$sexo', '$data_nascimento', '$email', '$telefone')";
    mysqli_query($connection, $sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($connection);
    header('Location: ../painel.php');
}