   <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="uk-container uk-padding uk-flex uk-flex-center">

<div uk-grid>
    <div>
        <div uk-grid>
            <div class="uk-width-auto@m">
                <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                    <li><a href="#">Datos de contacto</a></li>
                    <li><a href="#">Editar Productos</a></li>
                </ul>

            </div>
            <div class="uk-width-expand@m">
                <ul id="component-tab-left" class="uk-switcher">           
                    <!-- EDITAR DATOS CONTACTO -->             
                    <li>
                        <form id="form-update-email" class="uk-grid-small" method="post" uk-grid>
                                <div class="uk-width-1-1">
                                    <h3>Correo electrónico formulario contacto</h3>
                                </div>
                                
                                    <div class="uk-width-1-2">
                                        <input class="uk-input" type="text" name="correo_formulario" value="<?=$ajustes->correo_formulario?>" placeholder="Ingrese correo electrónico de contacto">
                                    </div>
                                
                                <div class="uk-width-1-1 uk-flex uk-flex-center">
                                    <label id="form-update-email-res"></label>
                                </div>
                                <div class="uk-width-1-1 uk-flex uk-flex-center uk-margin-remove uk-padding-remove">
                                    <button type="submit" class="uk-form-button">Guardar Cambios</button>
                                </div>
                        </form>

                        <form id="form-update-header" class="uk-grid-small" method="post" uk-grid>
                                <div class="uk-width-1-1">
                                    <h3>Encabezado de página</h3>
                                </div>
                                <?php foreach( $contactos_header as $contacto): ?>
                                    <div class="uk-width-1-2">
                                        <input class="uk-input" type="text" name="<?=$contacto->id_hc?>" value="<?=$contacto->contacto?>" placeholder="Ingrese información de contacto (opcional)">
                                    </div>
                                <?php endforeach;?>
                                <div class="uk-width-1-1 uk-flex uk-flex-center">
                                    <label id="form-update-header-res"></label>
                                </div>
                                <div class="uk-width-1-1 uk-flex uk-flex-center uk-margin-remove uk-padding-remove">
                                    <button type="submit" class="uk-form-button">Guardar Cambios</button>
                                </div>
                        </form>

                        
                        

                        <form id="form-update-footer" class="uk-grid-small" method="post" action="<?=base_url()?>editar/contacto/footer" uk-grid>
                                <div class="uk-width-1-1">
                                    <h3>Pie de página</h3>
                                </div>
                                <div class="uk-width-1-1 uk-padding-large uk-padding-remove-vertical">
                                 <?php foreach( $contactos_footer as $contacto): ?>
                                    <div class="uk-margin-remove-horizontal uk-margin" uk-grid>
                                        <input class="uk-input uk-width-3-4" type="text" name="<?=$contacto->id_fc?>" value="<?=$contacto->contacto?>" placeholder="Ingrese información de contacto (opcional)">
                                        <select class="uk-select uk-width-1-4" name="<?=$contacto->id_fc?>">
                                            <option <?php if($contacto->tipo == 'mail') echo 'selected'?> value="mail">Correo electrónico</option>
                                            <option <?php if($contacto->tipo == 'phone') echo 'selected'?> value="phone">Teléfono</option>
                                            <option <?php if($contacto->tipo == 'home') echo 'selected'?> value="home">Dirección</option>
                                        </select>
                                    </div>
                                <?php endforeach;?>
                               </div>

                                 <div class="uk-width-1-1 uk-flex uk-flex-center">
                                    <label id="form-update-footer-res"></label>
                                </div>                           
                                 
                                 <div class="uk-width-1-1 uk-flex uk-flex-center">
                                    <button class="uk-form-button">Guardar Cambios</button>
                                </div>
                        </form>
                    </li>
                    <!-- FIN EDITAR CONTACTO -->

                    <!-- INICIO EDITAR PRODUCTOS -->
                    <li>
                    	<div class="uk-overflow-auto">
                        <table class="uk-table-admin uk-table uk-table-striped uk-table-hover">
							<tr>
                                <td>Internal ID</td>
								<td>Engine</td>
								<td>Alternator</td>
								<td>Voltage</td>
								<td>Frequency</td>
								<td>Edit</td>
							</tr>
							<?php foreach( $generadores as $generador):?>
                            <tr>
                                <td><?=$generador->internal_id?></td>
								<td><?=$generador->engine?></td>
								<td><?=$generador->alternator?></td>
								<td><?=$generador->voltage?></td>
								<td><?=$generador->frequency?></td>
								<td><a class="uk-button-default" href="#modal-full" uk-toggle  onclick="get_generador_by_id('<?= $generador->id_generador?>')">Edit</a></td>
							</tr>
							<?php endforeach;?>

						</table>
                    </div>
                    </li>
                    
                    <!-- FIN EDITAR PRODUCTOS  get_generadores_by_internal_id(<?= $generador->internal_id?>)-->

                    
                    
                   
                </ul>
            </div>
        </div>
    </div>
</div>

</div>

<div id="modal-full" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
            <div class="uk-background-cover uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
            	<img src="<?=base_url()?>assets/images/generadores/cummins.png">
            </div>

            <div class="uk-padding-large">
            	<h2>Modificar información producto</h2>
                <form class="uk-grid-small" name="modalform" method="post" action="/" uk-grid>
                    <?php?>
	    			<div class="uk-width-1-2">
	    				<input class="uk-input" id="modal-engine" name="engine" type="text">
	    			</div>
                    <div class="uk-width-1-2">
                        <input class="uk-input" id="modal-alternator" name="alternator" type="text">
                    </div>
                    <div class="uk-width-1-1">
                        <input class="uk-input" id="modal-prime_power" name="prime_power" type="text">
                    </div>
                    <div class="uk-width-1-2">
                        <input class="uk-input" id="modal-voltage" name="voltage" type="text">
                    </div>
	    			<div class="uk-width-1-2">
	    				<input class="uk-input" id="modal-frequency" name="frequency" type="text">
	    			</div>
	    			<div class="uk-width-1-3">
				       <input class="uk-input" id="modal-combustible" name="combustible" type="text">
				    </div>
				    <div class="uk-width-1-3">
                        <select class="uk-select" id="modal-contenerizado" name="contenerizado">
                            <option value="1">SI</option>
                            <option value="0">NO</option>
                        </select>
				    
                    </div>
                     <div class="uk-width-1-3">
                       <input class="uk-input" id="modal-internal-id" name="internal_id" type="text">
                    </div>
                    <?php?>
				    <div class="uk-width-1-2 uk-flex uk-flex-center">
                    	<a id="modalformeliminarbutton" class="uk-button-delete">Eliminar</a>
        			</div>
                    <div class="uk-width-1-2 uk-flex uk-flex-center">
                        <button class="uk-form-button">Guardar Cambios</button>
                    </div>
				</form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
                            $('#form-update-email').submit(function(e){
                                e.preventDefault();
                                var formdata = $("#form-update-email").serializeArray();
                                //console.log(JSON.stringify(data));
                                $.ajax({
                                    url: '<?=base_url()?>editar/contacto/formulario',
                                    type: 'POST',
                                    data: formdata,
                                    success: function(response){
                                        $('#form-update-email-res').html(response);
                                    }
                                });
                            });
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