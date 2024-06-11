<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Funcionário</title>
    <style>
        .bg-input {
            background-color: rgba(255, 255, 255, 0.641);
            border: #23326a;
            box-shadow: 4px 4px #23326a;
            width: 1000px;
            font-size: 20px;
        }

        .formulario{
            position: relative;
            left: 155px;
        }
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
            <input type="text" name="cpf" placeholder="xxx.xxx.xxx-xx" class="form-control input bg-input">
        </div>
        <div class="mb-3">
            <label class="text-white">Nome</label>
            <input type="text" name="nome" placeholder="Nome do funcionário" class="form-control input bg-input">
        </div>
        <div class="mb-3">
            <label class="text-white">E-mail</label>
            <input type="email" name="email" placeholder="@gazin.com.br" class="form-control input bg-input">
        </div>
        <div class="mb-3">
            <label class="text-white">Setor</label>
            <input type="text" name="setor" placeholder="Ex: T.I, Atacado, RH etc..." class="form-control input bg-input">
        </div>
        <div class="mb-3">
            <label class="text-white">Cargo</label>
            <input type="text" name="cargo" placeholder="Aprendiz, Gerente, Supervisor etc..." class="form-control input bg-input">
        </div>
        <div class="mb-3">
            <label class="text-white">Telefone</label>
            <input type="text" name="telefone" placeholder="55 DDD XXXX-XXXX" class="form-control input bg-input">
        </div>
        <div class="mb-3">
            <label class="text-white">Data de entrada</label>
            <input type="date" name="data_entrada" class="form-control input bg-input">
        </div>
        <div class="mb-3 p-3">
            <button type="submit" class="btn btn-primary p-3">Enviar</button>
        </div>
    </form>
    
</body>
</html>
