<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>
	
<?php get_template_part( 'sidebars/sidebar' , 'footer' ); ?>

<div class="copyright">
	
	<div class="container">
		
		<div class="row gutters">
			
			<div class="col_8">
				
				<p><?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'thegalaxy' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?> | <a href="<?php echo home_url('wp-admin'); ?>">Admin Login</a> | <a href="http://30boxes.com/widget/8196522/GloverMansion/f3e6e3f1dae48561cc6b1646be353402/1/" target="_blank">Staff Schedule</a> | <span class="designedby">Designed by <a href="http://www.coreysizemore.com" target="_blank">CSDD</a></span></p>
			
			</div>
			
			<div class="col_4">
				
				<?php get_template_part( 'navs/nav', 'social-footer' ); ?>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<?php wp_footer() ?>
	
</body>
</html>