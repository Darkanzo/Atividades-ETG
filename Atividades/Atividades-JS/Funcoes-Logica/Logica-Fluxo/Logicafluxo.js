function diaDaSemana(dia) {
    switch (dia) {
        case 1:
            return "Segunda-feira";
        case 2:
            return "Terça-feira";
        case 3:
            return "Quarta-feira";
        case 4:
            return "Quinta-feira";
        case 5:
            return "Sexta-feira";
        case 6:
            return "Sábado";
        case 7:
            return "Domingo";
        default:
            return "Dia inválido";
    }
}
console.log(diaDaSemana(5)); 

document.body.innerHTML = "<h1>" + diaDaSemana(1) + "</h1>"; 

let contador = 0;

while (contador <= 5) {

    console.log(contador); 

    contador++;
}
