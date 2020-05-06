<?php
include '_header.html';
require_once 'util.php';
?>
    <header></header>

    <main>

        <?php include '_navbar.html'; ?>

        <div class="container">

            <h3>Jurassic Park</h3>

            <a class="right btn-floating btn-large waves-effect waves-light red" href="vista_agregar_incidente.php"><i class="material-icons">add</i></a>
            <?= muestraIncidentes(); ?>

        </div>

    <div class="container">
        <div id="modal-estado" class="modal">

        </div>
    </div>
    </main>
<?php include '_footer.html'; ?>
