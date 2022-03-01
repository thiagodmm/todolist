<?php

/*
Author: Thiago de Moura Machado
Data: 06/12/2021
*/

class cLogin {

    // Função Logar
    public function login() {
        if(isset($_POST['logar'])){
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            $pdo = require '../pdo/connection.php';
            $sql = "select * from user where usuario = ?";
            $sth = $pdo->prepare($sql);
            $sth->execute([$usuario]);
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            $count = $sth->rowCount();

            if($count > 0){
                if(password_verify($senha, $result['senha'])){
                    session_start();
                    $_SESSION['usuarioN'] = $result['usuario'];
                    $_SESSION['idN'] = $result['iduser'];
                    $_SESSION['logadoN'] = true;
                    header("Location: ../index.php");
                }
            }else {
                header("Location: ../view/login.php");
            }
            unset($sth);
            unset($pdo);
        }
    }



}