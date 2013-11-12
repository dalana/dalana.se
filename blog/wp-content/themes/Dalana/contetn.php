<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<div class="hitlar">
		<div class="nazi box_rotate">
			<?php echo the_category(' '); ?>
		</div>
		<div class="nazi entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
	<br><?php echo get_the_author(); ?><br><span class="entry-date"><?php echo get_the_date(); ?></span>	
</div>
                <div class="nazi entry-summary">
			<?php the_excerpt(); ?>
		</div>
                <div class="float_r comments-link">
			<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
		</div>
		</div>
	</article><!-- #post -->

