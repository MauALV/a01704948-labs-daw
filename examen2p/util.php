<?php
function connectDB() {
    $servername = 'mysql1008.mochahost.com';
    $username = "dawbdorg_1704948";
    $password = "1704948";
    $dbname = "dawbdorg_A01704948";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    //Checks connection
    if(!$con) {
        http_response_code(500);
        return false;
    }
    return $con;
}

function closeDb($mysqli) {
    mysqli_close($mysqli);
}

//Función que conecta a la bd, realiza un query y vuelve a cerrar la bd. Recibe el SQL del query y regresa un objeto mysqli result
function sqlqry($qry) {
    $con = connectDb();
    if(!$con){
        return false;
    }
    $result = mysqli_query($con, $qry);
    print_r(mysqli_error($con));
    closeDb($con);
    return $result;
}

/*
    Función para simplificar la inserción correcta a la bd. Recibe el código SQL donde los valores q insertar se representan con '?'
    E.g. INSERT INTO frutas (nombre, familia, precio) VALUES (?,?,?)
    Los valores se pasan como argumentos, deben ser correspondientes al numero de '?'. Se puede usar un arreglo como parámetro precedido de '...'
    E.g. insertIntoDb($sql, $nom, $fam, $precio)   insertIntDb($sql, ...$arrayWithValues)
    Regresa en indice del elemento insertado
*/
function insertIntoDb($dml, ...$args) {
    $conDb = connectDb();
    $types='';
    //Verifica los tipos de variable de los argumentos y termina el proceso si no son int, double, string o BLOB
    foreach ($args as $arg) {
        $types.=substr(gettype($arg),0,1);
        if(preg_match('/[^idsb]/', $types)) {
            die("Invalid argument, only Int, double, string and BLOB accepted");
        }
    }
    if ( !($statement = $conDb->prepare($dml)) ) {
        die("Error: (" . $conDb->errno . ") " . $conDb->error);
        return 0;
    }
    //Unir los parámetros de la función con los parámetros de la consulta
    //El primer argumento de bind_param es el formato de cada parámetro
    if (!$statement->bind_param($types, ...$args)) {
        die("Error en vinculación: (" . $statement->errno . ") " . $statement->error);
        return 0;
    }
    //Executar la consulta
    if (!$statement->execute()) {
        die("Error en ejecución: (" . $statement->errno . ") " . $statement->error);
        return 0;
    }
    $id = $conDb->insert_id;
    closeDb($conDb);
    return $id;
}

function modifyDb($dml) {
    $conDb = connectDb();

    $conDb->query($dml);
    $res=mysqli_affected_rows($conDb);

    closeDb($conDb);
    return $res;
}

function agregarIncidente($idLugar, $idTipoIncidente) {
    $sql = "CALL agregaIncidente($idLugar, $idTipoIncidente);";
    return sqlqry($sql);

}

function getOpciones($id, $campo, $tabla) {
    $sql = "SELECT $id, $campo FROM $tabla";
    $result = sqlqry($sql);
    $option = "";

    while($row = mysqli_fetch_array($result)){
        $option = $option."<option value=".$row[0].">$row[1]</option>";
    }

    echo $option;
}
function muestraIncidentes() {
    $conDb = connectDb();

    $sql = "
        SELECT nombreLugar as 'Lugar', nombreTipoIncidente as 'Tipo de Incidente', fechaCreacion as 'Fecha'
        FROM lugar l, tipoincidente ti, incidente i
        WHERE l.idLugar=i.idLugar AND ti.idTipoIncidente=i.idTipoIncidente
        ORDER BY fechaCreacion DESC";
    $tabla = "
    <table class=\"highlight\">
        <thead>
            <tr>
                <th>Lugar</th>
                <th>Tipo de Incidente</th>
                <th>Fecha</th>
                <th></th>
            </tr>
        </thead>
        <tbody>";

    $incidentes = $conDb->query($sql);
    while ($row = mysqli_fetch_array($incidentes, MYSQLI_BOTH)) {
        $tabla .= "<tr>";
        $tabla .= "<td>".$row['Lugar']."</td>";
        $tabla .= "<td>".$row['Tipo de Incidente']."</td>";
        $tabla .= "<td>".$row['Fecha']."</td>";
        $tabla .= "</tr>";
    }
    mysqli_free_result($incidentes); //Liberar la memoria
    closeDb($conDb);
    $tabla .= "</tbody></table>";
    return $tabla;
}
?>
