<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - POO</title>
</head>
<body>
    <pre>
        <?php
            // Programa principal 
            require_once 'Lutador.php';
            require_once 'Luta.php';
            /*$l1 = new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1);
            $l2 = new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
            $l3 = new Lutador('Snapshadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1);
            $l4 = new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2);
            $l5 = new Lutador('Ufocobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3);
            $l6 = new Lutador('Nerdaard', 'EUA', 30, 1.81, 105.7, 12, 2, 4);*/
            
            $lutadores = array(new Lutador('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1),
                                new Lutador('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3),
                                new Lutador('SnapShadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1),
                                new Lutador('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2),
                                new Lutador('UFOCobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3),
                                new Lutador('Nerdaart', 'EUA', 30, 1.81, 105.7, 12, 2, 4));
            
            $lutadores[3]->perderLuta();
            $lutadores[3]->apresentar();
            $lutadores[3]->status();

            $UEC01 = new Luta();
            $UEC01->marcarLuta($lutadores[0], $lutadores[1]);
            $UEC01->lutar();

            $lutadores[0]->status();
            $lutadores[1]->status();
        ?>
    </pre>
</body>
</html>