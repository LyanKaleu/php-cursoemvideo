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
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $media = ($nota1 + $nota2) / 2;
            echo "A média entre $nota1 e $nota2 é igual a $media <br>";
            echo "A situação do aluno é ". (($media < 6) ? "REPROVADO" : "APROVADO");
        ?>
    </div>
</body>

</html>