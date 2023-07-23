<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yanlieb
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<?php
		the_time('Y');
		echo ' - ';
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('%2$s', 'yanlieb'), 'yanlieb', '<a href="http://yanlieb.com">yanlieb.com</a>');
		?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>