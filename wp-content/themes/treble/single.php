<?php get_header(); ?>

<!-- PAGE | BLOG -->
<div class="pages" id="page-blog-list">
  <div class="container">
    <!-- Header -->
    <header>
      <h4 class="line-divider">Blog</h4>
      <h1>Blog Posts</h1>
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
            
            <?php endwhile;?>
              
          </article>
          <!-- End Article -->
          
          <!-- Blog comments -->
          <div class="comments">
              <a href="#">4 comments</a>
          </div>
          <div class="comments-details">
              <div class="media">
                  <div class="pull-left">
                      <img src="http://placehold.it/60x60" alt="Treble">
                  </div> 
                  <div class="media-body">
                      <div class="comments-post-info">
                          <small><a href="#">Team member</a>, April 10, 2013, <a href="#write-replay">Replay</a></small>
                      </div>
                      <p>
                          Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                      </p>
                  </div>
              </div>
              <div class="media">
                  <div class="pull-left">
                      <img src="http://placehold.it/60x60" alt="Treble">
                  </div> 
                  <div class="media-body">
                      <div class="comments-post-info">
                          <small><a href="#">Team member</a>, April 10, 2013, <a href="#write-replay">Replay</a></small>
                      </div>
                      <p>
                          Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                      </p>
                  </div>
              </div>
              <div class="media">
                  <div class="pull-left">
                      <img src="http://placehold.it/60x60" alt="Treble">
                  </div> 
                  <div class="media-body">
                      <div class="comments-post-info">
                          <small><a href="#">Team member</a>, April 10, 2013, <a href="#write-replay">Replay</a></small>
                      </div>
                      <p>
                          Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
                      </p>
                      
                      <div class="media">
                          <div class="pull-left">
                              <img src="http://placehold.it/60x60" alt="Treble">
                          </div> 
                          <div class="media-body">
                              <div class="comments-post-info">
                                  <small><a href="#">Team member</a>, April 10, 2013, <a href="#write-replay">Replay</a></small>
                              </div>
                              Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Blog comments -->
          
          <!-- Blog Write comment -->
          <div class="write-comment" id="write-replay">
              <h6>Drop a comment</h6>
              <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
              </p>
              <div class="row-fluid">
                  <div class="span8">
                      <form>
                          <input type="text" class="span12" placeholder="Title">
                          <input type="text" class="span12" placeholder="Email">
                          <textarea rows="5" class="span12"></textarea>
                          <button type="submit" class="btn btn-primary">Post a comment</button>
                      </form>
                  </div>
              </div>
          </div>
          <!-- End Blog Write comment -->

      </div>
      <div class="span4 blog-list-right">
        <?php get_sidebar();?>
      </div>  
    </div>
  </div>
</div>
<?php get_footer(); ?>

  
