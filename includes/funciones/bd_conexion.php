<?php 
    $conexion = new mysqli('localhost', 'root', '', 'workflow_inscripcioncei');

    if($conexion->connect_error) echo $error->conexion->connect_error; 


 ?>