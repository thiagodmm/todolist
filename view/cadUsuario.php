<!-- Autor: Thiago de Moura Machado -->
<!DOCTYPE html>

<?php
 require_once '../controller/cUsuario.php';
 $cadUser = new cUsuario();
?>

<html>
<head>

    <html lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../estilos.css">
    <title>Cadastrar Novo Usuário - Projeto To-Do List</title>

</head>
<body>

<div class="container">

        <div class="top">
            <div class="topEsq topLogado">
            
            <?php
        session_start();
        if (isset($_SESSION['logadoN']) && $_SESSION['logadoN'] == true) {
            echo " Olá " . $_SESSION['usuarioN'] . " | ";
            echo "<button onclick=" . "location.href='../controller/logout.php'" . ">Sair</button>";
        } else {
            header("Location: view/login.php");
        }
        ?>
            
            <!--<h4 class="nomeUser">Olá Thiago</h4>--></div>
            <div class="topDir"><img src="../img/logo_tds_bra.png" class="logoPeq"><!--<a href="login.php" class="linkSair">Sair</a>--></div>
        </div>

        <div class="titPrincipal">
            <h1 class="titProj"><small>Projeto</small><br>
            TO-DO LIST</h1>
        </div>

        <div class="botaoPrincipal">

            <h3>Cadastrar Novo Usuário</h3>

            <a href="../index.php" target="_self">Voltar para Home</a><br>
            <br>
            <a href="cadTarefa.php" target="_self">Cadastro de Tarefa</a><br>
            <br>
            <a href="listaUsuarios.php" target="_self">Lista de Usuários</a><br>
            <br>

            <!-- Formulário de cadastro novo usuário -->

            <form method="post" action="<?php $cadUser->inserir(); ?>">

            <input type="hidden" name="iduser">

            <label>Usuário: <input type="text" name="usuario"></label><br>
            <br>
            <label>Senha: <input type="password" name="senha"></label><br>
            <br>
            <input type="submit" name="salvar" value="Cadastrar Usuário" class="btCadTarefa"><br>
            <br>
            <br>

        </div>


        <div class="footer">
            <div class="footerEsq"><p class="assinaSenac"><small>2022 Senac Tech TDS</small></p></div>
            <div class="footerDir"><p class="assinaAutor"><small>Thiago de Moura Machado - Direitos Reservados</small></p></div>
        </div>

    </div>


</body>
</html>