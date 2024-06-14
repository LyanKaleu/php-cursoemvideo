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
            $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
            $fim = isset($_GET["final"])? $_GET["final"] : 0;
            $incremento = isset($_GET["incremento"])? $_GET["incremento"] : 1;

            if ($inicio < $fim) {
                while ($inicio <= $fim) {
                    echo "$inicio ";
                    $inicio += $incremento;
                }
            } else {
                while ($inicio >= $fim) {
                    echo "$inicio ";
                    $inicio -= $incremento;
                }
            }
        ?>
        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>

</html>