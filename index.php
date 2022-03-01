<!-- Autor: Thiago de Moura Machado -->
<!DOCTYPE html>

<!-- PHP session_start aqui -->


<html>
<head>
<html lang="pt-br">
<meta charset="UTF-8">
<title>Página Inicial - Projeto To-Do List</title>
<link rel="stylesheet" type="text/css" href="estilos.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

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
      <div class="topDir"><!--<a href="view/login.php" class="linkSair">Sair</a>--></div>
    </div>

    <div class="titPrincipal">
      <h1 class="titProj"><small>Projeto</small><br>
      TO-DO LIST</h1>
    </div>

    <div class="botaoPrincipal">
      <a href="html/nova_tarefa.html" target="_self" class="btNovaTarefa">Nova Tarefa</a>
      <a href="view/cadUsuario.php" target="_self" class="btNovaTarefa">Novo Usuário</a>
      <a href="view/listaUsuarios.php" target="_self" class="btNovaTarefa">Lista de Usuários</a>
    </div>

      <div class="content">
        <div class="tarefasAbertas">
        <h3 class="txtBranco">Tarefas a fazer</h3>
          <div class="toDoListcontent">
            <table style="width:100%">
              <tr>
                <td><b>Título da Tarefa</b></td>
                <td><b>Data Limite</b></td>
                <td><b>Ações</b></td>
              </tr>
              <tr>
                <td>Construir o Banco de Dados</td>
                <td>24/02/2022</td>
                <td><a href="#">Finalizada</a></td>
              </tr>
              <tr>
                <td>Iniciar o Front-End</td>
                <td>25/02/2022</td>
                <td><a href="#">Finalizada</a></td>
              </tr>
              <tr>
                <td>Concluir o CRUD PHP</td>
                <td>26/02/2022</td>
                <td><a href="#">Finalizada</a></td>
              </tr>
            </table>
          </div>
        </div>

        <div class="tarefasFechadas">
        <h3 class="txtBranco">Tarefas concluídas</h3>
        <div class="toDoListcontent">
          <table style="width:100%">
            <tr>
              <td><b>Título da Tarefa</b></td>
              <td><b>Data Limite</b></td>
            </tr>
            <tr>
              <td>Conceito do Projeto To-Do List</td>
              <td>20/02/2022</td>
            </tr>
            <tr>
              <td>Modelagem de Dados</td>
              <td>21/02/2022</td>
            </tr>
            <tr>
              <td>Concluir o UX</td>
              <td>22/02/2022</td>
            </tr>
          </table>
        </div>
        </div>

      <hr>

      <div class="tarefas10dias">
        <h3 class="txtBranco">Tarefas abertas a mais de 10 dias</h3>
          <div class="toDoListcontent">
            <table style="width:100%">
              <tr>
                <td><b>Título da Tarefa</b></td>
                <td><b>Data Limite</b></td>
                <td><b>Ações</b></td>
              </tr>
              <tr>
                <td>Construir o Banco de Dados</td>
                <td>24/01/2022</td>
                <td><a href="#">Finalizada</a></td>
              </tr>
              <tr>
                <td>Iniciar o Front-End</td>
                <td>25/01/2022</td>
                <td><a href="#">Finalizada</a></td>
              </tr>
              <tr>
                <td>Concluir o CRUD PHP</td>
                <td>26/01/2022</td>
                <td><a href="#">Finalizada</a></td>
              </tr>
            </table>
          </div>
        </div>

    </div>

    <div class="footer">
      <div class="footerEsq"><p class="assinaSenac"><small>2022 Senac Tech TDS</small></p></div>
      <div class="footerDir"><p class="assinaAutor"><small>Thiago de Moura Machado - Direitos Reservados</small></p></div>
    </div>

  </div>

</body>
</html>