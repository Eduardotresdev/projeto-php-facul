<?php
include_once("../database/connection.php");

if (isset($_POST['save'])) {
    $nome = $_POST['nome'];

    if (!$connection) {
        die('Não foi possível conectar ao Banco de Dados');
    }
    $sql =  "SELECT * FROM usuario WHERE usuario = '$nome'";
    $row = mysqli_query($connection, $sql) or die("Erro ao tentar a achar esse fornecedor registro");
}

if ($res = mysqli_query($connection, $sql)) {
    if (mysqli_num_rows($res) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Usuario </th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>" . $row['usuario'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($res);
    } else {
        echo "Nenhum dado foi encontrado.";
    }
} else {
    echo "ERRO:$sql. " . mysqli_error($connection);
}

mysqli_close($connection);
