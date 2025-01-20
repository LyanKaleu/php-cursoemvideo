<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 004</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>Conversor de Moedas v2.0</h1>

        <?php
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacaoDolar = $dados["value"][0]["cotacaoCompra"];

            $saldoReal = $_GET["saldo"] ?? 0;
            $saldoDolar = $saldoReal / $cotacaoDolar;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus ". numfmt_format_currency($padrao, $saldoReal, "BRL") ." equivalem a 
            <strong>". numfmt_format_currency($padrao, $saldoDolar, "USD") ."</strong></p>";
            echo "<p>* Cotação obtida diretamente do site do <a href='https://www.bcb.gov.br' target='_blank'>Banco Central do Brasil</a></p>";
        ?>
        <button onclick="history.go(-1)">&lArr; Voltar</button>
    </main>
</body>
</html>