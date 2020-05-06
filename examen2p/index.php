<?php
include '_header.html';
require_once 'util.php';
?>
    <header></header>

    <main>

        <?php include '_navbar.html'; ?>

        <div class="container">

            <h3>Zombis</h3>

            <a class="right btn-floating btn-large waves-effect waves-light red" href="vista_agregar_zombi.php"><i class="material-icons">add</i></a>
            <?= muestraZombis(); ?>

        </div>

    <div class="container">
        <div id="modal-estado" class="modal">

        </div>
    </div>
    </main>
<?php include '_footer.html'; ?>
