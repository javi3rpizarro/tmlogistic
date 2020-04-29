<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
   <!-- INICIO NAVBAR -->
    <div class="uk-topbar uk-flex-center uk-flex-middle" uk-grid>
        <?php foreach($contactos_header_ingles as $contacto):?>
            <?php if( $contacto->contact != ""):?>    
            <div class="uk-margin-remove uk-text-center uk-width-1-4@m uk-width-2-6@l">
                <div><?=$contacto->contact?></div>
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
                <li><a href="<?=base_url()?>">Home</a></li>
                <li>
                    <a href="<?=base_url()?>empresa" type="button">Company</a>
                    <div class="uk-dropdown-navbar" uk-dropdown="pos: bottom-left; offset: -20; animation: uk-animation-slide-top-small; duration: 400; delay-show: 0; delay-hide: 80;">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>empresa">About us</a></li>
                            
                            <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>empresa#vision-mision">Mission and vision</a></li>
                            
                             <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>empresa#nuestros-valores">Our values</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a type="button">Services</a>
                    <div class="uk-dropdown-navbar" uk-dropdown="pos: bottom-left; offset: -20; animation: uk-animation-slide-top-small; duration: 400; delay-show: 0; delay-hide: 80;">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>servicios/generadores">Genset Rental Services</a></li>
                            
                            <li class="uk-dropdown-nav-li"><a href="<?=base_url()?>servicios">Spare Part and Technical Input Supply</a></li>
                            
                        
                        </ul>
                    </div>
                </li>
                
                <li><a href="<?=base_url()?>clientes">Customers</a></li>
                

                <li><a href="<?=base_url()?>#contactanos-container">Contact</a></li>

                
                <?php if( $this->session->logueado ):?>    
                <li><a href="<?=base_url()?>admin">Administration</a></li>
                <li><a href="<?=base_url()?>logout">Logout</a></li>
                <?php endif;?>    
            
                <li class="uk-flex-center uk-flex uk-flex-middle">
                    <div class="uk-flex-center uk-flex uk-flex-middle" style="width: 200px; height: auto;">
                        <img src="<?=base_url()?>assets/images/sec4_english.png">
                    </div>
                    <div class="uk-flex-center uk-flex uk-flex-middle">
                        <a href="<?=base_url()?>language/select/es" style="width: 25px; height: 25px;"><img class="flag-style" src="<?=base_url()?>assets/images/banderas/es_cl.png"></a>
                        <a href="<?=base_url()?>language/select/en" style="margin-left: 15px; width: 25px; height: 25px;"><img class="flag-style" src="<?=base_url()?>assets/images/banderas/en_us.png"></a>
                    </div>
                </li>
            </ul>
            
            <button class="uk-navbar-responsive-button uk-hidden@l" type="button" uk-toggle="target: #offcanvas-nav"> <span uk-icon="menu"></span>menu</button>
            
            <div id="offcanvas-nav" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar">
                    <img class="uk-width-4-5 uk-width-1-2@l" src="<?=base_url()?>assets/images/tmlogo.png"> 
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <ul class="uk-nav">
                        <li><a href="<?=base_url()?>">Home</a></li>
                        <li><a href="<?=base_url()?>empresa">Company</a></li>
                        <li><a href="<?=base_url()?>servicios">Services</a></li>
                        <li><a href="<?=base_url()?>servicios/generadores">Generadores</a></li>
                            <li><a href="<?=base_url()?>servicios">Spare Part and Technical Input Supply</a></li>
                            <li><a href="<?=base_url()?>clientes">Our customers</a></li>
                             <li><a href="<?=base_url()?>#contactanos-container">Contact</a></li>
                        <?php if( $this->session->logueado ):?>  
                        <li><a href="<?=base_url()?>admin">Administration</a></li>  
                        <li><a href="<?=base_url()?>logout">Logout</a></li>
                        <?php endif;?>

                    </ul>
                    <ul>
                        <div class="uk-flex uk-flex-center">
                             <a href="<?=base_url()?>language/select/es" style="width: 25px; height: 25px;"><img class="flag-style" src="<?=base_url()?>assets/images/banderas/es_cl.png"></a>
                        <a href="<?=base_url()?>language/select/en" style="margin-left: 15px; width: 25px; height: 25px;"><img class="flag-style" src="<?=base_url()?>assets/images/banderas/en_us.png"></a>
                        </div>
                    </ul>
                </div>
            </div>
        
        </div>
      
    </nav>
    <!-- FIN NAVBAR -->
