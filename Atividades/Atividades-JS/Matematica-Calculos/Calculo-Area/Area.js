const PI=3.14159

function calculaAreaCirculo(raio){

    let area=PI*raio*raio;
    return area;
}
console.log(calculaAreaCirculo(10));
document.body.innerHTML = "<h1>" + "Área do círculo: " + calculaAreaCirculo(10) + "</h1>";