<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yanlieb
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
	</header><!-- .entry-header -->

	<?php yanlieb_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'yanlieb'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php
	if (get_field('projects')) :
		$projects = get_field('projects');

		foreach ($projects as $project) :
			$featured_img_url = get_the_post_thumbnail_url($project->ID, 'medium');
	?>
			<div id="portfolio_projects">
				<div class="project">
					<p class="project-title h3">
						<?php echo $project->post_title; ?>
					</p>
					<figure>
						<img src="<?php echo $featured_img_url; ?>" alt="">
					</figure>
					<div class="project-description">
						<?php echo $project->post_content; ?>
					</div>
				</div>
			</div>

	<?php endforeach;
	endif;
	?>



	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__('Edit <span class="screen-reader-text">%s</span>', 'yanlieb'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post(get_the_title())
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->