<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <?php
                    if (isset($_SESSION['nao_autenticado'])):
                    ?>
            <div class="notification is-danger">
                <p>ERRO: Usuário ou senha inválidos.</p>
            </div>
            <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
            <form action="login/login.php" method="POST">
                <h1>Entre</h1>
                <input type="text" name="usuario" placeholder="Email" />
                <input type="password" name="senha" placeholder="Password" />
                <br>
                <button type="submit">Entre</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                </div>
                <div class="overlay-panel overlay-right">

                </div>
            </div>
        </div>
    </div>

</body>

</html>