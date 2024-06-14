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
        function soma() {
          $p = func_get_args(); # Vetor dos parâmetros
          $total = func_num_args(); # Tamanho do vetor
          $soma = 0;
          for ($i=0; $i < $total; $i++) { 
            $soma += $p[$i];
          }
          return $soma;
        }

        $resultado = soma(3, 5, 2, 8, 9, 4);
        echo "A soma dos valores é $resultado";
    ?>
    </div>
</body>

</html>