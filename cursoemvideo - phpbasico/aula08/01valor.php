<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php 
            $valor = $_GET["v"];
            $raizQuadrada = sqrt($valor);
            echo "<br>A raiz quadrada de $valor é igual a ". number_format($raizQuadrada, 2);
        ?>
        <a href="01-exercicio.html" style="border: 1px solid black; text-decoration: none;">Voltar</a>
    </div>
</body>

</html>