let nome= prompt("informe seu nome:");
let idade= Number(prompt("informe sua idade:" ));
let peso= Number(prompt("informe seu peso:"));
let altura= Number(prompt("informe sua altura:"));

alert(" seu nome é: " + nome +"\nsua idade é "+ idade + "\nseu peso é " + peso  + "\nsua altura é " + altura );






let distancia = Number(prompt("Informe a distância: "));
let gasolina = Number(prompt("Informe a quantidade de gasolina: "));
let local = (prompt("Informe o local do destino: "));

let gasto = distancia / gasolina;

alert("Para chegar à " + local+ ", você poluiu o meio ambiente gastando:" + gasto + " de gasolina por litro!" );





let preco = Number (prompt("Informe o preço: "));

if (preco > 3000 ){
    let desconto = preco * 0.2;
    let pago = desconto + preco;
    alert ("O valor pago será:" + pago );
}else {
    let desconto2 = preco * 0.1;
    let pago2 = desconto + preco;
    alert ("O valor pago será:" + pago2 );

}






let modelo = prompt("informe o modelo:");
let marca = prompt("informe a marca:");
let fabricacao = prompt("informe o ano de fabricação:");
let preco3 = prompt("informe o preço de um carro:");

if (fabricacao > 2017){
    alert("O modelo: " + modelo 
    + "\n da marca: " + marca
    + "\n é um modelo novo.");
}





let remuneracao = Number (prompt("informe a renumeração:"));

if (remuneracao > 2000){
    let desconto2 = remuneracao * 0.10;
    let preco4 = remuneracao - desconto2;

    alert("Sua remuneração é: " + preco4);
}else {

if (remuneracao > 3000){
    let desconto3 = remuneracao * 0.15;
    let preco5 = remuneracao - desconto3;

    alert("Sua remuneração é: " + preco5);
}
}



let time1=prompt("informe o nome do primeiro time.");
let pontuacao1 = Number(prompt("qual a pontuação do primeiro time"))
let time2=prompt("informe o nome do segunfo time")
let pontuacao2 = 