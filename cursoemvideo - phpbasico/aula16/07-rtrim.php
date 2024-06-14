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
        $nome = "   José da Silva   ";
        echo(strlen($nome)."<br>");
        $novo = rtrim($nome);
        echo($novo."<br>");
        echo(strlen($novo)); 
    ?>
    </div>
</body>

</html>