<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        $salarioMinimo = 1404.15;
        $salarioMinimoFormatado = numfmt_format_currency($padrao, $salarioMinimo, "BRL");

        $salario = $_GET['salario'] ?? 0;
        $salarioFormatado = numfmt_format_currency($padrao, $salario, "BRL");

        $qtdSalarios = intdiv($salario, $salarioMinimo);

        $restante = $salario % $salarioMinimo;
        $restanteFormatado = numfmt_format_currency($padrao, $restante, "BRL");
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R&dollar;)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário mínimo de <strong><?=$salarioMinimoFormatado?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de <?=$salarioFormatado?> ganha <strong><?=$qtdSalarios?> salários mínimos</strong> + <?=$restanteFormatado?></p>
    </section>
</body>
</html>