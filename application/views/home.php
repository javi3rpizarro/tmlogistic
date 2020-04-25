<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

    <!-- INICIO SLIDER -->
    <div id="slideshow-container" class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="
        animation: fade;
        autoplay: true;
        autoplay-interval: 3000;
        velocity: 1;
        draggable: true;
        ratio: 16:9;
        pause-on-hover: true;
        min-height: 200;
        max-height: 500;
        "
    >

    <ul class="uk-slideshow-items">
        <!--li>
            <img src="<?=base_url()?>assets/images/equipo/1.jpg" alt="" uk-cover>
            <div class="uk-slideshow-caption uk-position-center uk-position-small uk-text-center uk-light">
                <h3 class="uk-slideshow-title uk-margin-remove animated fadeInDown">Soluciones Marítimas</h3>
                <p class="uk-slideshow-subtitle uk-margin-remove animated fadeIn">Somos especialistas en adquisiciones y soluciones de ingeniería marítima para la industria</p>
                <button  onclick="window.location.href='<?=base_url()?>#contactanos-container'" class="uk-slideshow-button animated fadeIn">Contáctanos</button>
            </div>
        </li-->
        
        
        <li>
            <img src="<?=base_url()?>assets/images/home/58_10.png" alt="" uk-cover>
            <div class="uk-slideshow-caption uk-position-center uk-position-small uk-text-center uk-light">
                <h3 class="uk-slideshow-title uk-margin-remove animated fadeIn">Generadores</h3>
                <p class="uk-slideshow-subtitle uk-margin-remove animated fadeInUp">Grupos electrógenos de última generación para entornos marítimos, mineros, industriales, etc</p>
                <button onclick="window.location.href='<?=base_url()?>servicios/generadores'" class="uk-slideshow-button animated fadeIn">ver generadores</button>
            </div>
        </li>
        <li>
            <img src="<?=base_url()?>assets/images/home/61_9.png" alt="" uk-cover>
            <div class="uk-slideshow-caption uk-position-center uk-position-small uk-text-center uk-light">
                <h3 class="uk-slideshow-title uk-margin-remove animated fadeInDown">Suministro de repuestos e insumos técnicos</h3>
                <p class="uk-slideshow-subtitle uk-margin-remove animated fadeIn">Ofrecemos equipos, repuestos, piezas y partes para todos los sistemas de una nave</p>
                <button  onclick="window.location.href='<?=base_url()?>servicios#logistica'" class="uk-slideshow-button animated fadeIn">Ver Más</button>
            </div>
        </li>
    </ul>

    <div class="uk-light">
        <a class="uk-slideshow-arrow uk-slideshow-arrow-left uk-position-center-left uk-position-large uk-visible@m" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-slideshow-arrow uk-slideshow-arrow-right uk-position-center-right uk-position-large uk-visible@m" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>

    </div>
    <!-- FIN SLIDER -->

    <!-- INICIO SECCION SERVICIOS -->
    <div id="servicios-container" class="uk-container">
    <div class="uk-child-width-expand@s uk-text-center" uk-grid>
        <div>
            <div class="uk-width-expand">
                 <h2 class="uk-text-uppercase uk-text-bolder uk-tech-title"><u>Tech-Marine & Logistics</u></h2>

                 <h2 class="uk-text-uppercase uk-text-bolder" style="padding: 0px;">Servicios</h2>
            </div>

            <div class="uk-width-expand">
            
                     <p>
                        Tech‐Marine and Logistics, una empresa líder que ofrece servicios de logística, abastecimiento técnico para el
                        área marítima, y arriendo de grupos generadores.
                   </p>  
              
            </div>
           
        </div>
    </div>

    <!-- inicio slider -->
<div id="servicios-slider" class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@m uk-grid">
        <li>
            <a href="<?=base_url()?>servicios/generadores"><div class="uk-inline-clip uk-transition-toggle">
                <img class="uk-transition-scale-up uk-transition-opaque" src="<?=base_url()?>assets/images/home/home_generadores.jpg" alt="">
                <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                        <p class="uk-h4 uk-slider-servicios-title uk-margin-remove">Arriendo de generadores</p>
                    </div>
            </div></a>
        </li>
        <li>
            <a href="<?=base_url()?>servicios"><div class="uk-inline-clip uk-transition-toggle">
                <img class="uk-transition-scale-up uk-transition-opaque" src="<?=base_url()?>assets/images/home/home_personal.jpg" alt="">
               <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                        <p class="uk-h4 uk-slider-servicios-title uk-margin-remove">Suministro de repuestos e insumos técnicos</p>
                    </div>
            </div></a>
        </li>
        <li>
            <a href="<?=base_url()?>servicios"><div class="uk-inline-clip uk-transition-toggle">
                <img class="uk-transition-scale-up uk-transition-opaque" src="<?=base_url()?>assets/images/home/home_barco.jpg" alt="">
                <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
                        <p class="uk-h4 uk-slider-servicios-title uk-margin-remove">Servicios logísticos</p>
                    </div>
            </div></a>
        </li>
 
    </ul>

    <a class="uk-position-center-left uk-position-small " href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small " href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
    <!-- fin slider -->
<div class=" uk-flex uk-flex-center">
        <a href="<?=base_url()?>servicios" class="uk-proyectos-button">ver servicios</a>
    </div>
   </div>
    <!-- FIN SECCION SERVICIOS -->


<div id="puertos-container">
    <div class="uk-container uk-padding-remove">
        <div class="uk-flex uk-flex-center uk-flex-middle" uk-grid>           
            <div class="uk-paises-container uk-width-1-1 uk-width-1-2@s uk-width-2-3@m uk-width-2-3@l">
                <div class="uk-width-1-1 uk-width-2-3@l">
                
                <img src="<?=base_url()?>assets/images/home/mapa_2.png">
            </div>
            </div>
            <div class="uk-width-3-5 uk-width-1-2@s uk-width-1-3@m uk-width-1-3@l">
                <img src="<?=base_url()?>assets/images/home/mapa_1.png">
            </div>
        </div>  
    </div>
</div>

<!--div id="engranajes-container" class="uk-background-muted">
<div class="uk-container">
    <div class="uk-child-width-expand@s uk-margin-remove uk-padding-remove uk-text-center" uk-grid>
        <div>
            <div class="uk-width-expand">
                 <h2 class="uk-text-uppercase uk-text-bolder">Logística y abastecimiento técnico</h2>
            </div>
        </div>
    </div>
        <div class="uk-flex uk-flex-center" uk-grid>
            <div class="uk-width-1-4 uk-width-1-4@s uk-width-1-4@m uk-width-1-6@l uk-flex uk-flex-center">
            <div class="uk-text-center uk-width-expand">
                <img src="<?=base_url()?>assets/images/engranaje1_2.png">
                
                <h6 class="uk-icons-title uk-text-break">Convenios internacionales</h6>
            </div>
        </div>
            
            <div class="uk-width-1-4 uk-width-1-4@s uk-width-1-4@m uk-width-1-6@l uk-flex uk-flex-center">
            <div class="uk-text-center uk-width-expand">
                <img src="<?=base_url()?>assets/images/engranaje2_4.png">
               
                <h6 class="uk-icons-title uk-text-break">Reducción de costos</h6>
            </div>
        </div>
            
            <div class="uk-width-1-4 uk-width-1-4@s uk-width-1-4@m uk-width-1-6@l uk-flex uk-flex-center">
            <div class="uk-text-center uk-width-expand">
                <img src="<?=base_url()?>assets/images/engranaje3_2.png">
               
                <h6 class="uk-icons-title uk-text-break">Asesoría técnica</h6>
            </div>
        </div>
            
            <div class="uk-width-1-4 uk-width-1-4@s uk-width-1-4@m uk-width-1-6@l uk-flex uk-flex-center">
            <div class="uk-text-center uk-width-expand">
                <img src="<?=base_url()?>assets/images/engranaje4_2.png">
               
                <h6 class="uk-icons-title uk-text-break">Logística integral</h6>
            </div>
        </div>
        </div>
    </div>    
</div-->

    <!-- FIN SECCION ICONOS -->

    
<!-- SECCION NUESTROS MARCAS -->

<div id="marcas-container" class="uk-container">
     <div class="uk-flex uk-flex-center">
        <h2 class="uk-text-uppercase uk-text-bolder">Nuestras marcas</h2>
    </div>
    <div class="uk-flex uk-flex-center uk-text-center">
        <div>
        <img class="marcas-icons" src="<?=base_url()?>assets/images/marcas/volvo.png">
        <img class="marcas-icons" src="<?=base_url()?>assets/images/marcas/scania.png">
        <img class="marcas-icons" src="<?=base_url()?>assets/images/marcas/cummins.png">
        <img class="marcas-icons" src="<?=base_url()?>assets/images/marcas/cat.png">
        <img class="marcas-icons" src="<?=base_url()?>assets/images/marcas/leroy.jpg">
        <img class="marcas-icons" src="<?=base_url()?>assets/images/marcas/stamford.jpg">
        <img class="marcas-icons" src="<?=base_url()?>assets/images/marcas/weg.jpg">
        <img class="marcas-icons" src="<?=base_url()?>assets/images/marcas/marathon.png">
    </div>
    </div>
</div>
<!-- FIN SECCION NUESTROS MARCAS -->
