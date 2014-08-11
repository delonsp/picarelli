<?php get_header(); ?>

<!-- PAGE | BLOG -->
<div class="pages" id="page-blog-list">
  <div class="container">
    <!-- Header -->
    <header>
      <h4 class="line-divider">Artigos & Notícias</h4>
      <h1>Postagens</h1>
      <div class="row">
        <div class="span8 offset2">
            <div class="input-append">
              <input class="span5" id="appendedInputButton" type="text" placeholder="Search Blog">
              <button class="btn btn-primary sicon-search sicon-white" type="button"><i>Search</i></button>
            </div>
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
            
            <?php endwhile;?>
              
          </article>
          <?php// twentyfourteen_post_nav();?>
          
      </div>
      <div class="span4 blog-list-right">
        <?php get_sidebar();?>
      </div>  
    </div>
  </div>
</div>
<?php get_footer(); ?>

  
