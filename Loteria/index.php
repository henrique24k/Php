<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loteria EtecGRU</title>
</head>
<body>

    <img class="logo" src="Imagens/LOGO.png"><br>
    <div class="container">
        <div class="dentro">
            Digite seu nome: 
            <input type="text" size="60" id="txtNome"><br><br>
            Digite o valor que deseja apostar: 
            <input type="number" step="0.01" min="0" placeholder="R$: " id="aposta">

            <form method="get">
                <h3>Digite os numeros de 1 a 60 para serem sorteados</h3>   
                    Confirme o valor apostato : 
                    <input type="number" step="0.01" min="0"placeholder="R$: " name="aposta"><!--PHP-->
                    <br><br>

                    1<input type="number" size="2" name="n1" min="1" max="60" autocomplete="off">
                    2<input type="number" size="2" name="n2" min="1" max="60" autocomplete="off">
                    3<input type="number" size="2" name="n3" min="1" max="60" autocomplete="off">
                    4<input type="number" size="2" name="n4" min="1" max="60" autocomplete="off">
                    5<input type="number" size="2" name="n5" min="1" max="60" autocomplete="off">
                    6<input type="number" size="2" name="n6" min="1" max="60" autocomplete="off">
                <!--7<input type="number" size="2" name="n7" min="1" max="60" autocomplete="off">
                    8<input type="number" size="2" name="n8" min="1" max="60" autocomplete="off"> 
                    9<input type="number" size="2" name="n9" min="1" max="60" autocomplete="off">
                    10<input type="number" size="2" name="n10" min="1" max="60" autocomplete="off">
                    11<input type="number" size="2" name="n11" min="1" max="60" autocomplete="off">
                    12<input type="number" size="2" name="n12" min="1" max="60" autocomplete="off">
                    13<input type="number" size="2" name="n13" min="1" max="60" autocomplete="off">
                    14<input type="number" size="2" name="n14" min="1" max="60" autocomplete="off">
                    15<input type="number" size="2" name="n15" min="1" max="60" autocomplete="off">-->
                    <input class="btnsortear" type="submit" value="Sortear" onclick="entrar()">
                    <br><br>
            </form>
       
<script src="js/script.js"></script>

<?php
    $resultado = 0;
    $aposta = $_GET['aposta'];
    $npc1 = rand(1,60);
    $npc2 = rand(1,60);
    $npc3 = rand(1,60);
    $npc4 = rand(1,60);
    $npc5 = rand(1,60);
    $npc6 = rand(1,60);
    /*$npc7 = rand(1,60);
    $npc8 = rand(1,60);
    $npc9 = rand(1,60);
    $npc10 = rand(1,60);
    $npc11 = rand(1,60);
    $npc12 = rand(1,60);
    $npc13 = rand(1,60);
    $npc14 = rand(1,60);
    $npc15 = rand(1,60);*/
    $nus1 = $_GET['n1'];
    $nus2 = $_GET['n2'];
    $nus3 = $_GET['n3'];
    $nus4 = $_GET['n4'];
    $nus5 = $_GET['n5'];
    $nus6 = $_GET['n6'];
    /*$nus7 = $_GET['n7'];
    $nus8 = $_GET['n8'];
    $nus9 = $_GET['n9'];
    $nus10 = $_GET['n10'];
    $nus11 = $_GET['n11'];
    $nus12 = $_GET['n12'];
    $nus13 = $_GET['n13'];
    $nus14 = $_GET['n14'];
    $nus15 = $_GET['n15'];*/

    echo "Os numero sorteados foram: ", $npc1," ", $npc2," ", $npc3," ", $npc4," ", $npc5," ", $npc6, "<br>";
    echo "Numeros escolhidos foram: ", $nus1, " ", $nus2," ", $nus3, " ", $nus4," ",$nus5," ", $nus6, "<br>";
    if(($nus1 == $npc1) || ($nus1 == $npc2) || ($nus1 == $npc3) || ($nus1 == $npc4) || ($nus1 == $npc5) || ($nus1 == $npc6)){
        $resultado ++;
    }
    if(($nus2 == $npc1) || ($nus2 == $npc2) || ($nus2 == $npc3) || ($nus2 == $npc4) || ($nus2 == $npc5) || ($nus2 == $npc6)){
        $resultado ++;
    }
    if(($nus3 == $npc1) || ($nus3 == $npc2) || ($nus3 == $npc3) || ($nus3 == $npc4) || ($nus3 == $npc5) || ($nus3 == $npc6)){
        $resultado ++;
    }
    if(($nus4 == $npc1) || ($nus4 == $npc2) || ($nus4 == $npc3) || ($nus4 == $npc4) || ($nus4 == $npc5) || ($nus4 == $npc6)){
        $resultado ++;
    }
    if(($nus5 == $npc1) || ($nus5 == $npc2) || ($nus5 == $npc3) || ($nus5 == $npc4) || ($nus5 == $npc5) || ($nus5 == $npc6)){
        $resultado ++;
    }
    if(($nus6 == $npc1) || ($nus6 == $npc2) || ($nus6 == $npc3) || ($nus6 == $npc4) || ($nus6 == $npc5) || ($nus6 == $npc6)){
        $resultado ++;
    }

    echo "Você acertou ", $resultado, "<br><br>";

    if($resultado >= 6){
        echo "Você ganhou: R$", $aposta * 60, ",00";
    }
    else if($resultado == 5){
        echo "Você ganhou: R$", $aposta * 20, ",00";
    }
    else{
        echo "Você perdeu !";
    }
?>

    </div>
        </div>
<footer class="rodape">
    <img src="Imagens/LOGO2.png" alt=""><br>
    <p class="txtrod">&copy OLIVARA 2022</p>
</footer>

</body>
</html>