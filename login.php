<?php 
    session_start();
    include_once 'includes/templates/header.php';     
    if(isset($_GET['cerrar_sesion'])) {
        $_SESSION = array();
    } 
?>
<body class="login">
    <div class="contenedor-formulario">
        <h1 class="login_titulo">Login Inscripcion CEI</h1>
        <form id="formulario" class="caja-login" method="post" action="includes/modelos/modelo.php">
            <div class="campoL">
                <label for="usuario">Usuario: </label>
                <input type="text" name="usuario" id="usuario" placeholder="Usuario">
            </div>
            <div class="campoL">
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>
            <div class="campoL enviarL">
                <!-- <input type="hidden" id="tipo" value="login"> -->
                <input type="hidden" id="accion" name="accion" value="login">
                <input type="submit" class="boton" value="Iniciar Sesión">
            </div>
        </form>
    </div>
<?php include_once 'includes/templates/footer.php'; ?>