
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Funcionário</title>
    <style>
 body {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 20px;    
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100vh;
    align-items: center;
    text-align: center;
    background: linear-gradient(45deg,  #081239, #1f348f, #1f348f, #1f348f, #081239);
}

#div-login {
    background-color: rgba(255, 255, 255, 0.541);
    height: 500px;
    width: 600px;
    border-radius: 10px;
    position: absolute;
    top: 20vh;
    left: 34%;
    box-shadow: 11px 11px #112161;
}

input {
    background-color: rgba(255, 255, 255, 0.641);
    border: none;
    margin: 20px;
    width: 350px;
    height: 60px;
    border-radius: 7px;
    box-shadow: 7px 7px #727a99;
    font-size: 16px;
}

.button {
    color:white;
    font-size: 15px;
    font-weight: bold;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border-radius: 5px;
    width: 110px;
    height: 70px;
    margin-top: 10px;
    background-color: #081239;
}

button:hover {
    animation: btn-animation 1s forwards;
}

@keyframes btn-animation {
    from {
        width: 110px;
        height: 70px;
    }

    to {
        width: 125px;
        height: 74px;
    }
}

.copy {
    clear: both;
    position: relative;
    top: 85vh;
    color: white;
}

h1 {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #112162;
}

@keyframes a-animation {
    from {
        color: #112162;
    }

    to {
       color: rgb(255, 255, 255);
    }
}

li {
    list-style: none;
    color: rgb(216, 68, 68);
}


    </style>
</head>

<body>
    
    <section>
        <img src="imagem/24b37378-d1ad-42a6-b917-e891fa7399b9.jpg" width="300px">
    </section>

<div id="div-login">
    <h1>Cadastrar</h1>
    </center>
    <form action="?page=salvar" class="formulario" method="POST">
    <input type="hidden" name="acao" value="cadastrar-usuario">
    
    <label>Nome</label>    
    <input type="text" name="nome" placeholder="Nome"><br>

    <label>Usuário</label>
    <input type="text" name="login" placeholder="Usuário"><br>
 
    <label>Senha</label>
    <input type="password" name="senha" placeholder="Senha"><br>
        
    <button type="submit" name="btn-cadastrar" class="button"> Cadastrar </button>
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
</body>
</html>
