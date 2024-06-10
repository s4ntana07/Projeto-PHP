<?php
    //conexão
    require_once 'db_connect.php';

    //sessão
    session_start();

    // botão enviar
    if(isset($_POST['btn-entrar'])) {
        $erros = array();
        $login = mysqli_escape_string($connect, $_POST['login']);
        $senha = mysqli_escape_string($connect, $_POST['senha']);

        //caso a senha ou login esteja em branco
        if(empty($login) or empty($senha)) {
            $erros[] = "<li> Login ou senha não foram preenchidos </li>";
        } else {
            $sql = "SELECT login FROM usuarios WHERE login = '$login'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) > 0){
                $senha = md5($senha);
                $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
                $resultado = mysqli_query($connect, $sql);

                    if(mysqli_num_rows($resultado) == 1) {
                            $dados = mysqli_fetch_array($resultado);
                            $_SESSION['logado'] = true;
                            $_SESSION['id_usuario']= $dados['id'];
                            header('Location: php/index.php
                            ');
                        } else {
                            $erros[] = "<li> usuário ou senha não conferem </li>";
                        }

            } else {
                $erros[] = "<li> Usuário inexistente </li>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
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
    height: 450px;
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
}

button {
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
    color: rgb(0, 0, 125);
    animation: h2 1s;
    animation: h2-animation 4s infinite alternate-reverse;
}

@keyframes h2-animation {
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
    <h1>Login</h1>
    <?php
        if(!empty($erros)) {
            foreach($erros as $erro) {
                echo $erro;
            }
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login" placeholder="USER"><br>
        Senha: <input type="password" name="senha" placeholder="SENHA"><br>
        <button type="submit" name="btn-entrar"> Entrar </button>
    </form>
</div>
        <center>
            <p class="copy">&copy;Copyright 1966-2024 Gazin</p>
        </center>
</body>
</html>