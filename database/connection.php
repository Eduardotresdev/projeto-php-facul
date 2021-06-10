<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'devedu');
define('SENHA', 'root');
define('DB', 'projeto_facul');

$connection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');