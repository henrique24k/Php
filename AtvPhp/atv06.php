<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 06</title>
</head>
<body>
    <form  method="get">
        Digite um valor inicial: <input type="text" name="vInicial"><br>
        Digite um valor final: <input type="text" name="vFinal"><br>
        <input type="submit" value="Resultado">
    </form>

    </form>
    <?php
        $vInicial = $_GET['vInicial'];
        $vFinal = $_GET['vFinal'];

        for($vInicial = $vInicial; $vInicial <= $vFinal; $vInicial++){
            echo $vInicial;
        }

    ?>
</body>
</html>