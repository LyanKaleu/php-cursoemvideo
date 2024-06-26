<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Artiméticas em PHP</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <style>
    h2 {
        font: 15pt Arial;
        color: #171559;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <div>
        <?php 
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            echo "<h2>Valores recebidos: $v1 e $v2</h2>";
            echo "O valor absoluto de $v2 é ". abs($v2);
            echo "<br>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2); // (V1 ELEVADO A V2)
            echo "<br>A raiz quadrada de $v1 é ". sqrt($v1);
            echo "<br>O valor de $v2 arredondado é ". round($v2); // CEIL(ACIMA) OU FLOOR(BAIXO)
            echo "<br>A parte inteira de  $v2 é ". intval($v2);
            echo "<br>O valor de $v1 em moeda é R$" . number_format($v1, 2, ",", "."); // (VALOR, NÚMERO DE CASAS DECIMAIS, SEPARADOR DECIMAL, SEPARADOR MILHAR) 
        ?>
    </div>
</body>

</html>