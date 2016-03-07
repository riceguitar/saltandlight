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
		<div class="content-area">
			
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h6>Have questions?<br/>
					We are here to serve you!</h6>

					<?php gravity_form(1, false, false, false, '', true, '', true); ?>

					<div class="row">
						<div class="col-sm-4">
							<a href="" class="footer-link">
								<img src="/" alt="" />
								678-225-3316
							</a>
						</div>

						<div class="col-sm-4">
							<a href="" class="footer-link">
								<img src="/" alt="" />
								saltandlight@iequip.org
							</a>
						</div>

						<div class="col-sm-4">
							<a href="" class="footer-link">
								<img src="/" alt="" />
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

<?php wp_footer(); ?>

</body>
</html>
