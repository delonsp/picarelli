<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>



		<div id="container">
			<div id="content" role="main">

				<h3>Sua busca encontrou os artigos abaixos:</h3>

<?php if ( have_posts() ) : ?>
				
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
				<?php get_sidebar(); ?>
<?php else : ?>
				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nada achado', 'twentyten' ); ?></h2>
					<div class="entry-content">
						<p><?php _e( 'Desculpe, mas nada foi achado com o seu termo de busca. Por favor tente novamente com outras palavras chaves.', 'twentyten' ); ?></p>
						<?php custom_search_form();?>
					</div><!-- .entry-content -->
				</div><!-- #post-0 -->
<?php endif; ?>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>
