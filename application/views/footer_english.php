<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- INICIO FOOTER -->
<div class="uk-flex uk-flex-center uk-footer" uk-grid>

    <div class="uk-width-1-1 uk-width-1-2@m uk-width-1-4@l">
        <img class="uk-visible@m" width="80%" src="<?=base_url()?>assets/images/tmlogofooter.png">
        
        <div class="uk-text-justify uk-margin-left uk-margin-right" uk-grid>
            <div class="uk-width-expand@l uk-padding-remove-horizontal uk-padding-small">
            Tech ‐ Marine and Logistics, a leading company that offers logistics services, technical supply for the
                         maritime area, and rental of generator sets.
            </div>
        </div>  
    </div>
    
    <div class="uk-width-1-1 uk-width-1-2@m uk-width-1-2@l">
        <div class="uk-text-left uk-margin-left uk-margin-right" uk-grid>
            <div class="uk-width-expand@l uk-padding-remove">
                <p style="color: #fff;">ABOUT US</p>
                <ul class="uk-list uk-footer-links">
                    <li><a href="<?=base_url()?>empresa#quienes-somos">About us</a></li>
                    <li><a href="<?=base_url()?>empresa#vision-mision">Mission and vision</a></li>
                    <li><a href="<?=base_url()?>empresa#nuestros-valores">Our values</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@l uk-padding-remove">
                <p style="color: #fff;">TMLOGISTIC</p>
                <ul class="uk-list uk-footer-links">
                    <li><a href="<?=base_url()?>empresa">Company</a></li>
                    <li><a href="<?=base_url()?>servicios">Services</a></li>
                    <li><a href="<?=base_url()?>clientes">Our clients</a></li>
                    <li><a href="<?=base_url()?>#contactanos-container">Contact</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@l uk-padding-remove">
                <p style="color: #fff;">CONTACT</p>
                <div>
                  <!--ul class="uk-list">
                    <li><i class="material-icons xs white">home</i> Address: Av. Gomez Carreño 49, Oficina 102, Valparaiso, Chile</li>
                    <li><i class="material-icons xs white">phone</i> Phone: 56 32 2609600</li>
                    <li><i class="material-icons xs white">email</i> Supply and logistics: procur@stship.net</li>
                  </ul-->
                  <ul class="uk-list">
                    <?php foreach($contactos_footer_ingles as $contacto):?>
                      <?php if($contacto->contacto != ''):?>
                      <li>
                        <i class="material-icons xs white"><?=$contacto->tipo?></i>
                        <?=$contacto->contacto?>
                      </li>
                      <?php endif;?>
                    <?php endforeach;?>
                  </ul>
                </div>
            </div>
        </div>  
    </div>

</div>


<div id="uk-totop" class="uk-totop uk-visible@l">
    <span class="uk-icon md orange uk-flex uk-flex-center uk-flex-middle">
        <a href="#" uk-scroll><i class="material-icons md white">keyboard_arrow_up</i></a>
    </span>
</div>

<div class="uk-flex uk-flex-center uk-footer-copy uk-text-center">
    <ul class="uk-list">
        <li>Derechos Reservados &copy; Tech-Marine Logistics</li>
    </ul>
</div>

    <!-- FIN FOOTER -->

</body>
<script type="text/javascript">
    window.onscroll = function() {
        var topPosition = window.scrollY;
        if(topPosition >= 200){
            $('#uk-totop').css({"visibility":"visible"});
            $('#uk-totop').css({"opacity":"0.7"});
            //$('#uk-totop').removeClass('uk-totop-hide');
            //$('#uk-totop').addClass('uk-totop-visible');
        }else{
            $('#uk-totop').css({"visibility":"hidden"});
            $('#uk-totop').css({"opacity":"0"});
            //$('#uk-totop').addClass('uk-totop-hide');
            //$('#uk-totop').removeClass('uk-totop-visible');
        }
    };
</script>
<script>
        AOS.init({
  // Global settings:
  disable: 'phone', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // 120 offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
    </script>

    <script type="text/javascript">
    function closeModal( modalName ){
        var modal = document.getElementById(modalName);
        UIkit.modal(modal).hide();
    }
</script>

<script type="text/javascript">
                        function eliminar_generador_by_id(id_generador){

                            if (confirm("Se eliminará el generador actual ¿Continuar?")) {
                                $.ajax({
                                    url: '<?=base_url()?>generador/eliminar/id/' + id_generador,
                                    type: 'get',
                                    success: function(response){
                                        console.log('Generador Eliminado');
                                        location.reload();
                                    }
                                });
                            } 

                        }
                        function get_generador_by_id(id_generador){
                            console.log(id_generador);
                            $.ajax({
                                url: '<?=base_url()?>generador/id/' + id_generador,
                                type: 'get',
                                success: function(response){
                                    var generador = JSON.parse(response);
                                    console.log(generador);
                                    document.modalform.action = '<?=base_url()?>generador/editar/id/' + generador.id_generador;
                                    console.log(document.modalform.action);
                                    $('#modal-engine').val(generador.engine);
                                    $('#modal-alternator').val(generador.alternator);
                                    $('#modal-prime_power').val(generador.prime_power);
                                    $('#modal-voltage').val(generador.voltage);
                                    $('#modal-frequency').val(generador.frequency);
                                    $('#modal-combustible').val(generador.combustible);
                                    $('#modal-contenerizado').val(generador.contenerizado);
                                    $('#modal-internal-id').val(generador.internal_id);
                                    $('#modalformeliminarbutton').click(function(){
                                        eliminar_generador_by_id(generador.id_generador);
                                    });
                                    console.log(document.getElementById('modalformeliminarbutton'));
                                }
                            });
                        }
                    </script>

                    <script type="text/javascript">
                            $('#form-update-header').submit(function(e){
                                e.preventDefault();
                                var formdata = $("#form-update-header").serializeArray();
                                //console.log(JSON.stringify(data));
                                $.ajax({
                                    url: '<?=base_url()?>editar/contacto/header',
                                    type: 'POST',
                                    data: formdata,
                                    success: function(response){
                                        $('#form-update-header-res').html(response);
                                    }
                                });
                            });    
                            $('#form-update-footer').submit(function(e){
                                e.preventDefault();
                                var formdata = $("#form-update-footer").serializeArray();
                                var contactos = [
                                    {id_fc: formdata[0].name, contacto: formdata[0].value, tipo: formdata[1].value},
                                    {id_fc: formdata[2].name, contacto: formdata[2].value, tipo: formdata[3].value},
                                    {id_fc: formdata[4].name, contacto: formdata[4].value, tipo: formdata[5].value},
                                    {id_fc: formdata[6].name, contacto: formdata[6].value, tipo: formdata[7].value}
                                ];
                                console.log(JSON.stringify(contactos));
                                $.ajax({
                                    url: '<?=base_url()?>editar/contacto/footer',
                                    type: 'POST',
                                    data: {contactos: JSON.stringify(contactos)},
                                    success: function(response){
                                        $('#form-update-footer-res').html(response);
                                    }
                                });
                            });  
                        </script>

</html>