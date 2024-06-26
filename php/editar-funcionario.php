<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../imagem/unnamed.ico" type="image/x-icon">
    <title>Editar Funcionário</title>
    <style>
    .fundo {
        height: 100vh;
        background:linear-gradient(#212529,#1f348f, #1f348f, #1f348f)no-repeat;
    }

    </style>
</head>
<body>
    <center>
    <h1 class="mb-4 text-white">Editar Funcionário</h1>
    </center>
    <?php
        $sql = "SELECT * FROM funcionarios WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    ?>
    <form action="?page=salvar" class="formulario" method="POST">
        <input type="hidden" name="acao" value="editar">
        <div class="mb-3">
            <label class="text-white">CPF</label>
            <input id="cpf" type="text" name="cpf" value="<?php print $row->cpf; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Nome</label>
            <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">E-mail</label>
            <input type="text" name="email" value="<?php print $row->email; ?>" class="form-control input bg-input" required>
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
            <input id="phone" type="text" name="telefone" value="<?php print $row->telefone; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Data de entrada</label>
            <input id="data_entrada" type="text" name="data_entrada" value="<?php print $row->data_entrada; ?>" class="form-control input bg-input" required>
        </div>
        <div class="mb-3 p-3">
            <button type="submit" class="btn btn-primary p-3">Enviar</button>
        </div>
    </form>    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    
    <script>
        $('#cpf').mask('000.000.000-00', {reverse: true});
        $('#phone').mask('(00) 0000-0000');
        $('#data_entrada').mask('00/00/0000');
    </script>

    
</body>
</html>
