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
                        
                        <div class="line-divider" id="welcome-messages">
                            <ul class="slides">
                                <li>
                                    <h1>Clínica Picarelli</h1>
                                </li>
                                <li>
                                    <h1>Tradição & Qualidade</h1>
                                </li>
                                <li>
                                    <h1>Foco no Paciente</h1>
                                </li>
                            </ul>
                        </div>
                        <p class="dark-grey">Prevenção, Diagnóstico e Tratamento</p>
                        <div class="social-icons sicon-white bordered">
                            <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                            <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                            <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                            <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                            <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
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
                    
                <!-- Sub menu -->
                <!-- 
                Params: 
                    plugin-filter: Defines links for filtering.
                -->
                <nav class="submenu">
                    <ul>
                        <!-- <li>
                            <a href="#" class="plugin-filter" data-filter="ultra_som_geral">Ultra-Som Geral</a>
                        </li> -->
                        <!-- <li>
                            <a href="#" class="plugin-filter" data-filter="laboratorio">Laboratório</a>
                        </li> -->
                        <!-- <li>
                            <a href="#" class="plugin-filter" data-filter="ultra_som_especializado">Ultra-Som Especializado</a>
                        </li> -->
                        <!-- <li>
                            <a href="#" class="plugin-filter" data-filter="all">Todos</a>
                        </li> -->
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
            <!-- End Article -->
            <!-- Footer -->
            <!-- <footer>
                <div class="show-more-cube">
                     <a href="#<?php bloginfo('template_url'); ?>/pages/exams/readmore.html" data-destination="plugin-filter-elements" data-insert="appendTo" data-action="remove">
                        <span>Mostre<br/>Mais</span>
                    </a>
                </div>
            </footer> -->
            <!-- End footer -->
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
                            João José<br/>
                            <small>Clínico Geral</small>
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
                            João José<br/>
                            <small>Clínico Geral</small>
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
                            João José<br/>
                            <small>Clínico Geral</small>
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
                            João José<br/>
                            <small>Clínico Geral</small>
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
                            João José<br/>
                            <small>Clínico Geral</small>
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
                            João José<br/>
                            <small>Clínico Geral</small>
                        </h5>
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
                <h4 class="line-divider">Blog</h4>
                <h1>Postagens recentes</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <div class="input-append">
                          <input class="span5" id="appendedInputButton" type="text" placeholder="Busca no Blog">
                          <button class="btn btn-primary sicon-search sicon-white" type="button"><i>Busca</i></button>
                        </div>
                    </div>
                </div>
                
                <!-- Sub menu -->
                <nav class="submenu">
                    <ul>
                        <li>
                            <a>Tudo</a>
                        </li>
                        <li>
                            <a>Cardiologia</a>
                        </li>
                        <li>
                            <a>Cirurgia Vascular</a>
                        </li>
                        <li>
                            <a>Urologia</a>
                        </li>
                        <li>
                            <a>Saúde Preventiva</a>
                        </li>
                        <li>
                            <a>Outros</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <!-- End Header -->
            
            <!-- Article -->
            <article>
                
                <!-- Blog articles -->
                <ul class="thumbnails">
                    <li id="insert-text"></li>
                    <?php if ( have_posts() ) : 
                        $the_query = new WP_Query('category_name=Cardiologia&posts_per_page=6');
                        while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            <!-- Blog post -->
                                <li class="span4">
                                
                                    <!-- Blog image -->
                                    <a href="<?php bloginfo('template_url');?>/pages/blog/blog_1.html">
                                        <?php the_post_thumbnail('front-page-size');?>
                                    </a>
                                    
                                    <!-- Blog title -->
                                    <h5>
                                        <?php the_title(); ?><br/>
                                        <small><?php the_time('j \d\e F \d\e Y'); ?></small>
                                    </h5>
                                    
                                    <!-- Blog post description -->
                                    <p class="smallFontBy08"><?php echo substr(strip_tags($post->post_content), 0, 250);?></p>
                                    
                                    <!-- Blog read more -->
                                    <div class="read-more">
                                        <a href="<?php bloginfo('template_url');?>/pages/blog/blog_1.html">Leia Mais...</a>
                                    </div>
                                </li>
                        <?php endwhile;?>
                    <?php else: ?>
                            <li class="span4"><?php _e('Desculpe, não há posts.'); ?></li>
                    <?php endif; ?>
                            
                </ul>
            </article>
            <!-- End Article -->
    
            <!-- Footer -->
            <footer>
                <!-- More blog posts -->
                <div class="show-more-cube">
                    <a href="<?php bloginfo('template_url');?>/pages/blog/blog.html"><span>Todos os<br/>Posts</span></a>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>
    <!-- END PAGE | BLOG -->
    
    <!-- PAGE | CONTACT -->
    <div class="pages black-bg white" id="page-contact">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Contato</h4>
                <h1>Diga Olá!</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            Fique a vontade para falar com a nossa equipe.
                        </p>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            
            <!-- Start Article -->
            <article>
                <div class="row-fluid">
                    <!-- Contact form -->
                    <div class="span6">
                        <h5>Mande uma mensagem</h5>
                        <form>
                            <input type="text" class="span12" placeholder="Title" required="required">
                            <input type="email" class="span12" placeholder="Email" required="required">
                            <textarea rows="10" class="span12" required="required"></textarea>
                            <button type="submit" class="btn btn-primary">Envie</button>
                        </form>
                    </div>
                    <!-- End Contact form -->
                    <!-- Contact information -->
                    <div class="span5 offset1">
                        <h5>Venha nos visitar</h5>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-phone"><i>Phone</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                (11) 4438-6318 | (11) 4435-4801
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-place"><i>Location</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                Av Padre Manuel da Nóbrega, 170 - Jardim - Santo André, SP
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-mail"><i>email</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                info@picarellidiagnosticos.com.br
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-clock"><i>Time zone</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                BRT / GMT -2
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <h5>Redes Sociais</h5>
                        <div class="social-icons sicon-white bordered">
                            <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                            <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                            <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                            <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                            <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                        </div>
                    </div>
                    <!-- End Contact information -->
                </div>
            </article>
            <!-- End Article -->
            
        </div>
        
        <!-- Background map image -->
        <div id="map-image">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/contact/map_bck.jpg" alt="Treble">
        </div>
    </div>
    <!-- END PAGE | CONTACT -->
   
    
    
    <!-- LOAD JS FILES -->
    
    <!-- Jquery -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    
    <!-- Less and Twitter Bootstrap -->
    <!-- <script src="<?php bloginfo('template_url'); ?>/assets/js/less-1.3.3.min.js" type="text/javascript"></script> -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
    
    <!-- Plugins -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.mixitup.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.tweet.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.bxslider.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.responsivevideos.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.centralized.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.hashloader.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.fixedonlater.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.nav.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url'); ?>/assets/js/plugins/jquery.scrollTo.js" type="text/javascript"></script>
        
    
    <!-- Treble scripts and plugin initialisation -->
    <script src="<?php bloginfo('template_url'); ?>/assets/js/application.js" type="text/javascript"></script>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php bloginfo('template_url'); ?>/assets/js/html5shiv.js"></script>
    <![endif]-->
    
    <script>
        
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44061294-1', 'gridelicious.net');
        ga('send', 'pageview');
    </script>
</body>
</html>


