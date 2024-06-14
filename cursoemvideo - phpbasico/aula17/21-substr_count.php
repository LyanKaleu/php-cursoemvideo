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
        $frase = "Estou aprendendo PHP no Curso em Vídeo de PHP";
        $contador = substr_count($frase, "PHP");
        echo "PHP encontrado $contador vezes!";
    ?>
    </div>
</body>

</html>