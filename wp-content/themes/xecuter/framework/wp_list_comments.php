<?php
/********************************************************************
Custom Commtents
*********************************************************************/ 
function xecuter_custom_comments( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment ;
	?>
	<li id="comment-item comment-<?php comment_ID(); ?>">
		<div  <?php comment_class('comment-wrap'); ?> >
			<div class="comment-avatar"><div class="avater"><?php echo get_avatar( $comment, 70 ); ?></div></div>
			<div class="author-comment">
            			<div class="author-link">

				<?php printf(  '%s ', sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) );  
			 
				if (  $depth =='1'){}else {?>
 		 <div class="author-link-reply"><?php $pcom = get_comment($comment->comment_parent);?><a href="<?php echo get_comment_link($comment->comment_parent)?>">: @<?php echo esc_html($pcom->comment_author); ?></a></div><?php }?>
 
 	</div>
				<div class="comment-meta commentmetadata"><a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">	<?php printf( '%1$s '.esc_html(xecuter_t('at')).' %2$s', get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link(  '('.xecuter_t('edit').')', ' ' ); ?></div><!-- .comment-meta .commentmetadata -->
			</div>
			<div class="clear"></div>
			<div class="comment-content rd-post-content">
				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php echo esc_html( xecuter_t('yourcomment')); ?></em>
					<br />
				<?php endif; ?>
					
				<?php comment_text(); ?>
			</div>
			<div class="reply"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></div><!-- .reply -->
		</div><!-- #comment-##  -->

	<?php
}

function xecuter_custom_pings($comment, $args, $depth) {
    $GLOBALS['comment'] = @$comment; ?>
	<li class="comment pingback">
		<p><?php echo esc_html( xecuter_t('xecuter_t_yourcomment')); ?><?php comment_author_link(); ?><?php edit_comment_link(   '('.xecuter_t('edit').')', ' ' ); ?></p>
<?php	
}
 
?>