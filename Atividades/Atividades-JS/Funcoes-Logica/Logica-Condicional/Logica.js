
function maiorIdade(idade) {
    if (idade >= 18) {
        return "Maior de idade";
    } else {
        return "Menor de idade";
    }
}

console.log(maiorIdade(20)); 

document.body.innerHTML = "<h1>" + maiorIdade(20) + "</h1>";

function verificarIdade(idade) {
    if (idade < 12) {
        return "Criança";
    } else if (idade >= 12 && idade < 18) {
        return "Adolescente";
    } else {
        return "Adulto";
    }
}

console.log(verificarIdade(10)); 


document.body.innerHTML = "<h1>" + verificarIdade(10) + "</h1>"; 
