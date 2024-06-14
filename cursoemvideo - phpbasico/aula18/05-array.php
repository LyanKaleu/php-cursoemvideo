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
                $v = array("nome" => "Ana", "idade" => 23, "peso" => 65.5);
                $v["estuda"] = true;

                foreach ($v as $key => $valor) {
                    echo "O campo $key possui o conteúdo $valor <br>";
                }
            ?>
        </pre>
    </div>
</body>

</html>