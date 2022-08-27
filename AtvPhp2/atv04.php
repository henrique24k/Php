<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>
<body>
    <form method="get">
        <h3>Digite 3 numeros para ver se vira um triangulo</h3>
        1°Numero : <input type="text" name="n1"><br>
        2°Numero : <input type="text" name="n2"><br>
        3°Numero : <input type="text" name="n3"><br>
        <input type="submit" value="Resultado">
    </form>
    <?php
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $n3 = $_GET['n3'];

        if(($n1 == $n2) && ($n1 == $n3) && ($n2 == $n3)){
            echo "Triâgulo equilátero";
            echo "<img src='equilatero.png' />";
        }
        else if(($n1 != $n2) && ($n1 != $n3) && ($n2 != $n3)){
            echo "Triângulo escaleno";
            echo "<img src='escaleno.png' />";
        }
        else if(($n1 == $n3) && ($n1 != $n2) && ($n2 != $n3)){
            echo "Triângulo isósceles";
            echo "<img src='isosceles.png' />";
        }
        else{
            echo "Nao forma um triângulo";
        }

    ?>
</body>
</html>