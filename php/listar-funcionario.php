<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Funcionários</title>
    <style>
        .tabela {
            border: 3px solid white;
            border-radius: 2px 2px 2px 2px;
        }

        th {
            background: #0e1c53;
            border: 2px solid white;
            color: white;
            width: 350px;
            padding: 6px;
        }

        td {
            background: #2e4299;
            border: 2px solid white;
            color: white;
            padding: 6px;
        }

        .acao{
            width: 400px;
        }
    </style>
</head>
<body>
<h1 class="text-white">Listar Funcionários</h1>
<br>

<?php
    $sql = "SELECT * FROM funcionarios";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table  class='tabela'>";
            print "<tr>";
            print "<th class='th'>CPF</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Setor</th>";
            print "<th>Cargo</th>";
            print "<th>Telefone</th>";
            print "<th>Data de Entrada</th>";
            print "<th class='acao'>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->cpf."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->setor."</td>";
            print "<td>".$row->cargo."</td>";
            print "<td>".$row->telefone."</td>";
            print "<td>".$row->data_entrada."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&cpf=".$row->cpf."';\" class='btn btn-success'>Editar</button>

                    <button onclick=\"
                    if(confirm('Tem certeza que deseja excluir?'))
                    {location.href='?page=salvar&acao=excluir&cpf=".$row->cpf."';}else{false}\"
                    class='btn btn-danger'>Excluir</button>
                  </td>";
            print "</tr>";
        }
        print "</table>";
    } else {
        print "<p class='alert alert-danger'>Nenhum resultado encontrado</p>";
    }
?>
</body>
</html>