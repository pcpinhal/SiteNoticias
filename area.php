<?php
include_once "conexao.php";
session_start();
if(!$_SESSION['usuario'])
{
    header('Location: login.php');
}
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
            <h1>Area Administrativa</h1>
            <h2>Noticias</h2>
            <ul>
                <li><a href="add_not.php">Adicionar Noticia</a></li>
                <li><a href="del_not.php">Remover Noticia</a></li>
                <li><a href="alt_not.php">Alterar Noticia</a></li>
            </ul>
            <h2>Usuario</h2>
            <ul>
                <li><a href="add_user.php">Adicionar Usuario</a></li>
                <li><a href="del_user.php">Remover Usuario</a></li>
                <li><a href="alt_user.php">Alterar Usuario</a></li>
            </ul>
            <h2>Gerenciador</h2>
            <ul>
                <li><a href="logout.php">Sair</a></li>
            </ul>
        </main>
        <footer>
            <a href="#"><img src="img/whats.png" alt="whatsapp" width="226"></a>
            <p>Copyright © 2024 Pinhal News - Desenvolvido e otimizado por Alunos Etec INFO.</p>
            <a href="#"><img src="img/redes.png" alt="redes social" width="148"></a>
        </footer>
    </div>
</body>
</html>