function validarPassword(formulario_password){
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



function comprarProductos() {
    let prod_1 = document.getElementById('productos_1');
    let prod_2 = document.getElementById('productos_2');
    let prod_3 = document.getElementById('productos_3');

    let cant_1 = document.getElementById('cantidad_1');
    let cant_2 = document.getElementById('cantidad_2');
    let cant_3 = document.getElementById('cantidad_3');
    let precio_1, precio_2, precio_3;

    switch (prod_1.options[prod_1.selectedIndex].value) {
        case "switch":
            precio_1 = 8999;
            break;

        case "smash":
            precio_1 = 1499;
            break;

        case "joycon":
            precio_1 = 2499;
            break;
    }

    switch (prod_2.options[prod_2.selectedIndex].value) {
        case "switch":
            precio_2 = 8999;
            break;

        case "smash":
            precio_2 = 1499;
            break;

        case "joycon":
            precio_2 = 2499;
            break;
    }

    switch (prod_3.options[prod_3.selectedIndex].value) {
        case "switch":
            precio_3 = 8999;
            break;

        case "smash":
            precio_3 = 1499;
            break;

        case "joycon":
            precio_3 = 2499;
            break;
    }

    let suma = (precio_1*formulario_venta.cantidad_1.value + precio_2*formulario_venta.cantidad_2.value + precio_3*formulario_venta.cantidad_3.value);
    let total = .16 * suma;
    alert("¡Tu compra fue exitosa!\nCosto total (IVA incluido): $" + total);
}

function clasificaIP(formulario_grados) {
    let grados_celsius = formulario_grados.input_celsius.value; //stores de input value in variable

    if(isNaN(grados_celsius)) { //if the input is not a number, alert the user
        alert("Por favor introduce un número válido. " + " \"" + grados_celsius + "\" no es un número.");
    }
    else {
        let grados_farenheit = (grados_celsius * 9/5) + 32;
        let grados_kelvin = parseFloat(grados_celsius) + 273.15; //parseFloat converts the input to a float to prevent concatenation instead of sum
        alert(grados_celsius + "°C = " + grados_farenheit + "°F = " + grados_kelvin + "°K");
    }
}

function cambiaColor(){
    let texto = document.getElementsByTagName('h1');
    for(var i = 0; i < texto.length; i++) {
        texto[i].style.color = "red";
    }
}

var validateOnce = true; //used to add the help text only once
function muestraAyuda() {
    if(validateOnce){
        document.getElementById('ayuda').innerHTML += "<p>Recuerda que tu contraseña debe incluir por lo menos 6 caracteres, incluyendo mayúsculas, minúsculas y números.</p>";
        validateOnce = false; //changes value to stop adding text continuously
    }

}

function activaRecordatorio(){
    setTimeout(function(){ alert("¡No te duermas, mira mi laboratorio!"); }, 3000);
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drop(ev) {
    ev.preventDefault();
    let data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
