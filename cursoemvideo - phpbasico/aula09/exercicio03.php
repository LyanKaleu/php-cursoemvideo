<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
    a {
        background-color: #112D3E;
        color: white;
        text-decoration: none;
        padding: 10px;
    }

    a:hover {
        text-decoration: underline;
        cursor: pointer;
    }

    span {
        color: darkred;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div>
        <?php 
            $nota1 = isset($_POST["n1"]) ? $_POST["n1"] : 0;
            $nota2 = isset($_POST["n2"])? $_POST["n2"] : 0;
            $media = ($nota1 + $nota2) / 2;

            if ($media < 5) {
                $situacao = "REPROVADO";
            } elseif ($media < 7) {
                $situacao = "RECUPERAÇÃO";
            } else {
                $situacao = "APROVADO";
            }

            echo "A média entre <span>$nota1</span> e <span>$nota2</span> é igual a <span>". number_format($media, 1) ."</span>";
            echo "<br>Situação do aluno: <span>$situacao</span>";
        ?>
        <br><br>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>

</html>