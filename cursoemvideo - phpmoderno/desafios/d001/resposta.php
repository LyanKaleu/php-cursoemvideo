<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $numero = $_GET["numero"] ?? 0;
                echo "<p>O número escolhido foi <strong>$numero</strong></p>";
                echo "<p>O seu antecessor é <strong>".($numero - 1)."</strong></p>";
                echo "<p>O seu sucessor é <strong>".($numero + 1)."</strong></p>";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html>