<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Treble
 * @since Twenty Ten 1.0
 */

?>



<!-- PAGE | BLOG -->
<div class="pages" id="page-blog-list">
  <div class="container">
    <!-- Header -->
    <header>
      <h4 class="line-divider">Artigos & Notícias</h4>
      <h1>Postagens</h1>
      <div class="row">
        <div class="span8 offset2">
          <form role="search" method="get" id="searchform" class="searchform" action="http://localhost/picarelli/">
            <div class="input-append">
              <input name="s" class="span5" id="appendedInputButton" type="text" placeholder="Busca">
              <input class="btn btn-primary sicon-search sicon-white" id="searchsubmit" type="submit" value="Pesquisar">
            </div>
          </form>
        </div>
      </div>
    </header>
    <!-- End Header -->


    <div class="row-fluid">
      <div class="span8 blog-details">
          <!-- Article -->
          
            <?php $i=0; while ( have_posts() ) : the_post(); $i++; ?>
            <article>
            	<h3>Artigo <?php echo $i;?></h3>
              <!-- Blog image -->
              <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail('full');
              }  ?>
              
              <!-- Blog title -->
              <h5><?php the_title(); ?><br/>
                  <small>Postado por <?php the_author();?> em <?php the_time('j \d\e F \d\e Y');?></small>
              </h5>
              
              <?php the_content();?>

              <a class="btn btn-warning"
              href="<?php the_permalink(); ?>#write-replay" title="<?php the_title_attribute(); ?>">Clique aqui para comentar</a>
        	</article>
        	<hr>
        	<?php endwhile;?>

          <?php wpbeginner_numeric_posts_nav(); ?>
          
      </div>
      <div class="span4 blog-list-right">
        <?php get_sidebar();?>
      </div>  
    </div>
  </div>
</div>
<?php get_footer(); ?>

  
