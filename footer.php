<footer>
	<section class="footer-nav group">
		<div class="wrapper group">
			<div class="footer-wrap">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-navigation') ) ?>
			</div>
		</div>
	</section>
	<div class="footer-bottom">
		<p class="copyrite">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?> | ALL RIGHTS RESERVED | <a href="/privacy/">PRIVACY POLICY</a> | FOR MORE INFORMATION, CALL US TODAY: 888-888-8888.</p>
   		<p class="disclaimer">This web site and the franchise sales information on this site do not constitute an offer to sell a franchise. The offer of a franchise can only be made through the delivery of a franchise disclosure document. Certain states require that we register the franchise disclosure document in those states. The communications on this web site are not directed by us to the residents of any of those states. Moreover, we will not offer or sell franchises in those states until we have registered the franchise (or obtained an applicable exemption from registration) and delivered the franchise disclosure document to the prospective franchisee in compliance with applicable law.</p>
    </div>
</footer>

	<?php wp_footer(); ?>

	<!-- JavaScript at the bottom for fast page loading -->

	<!-- scripts concatenated and minified via build script -->

	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>

	<script type="text/javascript">

		jQuery(document).ready(function() {

		jQuery.fn.cleardefault = function() {
		return this.focus(function() {
		if( this.value == this.defaultValue ) {
		this.value = "";
		}
		}).blur(function() {
		if( !this.value.length ) {
		this.value = this.defaultValue;
		}
		});
		};
		jQuery(".clearit input, .clearit textarea").cleardefault();

		});

	</script>

	<!-- end scripts -->

</body>

</html>
