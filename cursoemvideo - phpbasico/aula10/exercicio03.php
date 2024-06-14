<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php 
            $estado = $_POST['uf'];

            switch ($estado) {
                case "DF":
                case "GO":
                case "MT":
                case "MS":
                    echo "Você mora na <span class='foco'>Região Centro-Oeste</span>";
                    break;
                case 'AL':
                case 'BA':
                case 'CE':
                case 'MA':
                case 'PB':
                case 'PE':
                case 'PI':
                case 'RN':
                case 'SE':
                    echo "Você mora na <span class='foco'>Região Nordeste</span>";
                    break;
                case 'AC':
                case 'AP':
                case 'AM':
                case 'PA':
                case 'RO':
                case 'RR':
                case 'TO':
                    echo "Você mora na <span class='foco'>Região Norte</span>";
                    break;
                case 'ES':
                case 'MG':
                case 'RJ':
                case 'SP':
                    echo "Você mora na <span class='foco'>Região Sudeste</span>";
                    break;
                case 'PR':
                case 'RS':
                case 'SC':
                    echo "Você mora na <span class='foco'>Região Sul</span>";
                    break;
            }
        ?>
        <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>

</html>