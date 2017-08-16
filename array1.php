<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 1</title>
  </head>
  <body>
    <div class="uno">
      <?php

      $info = array('Pedro', 'Torres', 'calle_20' , '1425698');
      list($nombre, $apellido, $direccion, $telefono) = $info;
      echo "El señor $nombre de apellido $apellido , vive en la direccion $direccion , su telefono es $telefono.\n";

      ?>
    </div>

  </body>
</html>
