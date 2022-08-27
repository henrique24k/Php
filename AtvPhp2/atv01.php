<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>
<body>
    <form method="get">
        Digite um numero: <input type="text" name="txtNum">
        <input type="submit" value="Enviar">
    </form>

    <?php
        $num = $_GET['txtNum'];

        if($num >= 1){
            echo "Numero positivo";
        }
        else if($num < 0){
            echo "Numero negativo";
        }
        else{
            echo"Igual a zero";
        }

    ?>

</body>
</html>