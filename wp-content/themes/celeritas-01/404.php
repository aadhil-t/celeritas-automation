<?php get_header();
if ( get_field( 'default_banner', 'option' ) ) {
	$style = 'style="background-image:url('.get_field( 'default_banner', 'option' ).');"';
} else {
	$style = 'style="background-image:url('.get_template_directory_uri().'/images/banner01.jpg );"'; 
}

// $ban_title ='404 Page Not Found'; ?>




<section class="error-page clearfix">
	<div class="container">
		<div class="outer-error-page">
			<div class="error_img">
				<img src="<?php bloginfo('template_directory');?>/images/symptoms/404-error.jpg" alt="404" width="400" height="400"/>
			</div>
			<div class="error-content">
				<h1 class="gen-page-title">Oops! Page Not Found</h1>
				<p>Looks like you're lost in the data universe!  But don't worry, we're here to guide you back.</p>
				<div class="cta_style_1 bnr-blkbtn backto-btn">
					<a href="<?php echo esc_url(home_url('/')); ?>">
						<button class=" common-btn ">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/more-icon.svg" alt="button arrow  " title=" arrow" width="35" height="35" />Go Back To Home
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>