<?php
include('login/verifica_login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="../login/logout.php">Sair</a></h2>