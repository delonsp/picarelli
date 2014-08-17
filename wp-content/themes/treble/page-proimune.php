<?php
/*
 Template Name: proimune
 */
 ?>

 <?php get_header('fixednav');?>

<!-- PAGE | BLOG -->
<div class="pages" id="page-blog-list">
  <div class="container">
    <!-- Header -->
    <header>
            
      <h1>Parceria Pró-Imune</h1>
     
    </header>
    <!-- End Header -->


    <div class="row-fluid">
      <div class="span8 blog-details proimune">
          <!-- Article -->
          
            
                  <article>

                    <!-- Blog image -->
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/proimune/proimune.jpg" alt=" logos convenios">
					
                    <!-- Blog title -->
                    <h5>
                            Blog Post Title<br/>
                            <small>Posted By <a href="#">Gridelicious</a>, April 10, 2013, in <a href="#">Photography</a></small>
                        </h5>

                    
                    
                    <!-- Blog read more -->
                    <!-- <div class="read-more">
                      <a href="<?php the_permalink(); ?>">Leia Mais...</a>
                    </div> -->

                  </article>
            
          
          
      </div>
      <div class="span4 blog-list-right">
        <?php get_sidebar('convenios');?>
      </div>  
    </div>
  </div>
</div>

<?php get_footer(); ?>  