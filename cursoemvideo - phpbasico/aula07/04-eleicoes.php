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
            $ano = $_GET["ano"];
            $idade = 2024 - $ano;
            echo "Quem nasceu em $ano tem $idade anos";
            
            $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO"; // PODE USAR O 'and' TAMBÉM!
            echo "<br>E dessa forma seu voto é $tipo";
        ?>
    </div>
</body>

</html>