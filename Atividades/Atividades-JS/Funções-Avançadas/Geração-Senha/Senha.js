function geraSenha(tamanho) {
    const caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+[]{}|;:,.<>?";
    let senha = "";

    for (let i = 0; i < tamanho; i++) {
        const indiceAleatorio = Math.floor(Math.random() * caracteres.length);
        senha += caracteres.charAt(indiceAleatorio);
    }

    return senha;
}
const tamanhoDaSenha = 12;
const senhaAleatoria = geraSenha(tamanhoDaSenha);
console.log(`Senha gerada: ${senhaAleatoria}`);
