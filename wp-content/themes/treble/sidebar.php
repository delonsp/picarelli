<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Treble
 * @since Twenty Ten 1.0
 */

?>

		<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	
		
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
<div class="block">
    <h6>Arquivos</h6>
    <ul class="widget-archive">
        <?php
        global $wpdb;
        $limit = 0;
        $year_prev = null;
        $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month , YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");
        foreach($months as $month) :
            $year_current = $month->year;
            if ($year_current != $year_prev){
                if ($year_prev != null){?>
                
                <?php } ?>
            
            <li class="archive-year"><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/"><?php echo $month->year; ?></a></li>
            
            <?php } ?>
            <li><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?></span></a></li>
        <?php $year_prev = $year_current;

        if(++$limit >= 18) { break; }

        endforeach; ?>
      
    </ul>
</div>	    
	
<?php //endif; ?>