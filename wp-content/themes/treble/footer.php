<!-- Footer -->
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
                        <div id="envioSucesso"></div>
                        <form method="post" id="envioForm">
                            <input type="text" id="nomeRemetente" class="span12" placeholder="Nome" required="required">
                            <input type="text" id="telefone" class="span12" placeholder="telefone" >
                            <input type="email" id="email" class="span12" placeholder="Email" required="required">
                            <textarea rows="10" id="mensagem" class="span12" required="required"></textarea>
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
<?php wp_footer(); //Crucial footer hook! ?>

<!-- End Footer -->