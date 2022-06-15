let combustivel = prompt("informe o tipo de combustivel");

switch(combustivel.toLowerCase()){

    case  "gasolina":
        console.log("esta custando R$ 7,70");
         break;
    case "dissel":
        console.log("esta custando R$ 6,60");
        break;
    case "etanol":
        console.log("esta custando R$ 5,50");
          break;
       
        default:
            console.log("combustivel nao indentificado");
}
 

