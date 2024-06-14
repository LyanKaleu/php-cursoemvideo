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
            $anoNasc = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
            $idade = date("Y") - $anoNasc;
            echo "Você nasceu em  $anoNasc e você terá $idade anos";
            
            if ($idade < 16) {
                $tipoVoto = "não vota";
            } elseif (($idade >= 16 && $idade < 18) or ($idade > 65)) {
                $tipoVoto = "voto opcional";
            } else {
                $tipoVoto = "voto obrigatório";
            }

            echo "<br>Para essa idade, $tipoVoto";
        ?>
        <a href="exercicio02.html" style="border: 1px solid black; text-decoration: none;">Voltar</a>
    </div>
</body>

</html>