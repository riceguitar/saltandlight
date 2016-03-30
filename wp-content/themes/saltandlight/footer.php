<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saltandlight
 */

?>

	</div><!-- #content -->


	<div class="footer-share">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<p class="share-cta">
						<span class="lead-text">Share this quote on</span>
						<a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.iequip.church" class="social-pop" target="_blank"><img class="share-link-img" src="<?php echo get_stylesheet_directory_uri() . '/img/facebook-hover.png'; ?>" /></a> <a href="https://twitter.com/home?status=%22What%20are%20we%20going%20to%20do%20for%20people%20who%20will%20never%20come%20to%20church?%22%20-%20John%20C.%20Maxwell%20%23johnmaxwell%20%23leadership%20http%3A//iequip.church"  class="social-pop"  target="_blank"><img class="share-link-img"  src="<?php echo get_stylesheet_directory_uri() . '/img/twitter-hover.png'; ?>" /></a>
					</p>
					<h2>"What are we going to do for people who will never come to church?"</h2>
					<span class="author-credit">- John C. Maxwell</span>

					
				</div>
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<h6>Have questions?<br/>
					We are here to serve you!</h6>

					<?php gravity_form(1, false, false, false, '', true, '', true); ?>

					<div class="row">
						<div class="col-sm-4">
							<a href="tel:+16782253316" class="footer-link">
								<span class="footer-image"><img src="<?php echo get_template_directory_uri() . '/img/contact-phone.png'; ?>" alt="" /></span>
								678-225-3316
							</a>
						</div>

						<div class="col-sm-4">
							<a href="mailto:saltandlight@iequip.org" class="footer-link">
								<span class="footer-image"><img src="<?php echo get_template_directory_uri() . '/img/contact-message.png'; ?>" alt="" /></span>
								saltandlight@iequip.org
							</a>
						</div>

						<div class="col-sm-4">
							<a href="https://goo.gl/maps/qknW26tEWE62" target="_blank" class="footer-link">
								<span class="footer-image"><img src="<?php echo get_template_directory_uri() . '/img/contact-address.png'; ?>" alt="" /></span>
								2050 Sugarloaf Circle<br/>
								Duluth, GA 30097
							</a>
						</div>
					</div>

				</div>
			</div>

			<div class="row">

				<div class="col-md-12 text-center">
					<a href="https://www.facebook.com/equip.leadership" target="_blank" class="footer-social footer-fb" title="Facebook Link">Facebook</a>
					<a href="https://twitter.com/EQUIPLeaders" target="_blank" class="footer-social footer-twitter" title="Twitter Link">Twitter</a>
				</div>

			</div>


		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script>
	jQuery(function($) {
		$('.mobile-toggle').click(function() {
			$('#overlaynav').toggleClass('show');
			$('#nav-icon1').toggleClass('open');
			return false;
		})

		$('.social-pop').click(function(e) {
	        e.preventDefault();
	        window.open($(this).attr('href'), 'fbShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
	        return false;
	    });
	});

	(function() {

	  "use strict";

	  var toggles = document.querySelectorAll(".c-hamburger");

	  for (var i = toggles.length - 1; i >= 0; i--) {
	    var toggle = toggles[i];
	    toggleHandler(toggle);
	  };

	  function toggleHandler(toggle) {
	    toggle.addEventListener( "click", function(e) {
	      e.preventDefault();
	      (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
	    });
	  }

	})();
</script>

<?php wp_footer(); ?>

</body>
</html>
