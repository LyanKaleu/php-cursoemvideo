<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 - POO</title>
</head>

<body>
    <pre>
    <?php 
        require_once "ContaBanco.php";
        
        $p1 = new ContaBanco(1, 'cc', 'Jubileu'); 
        $p2 = new ContaBanco(2, 'cp', 'Creuza');

        $p1->abrirConta($p1->getTipo());
        $p2->abrirConta($p2->getTipo());

        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(100);

        $p1->pagarMensal();
        $p2->pagarMensal();
        
        $p1->sacar(338);
        $p2->sacar(530);

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>

</html>