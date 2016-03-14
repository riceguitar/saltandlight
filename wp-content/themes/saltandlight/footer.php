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
