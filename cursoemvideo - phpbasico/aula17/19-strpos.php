<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
        $frase = "Estou aprendendo PHP";
        $posicao = strpos($frase, "PHP");
        echo "$frase<br>A string foi encontrada na posição $posicao";
    ?>
    </div>
</body>

</html>