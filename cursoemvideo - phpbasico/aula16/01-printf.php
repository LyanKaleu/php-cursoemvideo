<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
        $produto = "Leite";
        $preco = 4.5;
        // echo "O $produto custa R$". number_format($preco, 2);
        printf("O %s está custando R$%.2f", $produto, $preco); # É igual o printf da linguagem C!
    ?>
    </div>
</body>

</html>