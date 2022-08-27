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
        Digite o valor de A: <input type="text" name="valorA"><br>
        Digite o valor de B: <input type="text" name="valorB"><br>
        <input type="submit" value="Resultado">
    </form>
    <?php
        $a = $_GET['valorA'];
        $b = $_GET['valorB'];

            if($a > $b){
                echo "Valor A maior que B";
            }
            else if($a < $b){
                echo "Valor B Maior que A";
            }
            else{
                echo "Valores iguais";
            }

    ?>
</body>
</html>