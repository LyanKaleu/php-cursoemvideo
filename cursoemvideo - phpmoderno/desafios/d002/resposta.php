<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>

        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
            // rand() = 1951 - Algoritmo Linear Congrential Generator
            // mt_rand() = 1997 - Algoritmo Mersenne Twister (4x mais rápido do que o anterior)
            // A paritr do PHP 7.1, rand() é um simples apontamento para mt_rand()
            // random_int() gera números aleatórios criptograficamente seguros

            $numero = random_int(0, 100);
            echo "<p>O valor gerado foi <strong>$numero</strong></p>";
        ?>
        <button onclick="location.reload()">&#x1F504; Gerar outro</button>
    </section>
</body>
</html>