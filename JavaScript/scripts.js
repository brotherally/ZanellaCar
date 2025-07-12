// Função para mostrar/esconder o menu hamburguer
function mostrarmenu() {
    document.querySelector("header nav").classList.toggle("mostrar");
}

// Inicializando o carrossel manualmente
document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = document.querySelector('#carrossel');
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 2000,  // Tempo de transição entre as imagens (em milissegundos)
        ride: 'carousel' // Ativa o carrossel automaticamente
    });
});
// Função para formatar o telefone automaticamente
function formatarTelefone(telefone) {
    // Remove todos os caracteres não numéricos
    var valor = telefone.value.replace(/\D/g, "");

    // Adiciona a formatação ao número
    if (valor.length <= 2) {
        telefone.value = "(" + valor;
    } else if (valor.length <= 6) {
        telefone.value = "(" + valor.substring(0, 2) + ") " + valor.substring(2);
    } else {
        telefone.value = "(" + valor.substring(0, 2) + ") " + valor.substring(2, 7) + "-" + valor.substring(7, 11);
    }
}

// Função para validar o formulário
function validarFormulario() {
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var telefone = document.getElementById('telefone').value;
    var assunto = document.getElementById('assunto').value;
    var mensagem = document.getElementById('mensagem').value;
    var aviso = "";

    // Validar campos obrigatórios
    if (nome == "" || email == "" || telefone == "" || assunto == "" || mensagem == "") {
        aviso = "Todos os campos devem ser preenchidos!";
        alert(aviso);
        return false;
    }

    // Validar formato de email
    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailRegex.test(email)) {
        alert("Por favor, insira um email válido!");
        return false;
    }

    // Validar formato de telefone (apenas números)
    var telefoneRegex = /^[0-9]{10,11}$/;  // Aceita números de 10 ou 11 dígitos
    if (!telefoneRegex.test(telefone)) {
        alert("Por favor, insira um telefone válido!");
        return false;
    }

    return true;
}
