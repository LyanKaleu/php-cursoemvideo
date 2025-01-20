<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - POO</title>
</head>

<body>
    <pre>
    <?php
        // Importar a classe Caneta 
        require_once "Caneta.php";

        // Instância do objeto 'c1'
        $c1 = new Caneta();
        $c1->modelo = "BIC cristal";
        $c1->cor = "Azul";
        // $c1->ponta = 0.5; ERRO! POIS O ATRIBUTO 'PONTA' É PRIVADO!
        // $c1->carga = 99; ERRO! POIS O ATRIBUTO 'CARGA' É PROTEGIDO!  
        $c1->rabiscar(); // CORRETO!
        $c1->tampar(); // CORRETO!
        print_r($c1);
    ?>
    </pre>
</body>

</html>