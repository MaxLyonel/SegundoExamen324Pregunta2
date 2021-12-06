<?php
// Realizar acá un formulario para la entrega del documentos
session_start();
$proceso = $_GET['proceso'];
$flujo = $_GET['flujo'];
include_once 'includes/templates/header.php';
include_once 'includes/templates/barra.php';
?>
<div class="bg-info contenedor">  
    <!-- <div class="contenido">         -->
        <form id="formularioR" action="motor.php" method="POST" enctype="multipart/form-data">
            <legend class="centrar">Formulario de Entrega de Documento<span>Requisitos para postulación</span></legend>
            <div class="campos_form">
                <div class="campo_form">
                    <label for="nombreT">Nombre Tramitante:</label>
                    <input type="text" name="nombreT" id="">
                </div>
                <div class="campo_form">
                    <label for="celT">Celular Tramitante:</label>
                    <input type="text" name="celT" id="">
                </div>
                <div class="campo_form">
                    <label for="frenteT">Nombre Frente:</label>
                    <input type="text" name="frenteT" id="">
                </div>
            </div>
            <!-- <div class="campos_form"> -->
                <div class="campo_form">
                    <label for="carta">Carta Comite Electoral:</label>
                    <input type="file" name="carta">
                </div>
                <div class="campo_form">
                    <label for="programaP">Programa Político:</label>
                    <input type="file" name="programa">
                </div>
                <div class="campo_form">
                    <label for="planE">Plan Estudiantil:</label>
                    <input type="file" name="plan">
                </div>
            <!-- </div>                -->
            <div class="campo_form enviar_for">                    
                <input type="submit" name="anterior" value="anterior">
                <input type="hidden" name="anterior" value="anterior">
                <input type="submit" name="siguiente" value="siguiente">
                <input type="hidden" name="siguiente" value="siguiente">                
                <input type="hidden" name="flujo" value="<?php echo $flujo;?>">
                <input type="hidden" name="proceso" value="<?php echo $proceso;?>">
            </div>
        </form> 
    <!-- </div> -->
</div>

<?php
include_once 'includes/templates/footer.php';
?>