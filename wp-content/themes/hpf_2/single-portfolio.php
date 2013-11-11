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

			<?php get_template_part( 'content', 'portfolio' ); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>