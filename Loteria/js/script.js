function entrar(){
    var nome = document.getElementById("txtNome").value;
    var aposta = parseFloat(document.getElementById("aposta").value);

    confirm (nome + "o Sr deseja apostar: " + aposta+ " R$?");
}