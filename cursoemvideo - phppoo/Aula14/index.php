<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - POO</title>
</head>
<body>
    <pre>
        <?php
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
            // Programa principal
            $v = [new Video("Aula 1 de POO"), new Video("Aula 12 de PHP"), new Video("Aula 15 de HTML5")];
            print_r($v);

            $g[0] = new Gafanhoto('Juliano', 22, 'M', 'juca');
            $g[1] = new Gafanhoto('Maria', 12, 'F', 'mariazita');
            print_r($g);
        ?>
    </pre>
</body>
</html>