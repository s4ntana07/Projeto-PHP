
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="css/style.css">
    <link rel="shortcut icon" href="imagem/unnamed.ico" type="image/x-icon">
    <title>Novo Funcionário</title>

</head>

<body class="body">
    <center>
<div id="div-login-cadastro">
    
    <div>
        <img src="imagem/Gazin_1_cca4b227db.webp" width="300px">
    </div>


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
