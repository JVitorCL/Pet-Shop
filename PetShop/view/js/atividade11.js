let cor = prompt("informe sua cor");

switch(cor.toLowerCase() ){
 case "vermelho":
     document.body.style.backgroundColor = "red";
break;
 case "azul":
     document.body.style.backgroundColor = "blue";
     break;
 case "preto":
        document.body.style.backgroundColor = "bleak";
        break;

    default:
        console.log("cor nao identificada");
}