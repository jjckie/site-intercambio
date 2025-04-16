<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turtur</title>
    <link rel="stylesheet" href="css/style.css">



    
</head>
<body>
    <header>
        <nav>
           <?php include 'config.php' ?>
            <a class= "logo" href="home.php">Turtur</a>
           <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
           </div>
           
            <ul class="nav-list">
                <li><a href="home.php">Início</a></li>
                <li><a href="pacotes.php">Pacotes</a></li>
                <li><a href="novo_usuario.php">Novo Usuário</a></li>
                <li><a href="lista_usuarios.php">Listar Usuários</a><li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <script src="mobile-navbar.js"></script>
</body>
</html>