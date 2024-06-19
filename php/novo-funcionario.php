<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Funcionário</title>
    <style>

    </style>
</head>
<body>
    <center>
    <h1 class="mb-4 text-white">Novo Funcionário</h1>
    </center>
    <form action="?page=salvar" class="formulario" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <label class="text-white">CPF</label>
            <input id="cpf" type="text" name="cpf" placeholder="xxx.xxx.xxx-xx" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Nome</label>
            <input id="cpf" type="text" name="nome" placeholder="Nome do funcionário" class="form-control input bg-input" required>
  
        </div>
        <div class="mb-3">
            <label class="text-white">E-mail</label>
            <input id="email" type="email" name="email" placeholder="@gazin.com.br" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Setor</label>
            <input id="setor" type="text" name="setor" placeholder="Ex: T.I, Atacado, RH etc..." class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Cargo</label>
            <input id="cargo" type="text" name="cargo" placeholder="Aprendiz, Gerente, Supervisor etc..." class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Telefone</label>
            <input id="phone" type="text" name="telefone" placeholder="DDD XXXX-XXXX" class="form-control input bg-input" required>
        </div>
        <div class="mb-3">
            <label class="text-white">Data de entrada</label>
            <input id="data_entrada" type="date" name="data_entrada" class="form-control input bg-input" required>
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
    </script>

</body>
</html>
