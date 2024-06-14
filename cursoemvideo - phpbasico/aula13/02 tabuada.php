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
            $n = isset($_GET['num']) ? $_GET['num'] : 1;
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $n * $i;
                echo "$n x $i = $resultado <br>";
            }
        ?>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>

</html>