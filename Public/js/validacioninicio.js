function validarFormulario() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Validación adicional
    if (email === "" || password === "") {
        alert("Por favor completa todos los campos.");
        return false;
    }

    return true;
}