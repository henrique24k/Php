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
        Digite um numero: <input type="text" name="txtNum">
        <input type="submit" value="Enviar">
    </form>
<?php
    $num = $_GET['txtNum'];

    if($num % 2 == 0){
        echo"Par";
    }
    else{
        echo"Impar";
    }

?>

</body>
</html>