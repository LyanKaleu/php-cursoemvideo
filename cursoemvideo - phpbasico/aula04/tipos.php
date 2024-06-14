<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Document</title>
</head>

<body>
    <div>
        <?php 
        $n = 4;
        $nome = (string) 'Lyan'; // (string) é uma typecast para forçar a tipagem! 
        $idade = 19;
        echo $nome. " tem " .$idade. " anos!<br>";
        echo "$nome tem $idade anos!"; // RECOMENDADO! (SEMPRE COM ASPAS DUPLAS!)
    ?>
    </div>

</body>

</html>