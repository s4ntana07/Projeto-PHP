<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $cpf = $_POST["cpf"];
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $data_entrada = $_POST["data_entrada"];
            $cargo = $_POST["cargo"];
            $setor = $_POST["setor"];

            $sql = "INSERT INTO funcionarios (
                nome, email, cpf, telefone, data_entrada, setor, cargo)
             VALUES (
                '{$nome}', '{$email}', '{$cpf}', '{$telefone}', '{$data_entrada}', '{$setor}', '{$cargo}')";
            
            $res = $conn->query($sql);

            if($res == true) {
                print "<script>alert('Cadastro feito com sucesso!!');</script>";
                print "<script>location.href= '?page=listar'</script>;";
            } else {
                print "<script>alert('Não foi possivel efetuar o cadastro');</script>";
                print "<script>location.href= '?page=listar'</script>;";
            }

            break;
        case 'editar':
                $cpf = $_POST["cpf"];
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $telefone = $_POST["telefone"];
                $data_entrada = $_POST["data_entrada"];
                $cargo = $_POST["cargo"];
                $setor = $_POST["setor"];
    
                $sql = "UPDATE funcionarios SET
                            cpf='{$cpf}',
                            nome='{$nome}',
                            email='{$email}',
                            setor='{$setor}',
                            cargo='{$cargo}',
                            telefone='{$telefone}',
                            data_entrada='{$data_entrada}'
                            WHERE
                                cpf=". $_REQUEST["cpf"];
                            
                
                $res = $conn->query($sql);
    
                if($res == true) {
                    print "<script>alert('Editado com sucesso!!');</script>";
                    print "<script>location.href= '?page=listar'</script>;";
                } else {
                    print "<script>alert('Não foi possivel editar!');</script>";
                    print "<script>location.href= '?page=listar'</script>;";
                }
            break;
        case 'excluir':
            
            $sql = "DELETE FROM funcionarios WHERE cpf=".$_REQUEST["cpf"];
            
            $res = $conn->query($sql);
    
            if($res == true) {
                print "<script>alert('Excluido com sucesso!!');</script>";
                print "<script>location.href= '?page=listar'</script>;";
            } else {
                print "<script>alert('Não foi possivel excluir!');</script>";
                print "<script>location.href= '?page=listar'</script>;";
            }
            break;

        default:
    }