<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Treble
 * @since Twenty Fourteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>



	<?php if ( have_comments() ) : ?>
		<div class="comments">
			<a href="#"><?php echo get_comments_number();?> comentários</a>
      	</div>
      	<div class="comments-details">
	      <div class="media">
	          <ol class="comment-list">
					<?php
						wp_list_comments( array(
							'style'      => 'ol',
							'short_ping' => true,
							'avatar_size'=> 34,
						) );
					?>
				</ol><!-- .comment-list -->
	      </div>
      	</div>
	
	<?php endif; // have_comments() ?>

	<div class="write-comment" id="write-replay">

	<?php 
		$comment_args = array( 

								'title_reply'=>'<h6>Deixe um comentário</h6>'.
								'<div class="row-fluid"><div class="span8">',
								'comment_notes_before' => '<h7 class="comment-notes">' . __( 'Seu email não será publicado. Todos os campos são obrigatórios.' ) . '</h7>',
									
								'fields' => array(

											'author' => '<p class="comment-form-author">' .

											        	'<input placeholder="Nome" class="span12" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',   

										    'email'  => '<p class="comment-form-email">' .

										                '<input placeholder="Email" class="span12" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'.'</p>',

										    'url'    => ''
									    
								   			 ),

							    'comment_field' => '<p>' .

						            '<label for="comment">' . __( 'Comente algo:' ) . '</label>' .

						            '<textarea class="span12" id="comment" name="comment" cols="100" rows="8" aria-required="true"></textarea>' .

						            '</p>',

							    'comment_notes_after' => '</div></div>',

							); //end of parent array
		// hacking para permitir a aplicação de classe do bootstrap no botão submit do Wordpress.
		ob_start(); 
		comment_form($comment_args);
		$form = ob_get_clean(); 
		echo str_replace('id="submit"','class="btn btn-primary"', $form);
		ob_end_flush();
	 ?>
	 </div>

 <!-- End Blog comments -->
