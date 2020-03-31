<?php
  //función para conectarnos a la BD
  function conectar_bd() {
      $conexion_bd = mysqli_connect("localhost","root","","coronavirus");
      if ($conexion_bd == NULL) {
          die("No se pudo conectar con la base de datos");
      }
      return $conexion_bd;
  }

  //función para desconectarse de una bd
  //@param $conexion: Conexión de la bd que se va a cerrar
  function desconectar_bd($conexion_bd) {
      mysqli_close($conexion_bd);
  }

  //Consulta los casos de coronavirus
  //@param $lugar: El lugar de donde proviene el caso
  //@param $estado: El estado de la infección del caso
  function consultar_casos($lugar="", $estado="",$fecha="") {
    $conexion_bd = conectar_bd();

    $resultado =  "<table><thead><tr><th>Caso</th><th>Lugar</th><th>Estado actual</th><th>Fecha y hora</th></tr></thead>";

    $consulta = 'Select caso_id, L.nombre as L_nombre, E.nombre as E_nombre, T.created_at as T_created_at From Estado as E, Tiene as T, Lugar as L, caso as C WHERE E.id = T.estado_id AND C.id = T.caso_id AND C.lugar_id = L.id';
    if ($lugar != "") {
        $consulta .= " AND lugar_id=".$lugar;
    }
    if ($estado != "") {
        $consulta .= " AND estado_id=".$estado;
    }
    if ($fecha != "") {
        $consulta .= " AND caso_id=".$fecha;
    }

    $resultados = $conexion_bd->query($consulta);
    while ($row = mysqli_fetch_array($resultados, MYSQLI_BOTH)) {
        $resultado .= "<tr>";
        $resultado .= "<td>".$row['caso_id']."</td>"; //Se puede usar el índice de la consulta
        $resultado .= "<td>".$row['L_nombre']."</td>"; //o el nombre de la columna
        $resultado .= "<td>".$row['E_nombre']."</td>";
        $resultado .= "<td>".$row['T_created_at']."</td>";
        $resultado .= "</tr>";
    }

    mysqli_free_result($resultados); //Liberar la memoria

    desconectar_bd($conexion_bd);

    $resultado .= "</tbody></table>";
    return $resultado;
  }

  //Crea un select con los datos de una consulta
  //@param $id: Campo en una tabla que contiene el id
  //@param $columna_descripcion: Columna de una tabla con una descripción
  //@param $tabla: La tabla a consultar en la bd
  function crear_select($id, $columna_descripcion, $tabla) {
    $conexion_bd = conectar_bd();

    $resultado = '<div class="input-field"><select name="'.$tabla.'"><option value="" disabled selected>Selecciona una opción</option>';

    $consulta = "SELECT $id, $columna_descripcion FROM $tabla";
    $resultados = $conexion_bd->query($consulta);
    while ($row = mysqli_fetch_array($resultados, MYSQLI_BOTH)) {
        $resultado .= '<option value="'.$row["$id"].'">'.$row["$columna_descripcion"].'</option>';
    }

    desconectar_bd($conexion_bd);
    $resultado .=  '</select><label>'.$tabla.'...</label></div>';
    return $resultado;
  }
?>
