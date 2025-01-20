<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>Analisador de Número Real</h1>

        <?php
            $numeroReal = $_GET["numeroReal"] ?? 0;

            $parteInteira = (int) $numeroReal;
            $parteFracionaria = $numeroReal - $parteInteira;

            $numeroRealFormatado = number_format($numeroReal, 3, ',', '.');
            $parteFracionariaFormatado = number_format($parteFracionaria, 3, ',', '.');

            echo "<p>Analisando o número <strong>$numeroRealFormatado</strong> informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do número é <strong>". number_format($parteInteira, 0, ",", ".") ."</strong></li><li>A parte fracionária do número é <strong>$parteFracionariaFormatado</strong></li></ul>";
        ?>
        <button onclick="history.go(-1)">&lArr; Voltar</button>
    </main>
</body>
</html>