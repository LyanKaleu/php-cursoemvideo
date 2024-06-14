<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
        $cont = 10;
        while ($cont >= 0) {
          echo $cont. "<br>";
          $cont-=2;
        }
    ?>
    </div>
</body>

</html>