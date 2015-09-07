		</div><!-- #main -->

		<?php get_template_part( 'template-parts/footer', 'subfooter' ); // Loads the template-parts/footer-subfooter.php template. ?>

		<?php get_template_part( 'template-parts/footer', 'footer' ); // Loads the template-parts/footer-footer.php template. ?>

		<?php get_template_part( 'template-parts/footer', 'postfooter' ); // Loads the template-parts/footer-postfooter.php template. ?>

	</div><!-- #page-wrapper -->

	<?php hoot_developer_data(); ?>

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

<script>
jQuery(function(){
	// Check the initial Poistion of the Sticky Header
	var stickyHeaderTop = jQuery('#header').offset().top;

	jQuery(window).scroll(function(){
		if( jQuery(window).scrollTop() > stickyHeaderTop ) {
			jQuery('#header').css({position: 'fixed', top: '0px', 'background-color': 'white', width: '100%' });
			jQuery('#site-title img').css({ height: '50px' });
		} else {
			jQuery('#header').css({position: 'static', top: '0px'});
			jQuery('#site-title img').css({ height: 'auto' });
		}
	});
});
</script>
</body>
</html>
