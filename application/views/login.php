   <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- INICIO LOGIN  -->
    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <div class="uk-width-expand">
                 <a href="<?=base_url()?>">  
                <img class="uk-width-4-4 uk-width-4-5@s uk-width-3-5@m uk-width-1-2@l" src="<?=base_url()?>assets/images/tmlogo.png">  
            </a>
            </div>

            <!-- INICIO FORMULARIO LOGIN -->
    <div id="contactanos-container" class="uk-container">
        <div class="uk-flex uk-flex-center" data-aos="fade" data-aos-duration="3000">
            <h2 class="uk-text-uppercase uk-text-bolder">Administrador</h2>            
        </div>
        <div class="uk-flex uk-flex-center uk-padding-small uk-padding-remove-horizontal">
        <form method="post" action="<?=base_url()?>login/validate" class="uk-form uk-grid-small uk-width-2-2@s uk-width-2-3@m uk-width-2-3@l" uk-grid>
            <div class="uk-width-1-1@m">
                <input class="uk-input" type="text" name="correo" placeholder="Correo electrónico">
            </div>
            <div class="uk-width-1-1@m">
                <input class="uk-input" type="password" name="contrasena" placeholder="Contraseña">
            </div>
            <div class="uk-width-1-1@m uk-flex uk-flex-center">
                <button class="uk-form-button" type="submit">Iniciar Sesión</button>
            </div>
        </form>
    </div>
    </div>

    <!-- FIN FORMULARIO LOGIN -->
           
        </div>
    </div>
   
    <!-- FIN LOGIN -->
