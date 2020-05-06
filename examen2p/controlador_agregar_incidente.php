<?php
require_once 'util.php';

$lugar = $_POST["lugar"];
$tipoIncidente = $_POST["tipoIncidente"];
agregarIncidente($lugar, $tipoIncidente);
header("location:index.php");


?>
