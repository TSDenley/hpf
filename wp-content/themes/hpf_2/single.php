<?php
/**
 * The Template for displaying all single posts.
 *
 * @package hpf
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main clear" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				if ( is_singular( 'portfolio' ) ) {
					get_template_part( 'content', 'portfolio' );
				} else {
					get_template_part( 'content', 'single' );
					hpf_content_nav( 'nav-below' );
				}
			?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>