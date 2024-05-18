// Função calculaDesconto
function calculaDesconto(Valor, Desconto) {
    let desconto = (Valor * Desconto) / 100;
    let final = Valor - desconto;
    return final;
}

console.log(calculaDesconto(300, 20)); 


document.body.innerHTML = "<h1>" + "Preço com desconto: " + calculaDesconto(400, 50) + "</h1>";
