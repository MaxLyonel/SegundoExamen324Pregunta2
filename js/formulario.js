
eventListeners();

function eventListeners() {
    document.querySelector('#formulario').addEventListener('submit', validarRegistro);
}


function validarRegistro(e) {
    e.preventDefault();
    
    var usuario = document.querySelector('#usuario').value,
        password = document.querySelector('#password').value,
        accion = document.querySelector('#accion').value;
        
        if(usuario === '' || password === ''){
            // la validación falló
            swal({
              type: 'error',
              title: 'Error!',
              text: 'Ambos campos son obligatorios!'
            })
        } else {
            // Ambos campos son correctos, mandar ejecutar Ajax
            
            // datos que se envian al servidor
            var datos = new FormData();
            datos.append('usuario', usuario);
            datos.append('password', password);
            datos.append('accion', accion);
            
            // crear el llamado a ajax
            var xhr = new XMLHttpRequest();
            
            // abrir la conexión.
            xhr.open('POST', 'includes/modelos/modelo.php', true);
            
            // retorno de datos
            xhr.onload = function(){
                if(this.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    console.log(respuesta);
                    // Si la respuesta es correcta
                    if(respuesta.respuesta === 'correcto') {
                        // si es un nuevo usuario                        
                        if(respuesta.accion === 'login'){
                            swal({
                                title: 'Login Correcto',
                                text: 'Presiona OK para abrir la página principal',
                                type: 'success'
                            })
                            .then(resultado => {
                                if(resultado.value) {                                    
                                    if(respuesta.tipo == "usuario"){
                                        window.location.href = 'index.php';
                                        
                                    }
                                    else window.location.href = 'cumplimientoReq.php';
                                }
                            })
                        }
                    } else {
                        // Hubo un error
                        swal({
                            title: 'Error',
                            text: 'Hubo un error',
                            type: 'error'
                        })
                    }
                }
            }
            
            // Enviar la petición
            xhr.send(datos);
            
        }
}