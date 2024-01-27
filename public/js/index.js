function validarFormulario() {
    var nome = document.getElementById('nome1');
    var email = document.getElementById('email1');
    var mensagem = document.getElementById('mensagem1');
    var isValid = true;
    // Validação do campo Nome
    if (nome.value.trim() === '') {
        nome.style.border = '4px solid red';
        isValid = false;
    }
    // Validação do campo Email
    if (email.value.trim() === '' || !validateEmail(email.value.trim())) {
        email.style.border = '4px solid red';
        isValid = false;
    }
    // Validação do campo Mensagem
    if (mensagem.value.trim() === '') {
        mensagem.style.border = '4px solid red';
        isValid = false;
    }
    // Se todos os campos estiverem preenchidos corretamente, envia o email
    if (isValid) {
        enviarEmail();
    }
}
function enviarEmail() {
    // Substitua 'seu-email@Eternity.com' pelo endereço de e-mail da empresa Eternity IA
    var emailEmpresa = 'Eternitycloudcontato@hotmail.com';
    // Monta o link do Gmail com o endereço de e-mail da empresa e alguns parâmetros opcionais
    var linkGmail = 'https://mail.google.com/mail/?view=cm&to=' + emailEmpresa;
    // Redireciona para o Gmail
    window.location.href = linkGmail;
}
function validateEmail(email) {
    // Função simples para validar o formato do e-mail
    var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}
