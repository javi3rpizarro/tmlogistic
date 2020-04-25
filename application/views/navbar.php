<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
   <!-- INICIO NAVBAR -->
    <div class="uk-topbar uk-flex-center uk-flex-middle" uk-grid>
        <?php foreach($contactos_header as $contacto):?>
            <?php if( $contacto->contacto != ""):?>    
            <div class="uk-margin-remove uk-text-center uk-width-1-4@m uk-width-2-6@l">
                <div><?=$contacto->contacto?></div>
            </div>
            <?php endif;?>
        <?php endforeach;?>

    </div>
    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <div>
            <a href="<?=base_url()?>">  
                <img class="uk-logo uk-width-4-4 uk-width-3-5@s uk-width-2-5@m uk-width-1-1@l" src="<?=base_url()?>assets/images/tmlogo.png">  
            </a>
            
            </div>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@l">
                <li><a href="<?=base_url()?>">Inicio</a></li>
                <li>
                    <a href="<?=base_url()?>empresa" type="button">Empresa</a>
                    <div class="uk-dropdown-navbar" uk-dropdown="pos: bottom-left; offset: -20; animation: uk-animation-slide-top-small; duration: 400; delay-show: 0; delay-hide: 80;">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>empresa">¿Quiénes somos?</a></li>
                            
                            <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>empresa#vision-mision">Visión y Misión</a></li>
                            
                            <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>empresa#nuestros-valores">Nuestros valores</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a type="button">Servicios</a>
                    <div class="uk-dropdown-navbar" uk-dropdown="pos: bottom-left; offset: -20; animation: uk-animation-slide-top-small; duration: 400; delay-show: 0; delay-hide: 80;">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>servicios/generadores">Arriendo Generadores</a></li>
                            
                            <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>servicios">Suministro de repuestos e insumos técnicos</a></li>
                            
                        
                        </ul>
                    </div>
                </li>
                
                <li><a href="<?=base_url()?>clientes">Clientes</a></li>
                

                <li><a href="<?=base_url()?>#contactanos-container">Contacto</a></li>
                
                <?php if( $this->session->logueado ):?>    
                <li><a href="<?=base_url()?>admin">Administrar</a></li>
                <li><a href="<?=base_url()?>logout">Logout</a></li>
                <?php endif;?>    
            
                <li class="uk-flex-center uk-flex uk-flex-middle">
                    <div class="uk-flex-center uk-flex uk-flex-middle" style="width: 200px; height: auto;">
                        <img src="<?=base_url()?>assets/images/sec4.png">
                    </div>
                </li>
            </ul>
            
            <button class="uk-navbar-responsive-button uk-hidden@l" type="button" uk-toggle="target: #offcanvas-nav"> <span uk-icon="menu"></span>menu</button>
            
            <div id="offcanvas-nav" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar">
                    <img class="uk-width-4-5 uk-width-1-2@l" src="<?=base_url()?>assets/images/tmlogo.png"> 
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <ul class="uk-nav">
                        <li><a href="<?=base_url()?>">Inicio</a></li>
                        <li><a href="<?=base_url()?>empresa">Empresa</a></li>
                        <li><a href="<?=base_url()?>servicios">Servicios</a></li>
                        <li><a href="<?=base_url()?>servicios/generadores">Generadores</a></li>
                            <li><a href="<?=base_url()?>servicios">Suministro de repuestos e insumos técnicos</a></li>
                            <li><a href="<?=base_url()?>clientes">Nuestros Clientes</a></li>
                             <li><a href="<?=base_url()?>#contactanos-container">Contacto</a></li>
                        <?php if( $this->session->logueado ):?>  
                        <li><a href="<?=base_url()?>admin">Administrar</a></li>  
                        <li><a href="<?=base_url()?>logout">Logout</a></li>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        
        </div>
      
    </nav>
    <!-- FIN NAVBAR -->
