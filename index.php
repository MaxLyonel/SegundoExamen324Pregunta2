<?php
  include_once 'includes/funciones/sesiones.php';
  include_once 'includes/templates/header.php';
  include_once 'includes/templates/barra.php';  
  
?>
  <!-- Acá se debería mostrar el inicio de nuestra página -->
  <!-- Acá también debería mostrar el botón para pedir información -->
  <div class="bg-info contenedor">    
    <div class="contenido">
      <h2>CEI Centro Estudiantil Informática</h2>
        <p>lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        </p>
        <h3>¿ Para qué un frente estudiantil ?</h3>
        <p>lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        lorem ipsum dolor sit amet, consectetur adipis
        </p>
        <h3>Inscribe tu frente estudiantil: </h3>
        
        <div class="campos">
          <div class="campo">
            <p class="derecha">Para más información: </p>
          </div>
          <div class="campo enviar">
            <!-- Hacer algo con este flujo tiene que ser dinámico -->
            <a href="motor.php?flujo=F1&proceso=P1&siguiente=True">Información</a>
          </div>
          
        </div>
    </div>
    
  </div>
  

<?php
  include_once 'includes/templates/footer.php';
?>
