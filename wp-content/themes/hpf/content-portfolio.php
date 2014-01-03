<?php
/**
 * @package hpf
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- PORTFOLIO_TEST -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'hpf' ),
				'after'  => '</div>',
			) );
		?>

		<?php print get_post_meta( get_the_ID(), 'hpf_test_field', true ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'hpf' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->

</article><!-- #post-## -->
