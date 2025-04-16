<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dados.css">
    <title>Dados Enviados - Turtur</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<main>
    <div class="data-container">
        <h1>Dados Enviados!</h1>
        <?php
        include 'ContatoForm.php'; 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $contatoForm = new ContatoForm(
                $_POST['nome'],
                $_POST['idade'],
                $_POST['dataViagem'],
                $_POST['continente'],
                $_POST['numeroPessoas'],
                $_POST['tempoViagem'],
                $_POST['email'],
                $_POST['telefone']
            );

            $contatoForm->exibirDados();
        } else {
            echo "<p>Nenhum dado foi enviado.</p>";
        }
        ?>
    </div>
</main>
</body>
</html>
