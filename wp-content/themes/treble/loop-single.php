<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
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
          <article>
              <?php while ( have_posts() ) : the_post(); ?>
              <!-- Blog image -->
              <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
              the_post_thumbnail('full');
              }  ?>
              
              <!-- Blog title -->
              <h5><?php the_title(); ?><br/>
                  <small>Postado por <?php the_author();?> em <?php the_time('j \d\e F \d\e Y');?></small>
              </h5>
              
              <?php the_content();?>

              <?php if ( comments_open() || get_comments_number() ) {
                  comments_template();
              }?>
            
          </article>
              
          <?php endwhile;?>
          <?php wpbeginner_numeric_posts_nav(); ?>
          
      </div>
      <div class="span4 blog-list-right">
        <?php get_sidebar();?>
      </div>  
    </div>
  </div>
</div>
