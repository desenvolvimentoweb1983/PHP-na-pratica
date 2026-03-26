<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);

    echo "<!DOCTYPE html>";
    echo "<html><head>";
    echo "<meta charset='UTF-8'>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "<title>Resultado</title>";
    echo "</head><body>";

    echo "<h1>Olá, $nome! 👋</h1>";
    echo "<a href='index.php'>Voltar</a>";

    echo "</body></html>";
}
?>