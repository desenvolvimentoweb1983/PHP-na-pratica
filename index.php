<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meu Primeiro Projeto PHP</title>

    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include "header.php"; ?>

<main>
    <h1>Bem-vindo ao site 🚀</h1>

    <form action="processa.php" method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <button type="submit">Enviar</button>
    </form>
</main>

<?php include "footer.php"; ?>

<script src="script.js"></script>
</body>
</html>