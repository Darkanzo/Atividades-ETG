
function inverteString(frase) {
    let fraseInvertida = frase.split('').reverse().join('');
    return fraseInvertida;
}

console.log(inverteString("Corinthians último campeão mundial brasileiro")); 
document.body.innerHTML = "<h1>" + inverteString("FluminenCe muito ruim") + "</h1>";
