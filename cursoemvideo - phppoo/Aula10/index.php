<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 - POO</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';

            // Programa principal
            $pessoa = [new Pessoa('Paulo', 19, 'M'), new Aluno('Mariana', 23, 'F'), new Professor('Mário', 47, 'M'), new Funcionario('Kátia', 53, 'F')];

            $pessoa[0]->setNome('Pedro');
            $pessoa[1]->setNome('Maria');
            $pessoa[2]->setNome('Cláudio');
            $pessoa[3]->setNome('Fabiana');

            $pessoa[1]->setCurso('Informática');
            $pessoa[2]->setSalario(2500.75);
            $pessoa[3]->setSetor('Estoque');

            $pessoa[2]->receberAumento(550.20);
            $pessoa[3]->mudarTrabalho();
            $pessoa[1]->cancelarMatricula();

            print_r($pessoa[0]);
            print_r($pessoa[1]);
            print_r($pessoa[2]);
            print_r($pessoa[3]);
            ?>
    </pre>
</body>
</html>