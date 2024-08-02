function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var repetirPassword = document.getElementById("repetirPassword").value;

    // Validación adicional
    if (nombre === "" || email === "" || password === "" || repetirPassword === "") {
        alert("Por favor completa todos los campos.");
        return false;
    }

    // Validación de contraseñas iguales
    if (password !== repetirPassword) {
        alert("Las contraseñas no coinciden.");
        return false;
    }

    return true;
}