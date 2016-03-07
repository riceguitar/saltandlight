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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
			?>

			<section class="page-title">
				<div class="row">
					<div class="col-sm-12">
						<h1><?php the_field('page_title'); ?></h1>
					</div>
				</div>
			</section>

			<section class="page-process">
				<div class="content-area">
					<h2><?php the_field('process_title'); ?></h2>
					<div class="process-graphic">
						<img src="<?php the_field('process_graphic'); ?>" alt="" />
					</div>
				</div>
			</section>

			<section class="steps">
				<div class="content-area">
				<?php 
				if( have_rows('page_steps') ):
				    while ( have_rows('page_steps') ) : the_row();
				        if( get_row_layout() == 'page_block' ): ?>


				        	<!-- Icon -->
				        	<p>
				        	<?php the_sub_field('step_icon'); ?><br/>
				        	<?php the_sub_field('step_label'); ?>
				        	</p>

				        	<!-- Step Info -->
				        	<div class="col_6">
				        	<?php the_sub_field('step_label'); ?>
				        	<?php the_sub_field('step_name'); ?>
				        	<h3><?php the_sub_field('step_headline'); ?></h3>
				        	<div><?php the_sub_field('step_desc'); ?></div>
				        	</div>

				        <?php endif;
				    endwhile;
				endif;
				?>
				</div>
			</section>

			<section class="stories">
				<div class="content-area">
				<div class="row">
				<?php 
				if (have_rows('videos')) :
					while (have_rows('videos')) : the_row(); ?>
				<div class="col_6">
					<?php the_sub_field('video_url'); ?>
				</div>

				<?php endwhile;
				endif;
				?>
				</div>
				</div>
			</section>



			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
