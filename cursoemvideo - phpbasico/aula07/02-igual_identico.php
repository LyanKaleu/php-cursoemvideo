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
            $a = 3;
            $b = "3";
            $r = ($a === $b) ? "SIM" : "NÃO"; // == Compara o contéudo das variáveis / === Compara o valor e o tipo de dado das variáveis
            echo "As variáveis A e B são iguais? $r";
        ?>
    </div>
</body>

</html>