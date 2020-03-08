<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Hola</title>
    </head>
    <body>
        <header>
            <h1>Lab 09: Introducción a php</h1>
        </header>
        <section>
            <h2>Ejercicios</h2>
            <article class="ejercicio" id="ejercicio1">
                <h3>Ejercicio 1</h3>
                <?php
                    $numeros1 = array(1, 2, 3, 4, 5);
                    $numeros2 = array(100, 75, 90, 48, 80, 1);
                    function promedio($arr) {
                        $suma = 0;
                        for ($i=0; $i < sizeof($arr); $i++) {
                            $suma += $arr[$i];
                        }
                        $suma /= sizeof($arr);
                        return $suma;
                    }
                    echo "Arreglo 1: [1, 2, 3, 4, 5]";
                    echo "<br>";
                    echo "El promedio de numeros es " . promedio($numeros1);
                    echo "<br> <br>";
                    echo "Arreglo 2: [100, 75, 90, 48, 80, 1]";
                    echo "<br>";
                    echo "El promedio de numeros es " . promedio($numeros2);
                ?>
            </article>
            <article class="ejercicio" id="ejercicio2">
                <h3>Ejercicio 2</h3>
                <?php


                ?>
            </article>
            <article class="ejercicio" id="ejercicio3">
                <h3>Ejercicio 3</h3>
                <?php


                ?>
            </article>
        </section>
        <hr>
        <section>
            <h2>Preguntas a Responder</h2>
            <article class="pregunta" id="pregunta1">
                <h3>¿Qué hace la función phpinfo()? Describe y discute 3 datos que llamen tu atención.</h3>
            </article>
            <article class="pregunta" id="pregunta2">
                <h3>¿Qué cambios tendrías que hacer en la configuración del servidor para que pudiera ser apto en un ambiente de producción?</h3>
            </article>
            <article class="pregunta" id="pregunta3">
                <h3>¿Cómo es que si el código está en un archivo con código html que se despliega del lado del cliente, se ejecuta del lado del servidor? Explica.</h3>
            </article>
        </section>
        <hr>
        <section>
            <h2>Fuentes Consultadas</h2>
        </section>
        <hr>
        <footer>
            <p>Mauricio Alvarez Milán. A01704948. Marzo del 2020.</p>
        </footer>
    </body>
</html>
