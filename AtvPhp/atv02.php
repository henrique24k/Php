<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
</head>
<body>
    <form method="get">
        Digite um numero para saber o Mês: <input type="text" name="mes">
        <input type="submit" value="Enviar">
    </form>
<?php
    $mes = $_GET['mes'];

    if($mes == 1){
        echo "Janeiro";
    }
    else if ($mes == 2){
        echo "Fevereiro";
    }
    else if ($mes == 3){
        echo "Março";
    }
    else if ($mes == 4){
        echo "Abril";
    }
    else if ($mes == 5){
        echo "Maio";
    }
    else if ($mes == 6){
        echo "Junho";
    }
    else if ($mes == 7){
        echo "Julho";
    }
    else if ($mes == 8){
        echo "Agosto";
    }
    else if ($mes == 9){
        echo "Setembro";
    }
    else if ($mes == 10){
        echo "Outubro";
    }
    else if ($mes == 11){
        echo "Novembro";
    }
    else if ($mes == 12){
        echo "Dezembro";
    }
    else{
        echo "Mês Invalido"; 
    }
?>

</body>
</html>