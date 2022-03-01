<?php

/*
Método Deletar Usuário - Testado e Funcionando
*/

if(isset($_POST['deletar'])){
    $id = (int)$_POST['iduser'];
    $pdo = require_once'../pdo/connection.php';
    $sql = "delete from user where iduser = ?";
    $sth = $pdo->prepare($sql);
    $sth->bindParam(1, $id, PDO::PARAM_INT);
    $sth->execute();
    unset($sth);
    unset($pdo);
    header("Location: ../view/listaUsuarios.php");
}