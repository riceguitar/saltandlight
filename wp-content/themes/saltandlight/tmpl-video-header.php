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
 * Template Name: Video Header
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
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							<h1><?php the_field('page_title'); ?></h1>
						</div>
					</div>
				</div>
			</section>

			<section class="page-process">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 text-center">
						<h2 class="process-title"><?php the_field('process_title'); ?></h2>
						<div class="process-graphic">
							<?php $process_graphic = get_field('process_graphic'); ?>
							<img src="<?php echo $process_graphic['url']; ?>" alt="" />
						</div>
						</div>
					</div>
				</div>
			</section>

			<section class="steps">
				<div class="container">
					<div class="row">
						<div class="col-md-12 steps-progress-container hidden-xs hidden-sm">

						

						<!-- steps nav -->
						<?php if( have_rows('page_steps') ):
							echo '
							<div class="stepprogress">
						 	<div class="wrapper">';
						 	$i = 1;
						    while ( have_rows('page_steps') ) : the_row();
						        if( get_row_layout() == 'page_block' ): ?>
						        	<div class="bar">
								      <a href="#<?php echo 'step_to_'.$i; ?>"><?php echo get_sub_field('step_name'); ?></a>
								      <i class="icon-ok"></i>
								      <span></span>
								    </div>
						    <?php
						        endif;
						        $i = $i + 1;
						    endwhile;
						    echo '
						    </div>
						    </div>';
						endif; ?>

						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 steps_repeater">
				<?php 
				if( have_rows('page_steps') ):
					$i = 1;
				    while ( have_rows('page_steps') ) : the_row();
				        if( get_row_layout() == 'page_block' ): ?>

				        <div class="step_single clearfix" id="<?php echo 'step_to_'.$i; ?>">
				        	<!-- Icon -->
				        	<div class="step_top">
				        	
				        	<?php if (get_sub_field('step_image')) : ?>

				        		<div class="step_image hidden-xs">
				        			<?php 
				        				$step_image = get_sub_field('step_image');
				        				$step_imagesrc = $step_image['url']; 
				        			?>
				        			<img src="<?php echo $step_imagesrc; ?>" />
					        	</div>

					        	<div class="step_image_mobile hidden-sm hidden-md hidden-lg">
					        		<?php 
				        				$step_image_mobile = get_sub_field('step_image_mobile');
				        				$step_imagesrc_mobile = $step_image_mobile['url']; 
				        			?>
				        			<img src="<?php echo $step_imagesrc_mobile; ?>" />
					        	</div>

					        <?php elseif (get_sub_field('step_video')) : ?>

					        	<!-- video -->
								<div class="step_video">
									<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:41.88% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_kkcplc6sq1 seo=false videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
								</div>
					        	<!-- video_end -->

					        <?php else : ?>
					        	<div class="step_image">
				        			<img src="http://pipsum.com/1200x550.jpg" />
					        	</div>
					        <?php endif; ?>



					        	<div class="step_lead">
						        	<img src="<?php the_sub_field('step_icon'); ?>" class="step_icon_img" />
					        		<!-- <span class="step_icon_title"><?php the_sub_field('step_label'); ?></span> -->
				    			</div>
				        	</div>

				        	<div class="col-md-6 col-md-offset-3">

					        	<!-- Line In -->
					        	<span class="step_linein"></span>
					        	<span class="step_icon_linein"><?php the_sub_field('step_label'); ?></span>

					        	<!-- Step Info -->				        	
					        	<h3>
					        		<span class="step_name"><?php the_sub_field('step_name'); ?>:</span>
					        		<span class="step_headline"><?php the_sub_field('step_headline'); ?></span>
					        	</h3>

					        	<div class="step_desc">
					        		<?php the_sub_field('step_desc'); ?>
					        	</div>

					        	<span class="step_arrow_next"></span>

				        	</div>

				        </div>
				        <?php endif;
				    $i = $i + 1;
				    endwhile;
				endif;
				?>
						</div><!-- col -->
					</div><!-- row -->
				</div>
			</section>

			<section class="stories">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="square-shape"></div>
							<h2 class="process-title">Stories of Impact</h2>
						</div>
					</div>
					<div class="row">

						<?php 
						if (have_rows('videos')) :
							while (have_rows('videos')) : the_row(); ?>
							<div class="col-md-6">
								<div class="story-video-wrapper">
									<script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:41.88% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_kkcplc6sq1 seo=false videoFoam=true" style="height:100%;width:100%">&nbsp;</div></div></div>
								</div>
							</div>

						<?php endwhile;
						endif;
						?>

					</div>
				</div>
			</section>


			<section class="trigger-zone">

				<div class="trigger trigger-title" >
					<a href="#" class="trigger-btn"><?php the_field('trigger_text'); ?></a>
				</div>

				<div class="bang">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">

						<div class="bang_container">
							
							<?php if (is_page(7)) : ?>
								<div class="panel panel-default pastor-mail-panel">
									<div class="panel-body">
									<div class="text-center">
										<img src="<?php echo get_template_directory_uri() . '/img/plane.png'; ?>" class="plane" />
									</div>
									<form id="invite-pastor" method="post">

										<div class="form-field form-field-border">
											<label>To:</label>
											<input type="text" name="field-to" value="YourPastor@Church.com" />
										</div>
										<div class="form-field form-field-border">
											<label>Subject:</label>
											<input type="text" name="field-subject" value="A Great Resource for Our Church" />
										</div>

										<div class="form-field">
											<textarea name="field-message" rows="20">Dear (insert pastor’s name),

I want to share an opportunity with you that I am very excited about and think could be beneficial for our church.
 
EQUIP and John Maxwell have developed a strategy called Salt and Light for the purpose of adding value to people, transforming communities, and reaching people for Christ. I have looked over the content and I think these resources can really help us engage with people in our community that may never come to church. Also, these resources are totally FREE for churches!
 
The vision behind it all is for local churches to mobilize their lay leaders to become transformational leaders in the community by engaging with unsaved people in their own spheres of influence, adding value to them by facilitating roundtables with them, and seeking opportunities to share their faith.
 
Check out www.iequip.church to learn more and sample some of the content.
 
I’d love to talk more about our church getting involved if you are interested!

Thank you for your time,
(insert your name)</textarea>
										</div>

										<div class="text-center">
										<input type="submit" id="generate-email" />
										</div>
									</form>
									</div>
								</div>

<script>
jQuery(function() {

jQuery('#generate-email').click(function() {
    Message = "mailto:" + jQuery('input[name=field-to]').val();
    Message += "?subject=" + jQuery('input[name=field-subject]').val();
    Message += "&body=" + encodeURIComponent(jQuery('textarea[name=field-message]').val());
    console.log(Message);
    location.href = Message;
	//window.open(Message);
    return false;
});

});
</script>
							<?php elseif (is_page()) : ?>
								<?php gravity_form(2, false); ?>
							<?php endif; ?>
						</div>


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
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
	
	$('.trigger-btn').click(function() {
		$('.bang_container').toggleClass('open');
		return false;
	});

	var wrapper_top = $(".stepprogress .wrapper").offset().top;
	$(window).scroll(function (){

		    var distance = $('.stories').offset().top,
			    $window = $(window);

			$window.scroll(function() {
			    if ( $window.scrollTop() >= distance ) {
			        $('.stepprogress .wrapper').addClass('hideaway');
			    } else {
			    	$('.stepprogress .wrapper').removeClass('hideaway');
			    }
			});


	    var wrapper_height = $(".stepprogress .wrapper").height();
	 
	    // Affixes Progress Bars
	  	var top = $(this).scrollTop();
	    if (top > wrapper_top + 1) {
	        $(".stepprogress .wrapper").addClass("affix");
	    }
	    else {
	        $(".stepprogress .wrapper").removeClass("affix");
	    }
	 
	 
	    // Calculate each stepprogress section
	    $(".steps_repeater .step_single").each(function(i){
	        var this_top = $(this).offset().top;
	        var height = $(this).height();
	        var this_bottom = this_top + height;
	        var percent = 0;
	 
	        // Scrolled within current section
	        if (top >= this_top && top <= this_bottom) {
	            percent = ((top - this_top) / (height - wrapper_height)) * 100;
	            if (percent >= 100) { 
	                percent = 100; 
	            	$(".stepprogress .wrapper .bar:eq("+i+") i").css("color", "#fff");
	            	$(".stepprogress .wrapper .bar:eq("+i+") a").css("color", "#fff");
	            	$(".stepprogress .wrapper .bar:eq("+i+")").css("border-right-color", "#fff");
	            }
	            else {
	                $(".stepprogress .wrapper .bar:eq("+i+") i").css("color", "#36a7f3");     
	                $(".stepprogress .wrapper .bar:eq("+i+") a").css("color", "#000");    
	                $(".stepprogress .wrapper .bar:eq("+i+")").css("border-right-color", "");                           
	            }
	        }
	        else if (top > this_bottom) {
	            percent = 100;
	            $(".stepprogress .wrapper .bar:eq("+i+") i").css("color", "#fff");
	            $(".stepprogress .wrapper .bar:eq("+i+") a").css("color", "#fff");
	            $(".stepprogress .wrapper .bar:eq("+i+")").css("border-right-color", "#fff");
	        }
	        //console.log(i);
	        $(".stepprogress .wrapper .bar:eq("+i+") span").css("width", percent + "%");
	    });
	});

});
</script>

<?php
get_footer();
