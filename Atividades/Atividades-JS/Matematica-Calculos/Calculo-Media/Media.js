// Função calculaMedia
function calculaMedia(numero) {
    let soma = 0;
    for (let i = 0; i < numero.length; i++) {
        soma += numero[i];
    }
    let media = soma / numero.length;
    return media;
}
console.log(calculaMedia([20.333, 444, 0.033333333, 777, 999])); 

document.body.innerHTML = "<h1>" + "Média: " + calculaMedia([20.333, 444, 0.033333333, 777, 999]) + "</h1>"; 
