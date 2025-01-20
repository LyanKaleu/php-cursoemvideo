<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - POO</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Pessoa.php';
            require_once 'Livro.php';

            $p = [new Pessoa('Pedro', 22, 'M'), new Pessoa('Maria', 31, 'F')];
            $l = [new Livro('PHP Básico', 'José da Silva', 300, $p[0]), new Livro('POO com PHP', 'Maria de Souza', 500, $p[1]), new Livro('PHP Avançado', 'Ana Paula', 800, $p[1])];

            $l[0]->abrir();
            $l[0]->folhear(80);
            $l[0]->avancarPagina();
            $l[0]->detalhes();

            $l[1]->detalhes();
            $l[2]->detalhes();
        ?>
    </pre>
</body>
</html>