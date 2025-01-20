<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 012</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_REQUEST['seg'] ?? 0;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php 
        $sobra = $total;

        // Total de semanas
        $semanas = intdiv($sobra, 604800);
        $sobra = $sobra % 604800;

        // Total de dias
        $dias = intdiv($sobra, 86400);
        $sobra = $sobra % 86400;

        // Total de horas
        $horas = intdiv($sobra, 3600);
        $sobra = $sobra % 3600;

        // Total de minutos
        $minutos = intdiv($sobra, 60);
        $sobra = $sobra % 60;

        // Total de segundos
        $segundos = $sobra;
    ?>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$total?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semanas?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
</body>
</html>