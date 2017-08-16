<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio 3</title>
  </head>
  <body>
    <div class="uno">
      <?php
      $num = array(1,2,3,4,5,6,7,8,9,10);
      sort($num);
       foreach ($num as $clave => $valor) {
       echo "Numero [" . $clave . "] = " . $valor . "</br>";
     }
      ?>
    </div>
  </body>
</html>
