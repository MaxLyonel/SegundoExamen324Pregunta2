<?php
session_start();
$proceso = $_GET['proceso'];
$flujo = $_GET['flujo'];
include_once 'includes/templates/header.php';
include_once 'includes/templates/barra.php';
?>

<div class="bg-info contenedor">  
    <h2>DESHABILITADO POR NO CUMPLIR LOS REQUISITOS</h2>
</div>
<?php
include_once 'includes/templates/footer.php';
?>