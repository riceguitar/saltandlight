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
 * Template Name: Home Page
 */

get_header(); 
?>

<section class="home-box">

	<div class="container">
		<div class="john-video-bg">
			<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_o6l9niufqw seo=false videoFoam=true autoPlay=true" style="height:100%;width:100%">&nbsp;</div></div></div>
		</div>
		<div class="vertical-center">
			<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="john-quote text-center">
						<img src="<?php echo get_template_directory_uri() . '/img/john-maxwell.png'; ?>" class="john-float" />
						<h1><?php the_field('quote_text'); ?></h1>
						<span class="home-credit"><?php the_field('quote_author'); ?></span>
					</div>
					<div class="home-video">
						<a href="<?php the_field('video_code'); ?>" class="play-wrap" data-lity>
							<span class="play-button"></span>
							<span class="play-text"><?php the_field('video_text'); ?></span>
						</a>
					</div>
					<div class="row home-ctas">
						<div class="col-sm-6 text-right">
							<a href="<?php the_field('button_left_link'); ?>" class="max-button text-center"><?php the_field('button_left'); ?></a>
						</div>
						<div class="col-sm-6 text-left">
							<a href="<?php the_field('button_right_link'); ?>" class="max-button text-center"><?php the_field('button_right'); ?></a>
						</div>
					</div>

				</div>
			</div>
			</div>
		</div><!-- vertical center -->
		
	</div>

</section>


<?php
get_footer();
