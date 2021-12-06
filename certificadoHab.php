<?php
session_start();
$proceso = $_GET['proceso'];
$flujo = $_GET['flujo'];
include_once 'includes/templates/header.php';
include_once 'includes/templates/barra.php';
?>

<div class="bg-info contenedor">  
    <h2>HABILITACION DE CERTIFICADO DE FRENTE</h2>
    <h3>Al presente frente se le otorga: </h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sapiente nulla molestias officiis voluptatum, beatae quam rem voluptas minus incidunt quae, praesentium, voluptatem culpa odit? Ducimus quibusdam eius similique suscipit?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sapiente nulla molestias officiis voluptatum, beatae quam rem voluptas minus incidunt quae, praesentium, voluptatem culpa odit? Ducimus quibusdam eius similique suscipit?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sapiente nulla molestias officiis voluptatum, beatae quam rem voluptas minus incidunt quae, praesentium, voluptatem culpa odit? Ducimus quibusdam eius similique suscipit?</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sapiente nulla molestias officiis voluptatum, beatae quam rem voluptas minus incidunt quae, praesentium, voluptatem culpa odit? Ducimus quibusdam eius similique suscipit?</p>
    
    <div class="campos">        
          <div class="campo enviar">
            <!-- Hacer algo con este flujo tiene que ser dinámico -->
            <a href="motor.php?flujo=<?php echo $flujo;?>&proceso=<?php echo $proceso;?>&siguiente=True">Siguiente</a>
          </div>
          
    </div>
</div>

<?php
include_once 'includes/templates/footer.php';
?>