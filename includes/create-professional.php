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
    $turno = $_POST['turno'];
    $cargo = $_POST['cargo'];

    if (!$connection) {
        die('Não foi possível conectar ao Banco de Dados');
    }
    $sql = "INSERT INTO funcionarios (nome, endereco, cidade, 
    bairro, cep, estado, rg, cpf, sexo, data_nascimento, email, telefone, turno, cargo) 
    VALUES ('$nome', '$endereco', '$cidade', '$bairro', '$cep', '$estado','$rg', '$cpf', '$sexo', '$data_nascimento', '$email', '$telefone', '$turno', '$cargo')";
    var_dump($sql);
    mysqli_query($connection, $sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($connection);
    header('Location: ../painel.php');
}