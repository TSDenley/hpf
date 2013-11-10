<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package hpf
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer container" role="contentinfo">
	<div class="site-info">
	<?php if ( ! dynamic_sidebar( 'footer_widget_area' ) ) : ?>
		<p>All work &copy; H T Denley 2013</p>
		<p>Please do not reproduce without the expressed written consent of Harry T Denley.</p>
	<?php endif; ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>