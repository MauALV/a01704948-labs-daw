function validarPassword(formulario_password) {
    let re; //regular expression for validating characters
    let divAlerta = document.getElementById('alerta');
    if(formulario_password.password1.value == "") {
        divAlerta.innerHTML += "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>El Campo está vacío.</div>";
        formulario_password.password1.focus();
        return false;
    }

    if(formulario_password.password2.value == "") {
        divAlerta.innerHTML += "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>El Campo está vacío.</div>";
        formulario_password.password2.focus();
        return false;
    }

    if(formulario_password.password1.value == formulario_password.password2.value) { //if both inputs match
        if(formulario_password.password1.value.length < 6){
            divAlerta.innerHTML += "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>La contraseña debe tener por lo menos seis caracteres.</div>";
            formulario_password.password1.focus();
            return false;
        }

        re = /[0-9]/; //validate for numbers from 0 to 9

        if(!re.test(formulario_password.password1.value)) { //if it doesn't match the regular expression
            divAlerta.innerHTML += "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>La contraseña debe tener por lo menos un número.</div>";
            formulario_password.password1.focus();
            return false;
        }

        re = /[a-z]/ //validate for lower case letters

        if(!re.test(formulario_password.password1.value)) {
            divAlerta.innerHTML += "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>La contraseña debe tener por lo menos una letra minúscula.</div>";
            formulario_password.password1.focus();
            return false;
        }

        re = /[A-Z]/ //validate for upper case letters

        if(!re.test(formulario_password.password1.value)) {
            divAlerta.innerHTML += "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>La contraseña debe tener por lo menos una letra mayúscula.</div>";
            return false;
        }
    }

    else {
        divAlerta.innerHTML += "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a>Por favor comprueba que hayas introducido correctamente tu contraseña.</div>";
        formulario_password.password1.focus();
        return false;
    }
    alert("Tu contraseña es correcta: " + formulario_password.password1.value);
    return true;
}
