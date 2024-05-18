function calculaFatorial(numero) {
    if (numero < 0) {
        return "O número deve ser não negativo.";
    }

    let resultado = 1;
    for (let i = numero; i >= 1; i--) {
        resultado *= i;
    }

    return resultado;
}

const numeroTeste = 5;
console.log(`O fatorial de ${numeroTeste} é ${calculaFatorial(numeroTeste)}.`);
