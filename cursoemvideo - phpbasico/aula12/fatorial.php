<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php 
            $valor = isset($_GET['v']) ? $_GET['v'] : 1;
            echo "<h1>Calculando o fatorial de $valor...</h1><br>";
            $cont = $valor;
            $fatorial = 1;
            do {
                $fatorial *= $cont;
                $cont--;
            } while ($cont >= 1);
            echo "<h2>$valor! = $fatorial</h2>";
        ?>
        <a href="fatorial.html" class="botao">Voltar</a>
    </div>
</body>

</html>