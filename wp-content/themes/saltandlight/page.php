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
	
	<div class="page-heading page-heading-plain">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>

	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
			?>

			
			<section class="plain-page-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>


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
