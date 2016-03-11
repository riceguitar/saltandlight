<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package saltandlight
 */

get_header(); ?>
	
	<?php
		$page_heading_bg = 'url('. get_field('page_background_image') .')';
		if (get_field('page_min_height')) {
			$page_heading_height = get_field('page_min_height').'px';
		} else {
			$page_heading_height = '100vh';
		}
		$page_video_url = get_field('page_video_url');
	
		$page_style .= 'background-image: ' . $page_heading_bg . ';';
		$page_style .= 'min-height: ' . $page_heading_height . ';';

		if (!$page_style) {  $use_style = 'page-heading-plain'; }

	?>
	
	<div class="page-heading <?php echo $use_style; ?>" style="<?php echo $page_style; ?>">

		<div class="content-area page-player">
			<?php if ($page_video_url) : ?>
				<a href="<?php echo $page_video_url; ?>" class="play-wrap" data-lity><span class="play-button"></span></a>
			<?php endif; ?>
		</div>

	</div>

	<?php if ($page_heading_bg) { ?>
	<style>.page-template-default .site-header {background: none; position: absolute;}</style>
	<?php } ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
			?>

							<?php the_content(); ?>

			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


<script>
jQuery(function($) {
	$('.trigger-btn').click(function() {
		$('.bang_container').toggleClass('open');
		return false;
	});
});
</script>

<?php
get_footer();
