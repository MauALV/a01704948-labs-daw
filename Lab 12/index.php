<?php
    session_start();
    include '_header.html';
?>
    <!-- SUBIR FOTO -->
    <div class="uk-section" id="subir-foto" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
        <div class="uk-margin" uk-margin>
            <form class="" action="controllerUpload.php" method="post" enctype="multipart/form-data">
                <div uk-form-custom="target: true">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Selecciona archivo" disabled>
                </div>
                <button class="uk-button uk-button-default" name="submit">Subir Imagen</button>
            </form>
        </div>
    </div>

    <!-- PREGUNTAS -->
    <div class="uk-section uk-background-muted" id="preguntas" uk-scrollspy="cls: uk-animation-fade; repeat: true">
        <div class="uk-container">
            <h2>¿Por qué es importante hacer un session_unset() y luego un session_destroy()?</h2>
            <p></p>
            <br>

            <h2>¿Cuál es la diferencia entre una variable de sesión y una cookie?</h2>
            <p></p>
            <br>

            <h2>¿Qué técnicas se utilizan en sitios como facebook para que el usuario no sobreescriba sus fotos en el sistema de archivos cuando sube una foto con el mismo nombre?</h2>
            <p></p>
            <br>

            <h2>¿Qué es CSRF y cómo puede prevenirse?</h2>
            <p></p>
            <br>
        </div>
    </div>

    <!-- FUENTES CONSULTADAS -->
    <div class="uk-section" id="referencias">
        <div class="uk-container">
            <h2>Fuentes Consultadas</h2>
            <ul>
                <li></li>
            </ul>
        </div>
    </div>

<?php include '_footer.html'; ?>
