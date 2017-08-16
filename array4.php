<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 4</title>
  </head>
  <body>
    <div class="uno">
      <?php
      $num = array(2,4,6,8,10);
      sort($num);
       foreach ($num as $clave => $valor) {
       echo "Numero [" . $clave . "] = " . $valor . "</br>";
     }
      ?>
    </div>
  </body>
</html>
