<?php include '_header.html'; ?>
<div class="uk-container">
    <?php
        function calcularIMC($peso, $estatura) {
            if(empty($_GET["peso"]) || empty($_GET["estatura"])) {
                echo '<script langauge="javascript">alert("Por favor llena ambos campos");</script>';
            }
            $estatura /= 100;
            $imc = $peso / pow($estatura, 2);

            echo "<p>Su IMC es de " . $imc . " y es clasificado como ";
            if($imc < 18.5) {
                echo "<em>Bajo Peso</em></p>";
            }
            elseif ($imc >= 18.5 && $imc <= 24.9) {
                echo "<em>Peso Normal</em></p>";
            }
            elseif ($imc >= 25 && $imc <= 29.9) {
                echo "<em>Sobrepeso</em></p>";
            }
            elseif ($imc >= 30 && $imc <= 34.9) {
                echo "<em>Obesidad</em></p>";
            }
            elseif ($imc >= 35) {
                echo "<em>Obesidad Mórbida</em></p>";
            }
        }
        calcularIMC($_GET["peso"], $_GET["estatura"]);
    ?>
    <a href="index.php">Regresar al laboratorio</a>
</div>
