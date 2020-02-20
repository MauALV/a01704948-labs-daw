function crearTabla(){
    let numero = prompt("Por favor, ingresa un número para generar la tabla:");

    for(let i = 1; i <= numero; i++) {
        document.write(Math.pow(i, 2) + " | ");
    }
    document.write("<br><br>");
    for (let i = 1; i <= numero; i++) {
        document.write(Math.pow(i, 3) + " | ");
    }
}

function sumaNumeros(){
    let numero_aleatorio1 = Math.floor(Math.random() * 10) + 1;
    let numero_aleatorio2 = Math.floor(Math.random() * 10) + 1;
    let respuesta = numero_aleatorio1 + numero_aleatorio2;

    let inicio_timer = Date.now();

    let intento_usuario = prompt("Cuanto es " + numero_aleatorio1 + " + " + numero_aleatorio2 + "?")


    if(intento_usuario == respuesta) {
        document.write("Respuesta correcta!");
    }
    else {
        document.write("Respuesta incorrecta!");
    }

    let termino_timer = Date.now();
    let tiempo_tardado = (Date.now() - inicio_timer)/1000;
    document.write("<br>Tardaste " + tiempo_tardado + " segundos en contestar");
}

function arregloNumeros(arr){
    let contador_negativos = 0;
    let contador_ceros = 0;
    let contador_mayores = 0;

    document.write("[")
    for (let i = 0; i < arr.length; i++) {
        if(i < arr.length-1){
            document.write(arr[i] + ", ");
        }
        else {
            document.write(arr[i]);
        }

        if(arr[i] < 0){
            contador_negativos++;
        }
        else if (arr[i] > 0) {
            contador_mayores++;
        }
        else {
            contador_ceros++;
        }
    }

    document.write("]<br>");
    document.writeln("Cantidad de ceros: " + contador_ceros);
    document.writeln("Números negativos: " + contador_negativos);
    document.writeln("Números positivos: " + contador_mayores);
}
