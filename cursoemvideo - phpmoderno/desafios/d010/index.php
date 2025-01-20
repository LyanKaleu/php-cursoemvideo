<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $anoNascimento = $_GET['nasc'] ?? 2000;
        $anoAtual = $_GET['atual'] ?? date("Y");
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" value="<?=$anoNascimento?>" max="<?=date("Y") - 1?>" min="1900">

            <label for="atual">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=date("Y")?></strong>)</label>
            <input type="number" name="atual" id="atual" value="<?=$anoAtual?>" min="1900">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$anoNascimento?> vai ter <strong><?=$anoAtual - $anoNascimento?> anos</strong> em <?=$anoAtual?>!</p>
    </section>
</body>
</html>