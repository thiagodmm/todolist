<?php

/*
Author: Thiago de Moura Machado
*/

class cTarefa {

    // Função que cadastra uma nova tarefa

    public function novaTarefa(){
        if(isset($_POST['cadastrar'])){
            $titulo = $_POST['titulo'];
            $datalimite = $_POST['datalimite'];
            $finalizada = $_POST['finalizada'];
            
            $pdo = require '../pdo/connection.php';
            $sql = "insert into tarefas (titulo, datalimite, finalizada) values (?,?,'não')";
            $sth = $pdo->prepare($sql);
            // $sth->execute([$nome,$email,$pas]);
            $sth->bindParam(1, $titulo, PDO::PARAM_STR);
            $sth->bindParam(2, $datalimite, PDO::PARAM_STR);
            $sth->bindParam(2, $finalizada, PDO::PARAM_STR);
            $sth->execute();
            unset($pdo);
            unset($sth);
            header("Location: ../index.php");
        }
    }


    public function getTarefas() {
        $pdo = require_once 'pdo/connection.php';
        $sql = "select idtarefa, titulo, datalimite, finalizada from tarefas";
        $sth = $pdo->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        unset($sth);
        unset($pdo);
        return $result;
    }



}