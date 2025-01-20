<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        $preco = $_GET['preco'] ?? 0;
        $precoFormatado = numfmt_format_currency($padrao, $preco, "BRL");

        $percentual = $_GET['percentual'] ?? 0;
    ?>

    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço do Produto (R&dollar;)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" min="0.10" step="0.01">

            <label for="percentual">Qual será o percentual de reajuste? (<strong><span id="p">?</span>&percnt;</strong>)</label>
            <input type="range" name="percentual" id="percentual" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$percentual?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <?php 
        $aumento = $preco * $percentual / 100;

        $precoNovo = $preco + $aumento;
        $precoNovoFormatado = numfmt_format_currency($padrao, $precoNovo, "BRL");
    ?>

    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <?=$precoFormatado?>, com <strong><?=$percentual?>&percnt; de aumento</strong> vai passar a custar <strong><?=$precoNovoFormatado?></strong> a partir de agora.</p>
    </section>

    <script>
        // Declarações automáticas
        mudaValor()

        function mudaValor() {
            p.innerText = percentual.value
        }
    </script>
</body>
</html>