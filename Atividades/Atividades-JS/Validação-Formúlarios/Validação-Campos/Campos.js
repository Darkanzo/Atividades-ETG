function validarFormulario() {
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("email").value;
    const mensagem = document.getElementById("mensagem").value;

    if (nome.trim() === "" || email.trim() === "" || mensagem.trim() === "") {
        alert("Por favor, preencha todos os campos obrigatórios.");
        return false; // Impede o envio do formulário
    }

    return true; 
}