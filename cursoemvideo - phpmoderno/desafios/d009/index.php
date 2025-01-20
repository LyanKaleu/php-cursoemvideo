<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET['v1'] ?? '';
        $v2 = $_GET['v2'] ?? '';
        $p1 = $_GET['p1'] ?? '';
        $p2 = $_GET['p2'] ?? '';
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?=$v1?>" step="0.1" required>

            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?=$p1?>" min="1" step="0.1" required>

            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?=$v2?>" step="0.1" required>


            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" value="<?=$p2?>" min="1" step="0.1" required>

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <?php 
            $mediaSimples = number_format(($v1 + $v2) / 2, 2, ',', '.');
            $mediaPonderada = number_format((($v1 * $p1) + ($v2 * $p2)) / ($p1 + $p2), 2, ',', '.');
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$v1?> e <?=$v2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=$mediaSimples?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$p1?> e <?=$p2?> é igual a <?=$mediaPonderada?></li>
        </ul>
    </section>
</body>
</html>