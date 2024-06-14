<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <pre>
            <?php
                $matriz = array(
                    array(6,4),
                    array(4,9),
                    array(3,2)
                );
                $matriz[0][1] = $matriz[2][0];
                print_r($matriz);
            ?>
        </pre>
    </div>
</body>

</html>