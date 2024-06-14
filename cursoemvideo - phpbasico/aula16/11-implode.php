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
        $vetor = ["Curso", "em", "Vídeo"];
        $texto = implode("#", $vetor);
        print $texto;
    ?>
    </div>
</body>

</html>