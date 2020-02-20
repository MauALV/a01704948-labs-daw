function crearTabla(){
    let numero = prompt("Por favor, ingresa un número para generar la tabla:");

    for(let i = 1; i <= numero; i++){
        document.write(Math.pow(i, 2) + " | ");
    }
    document.write("<br><br>");
    for (let i = 1; i <= numero; i++) {
        document.write(Math.pow(i, 3) + " | ");
    }
}
