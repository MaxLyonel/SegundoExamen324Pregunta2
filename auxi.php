<?php 
    try {
      require_once('includes/funciones/bd_conexion.php'); // Creamos la conexión
      $sql = "SELECT * FROM flujo_proceso"; // Escribimos la consulta
      $resultado = $conexion->query($sql); // Realizamos la consulta
    } catch (\Exception $e) {
      echo $e->getMessage();
    }
   ?>
   <div class="calendario">
     <?php 
      // Y obtenemos los datos
      while($result = $resultado->fetch_assoc()) { ?>
        <pre>
          <?php var_dump($result); ?>
        </pre>
      <?php } ?>
     
   </div>
   <?php $conexion->close(); // Cerrar la conexión ?>