<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['num'] ?? 0;

        $raizQuadrada = number_format(sqrt($numero), 3, ',', '.');
        $raizCubica = number_format(pow($numero, (1 / 3)), 3, ',', '.');

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?=$numero?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=$raizQuadrada?></strong></li>
            <li>A sua raiz cúbica é <strong><?=$raizCubica?></strong></li>
        </ul>
    </section>
</body>
</html>