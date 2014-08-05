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
                            <a href="<?php bloginfo('template_url');?>/pages/blog/blog.html">Tudo</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('template_url');?>/pages/blog/blog.html">Cardiologia</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('template_url');?>/pages/blog/blog.html">Cirurgia vascular</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('template_url');?>/pages/blog/blog.html">Urologia</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('template_url');?>/pages/blog/blog.html">Saúde Preventiva</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('template_url');?>/pages/blog/blog.html">Outros</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <!-- End Header -->
            
            <!-- Article -->
            <article>
                <!-- Blog articles -->
                <ul class="thumbnails">
                    <?php if ( have_posts() ) : 
                        $args = array( 'numberposts' => '6' );
                        $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){ ?>
                                <!-- Blog post -->
                                <li class="span4">
                                
                                    <!-- Blog image -->
                                    <a href="<?php bloginfo('template_url');?>/pages/blog/blog_1.html">
                                        <img src="http://placehold.it/390x300" alt="Treble">
                                    </a>
                                    
                                    <!-- Blog title -->
                                    <h5>
                                        Título da postagem<br/>
                                        <small>10 de Julho de 2014</small>
                                    </h5>
                                    
                                    <!-- Blog post description -->
                                    <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                                    
                                    <!-- Blog read more -->
                                    <div class="read-more">
                                        <a href="<?php bloginfo('template_url');?>/pages/blog/blog_1.html">Leia Mais...</a>
                                    </div>
                                </li>
                                <li class="span4">
                                    <a href="<?php bloginfo('template_url');?>/pages/blog/blog_2.html">
                                        <img src="http://placehold.it/390x300" alt="Treble">
                                    </a>
                                    <h5>
                                        Título da postagem<br/>
                                        <small>10 de Julho de 2014</small>
                                    </h5>
                                    <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                                    <div class="read-more">
                                        <a href="<?php bloginfo('template_url');?>/pages/blog/blog_2.html">Leia Mais...</a>
                                    </div>
                                </li>
                                <li class="span4">
                                    <a href="<?php bloginfo('template_url');?>/pages/blog/blog_3.html">
                                        <img src="http://placehold.it/390x300" alt="Treble">
                                    </a>
                                    <h5>
                                        Título da postagem<br/>
                                        <small>10 de Julho de 2014</small>
                                    </h5>
                                    <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                                    <div class="read-more">
                                        <a href="<?php bloginfo('template_url');?>/pages/blog/blog_3.html">Leia Mais...</a>
                                    </div>
                                </li>
                                <li class="span4">
                                    <a href="<?php bloginfo('template_url');?>/pages/blog/blog_4.html">
                                        <img src="http://placehold.it/390x300" alt="Treble">
                                    </a>
                                    <h5>
                                        Título da postagem<br/>
                                        <small>10 de Julho de 2014</small>
                                    </h5>
                                    <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                                    <div class="read-more">
                                        <a href="<?php bloginfo('template_url');?>/pages/blog/blog_4.html">Leia Mais...</a>
                                    </div>
                                </li>
                                <li class="span4">
                                    <a href="<?php bloginfo('template_url');?>/pages/blog/blog_5.html">
                                        <img src="http://placehold.it/390x300" alt="Treble">
                                    </a>
                                    <h5>
                                        Título da postagem<br/>
                                        <small>10 de Julho de 2014</small>
                                    </h5>
                                    <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                                    <div class="read-more">
                                        <a href="<?php bloginfo('template_url');?>/pages/blog/blog_5.html">Leia Mais...</a>
                                    </div>
                                </li>
                                <li class="span4">
                                    <a href="<?php bloginfo('template_url');?>/pages/blog/blog_6.html">
                                        <img src="http://placehold.it/390x300" alt="Treble">
                                    </a>
                                    <h5>
                                        Título da postagem<br/>
                                        <small>10 de Julho de 2014</small>
                                    </h5>
                                    <p class="smallFontBy08">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua,consectetur adipisicing elit.</p>
                                    <div class="read-more">
                                        <a href="<?php bloginfo('template_url');?>/pages/blog/blog_6.html">Leia Mais...</a>
                                    </div>
                                </li>
                            <?php } // end of foreach loop ?>
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