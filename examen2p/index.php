<?php
include '_header.html';
require_once 'util.php';
?>
    <header></header>

    <main>

        <?php include '_navbar.html'; ?>

        <div class="container">
            <h1>Jurassic Park</h1>
            <a class="right btn-floating btn-large waves-effect waves-light red" id="btn-agregar-incidente"><i class="material-icons">add</i></a>
            <div id="incidentes">

            </div>
        </div>

        <div class="container">
            <div id="modal-agregar" class="modal" style="overflow: visible">

            </div>
        </div>
    </main>
<?php include '_footer.html'; ?>
<script type="text/javascript">
    muestraIndex();
    $(document).ready(function() {
        $('#modal-agregar').modal();
    });
    document.getElementById('btn-agregar-incidente').addEventListener("click", function(){
        mostrarEdicion();
    });
</script>
