<?php
    session_start();
    include('db_connect.php');

    switch ($_REQUEST["acao"]) {
        case 'cadastrar-usuario':
            $nome = $_POST["nome"];
            $login = $_POST["login"];
            $senha = $_POST["senha"];
            $criptografia = md5($senha);

            $sql = "INSERT INTO usuarios (
                nome, login, senha)
             VALUES (
                '{$nome}', '{$login}', '{$criptografia}')";
            
            $res = $connect->query($sql);

            if($res == true) {
                print "<script>alert('Cadastro feito com sucesso!!');</script>";
                print "<script>location.href= 'index.php'</script>;";
            } else {
                print "<script>alert('Não foi possivel efetuar o cadastro');</script>";

            }

            break;
        default:
    }
