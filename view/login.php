<!-- Autor: Thiago de Moura Machado -->

<!-- PHP session_start aqui -->


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
        <div class="areaLogin">
            <h2 class="txtBranco">Login</h2>
            <form>
                <label class="txtBranco">
                    <b>Usuário:</b><br>
                <input type="text" name="user"></label><br>
                <br>
                <label class="txtBranco">
                    <b>Senha:</b><br>
                <input type="text" name="user"></label><br>
                <br>
                <a href="index.html" target="_self" class="btLoginForm">Entrar</a>
            </form>
            <p class="txtPadrao txtBranco">
                <br>
                Ainda não possui usuário e senha?<br>
                <br>
                | <a href="cadUsuario.php" class="linkBranco">Cadastrar Novo Usuário</a> |</p>
        </div>
    </div>
</body>
</html>