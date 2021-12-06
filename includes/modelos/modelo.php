<?php
 
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $accion = $_POST['accion'];

    // die(json_encode($_POST));
    if($accion === "login") {        
        try {
            require_once('../funciones/bd_conexion.php'); // Creamos la conexión
            $sql = "SELECT * FROM cei.usuario WHERE usuario = '$usuario' AND password = '$password'"; // Escribimos la consulta
            $resultado = $conexion->query($sql); // Realizamos la consulta            
            if($resultado->num_rows > 0) {  
                session_start();                 
                $datos = $resultado->fetch_assoc();
                $_SESSION['usuario'] = $datos['usuario'];
                $_SESSION['tipo'] = $datos['tipo'];
                if($datos['tipo'] == 'CME') {
                    $_SESSION['decision'] = "indefinido";
                }
                $_SESSION['login'] = true;
                $respuesta = array(
                    'respuesta' => 'correcto',
                    'usuario' => $datos['usuario'],
                    'tipo' => $datos['tipo'],
                    'accion'=> $accion
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'incorrecto'
                );
            }
            $resultado->close();
            $conexion->close();
        } catch (\Exception $e) {
            $respuesta = array(
                'pass' => $e->getMessage()
            );
        }

       echo json_encode($respuesta);
    }
    

?>