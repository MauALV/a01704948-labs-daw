<?php
  session_start();
  require_once("model.php");

  $titulo = "Buscador";
  include("_header.html");

  include("_form.html");

  if (isset($_POST["lugar"])) {
      $lugar = htmlspecialchars($_POST["lugar"]);
  } else {
      $lugar = "";
  }

 if (isset($_POST["estado"])) {
      $estado = htmlspecialchars($_POST["estado"]);
  } else {
      $estado = "";
  }

  echo consultar_casos($lugar,$estado);

  include("_footer.html");
?>
