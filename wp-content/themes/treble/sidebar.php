<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

?>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	
		
<!-- Latest blog posts block -->
 <div class="block">
    <h6>Últimas publicações</h6>
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
        	<?php $categories = get_categories(); 
        		foreach ($categories as $category) { ?>
        			<li>
		                <a href="<?php my_cat_link($category->term_id);?>"
		                 class="active">
		                 	<?php echo $category->name;?>
		             	</a>
		            </li> 
        		<?php } ?>
        </ul>
    </nav>
</div> 
	    
	
<?php //endif; ?>