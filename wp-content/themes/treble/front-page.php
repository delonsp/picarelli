<?php get_header(); ?>

<!-- PAGE | WELCOME -->
    <div class="pages white paralax" id="page-welcome">
        <div class="overlay"></div>
        <!-- Centralized content -->
        <div class="centralized">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12 center">
                        <!-- Animated logo -->
                        <div class="logo">
                            <div class="scrollNormal">
                                <a href="#page-work">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/welcome/logo_welcome.png" width="140" height="140" alt="Treble">
                                </a>
                            </div>
                            <div class="scrollDown">
                                <a href="#page-work">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/welcome/logo2_welcome.png" width="140" height="140" alt="Treble">
                                </a>
                            </div> 
                        </div>
                        
                        <div class="line-divider">
                            <h1>Clínica Picarelli</h1>
                        </div>
                        <div id="welcome-messages">
                            <ul class="slides">
                                <li>
                                    <h2 class="dark-grey">Várias especialidades</h2>
                                </li>
                                <li>
                                    <h2 class="dark-grey">Variedade de exames</h2>
                                </li>
                                <li>
                                    <h2 class="dark-grey">Prevenção, Diagnóstico e Tratamento</h2>
                                </li>
                                <li>
                                    <h2 class="dark-grey">Tradição & Qualidade</h2>
                                </li>
                                <li>
                                    <h2 class="dark-grey">Foco no Paciente</h2>
                                </li>
                                
                            </ul>
                        </div>
                        
                        <div class="social-icons sicon-white bordered">
                            <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE | Welcome -->

    <!-- PAGE | Adicionais -->
    <div class="pages" id="page-destaques">
        <div class="container">
            <!-- Header -->
            <header>
                <!-- <h4 class="line-divider">Destaques</h4> -->
                <h1>Destaques</h1>
                
                
                
            </header>
            <!-- End Header -->
            
            <!-- Article -->
            <article>
                <!-- Blog articles -->
                <ul class="thumbnails destaques-items">
                    <!-- Blog post -->
                    <li class="span4">
                    
                        <!-- Blog image -->
                        <a href="<?php echo esc_url( home_url( '/convenios' ) ); ?>">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/destaques/logos_convenios.jpg" alt="convenios">
                        </a>
                        
                        <!-- Blog title -->
                        <h5>
                            Convênios<br/>
                           
                        </h5>
                        
                        <!-- Blog post description -->
                        <p class="smallFontBy08">Confira nossa relação de convênios e outras importantes informações.</p>
                        
                        <!-- Blog read more -->
                        <div class="read-more">
                            <a href="<?php echo esc_url( home_url( '/convenios' ) ); ?>">Leia Mais</a>
                        </div>
                    </li>
                    <li class="span4">
                        <a href="#<?php bloginfo('template_url');?>/pages/destaques/proimune.html"
                            data-destination="destaques-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/destaques/proimune.jpg" alt="proimune">
                        </a>
                        <h5>
                            Parceria Pró-Imune<br/>
                            
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                        <div class="read-more">
                            <a href="#<?php bloginfo('template_url');?>/pages/destaques/proimune.html"
                            data-destination="destaques-items" data-insert="before">Leia Mais</a>
                        </div>
                    </li>
                    <li class="span4">
                        <a href="#<?php bloginfo('template_url');?>/pages/destaques/dayclinic.html"
                            data-destination="destaques-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/destaques/Checkup.jpg" alt="Checkup">
                        </a>
                        <h5>
                            Day Clinic - Checkup Geral<br/>
                            
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                        <div class="read-more">
                            <a href="#<?php bloginfo('template_url');?>/pages/destaques/dayclinic.html"
                            data-destination="destaques-items" data-insert="before">Leia Mais</a>
                        </div>
                    </li>
                    
                </ul>
            </article>
            <!-- End Article -->
    
            <!-- Footer -->
            <footer>
                
            </footer>
            <!-- End Footer -->
        </div>
    </div>
    <!-- END PAGE | Adicionais -->
    
    <!-- PAGE | Picarelli -->
    <div class="pages white paralax" id="page-picarelli">
        <!-- Page overlay -->
        <!-- <div class="overlay"></div> -->
        
        <!-- Block content -->
        <div class="container">
             <div class="row-fluid">
                <div class="span8 offset2">
                    
                </div>
            </div>
        </div>
        
    </div>
    <!-- END PAGE | Picarelli -->
    
    <!-- PAGE | WORK -->
    <div class="pages" id="page-work">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Conheça nossos serviços</h4>
                <h1>Exames</h1>
                <!-- Short desciption about Work in general -->
                <div class="row">
                    <div class="span8 offset2">
                        <p>Estamos sempre preocupados em oferecer os melhores métodos diagnósticos disponíveis.
                            Clique em cada uma das categorias e imagens abaixo para maiores detalhes.</p>
                    </div>
                </div>
                    
                
                <nav class="submenu">
                    <ul>
                        
                        <li>
                            <a href="#"
                             class="plugin-filter active" data-filter="cardiologia" >
                             Cardiologia
                            </a>
                        </li>

                        <li>
                            <a href="#" 
                             class="plugin-filter" data-filter="usg_geral" >
                             Ultra-Som Geral
                            </a>
                        </li>
                        <li>
                            <a href="#" 
                             class="plugin-filter" data-filter="usg_especializado" >
                             Ultra-Som Especializado
                            </a>
                        </li>
                        <li>
                            <a href="#" 
                             class="plugin-filter" data-filter="laboratorio" >
                             Laboratório
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <!-- End Header -->
                
            <!-- Article -->
            <article>
                <!-- Portfolio items
                    Params: 
                        plugin-filter-elements: Defines items for filtering, each item has class which defines filter value.
                        portfolio-items: Customise portfolio items for hover effect.
                -->
                <ul class="thumbnails plugin-filter-elements portfolio-items">
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url');?>/pages/exams/ergometrico.html" data-destination="portfolio-items" data-insert="before">
                            <!-- Portfolio image -->
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/ergometrico.jpg" alt="Treble">
                            
                            <!-- Portfolio name, activated on hover -->
                            <div class="portfolio-overlay">
                                <h4>Teste Ergométrico</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/ecocardiograma.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/ecocardio.jpg" alt="Ecocardiograma">
                            <div class="portfolio-overlay">
                                <h4>Ecocardiograma com doppler</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/MAPA.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/MAPA.jpg" alt="MAPA">
                            <div class="portfolio-overlay">
                                <h4>MAPA e MRPA</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/holter.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/holter.jpg" alt="Holter">
                            <div class="portfolio-overlay">
                                <h4>Holter</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/tilt_test.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/tilt_test.jpg" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>TILT TEST</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/ecostress.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/ecocardio_ecostress.jpg" alt="ecocardio com ecostress">
                            <div class="portfolio-overlay">
                                <h4>Ecocardiograma com EcoStress</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/ecg_high.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/ecg_high.jpg" alt="ecg alta resolução">
                            <div class="portfolio-overlay">
                                <h4>Eletrocardiografia de Alta Resolução</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/funcao_pulmonar.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/funcao_pulmonar.jpg">
                            <div class="portfolio-overlay">
                                <h4>Prova de Função Pulmonar</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix usg_geral">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/usg_abdominal.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/usg_abdominal.jpg" alt="usg abdominal">
                            <div class="portfolio-overlay">
                                <h4>Ultra-Som abdominal</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix usg_geral">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/usg_pelvico.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/usg_pelvico.jpg" alt="usg pelvico">
                            <div class="portfolio-overlay">
                                <h4>Ultra-Som pélvico</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix usg_geral">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/usg_rins.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/usg_rins.jpg" alt="usg de rins e de vias urinarias">
                            <div class="portfolio-overlay">
                                <h4>Ultra-Som de rins</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix usg_especializado">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/usg_mamas.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/usg_mamas.jpg" alt="usg de mamas">
                            <div class="portfolio-overlay">
                                <h4>Ultra-Som de mamas</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix usg_especializado">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/usg_tireoide.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/usg_tireoide.jpg" alt="usg de tireoide">
                            <div class="portfolio-overlay">
                                <h4>Ultra-Som de tireóide</h4>
                            </div>
                        </a>
                    </li>
                    <!-- <li class="span4 mix usg_especializado">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/usg_partes_moles.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Ultra-Som de partes moles</h4>
                            </div>
                        </a>
                    </li> -->
                    <li class="span4 mix usg_especializado">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/usg_transvaginal.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/usg_transvaginal.jpg" alt="usg transvaginal">
                            <div class="portfolio-overlay">
                                <h4>Ultra-Som transvaginal</h4>
                            </div>
                        </a>
                    </li>

                    <li class="span4 mix usg_especializado">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/usg_vascular.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/usg_vascular.jpg" alt="usg vascular">
                            <div class="portfolio-overlay">
                                <h4>Ultra-Som vascular</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix usg_especializado">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/usg_transcraniano.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/usg_transcraniano.jpg" alt="usg transcraniano">
                            <div class="portfolio-overlay">
                                <h4>Ultra-Som doppler transcraniano</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix laboratorio">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/lab_geral.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/lab_geral.jpg" alt="laboratorio geral">
                            <div class="portfolio-overlay">
                                <h4>Laboratório geral</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix laboratorio">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/lab_especializado.html" data-destination="portfolio-items" data-insert="before">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/exams/lab_especializado.jpg" alt="laboratorio especializado">
                            <div class="portfolio-overlay">
                                <h4>Laboratório Especializado</h4>
                            </div>
                        </a>
                    </li>
                </ul>
            </article>
            
        </div>
    </div>
    <!-- END PAGE | WORK -->

    
    
    <!-- PAGE | FEATURES  -->
    <div class="pages white paralax" id="page-features">
        <div class="overlay"></div>
        <div class="container">
             <!-- Header -->
            <header>
                <h4 class="line-divider" id="brighten">Depoimentos</h4>                
                <h1>O que dizem sobre nós</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                </div>
            </header>
             <!-- End Header -->
             
             <!-- Article -->
            <article>
                <!-- Features blocks -->
                <div class="row-fluid">
                    <div class="span4 center">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/features/about_generico.png" alt="Treble">
                        <h5>Pedro Manoel</h5>
                        <p class="smallFontBy08 cutBy10">Nunca fui tão bem atendido na vida.</p>
                    </div>
                    <div class="span4 center">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/features/about_generico.png" alt="Treble">
                        <h5>Manoel Pedro</h5>
                        <p class="smallFontBy08 cutBy10">Equipe competente e humana. Obrigado.</p>
                    </div>
                    <div class="span4 center">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/features/about_generico.png" alt="Treble">
                        <h5>John Fulano</h5>
                        <p class="smallFontBy08 cutBy10">Simplesmente fantástico.</p>
                    </div>
                </div>
                <!-- Testemonials -->
                <div class="row-fluid">
                    <div class="span8 offset2">
                        <div class="quote center">
                            <div id="quote-slider" class="slide">
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        <h5>Cliente Feliz</h5>
                                    </div>
                                    <div class="item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        <h5>Cliente Feliz</h5>
                                    </div>
                                    <div class="item">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        <h5>Cliente Feliz</h5>
                                    </div>
                                </div>
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#quote-slider" data-slide-to="0" class="active"></li>
                                    <li data-target="#quote-slider" data-slide-to="1"></li>
                                    <li data-target="#quote-slider" data-slide-to="2"></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <!-- End Article -->
        </div>
    </div>
    <!-- END PAGE | FEATURES -->

    <!-- PAGE | ABOUT -->
    <div class="pages" id="page-about">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Corpo Clínico</h4>
                <h1>Conheça nossa Equipe</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <p>Além da Cardiologia temos uma grande variedade de especialistas. Confira abaixo.</p>
                    </div>
                </div>
                <nav class="submenu">
                    <ul>
                        <li>
                            <a href="#" id="shown" class="plugin-filter2 active" data-filter="cardio">Cardiologia</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter2" data-filter="ecocardio">Ecocardiografia</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter2" data-filter="neuro">Neurocirurgia</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter2" data-filter="vascular">Cir. Vascular</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter2" data-filter="radio">Radiologia</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter2" data-filter="endocrino">Endocrinologia</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter2" data-filter="uro">Urologia</a>
                        </li>
                        <li>
                            <a href="#" class="plugin-filter2" data-filter="pneumo">Prova de Função Pulmonar</a>
                        </li>
                        
                    </ul>
                </nav>
            </header>
            <!-- End Header -->
            
            <!-- Article -->
            <article>
                <!-- List of people and description with their contact details which are visable on hover -->
                <ul class="thumbnails about-items">
                    <li class="span4 center mix2 cardio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Brunello Picarelli<br/>
                            <small>Cardiologista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 pneumo">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Adriano César Guazelli<br/>
                            <small>Pneumologista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 uro">
                        <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            Alain Machado da Silva Dutra<br/>
                            <small>Urologista</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 neuro">
                        <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            Alessandro Blassioli Barbosa<br/>
                            <small>Neurocirurgião</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 vascular">
                        <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            Ana Paula Rodrigues<br/>
                            <small>Cirurgiã Vascular</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 vascular">
                         <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            Bruno Oliveira Cardelino<br/>
                            <small>Cirurgião Vascular</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 vascular">
                         <div class="item">
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <h5>
                            Dumitriu Zinuno Saucedo<br/>
                            <small>Cirurgião Vascular</small>
                        </h5>
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 ecocardio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Fernanda Bezerra dos Santos<br/>
                            <small>Ecocardiografista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 ecocardio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Isaac Moscoso<br/>
                            <small>Ecocardiografista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 radio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            James Sung Te Chen<br/>
                            <small>Radiologista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 cardio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Juan Manuel Sanchez Arana<br/>
                            <small>Cardiologista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 neuro">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Marcelo de Lima Oliveira<br/>
                            <small>Neurocirurgião</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 ecocardio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Mariane Pimentel<br/>
                            <small>Ecocardiografista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 cardio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Maurício da Silva Rocha<br/>
                            <small>Cardiologista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 cardio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Obdulia Esperanza Linares Camacho<br/>
                            <small>Cardiologista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 ecocardio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Roberto Augusto Vasquez Junior<br/>
                            <small>Ecocardiografista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 ecocardio">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Roxana Lissete Rodrigues Olmos<br/>
                            <small>Ecocardiografista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center mix2 endocrino">
                         <div class="item">
                            <!-- Team member image -->
                            <img class="img-circle" src="http://placehold.it/280x280" alt="Treble">
                            
                            <!-- Team memeber details, activated on hover -->
                            <div class="about-overlay img-circle">
                                <div class="social-icons">
                                    <a class="btn btn-info btn-large" href="#">
                                        <i class="icon-white icon-folder-open"></i>&nbsp;Currículo
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Team member name and function -->
                        <h5>
                            Thais Alves de Paula<br/>
                            <small>Endocrinologista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                </ul>
            </article>
            <!-- End Article -->
            
        </div>
    </div>
    <!-- END PAGE | ABOUT -->
    
    <!-- PAGE | TWITTER -->
    <div class="pages white paralax" id="page-twitter">
        <!-- Page overlay -->
        <div class="overlay"></div>
        
        <!-- Block content -->
        <div class="container">
             <div class="row-fluid">
                <div class="span8 offset2">
                    <div class="twitter-devider"></div>
                    <!-- Load Twitter boostrap container -->
                    <div class="twitterfeed center slide" id="twitterfeed-slider"></div>
                    
                    <!-- Sub title / Name of twitter account -->
                    <h5 class="center">@clinica_picarelli</h5>
                </div>
            </div>
        </div>
        
    </div>
    <!-- END PAGE | TWITTER -->
    
    <!-- PAGE | BLOG -->
    <div class="pages" id="page-blog">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Artigos & Notícias</h4>
                <h1>Postagens recentes</h1>
                <div class="row">
                    <div class="span8 offset2">
                      <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/picarelli/">
                        <div class="input-append">
                          <input name="s" class="span5" id="appendedInputButton" type="text" placeholder="Busca">
                          <input class="btn btn-primary sicon-search sicon-white" id="searchsubmit" type="submit" value="Pesquisar">
                        </div>
                      </form>
                    </div>
                </div>
                
                <!-- Sub menu -->
                <nav class="submenu">
                    <ul>
                        <li>
                            <a id="cat-all" class="active sort" data-sort="random">Todos</a>
                        </li>
                        <?php $categories = get_categories(); $i=0;

                            foreach ($categories as $category) { $i++; ?>
                                <li>
                                    <a class="sort" data-sort="random">
                                        <?php echo $category->name;?>
                                    </a>
                                </li> 
                            <?php } ?>
                    </ul>
                </nav>
            </header>
            <!-- End Header -->
            
            <!-- Article -->
            <article>
                
                <!-- Blog articles - Ajax inserted from cat-filter function of functions.php-->
                <ul class="thumbnails plugin-display-elements" id="insert-text">
                    
                </ul>
            </article>
            <!-- End Article -->
    
            <!-- Footer -->
            <footer>
                <!-- More blog posts -->
                <div class="show-more-cube">
                    <a href="<?php echo esc_url( home_url( '/arquivos' ) ); ?>"><span>Todos os<br/>Posts</span></a>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>
    <!-- END PAGE | BLOG -->
    
    <?php get_footer(); ?>
   
    
    
    


