<?php
  session_start();
  require_once("model.php");

  //$_POST["fecha"] = htmlspecialchars($_POST["fecha"]);

  if(isset($_POST["id_caso"])) {
      if (eliminar_caso($_POST["id_caso"])) {
          $_SESSION["mensaje"] = "Se eliminó el caso";
      } else {
          $_SESSION["warning"] = "Ocurrió un error al registrar el caso";
      }
  }

  header("location:index.php");
?>
