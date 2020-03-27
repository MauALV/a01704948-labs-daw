<?php
    session_start();
    $_SESSION["nombre"] = $_POST["nombre"];
    include 'partials/_header.html';
    include 'partials/_navbar.html';
?>

    <div class="uk-container">
        <h1><?= "Bienvenido, " . $_SESSION["nombre"]; ?></h1>
    </div>

<?php
    include 'partials/_formUploadImagen.html';
    include 'partials/_preguntas.html';
    include 'partials/_referencias.html';
    include 'partials/_footer.html';

?>
