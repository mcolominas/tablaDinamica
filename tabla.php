<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
    td{
      height: 50px;
      width: 50px;
    }
    table{
      text-align: center;
      border-collapse: collapse;
    }
    </style>
  </head>
  <body>
  <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      include "funciones.php";
      $cantFilaTablero = $_POST["filas"];
      $cantColumnaTablero = $_POST["columnas"];
      //creacion tabla y su contenido
      echo "<table>";
      for($fila = 0; $fila < $cantFilaTablero+2; $fila ++){
        $fila_actual = getStringOfCode($fila);
        echo "<tr>";
        for($columna = 0; $columna < $cantColumnaTablero+2; $columna ++){
          //esquinas
          if($fila == 0 && $columna == 0 || $fila == $cantFilaTablero+1 && $columna == $cantColumnaTablero+1  || $fila == 0 && $columna == $cantColumnaTablero+1  || $fila == $cantFilaTablero+1 && $columna == 0)
            echo "<td></td>";
          //arriba y abajo
          else if($fila == 0 || $fila == $cantFilaTablero+1){
            echo "<td>$columna</td>";
          }
          //derecha y izquierda
          else if($columna == 0 || $columna == $cantColumnaTablero+1)
            echo "<td>$fila_actual</td>";
          //contenido ajedrez
          else{
            if(($fila + $columna) % 2 == 0)
              echo "<td style='background-color: white; color: black; border: 1px solid black;'>";
            else
              echo "<td style='background-color: black; color:white; border: 1px solid black;'>";
            

            echo "</td>";
          }
        }
        echo "</tr>";
      }
      echo "</table>";
    }
      
    ?>
  </body>
</html>
