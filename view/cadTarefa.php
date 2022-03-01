<!-- Autor: Thiago de Moura Machado -->
<!DOCTYPE html>

<?php
 require_once '../controller/cTarefa.php';
 $cadTar = new cTarefa();
?>

<html>
<head>

    <html lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../estilos.css">
    <title>Cadastrar Nova Tarefa - Projeto To-Do List</title>

</head>
<body>

<form method="post" action="<?php $cadTar->novaTarefa(); ?>">

<div class="container">

        <div class="top">
            <div class="topEsq topLogado">
            
            <?php
        session_start();
        if (isset($_SESSION['logadoN']) && $_SESSION['logadoN'] == true) {
            echo " Olá " . $_SESSION['usuarioN'] . " | ";
            echo "<button onclick=" . "location.href='controller/logout.php'" . ">Sair</button>";
        } else {
            header("Location: view/login.php");
        }
        ?>
            
            <!--<h4 class="nomeUser">Olá Thiago</h4>--></div>
            <div class="topDir"><!--<a href="login.html" class="linkSair">Sair</a>--></div>
        </div>

        <div class="titPrincipal">
            <h1 class="titProj"><small>Projeto</small><br>
            TO-DO LIST</h1>
        </div>

        <div class="botaoPrincipal">

            <h3>Cadastrar Nova Tarefa</h3>

            <a href="../index.php" target="_self">Voltar para Home</a><br>
            <br>
            <a href="cadUsuario.php" target="_self">Cadastro de Usuário</a><br>
            <br>
            <a href="listaUsuarios.php" target="_self">Lista de Usuários</a><br>
            <br>

            <!-- Formulário de cadastro nova tarefa -->

            <form method="post" action="<?php $cadTar->novaTarefa(); ?>">

            <input type="hidden" name="idtarefa">
            <input type="hidden" name="finalizada" value="não" placeholder="não">

            <label>Título da Tarefa: <input type="text" name="titulo" value="Título aqui"></label><br>
            <br>
            
            <label>Data Limite: <input type="date" name="datalimite"></label><br>
            <br>
            <input type="submit" name="cadastrar" value="Cadastrar Tarefa" class="btCadTarefa"><br>
            <br>
            <!--<a href="#" target="_self" class="btCadTarefa">Cadastrar Tarefa</a>--><br>
            <br>
            </form>
        </div>

        <div class="footer">
            <div class="footerEsq"><p class="assinaSenac"><small>2022 Senac Tech TDS</small></p></div>
            <div class="footerDir"><p class="assinaAutor"><small>Thiago de Moura Machado - Direitos Reservados</small></p></div>
        </div>

    </div>

</form>

</body>
</html>