<?php 
    // En un principio recibimos datos del index
    $flujo = "";
    $proceso = "";
    $siguiente = "null";
    $nombreTra = "";
    $celTra = "";
    $frente = "";
    $carta = "";
    $programa = "";
    $plan = "";
    if(isset($_GET['siguiente'])) {    
                                
        $siguiente = $_GET['siguiente'];
        $flujo = $_GET['flujo'];
        $proceso = $_GET['proceso'];
    } elseif (isset($_POST['siguiente'])) { 
        
        $siguiente = $_POST['siguiente'];
        $flujo = $_POST['flujo'];
        $proceso = $_POST['proceso'];
        $nombreTra = $_POST['nombreT'];
        $celTra = $_POST['celT'];
        $frente = $_POST['frenteT'];
        $flujo = $_POST['flujo'];
        $proceso = $_POST['proceso'];
        if(isset($_FILES['carta'])) {
            $carta = $_FILES['carta']['name']; 
        }
        if(isset($_FILE['programa'])) {
            
            $programa = $_FILES['programa']['name'];
        }
        if(isset($_FILE['plana'])) {
            
            $plan = $_FILES['plan']['name'];
        }
               
    }
    
    if ($siguiente) { // aca se debería modificar para los botones siguiente y anterior   
        
        try {
            require_once('includes/funciones/bd_conexion.php'); // Creamos la conexión
            
            $sql = "SELECT * FROM flujo_proceso WHERE flujo = '$flujo' AND proceso = '$proceso'"; // Escribimos la consulta
            $resultado = $conexion->query($sql); // Realizamos la consulta
            $filas = $resultado->fetch_assoc();
            $proceso_sig = $filas["proceso_sig"];
            
            $pagina = $filas["formulario"].'.php';
            if($proceso != $proceso_sig && $proceso == 'P3'){      
                if(isset($_POST)){
                    // if($frente != null | $frente != ""){
                    $stmt  = $conexion->prepare("INSERT INTO cei.documentos VALUES(?,?,?,?,?,?,?,?)");
                    $stmt->bind_param('ssssssss',$carta, $programa, $plan, $nombreTra, $celTra, $frente, $flujo, $proceso);
                    $stmt->execute();
                    $stmt->close();
                    // }
                }      
            }
            if ($proceso_sig == null || $filas["tipo"]=='C' || $proceso == 'P4'){
                // primer insertar los datos     
                
                if(isset($_GET['decision']) ) {
                    $consulta = "SELECT * FROM flujo_condicionante WHERE proceso = '$proceso'";
                    $result = $conexion->query($consulta);
                    $datos = $result->fetch_assoc();
                    if($_GET['decision'] == "SI"){
                        $proceso_sig = $datos['SI'];
                        $pagina = "pasosInscripcio.php";
                        
                    } else {
                        $proceso_sig = $datos['NO'];
                        $pagina = "deshabilitacions.php";
                    }  
                }                       
            }                                    
            header('Location: '.$pagina.'?flujo='.$flujo.'&proceso='.$proceso_sig);                        
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    } // por anterior acá

    
   ?>   
   <?php $conexion->close(); // Cerrar la conexión ?>