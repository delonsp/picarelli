<?php
/*
 Template Name: dayclinic
 */
 ?>

 <?php get_header('fixednav');?>

<!-- PAGE | BLOG -->
<div class="pages" id="page-blog-list">
  <div class="container">
    <!-- Header -->
    <header>
      
      <h1>Day Clinic - Checkup Geral</h1>
     
    </header>
    <!-- End Header -->


    <div class="row-fluid">
      <div class="span8 blog-details convenios">
          <!-- Article -->
          
            
                  <article>

                    <!-- Blog image -->
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/pages/dayclinic/dayclinic.jpg" alt="day clinic">
					
                    <!-- Blog title -->
                    <h5 id="destaque">Nós não temos o seu convênio ?</h5>
                    <h5>
                      Verifique com a recepção se você tem direito a reembolso e como funciona. Você pode fazer todos os exames exatamente pelo valor coberto pelo reembolso e sem nenhum custo adicional.
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