<?php

    // iniciando sessão
    session_start();

    // iniciando conexão
    require_once 'db_connect.php';

    // limpar
    function clear ($input) {
        global $connect;
        // sql
        $var = mysqli_escape_string($connect, $input);
        // xss
        $var = htmlspecialchars($var);
        return $var;
    }

    if (isset($_POST['btn-deletar'])) {
        $id = clear($_POST['id']);

        $sql = "DELETE FROM clientes WHERE id = '$id'";

        if(mysqli_query($connect, $sql)){
            $_SESSION['mensagem'] = "Deletado com sucesso!";
            header('Location: ../index.php');
        }else{
            $_SESSION['mensagem'] = "Erro ao Deletar";
            header('Location: ../index.php');
        }

    }