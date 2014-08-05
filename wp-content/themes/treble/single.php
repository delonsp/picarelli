<?php get_header(); ?>

<div id="blog_wrapper" class="blog_post">
        <div class="container">
            <div class="row">

              <div class="span10">
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h1 class="header"><?php the_title(); ?></h1>
                    
                    <div class="post_pic"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						  the_post_thumbnail('full');
						}  ?>
                     </div>
                    
                    <div class="post_content" style="font-size:18px;">
                    
                        <?php the_content(); ?>
                        
                        <div class="author">Alain Dutra</div>
                        <div class="date"><?php the_time('j \d\e F \d\e Y'); ?></div>
                
                   	</div>
                    
                    <div class="comments">
                        <h4>Comentários</h4>
                        <?php comments_template(); ?>
                    </div>
            
                <?php endwhile; else: ?>
                    <p><?php _e('Desculpe, esta página não existe.'); ?></p>
                <?php endif; ?>
            
              </div>
              <div class="span2">
                <?php get_sidebar(); ?>  	
              </div>
          </div>
	</div>
</div>

<?php get_footer(); ?>