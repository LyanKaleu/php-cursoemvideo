<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <?php
            $saldoReal = $_GET["saldo"] ?? 0;

            $cotacaoDolar = 6.10;
            
            $saldoDolar = $saldoReal / $cotacaoDolar;

            // Formatação simples
            /* $saldoRealFormatado = number_format($saldoReal, 2, ',', '.');
            $saldoDolarFormatado = number_format($saldoDolar, 2, ',', '.');*/
            $cotacaoDolarFormatado = number_format($cotacaoDolar, 2, ',', '.'); 

            // Foramtação de moedas com internacionalização!
            // Biblioteca intl (Internallization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $saldoReal, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $saldoDolar, "USD") . "</strong></p>";
            echo "<p><strong>* Cotação fixa de R\$$cotacaoDolarFormatado</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="history.go(-1)">&lArr; Voltar</button>
    </main>
</body>
</html>