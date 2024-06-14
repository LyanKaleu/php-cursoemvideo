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
            $num = isset($_GET['num']) ? $_GET['num'] : 1;
            echo "Mostrando a Tabuada de $num<br><br>";
            $cont = 1;
            do {
                echo "$num x $cont = ". ($num * $cont)."<br>";
                $cont++;
            } while ($cont <= 10);
        ?>
        <a href="tabuada.html" class="botao">Voltar</a>
    </div>
</body>

</html>