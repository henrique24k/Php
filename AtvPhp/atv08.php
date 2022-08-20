<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 08</title>
</head>
<body>
        <form method="get">
            Tente adivinhar o numero sorteado: <input type="text" name="num">
            <input type="submit" value="Adivinhar">
        </form>
    <?php
        $num = $_GET["num"];
        $numSorteado = rand(1,50);

        if($num == $numSorteado){
            echo"Acertou <br> ";
        }
        else if($num > 50){
            echo "Digite um numero entre 1 e 50 <br>";
        }
        else{
            echo "Errou! <br>" ;
        }

        echo $numSorteado;

    ?>
</body>
</html>