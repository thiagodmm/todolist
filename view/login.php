<!-- Autor: Thiago de Moura Machado -->

<!-- PHP session_start aqui -->
<?php

session_start();
if (isset($_SESSION['logadoN']) && $_SESSION['logadoN'] == true) {
    header("Location: ../index.php");
}

require_once '../controller/cLogin.php';
$login = new cLogin();
?>

<!DOCTYPE html>
<html>
<head>
    <html lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../estilos.css">
    <title>Login - Projeto To-Do List</title>
</head>
<body>
<div class="containerLogin">

        <img src="../img/logo_tds_login.png" class="logoLog">

        <div class="areaLogin">
            <h2 class="txtBranco">Login</h2>
            <form action="<?php $login->login(); ?>" method="post">
                <label class="txtBranco">
                    <b>Usuário:</b><br>
                <input type="text" name="usuario"></label><br>
                <br>
                <label class="txtBranco">
                    <b>Senha:</b><br>
                <input type="password" name="senha"></label><br>
                <br>
                <input type="submit" name="logar" value="Entrar" class="btLoginForm"/><br>
                <br>
            </form>
            <!--
            <p class="txtPadrao txtBranco">
                <br>
                Ainda não possui usuário e senha?<br>
                <br>
                <a href="../view/cadUsuario.php" class="linkBranco">Cadastrar Novo Usuário</a> |</p>
            -->
        </div>
    </div>
</body>
</html>