<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO</title>
</head>

<body>
    <?php
        // Importar a classe Caneta 
        require_once "Caneta.php";

        // Instância do objeto 'c1'
        $c1 = new Caneta();
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->destampar();
        $c1->rabiscar();

        print_r($c1);
        
        echo "<br>";
        
        // Instância do objeto 'c2'
        $c2 = new Caneta();
        $c2->cor = "Verde";
        $c2->carga = 50;
        $c2->tampar();
        print_r($c2);
    ?>
</body>

</html>