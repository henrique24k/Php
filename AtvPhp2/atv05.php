<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 05</title>
</head>
<body>
    <form method="get">
        Digite seu nome: <input type="text" name="nome"><br>
        <h5>ESCOLHA</h5>
        1 - Pedra:::<input type="text" name="1"><br>
        2 - Papel:::<input type="text" name="2"><br>
        3 - Tesoura<input type="text" name="3"><br>
        <input type="submit" value="Iniciar">
    </form>
    <?php
        $pedra = $_GET['1'];
        $papel = $_GET['2'];
        $tesoura = $_GET['3'];
        $pc = rand(1,3);

        if($pedra == $pc){
            echo "Empatou";
        }
        else if($papel == $pc){
            echo "Empatou";
        }
        else if ($tesoura == $pc){
            echo "Empatou";
        }
        else if($tesoura > 2){
            echo "Ganhou";
        }
        else if($pedra < 3){
            echo"ganhou";
        }
        else if($papel > 1){
            echo "Ganhou";
        }
        else if($tesoura < 2){
            echo "perdeu";
        }
        else if($pedra > 3){
            echo"perdeu";
        }
        else if($papel < 1){
            echo "perdeu";
        }


    ?>
</body>
</html>