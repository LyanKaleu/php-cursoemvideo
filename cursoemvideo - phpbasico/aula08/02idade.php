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
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]"; // Verifica se foi passado como parâmetro
            $anoNasc = isset($_GET["anoNasc"]) ? $_GET["anoNasc"] : 0;
            $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sem sexo]";
            $idade = date("Y") - $anoNasc; // y minúsculo representa o ano reduzido (ex: 2024 = 24)
            echo "$nome é $sexo e tem $idade anos!"
        ?>
        <a href="02-exercicio.html" style="border: 1px solid black; text-decoration: none;">Voltar</a>
    </div>
</body>

</html>