<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package hpf
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main cf" role="main">

		<?php if ( have_posts() ) :

			$args = array(
				'posts_per_page' => 24,
				'post_type'      => 'portfolio'
			);
			$the_query = new WP_Query( $args ); ?>

				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

					<div class="project">
						<a href="<?php the_permalink(); ?>">
							<span class="overlay">
								<h2 class="project-title"><?php the_title(); ?></h2>
							</span>
							<?php the_post_thumbnail('portfolio-thumb-480'); ?>
						</a>
					</div>

				<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>