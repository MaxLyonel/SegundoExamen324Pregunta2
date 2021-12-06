<?php
// De hecho aca va a ser la presentación de los requisitos
session_start();
$proceso = $_GET['proceso'];
$flujo = $_GET['flujo'];
include_once 'includes/templates/header.php';
include_once 'includes/templates/barra.php';

?>
<div class="bg-info contenedor">  
    <div class="contenido">
        <h2>Requisitos para la postulación de un frente estudiantil</h2>
        <h3>Inscripción de los frentes</h3>
        <p>Se recepcionará la documentación de los Frentes participantes desde horas 11:00 a.m. hasta
           horas 12:00 a.m. (impostergablemente) el día VIERNES 12 DE NOVIEMBRE del año en curso indefec-
           tiblemente en las oficinas del Comité Electoral.
        </p>
        <p>
           La documentación de inscripción de los Frentes deberá contar necesariamente con:
        </p>
        <ul>
            <li>Carta dirigida al Comité Electoral solicitando su inscripción, en ella se indicará, un delegado
                titular y su suplente, la Sigla del frente, Logo y Colores.
            </li>
            <li>Programa Politico o de Lucha.</li>
            <li>Plan Estudiantil de Trabajo, en sus diferentes áreas (Instituciona, Académico, Extensión, Intera
                cción Social, Deportes y otros).</li>
            <li>Formulario de inscripción impreso del Comité Electoral debidamente llenado y firmado (anexo I, II),
                y en el formato digital en Excel. </li>
            <li>Carta de compromiso de no Intromisión Docente y de Buena Conducta suscrita por el candidato a Secre
                tario Ejecutivo y de limpieza de los predios.
        </ul>   
        <p>Los frentes participantes entregarán su documentación en acto público preferentemente con la presencia de 
            veedores invitados. </p>
        <p>La Documentación será entregada en archivador(es) de palanca debidamente foliada en la fecha y plazos 
            indicados en la presente convocatoria. 
        <div class="campos2">
            <div class="campo enviar siguiente">
                <!-- <input type="submit" value="informacion"> -->
                <a href="motor.php?flujo=<?php echo $flujo;?>&proceso=<?php echo $proceso;?>&siguiente=True">Presentar Documentos</a>
            </div>
        </div> 
        
    </div>
    
</div>

<?php
include_once 'includes/templates/footer.php';
?>