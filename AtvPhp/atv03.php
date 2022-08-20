<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
</head>
<body>
        <form method="get">
            Digite uma nota: <input type="text" name="nota">
            <input type="submit" value="Enviar">
        </form>
    <?php
        $nota = $_GET['nota'];

        if($nota <= 10){
            echo "Nota enviada com sucesso.";
        }
        else{
            echo "Informe um valor valido.";
        }

    ?>
</body>
</html>