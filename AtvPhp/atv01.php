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
    Digite seu nome: <input type="text" name="nome"><br>
    Digite sua idade: <input type="text" name="idade">
    <input type="submit" value="Resultado">
</form>
    <?php
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];

        if($idade >= 18){
            echo "Ola ", $nome , " Você é Maior de idade";
        }
        else{
            echo "Ola ", $nome ,  " Você é Menor de idade";
        }
    
    ?>
</body>
</html>