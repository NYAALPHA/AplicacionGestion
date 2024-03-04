function validarFormulario() {
    var password1 = document.getElementById("pass1").value;
    var password2 = document.getElementById("pass2").value;

    if(password1 !== password2) {
        alert("Las contraseñas no coinciden.");
        return false;
    }
    return true;
}
