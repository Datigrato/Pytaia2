//


// CPF
const cpfInput = document.getElementById("cpf");

function formatarCPF(cpf) {
    return cpf.replace(
        /(\d{3})(\d{3})(\d{3})(\d{0,2})/,
        (_, p1, p2, p3, p4) => `${p1}.${p2}.${p3}-${p4}`
    );
}

function validarCPFVisual(cpf) {

    if (cpf.length < 11) {
        cpfInput.style.border = "2px solid orange";
        return;
    }

    cpfInput.style.border = "2px solid green";
}

cpfInput.addEventListener("input", function () {

    let clean = this.value
        .replace(/\D/g, "")
        .slice(0, 11);

    this.value = formatarCPF(clean);

    validarCPFVisual(clean);
});

//validar email

const emailInput = document.getElementById("email");

const erroEmail = document.getElementById("erro-email");

emailInput.addEventListener("input", function () {

    validarEmailVisual(this.value);

});

function validarEmailVisual(email) {

    if (email.length === 0) {

        erroEmail.classList.add("hidden");

        emailInput.classList.remove("erro");

        return;
    }

    const padraoEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!padraoEmail.test(email)) {

        emailInput.classList.add("erro");

        erroEmail.classList.remove("hidden");

    } else {

        emailInput.classList.remove("erro");

        erroEmail.classList.add("hidden");
    }
}