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
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                        </p>
                    </div>
                </div>
                    
                
                <nav class="submenu">
                    <ul>
                        
                        <li>
                            <a href="#<?php bloginfo('template_url'); ?>/pages/exams/cardiologia.html"
                             class="submenu-item active" data-destination="plugin-filter-elements" data-insert="html" >
                             Cardiologia
                            </a>
                        </li>

                        <li>
                            <a href="#<?php bloginfo('template_url'); ?>/pages/exams/usg_geral.html" 
                             class="submenu-item" data-destination="plugin-filter-elements" data-insert="html" >
                             Ultra-Som Geral
                            </a>
                        </li>
                        <li>
                            <a href="#<?php bloginfo('template_url'); ?>/pages/exams/laboratorio.html" 
                             class="submenu-item" data-destination="plugin-filter-elements" data-insert="html" >
                             Laboratório
                            </a>
                        </li>

                        
                        <li>
                            <a href="#<?php bloginfo('template_url'); ?>/pages/exams/usg_especializado.html" 
                             class="submenu-item" data-destination="plugin-filter-elements" data-insert="html" >
                             Ultra-Som Especializado
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
                            <img src="http://placehold.it/390x300" alt="Treble">
                            
                            <!-- Portfolio name, activated on hover -->
                            <div class="portfolio-overlay">
                                <h4>Teste Ergométrico</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/ecocardiograma.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Ecocardiograma com doppler</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/MAPA.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>MAPA e MRPA</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/holter.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Holter</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/tilt_test.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>TILT TEST</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#<?php bloginfo('template_url'); ?>/pages/exams/ecostress.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Ecocardiograma com EcoStress</h4>
                            </div>
                        </a>
                    </li>
                    <li class="span4 mix cardiologia">
                        <a href="#http://localhost/picarelli/wp-content/themes/treble/pages/exams/ecostress.html" data-destination="portfolio-items" data-insert="before">
                            <img src="http://placehold.it/390x300" alt="Treble">
                            <div class="portfolio-overlay">
                                <h4>Eletrocardiografia de alta resolução</h4>
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
                <h4 class="line-divider">Depoimentos</h4>                
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
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            
            <!-- Article -->
            <article>
                <!-- List of people and description with their contact details which are visable on hover -->
                <ul class="thumbnails about-items">
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                            Mariane Pimentei<br/>
                            <small>Pneumologista</small>
                        </h5>
                        
                        <!-- Team member short info -->
                        <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                    </li>
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
                    <li class="span4 center">
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
   
    
    
    


