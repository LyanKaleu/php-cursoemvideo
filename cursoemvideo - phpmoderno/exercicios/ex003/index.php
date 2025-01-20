<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal / 0b = binário / 0 = octal
        // $num = 010;
        // echo "O valor da variável é $num";
        
        // $v = "Gustavo";
        // var_dump($v);

        // $num = 3e2; // 3 x 10^2 
        // // echo "O valor é $num";
        // var_dump($num);

        // $num = (int) "950"; // (int) = COERÇÃO
        // var_dump($num);

        // $casado = false;
        // // var_dump($casado);
        // print("O valor para casado é $casado"); // 1 = TRUE | VAZIO OU 0 = FALSE

        // $vetor = [6, 2.5, "Maria", false];
        // var_dump($vetor);

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>