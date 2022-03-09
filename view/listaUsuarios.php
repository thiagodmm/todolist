<!-- Autor: Thiago de Moura Machado -->
<!DOCTYPE html>

<?php
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$listaUser = $cadUser->getUsuarios();
?>

<html>
<head>

    <html lang="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../estilos.css">
    <title>Listar Usuários - Projeto To-Do List</title>

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

            <h3>Lista de Usuários</h3>

            <a href="../index.php" target="_self">Voltar para Home</a><br>
            <br>
            <a href="cadUsuario.php" target="_self">Cadastro de Usuário</a><br>
            <br>
            <a href="cadTarefa.php" target="_self">Cadastro de Tarefa</a><br>
            <br>

        </div>

        <div class="content">

            <br>
            <hr>
            <br>
            <table style="width: 100%;">
        <thead>
            <tr style="background-color: gray; color: white;">
                <th style="padding: 10px;">Id</th>
                <th style="padding: 10px;">Usuário</th>
                <th style="padding: 10px;">Funções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaUser as $user): ?>
                <tr style="background-color: white;">
                    <td style="padding: 10px; text-align: center">
                        <?php echo $user['iduser']; ?>
                    </td>
                    <td style="padding: 10px; text-align: center">
                        <?php echo $user['usuario']; ?>
                    </td>

                    <td style="padding: 10px; text-align: center">

                    <form action="../controller/deletarUser.php" method="post">
                            <input type="hidden" value="<?php echo $user['iduser']; ?>" name="iduser">
                            <input type="submit" value="Deletar" name="deletar" style="background-color: orange; border-color: red; color: white; cursor: pointer; width:100px; padding: 5px; margin: 5px;">
                    </form>
                    
                        

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>  

    <br>
    <hr>
    <br>


        </div>

        <div class="footer">
            <div class="footerEsq"><p class="assinaSenac"><small>2022 Senac Tech TDS</small></p></div>
            <div class="footerDir"><p class="assinaAutor"><small>Thiago de Moura Machado - Direitos Reservados</small></p></div>
        </div>

    </div>


</body>
</html>