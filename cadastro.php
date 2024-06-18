
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <title>Novo Funcionário</title>

</head>

<body class="body">
    <center>
    <section>
        <img src="imagem/24b37378-d1ad-42a6-b917-e891fa7399b9.jpg" width="300px">
    </section>

<div id="div-login-cadastro">
    <h1 class="h1">Cadastrar</h1>

    <form action="?page=salvar" class="formulario" method="POST">
    <input type="hidden" name="acao" value="cadastrar-usuario">
      
    <input type="text" name="nome" placeholder="Nome" class="input1" required><br>

    <input type="text" name="login" placeholder="Usuário" class="input1" required><br>
 
    <input type="password" name="senha" placeholder="Senha" class="input1" required><br>
        
    <button type="submit" name="btn-cadastrar" class="button-cadastro" required> Cadastrar </button>
    </form>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
            <?php
                include("db_connect.php");
                switch(@$_REQUEST["page"]){
                    case "salvar":
                        include("salvar-cadastro.php");
                    break;
                    case "login":
                        include("index.php");
                    break;
                    default:
                }   
            ?>
        </div>
    </div>
</div>
</center>
</body>
</html>
