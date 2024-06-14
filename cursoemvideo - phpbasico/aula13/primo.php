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
            echo "Analisando o número $num...";
            $n_divisivel = 0;
            echo "<br>Valores múltiplos: ";
            for ($i = 1; $i <= $num; $i++) {
                if ($num % $i == 0) {
                    $n_divisivel++;
                    echo "$i ";
                }
            }

            echo "<br>Total de múltiplos: $n_divisivel";

            if ($n_divisivel == 2) {
                echo "<br>Resultado: $num <span class='foco'>É PRIMO!</span>";
            } else {
                echo "<br>Resultado: $num <span class='foco'>NÃO É PRIMO!</span>";
            }
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>

</html>