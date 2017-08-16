<?php
$i= array(11,32,6,1,8,3,9,6,5,2);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="estilo.css">
     <title>Ejercicio 5</title>
   </head>
   <body>
     <div class="uno">
       <h2> Numeros </h2>
      <?php echo "  Numero   ".$i[0]."" ?>
      <?php echo "  Numero   ".$i[1]."" ?>
      <?php echo "  Numero   ".$i[2]."" ?>
      <?php echo "  Numero   ".$i[3]."" ?>
      <?php echo "  Numero   ".$i[4]."" ?>
      <?php echo "  Numero   ".$i[5]."" ?>
      <?php echo "  Numero   ".$i[6]."" ?>
      <?php echo "  Numero   ".$i[7]."" ?>
      <?php echo "  Numero   ".$i[8]."" ?>
      <?php echo "  Numero   ".$i[9]."<br/>" ?>
    <?php

    $to=($i[0]+$i[1]+$i[2]+$i[3]+$i[4]+$i[5]);
    echo "La suma total  es : $to<br/>";
    $s=($i[0]-$i[1]-$i[2]-$i[3]-$i[4]-$i[5]);
    echo "La resta total  es : $s<br/>";
    $r=($i[0]/$i[1]/$i[2]/$i[3]/$i[4]/$i[5]);
    echo "La resta total  es : $r<br/>";
    $d=($i[0]*$i[1]*$i[2]*$i[3]*$i[4]*$i[5]);
    echo "La multiplicacion total  es : $d<br/>";
 ?>



     </div>
   </body>
 </html>
