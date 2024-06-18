<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Editar Funcionário</title>
    <style>

    </style>
</head>
<body>
    <center>
    <h1 class="mb-4 text-white">Editar Funcionário</h1>
    </center>
    <?php
        $sql = "SELECT * FROM funcionarios WHERE cpf=".$_REQUEST["cpf"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    ?>
    <form action="?page=salvar" class="formulario" method="POST">
        <input type="hidden" name="acao" value="editar">
        <div class="mb-3">
            <label class="text-white">CPF</label>
            <input type="number" name="cpf" value="<?php print $row->cpf; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Nome</label>
            <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">E-mail</label>
            <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Setor</label>
            <input type="text" name="setor" value="<?php print $row->setor; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Cargo</label>
            <input type="text" name="cargo" value="<?php print $row->cargo; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label  class="text-white">Telefone</label>
            <input type="text" name="telefone" value="<?php print $row->telefone; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Data de entrada</label>
            <input type="date" name="data_entrada" value="<?php print $row->data_entrada; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3 p-3">
            <button type="submit" class="btn btn-primary p-3">Enviar</button>
        </div>
    </form>
    
</body>
</html>
