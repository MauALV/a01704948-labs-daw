<?php
include '_header.html';
include '_navbar.html';
require_once 'util.php';
?>
<div class="container">

    <h1>Agregar nuevo incidente</h1>
    <div class="row">
        <form class="col s12" action="controlador_agregar_incidente.php" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <select id="lugar" name="lugar">
                        <option selected disabled value = "">Seleccione una opcion:
                        </option>
                        <?= getOpciones('idLugar', 'nombreLugar', 'lugar') ?>
                    </select>
                    <label for="estado">Lugar:</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    <select id="tipoIncidente" name="tipoIncidente">
                        <option selected disabled value = "">Seleccione una opcion:
                        </option>
                        <?= getOpciones('idTipoIncidente', 'nombreTipoIncidente', 'tipoIncidente') ?>
                    </select>
                    <label for="estado">Tipo de Incidente:</label>
                </div>
            </div>



            <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
</div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
    });
</script>
<?php include '_footer.html'; ?>
