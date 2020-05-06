function mostrarEdicion(){
    $.post("vista_agregar_incidente.php").done(function(data) {
        let modalIncidente = M.Modal.getInstance($('#modal-agregar'));
        $('#modal-agregar').html(data);
        modalIncidente.open();
        let elems = document.querySelectorAll('select');
        let instances = M.FormSelect.init(elems);
        $('#btn-registrar')[0].onclick = submitIncidente;
    });
}

function muestraIndex() {
    $.post("vista_mostrar_incidentes.php").done(function(data){
        $("#incidentes").html(data);
    });
}

function submitIncidente() {
    $.post("controlador_agregar_incidente.php", {
        lugar: $('#lugar')[0].value,
        tipoIncidente: $('#tipoIncidente')[0].value
    }).done(function(data) {
        console.log(data);
        let modalIncidente = M.Modal.getInstance($('#modal-agregar'));
        modalIncidente.close();
        muestraIndex();
    });
}
