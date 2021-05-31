<?php
include_once("../database/connection.php");

if (isset($_POST['save'])) {
    $nome = $_POST['nome'];
    $barras = $_POST['barras'];
    $custo = $_POST['custo'];
    $preco_venda = $_POST['preco_venda'];
    $estoque = $_POST['estoque'];

    if (!$connection) {
        die('Não foi possível conectar ao Banco de Dados');
    }
    $sql = "INSERT INTO cadastro_produto (descricao, cod_barras, preco_custo, 
    preco_venda, estoque) 
    VALUES ('$nome', '$barras', '$custo', '$preco_venda', '$estoque')";
    mysqli_query($connection, $sql) or die("Erro ao tentar cadastrar registro");
    mysqli_close($connection);
    header('Location: ../painel.php');
}