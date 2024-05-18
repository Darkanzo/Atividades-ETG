function verificaPrimo(numero) {
    if (numero <= 1) {
        return false; 
    }

    for (let divisor = 2; divisor < numero; divisor++) {
        if (numero % divisor === 0) {
            return false; 
        }
    }

    return true;
}

const numeroTeste = 28;
if (verificaPrimo(numeroTeste)) {
    console.log(`${numeroTeste} é um número primo.`);
} else {
    console.log(`${numeroTeste} não é um número primo.`);
}
