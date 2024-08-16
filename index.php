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
    <link rel="stylesheet" media="screen" href="css/style.css">
    <link rel="shortcut icon" href="imagem/unnamed.ico" type="image/x-icon">
    <title>Login</title>
</head>

<body class="body">
    
    <center>
        
    


<div id="div-login">
    
    <?php
        if(!empty($erros)) {
            foreach($erros as $erro) {
                echo $erro;
            }
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <img src="imagem/Gazin_1_cca4b227db.webp" width="300px">
        </div>
        <img src="php\imagens\pngtree-avatar-icon-profile-icon-member-login-vector-isolated-png-image_1978396.jpg" width="30px">
        <input type="text" name="login" placeholder="Digite seu usuário" class="input1"><br>
        <img src="imagem\png-transparent-computer-icons-padlock-lock-technic-symbol-key-thumbnail.png" width="30px"> 
        <input type="password" name="senha" placeholder="******" class="input1"><br>
        <button type="submit" name="btn-entrar" class="button"> <h3>Entrar</h3> </button>
    </form>
    <p class="p-cadastro">
        Ainda não tem um cadastro? <a href="cadastro.php" class="cadastro">Cadastre-se</a>
    </p>
</div>
</center>
</body>
</html>