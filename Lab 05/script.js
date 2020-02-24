function validarPassword(){
    let re; //regular expression for validating characters

    if(formulario_password.password1.value == ""){
        alert("Error: el campo está vacío.");
        formulario_password.password1.focus();
        return false;
    }

    if(formulario_password.password2.value == ""){
        alert("Error: el campo está vacío.")
        formulario_password.password2.focus();
        return false;
    }

    if(formulario_password.password1.value == formulario_password.password2.value){ //if both inputs match
        if(formulario_password.password1.value.length < 6){
            alert("Error: la contraseña debe tener por lo menos seis caracteres.");
            formulario_password.password1.focus();
            return false;
        }

        re = /[0-9]/; //validate for numbers from 0 to 9

        if(!re.test(formulario_password.password1.value)) { //if it doesn't match the regular expression
            alert("Error: la contraseña debe contener al menos un número.");
            formulario_password.password1.focus();
            return false;
        }

        re = /[a-z]/ //validate for lower case letters

        if(!re.test(formulario_password.password1.value)) {
            alert("Error: la contraseña debe contener al menos una letra minúscula.");
            formulario_password.password1.focus();
            return false;
        }

        re = /[A-Z]/ //validate for upper case letters

        if(!re.test(formulario_password.password1.value)) {
            alert("Error: la contraseña debe contener al menos una letra mayúscula.");
            return false;
        }
    }

    else {
        alert("Por favor comprueba que hayas introducido correctamente tu contraseña.");
        formulario_password.password1.focus();
        return false;
    }
    alert("Tu contraseña es correcta: " + formulario_password.password1.value);
    return true;
}
