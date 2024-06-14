<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php 
            $n = isset($_GET['num']) ? $_GET['num'] : 0;
            $op = isset($_GET['oper']) ? $_GET['oper'] : 1;

            switch ($op) {
                case 1:
                    $n *= 2;
                    break;
                case 2:
                    $n ^= 3;
                    break;
                case 3:
                    $n = sqrt($n);
                    break;
            }

            echo "O resultado da operação solicitada foi <span class='foco'>$n</span>";
        ?>
        <a href="exercicio01.html" class="botao">Voltar</a>
    </div>
</body>

</html>