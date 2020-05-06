<?php
require_once 'util.php';
?>
<div class="modal-content">
    <h1>Agregar nuevo incidente</h1>
    <div class="row">
        <div class="input-field col s12">
            <select id="lugar" name="lugar">
                <option selected disabled value = "">Seleccione una opcion:
                </option>
                <?= getOpciones('idLugar', 'nombreLugar', 'lugar') ?>
            </select>
            <label for="lugar">Lugar:</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <select id="tipoIncidente" name="tipoIncidente">
                <option selected disabled value = "">Seleccione una opcion:
                </option>
                <?= getOpciones('idTipoIncidente', 'nombreTipoIncidente', 'tipoIncidente') ?>
            </select>
            <label for="tipoIncidente">Tipo de Incidente:</label>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button class="btn waves-effect waves-light" id="btn-registrar" name="action">Registrar
        <i class="material-icons right">send</i>
    </button>
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
    });
</script>
