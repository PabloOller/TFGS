function patronPass() {
    let password = document.getElementById("createPass").value;
    let requisitos = document.getElementById("requisitos");
    requisitos.style.display = "block";
    requisitos.style.color = "red";

    // Verificar la longitud mínima y que contenga al menos un número
    if (password.length < 8 || !/\d/.test(password)) {
        return false;
    }

    // Verificar que contenga al menos una letra mayúscula y una letra minúscula
    if (!/[A-Z]/.test(password) || !/[a-z]/.test(password)) {
        return false;
    }

    // Verificar que contenga al menos un carácter especial
    if (!/[!@#$%^&*()]/.test(password)) {
        return false;
    }

    // La contraseña cumple con todos los requisitos
    requisitos.style.color = "green";
    return true;
}

function passIguales() {
    let password1 = document.getElementById("createPass").value;
    let password2 = document.getElementById("repeatPass").value;
    let requisitos2 = document.getElementById("requisitos2");

    requisitos2.style.display = "block";
    requisitos2.style.color = "red";

    if (password1 == password2) {
        requisitos2.style.color = "green";
        return true;
    }
    return false;
}

function habilitarSubmit() {
    let botoEnviar = document.getElementById("botonEnviar");

    if (patronPass() && passIguales()) {
        botoEnviar.disabled = false;
    }
}

function bucarCredenciales(valorInput, arrayUser) {
    debugger;
    let encontrado = false;
    let requisitosMail = document.getElementById("requisitosMail");

    arrayUser.forEach(valor => {
        if (valor == valorInput) {
            requisitos.style.display = "block";
            requisitos.style.color = "red";
            encontrado = true;
        }
    });
    if (encontrado) {
        requisitosMail.style.display = "block";
        requisitosMail.style.color = "red";
        return false;
    }

    requisitosMail.style.display = "none";
    return true;
}