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
        $txt = "Curso em Vídeo";
        $tamanho = strlen($txt);
        echo "O texto: $txt<br>Tem exatamente $tamanho caracteres (incluindo os espaços)!";
    ?>
    </div>
</body>

</html>