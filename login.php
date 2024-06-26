<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinhalNews</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="container">
        <header>
            <img src="img/logo.png" alt="Logo PinhalNews" class="logo">
            <div class="titulos">
                <spam class="titulo1">PinhalNews</spam>
                <p class="titulo2">seu site de notícias da cidade e do mundo.</p>
            </div>
        </header>
        <nav>
            <ul>
                <li><a href="index.php">Principal</a></li>
                <li><a href="todas.php">Todas as Noticias</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="area.php">Area Restrita</a></li>
            </ul>
        </nav>
        <main id="main-padrao">
            <div class="login">
                <form action="login.php" method="post">
                    <label for="txt_usuario">Usuario: </label>
                    <input type="text" name="txt_usuario" id="txt_usuario" placeholder="Digite seu usuario">
                    <br>
                    <label for="txt_senha">Senha: </label>
                    <input type="password" name="txt_senha" id="txt_senha" placeholder="Digite a senha">
                    <br>
                    <input type="submit" value="Entrar" name="btn_entrar" id="btn_entrar">
                    <input type="reset" value="Limpar" name="btn_limpar" id="btn_limpar">
                </form>
                <?php
                    $txt_usuario = @$_POST['txt_usuario'];
                    $txt_senha = @$_POST['txt_senha'];
                    $entrar = @$_POST['btn_entrar'];
                    if(($txt_usuario) && ($txt_senha) && ($entrar))
                    {
                        $sql = "SELECT * FROM tb_login WHERE usuario = '$txt_usuario' AND senha = '$txt_senha';";
                        $resultado = mysqli_execute_query($conexao, $sql);
                        $dados = mysqli_fetch_array($resultado);
                        if((@$dados['usuario'] == $txt_usuario) && (@$dados['senha'] == $txt_senha))
                        {
                            session_start();
                            $_SESSION['usuario'] = $txt_usuario;
                            $_SESSION['senha'] = $txt_senha;
                            $_SESSION['id_login'] = $dados['id_login'];
                            header('Location: area.php');
                        }else{
                            echo "<div class='erro'>
                                    <p>Usuario/Senha incorretos !!!</p>
                                  </div>";                            
                        }
                    }
                ?>
            </div>
        </main>
        <footer>
            <a href="#"><img src="img/whats.png" alt="whatsapp" width="226"></a>
            <p>Copyright © 2024 Pinhal News - Desenvolvido e otimizado por Alunos Etec INFO.</p>
            <a href="#"><img src="img/redes.png" alt="redes social" width="148"></a>
        </footer>
    </div>
</body>
</html>