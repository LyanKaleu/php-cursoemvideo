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
        $nome = "Lyan Kaleu";
        $novo = str_pad($nome, 30, "x", STR_PAD_RIGHT);
        print("Essa pessoa $novo é um cara legal!");
    ?>
    </div>
</body>

</html>