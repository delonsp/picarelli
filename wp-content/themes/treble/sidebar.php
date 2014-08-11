<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	
		
<!-- Latest blog posts block -->
<!-- <div class="block">
    <h6>Lates blog posts</h6>
    <ul class="simple-link-list">
    	<?php
    		$the_query = new WP_Query("posts_per_page=15"); 
    		if ( $the_query -> have_posts()) : 
        		while ($the_query -> have_posts()) :
         		$the_query -> the_post();
 		?> 
    	<li>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </li>
    	<?php endwhile; endif;?>
      
    </ul>
</div>
<div class="block">
    <h6>Categorias</h6>
    <nav class="submenu">
        <ul>
            <li>
                <a href=<?php my_cat_link('Cardiologia');?> class="active">Cardiologia</a>
            </li>
            <li>
                <a href=<?php my_cat_link('Cirurgia Vascular');?> >Cirurgia Vascular</a>
            </li>
            <li>
                <a href=<?php my_cat_link('Urologia');?> >Urologia</a>
            </li>
            <li>
                <a href=<?php my_cat_link('Saúde Preventiva');?> >Saúde Preventiva</a>
            </li>
            <li>
                <a href=<?php my_cat_link('Sem categoria');?> >Sem categoria</a>
            </li>
        </ul>
    </nav>
</div> -->
	    
	
<?php endif; ?>