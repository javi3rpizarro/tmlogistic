   <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- INICIO FORMULARIO CONTACTO -->
    <div id="contactanos-container" class="uk-container">
        <div class="uk-flex uk-flex-center">
            <h2 class="uk-text-uppercase uk-text-bolder" style="letter-spacing: 1px">Contacto</h2>            
        </div>
        <div class="uk-flex uk-flex-center uk-padding-small uk-padding-remove-horizontal">
        <form id="contactoForm" method="post" action="javascript:submitForm(grecaptcha.getResponse(widgetId1));" class="uk-form uk-grid-small uk-width-2-2@s uk-width-2-3@m uk-width-2-3@l uk-form-contactanos" uk-grid>
            <div class="uk-width-1-2@m">
                <input id="nombre" class="uk-input" type="text" name="nombre" placeholder="Nombre completo" required>
            </div>
            <div class="uk-width-1-2@m">
                <input id="correo" class="uk-input" type="email" name="correo" placeholder="Correo electrónico" required>
            </div>
            <div class="uk-width-1-2@m">
                <input id="empresa" class="uk-input" type="text" name="empresa" placeholder="Empresa">
            </div>
            <div class="uk-width-1-2@m">
                <input id="telefono" class="uk-input" type="number" name="telefono" placeholder="Teléfono" required>
            </div>
            <!--div class="uk-width-1-3@m">
                <select class="uk-select" name="motivo" style="color: #999">
                    <option value="Contacto: Ventas">Ventas</option>
                    <option value="Contacto: Arriendos">Arriendos</option>
                    <option value="Contacto: Logística y abastecimiento">Logística y abastecimiento</option>
                    <option value="Contacto: Otro">Otro</option>
                </select>
                
            </div-->
            
            <div class="uk-width-1-1@m">
                 <textarea id="mensaje" class="uk-textarea" rows="5" name="mensaje" placeholder="Déjanos un mensaje..." required></textarea>
            </div>

            <div class="uk-width-1-1@m uk-flex uk-flex-center uk-text-center" style="padding-bottom: 0px">
                <div id="g-recaptcha"></div>
            </div>
            <div class="uk-width-1-1@m uk-flex uk-flex-center uk-text-center" style="padding-top: 0px">
                <div id="g-recaptcha-msg" style="color: red;"></div>
            </div>
            <div class="uk-width-1-1@m uk-flex uk-flex-center uk-text-center" style="padding-top: 0px">
                <div id="form-res-msg" style="color: #F39736;"></div>
            </div>
            
            <div class="uk-width-1-1@m uk-flex uk-flex-center">
                <button class="uk-form-button" type="submit">Enviar formulario</button>
            </div>
        </form>
        
    </script>
    </div>
    </div>


<script type="text/javascript">
        

             function submitForm(response ){
                document.getElementById("contactoForm").addEventListener("click", function(event){
  event.preventDefault()
});
                if(response == ''){
                    $('#g-recaptcha-msg').html('Debe completar la autenticación.');
                }else{
                    var nombre = document.getElementById("nombre").value;
                    var correo = document.getElementById("correo").value;
                    var empresa = document.getElementById("empresa").value;
                    var telefono = document.getElementById("telefono").value;
                    var mensaje = document.getElementById("mensaje").value;
                    
                    var formulario = {
                        nombre: nombre,
                        correo: correo,
                        empresa: empresa,
                        telefono: telefono,
                        mensaje: mensaje
                    };

                    $.ajax({
                        data:  formulario,
                        url:   '<?=base_url()?>enviarcorreo',
                        type:  'post',
                        beforeSend: function () {
                                $("#form-res-msg").html("Enviando consulta...");
                        },
                        success:  function (response) {
                                console.log(response);
                                $("#form-res-msg").html(response);
                        }
                    });


                }
             }


             var verifyCallback = function(response) {
                alert(response);
              };
              var widgetId1;
              var onloadCallback = function() {
                
                widgetId1 = grecaptcha.render(document.getElementById('g-recaptcha'), {
                  'sitekey' : '6Ld0UcYUAAAAAHhEwM2v1G0o8uFOQUeMk108kYoc'
                });
              };
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>

<!-- FIN FORMULARIO CONTACTO -->
