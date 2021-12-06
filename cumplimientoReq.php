<?php 
session_start(); 
// $flujo = $_GET['flujo'];
// $proceso = $_GET['proceso'];
include_once 'includes/templates/header.php';
include_once 'includes/templates/barra.php';
if(isset($_SESSION['usuario'])) {
    if($_SESSION['tipo'] == 'CME') {
        // header('Location: cumplimientoReq.php');
        // echo "<pre>";
        // var_dump($_SESSION);
        // echo "</pre>";
    } else {
        header('Location: presentarDocs.php?flujo='.$flujo.'&proceso='.$proceso);
    }
    
} else header('Location: presentarDocs.php?flujo='.$flujo.'&proceso='.$proceso);

?>

<div class="bg-info contenedor-tabla"> 
    <div class="contenedor-documentos">
        <h2>Documentos Recepcionados</h2>
        <table >
            <thead class="listado-documentos">
                <tr>
                    <th>carta</th>
                    <th>programa</th>
                    <th>plan</th>
                    <th>nombre Tramitante</th>
                    <th>celular</th>
                    <th>frente</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>                            
            <?php
                try {
                    require_once('includes/funciones/bd_conexion.php'); // Creamos la conexión
                    $sql = "SELECT * FROM cei.documentos"; // Escribimos la consulta
                    $resultado = $conexion->query($sql); // Realizamos la consulta                    
                    while($result = $resultado->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $result['carta'];?></td>
                            <td><?php echo $result['programa'];?></td>
                            <td><?php echo $result['plan'];?></td>
                            <td><?php echo $result['nombreTra'];?></td>
                            <td><?php echo $result['celular'];?></td>
                            <td><?php echo $result['frente'];?></td>
                            <td>
                                <a class="btn-negar btn" href="motor.php?flujo=<?php echo $result['flujo'];?>&proceso=P4&siguiente=True&decision=NO">no</a>
                                <a class="btn-aceptar ntn" href="motor.php?flujo=<?php echo $result['flujo'];?>&proceso=P4&siguiente=True&decision=SI">si</a>
                            </td>                    
                        </tr>
                        
                      <?php } 
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }?>
            </tbody>
            
        </table>

    </div>
</div>



<!-- <input type="text" name="pregunta" value=""/> -->


<?php
include_once 'includes/templates/footer.php';
?>