<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/forms.css">
    <title>Contato - Turtur</title>
</head>
<body>
<?php include 'navbar.php'; ?>
<main>
    <div class="contact-container">
        <h1>Converse com a gente!</h1>
        <p>Preencha o formulário abaixo para entrar em contato conosco.</p>
        <form action="dados.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required>

            <label for="dataViagem">Data da Viagem:</label>
            <input type="date" id="dataViagem" name="dataViagem" required>

            <label for="continente">Continente de Interesse:</label>
            <select id="continente" name="continente" required>
                <option value="africa">África</option>
                <option value="asia">Ásia</option>
                <option value="europa">Europa</option>
                <option value="america-do-norte">América do Norte</option>
                <option value="america-do-sul">América do Sul</option>
                <option value="oceania">Oceania</option>
            </select>

            <label for="numeroPessoas">Número de Pessoas:</label>
            <input type="number" id="numeroPessoas" name="numeroPessoas" required>

            <label for="tempoViagem">Tempo de Viagem (dias):</label>
            <input type="number" id="tempoViagem" name="tempoViagem" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>

            <button type="submit">Enviar</button>
        </form>
    </div>
</main>
</body>
</html>
