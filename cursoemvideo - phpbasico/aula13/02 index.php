<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <form action="02 tabuada.php" method="get">
            <select name="num" id="num">
                <?php 
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<option>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" class="botao" value="Tabuada">
        </form>
    </div>
</body>

</html>