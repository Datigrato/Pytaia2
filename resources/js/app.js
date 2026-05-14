//


// CPF
function mascaraCPF(input) {

    let cpf = input.value
        .replace(/\D/g, '')
        .slice(0, 11);

    cpf = cpf.replace(
        /(\d{3})(\d{3})(\d{3})(\d{0,2})/,
        (_, p1, p2, p3, p4) => `${p1}.${p2}.${p3}-${p4}`
    );

    input.value = cpf;

    if (cpf.length < 14) {
        input.style.border = "2px solid orange";
    } else {
        input.style.border = "2px solid green";
    }
}
// E-mail
emailInput.addEventListener("input", function() {
    validarEmailVisual(this.value);
});

function validarEmailVisual(email) {
    const padraoEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!padraoEmail.test(email)) {
        emailInput.classList.add("erro");
        erroEmail.classList.remove("hidden");
    } else {
        emailInput.classList.remove("erro");
        erroEmail.classList.add("hidden");
    }
}