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
            
            if ($idade >= 18) {
                $v = "já pode votar";
                $d = "já pode dirigir";
            } else {
                $v = "não pode votar";
                $d = "não pode dirigir";
            }

            echo "<br>Com essa idade você $v e também $d";
        ?>
        <a href="exercicio01.html" style="border: 1px solid black; text-decoration: none;">Voltar</a>
    </div>
</body>

</html>