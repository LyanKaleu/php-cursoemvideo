<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 013</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        $saque = $_REQUEST['saque'] ?? 0;
        $saqueFormatado = numfmt_format_currency($padrao, $saque, 'BRL');
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R&dollar;)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="1" required value="<?=$saque?>">

            <p style="font-size: 0.6em"><sup>*</sup>Notas disponíveis: R&dollar;100, R&dollar;50, R&dollar;20, R&dollar;10, R&dollar;5, R&dollar;2 e R&dollar;1</p>

            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
        $resto = $saque;

        // Saque de R$100
        $notas100 = intdiv($resto, 100);
        $resto %= 100;

        // Saque de R$50
        $notas50 = intdiv($resto, 50);
        $resto %= 50;

        // Saque de R$20
        $notas20 = intdiv($resto, 20);
        $resto %= 20;

        // Saque de R$10
        $notas10 = intdiv($resto, 10);
        $resto %= 10;

        // Saque de R$5
        $notas5 = intdiv($resto, 5);
        $resto %= 5;

        // Saque de R$2
        $notas2 = intdiv($resto, 2);
        $resto %= 2;

        // Saque de R$1
        $notas1 = intdiv($resto, 1);
        $resto %= 1;
    ?>

    <section>
        <h2>Saque de <?=$saqueFormatado?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100 reais" class="nota"> x <?=$notas100?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50 reais" class="nota"> x <?=$notas50?></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20 reais" class="nota"> x <?=$notas20?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10 reais" class="nota"> x <?=$notas10?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5 reais" class="nota"> x <?=$notas5?></li>
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2 reais" class="nota"> x <?=$notas2?></li>
            <li><img src="imagens/1-real.jpg" alt="Moeada de 1 real" class="nota"> x <?=$notas1?></li>
        </ul>
    </section>
</body>
</html>