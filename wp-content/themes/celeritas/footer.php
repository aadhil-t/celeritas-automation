
 <footer class="footer">
	 <div class="top-block">
        <div class="container">
            <div class="wrap">
                <div class="left-section">
                    <div class="footer-logo">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer/logo.svg" alt=""></a>
                    </div>
                    <p>CELERITAS AUTOMATION LLP</p>
                    <p>1271, 15th Main, BTM 2nd Stage 1st Phase</p>
                    <p>Bengaluru - 560076 Karnataka, INDIA</p>
                </div>
                <div class="right-section">
                    <div class="footer-block">
                        <h6>Quick Links</h6>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Products</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="footer-block">
                        <h6>Company</h6>
                        <ul>
                            <li><a href="">About</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Newsroom</a></li>
                        </ul>
                    </div>
                    <div class="footer-block">
                        <h6>Get in touch</h6>
                        <ul>
                            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer/email.svg" alt="">snair@callp.in</a></li>
                            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer/phone.svg" alt="">+919048180690</a></li>
                        </ul>
                    </div>
                    <div class="footer-block">
                        <h6>Follow us</h6>
                        <ul class="social-media">
                            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer/youtube.svg" alt="youtube"></a></li>
                            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer/insta.svg" alt="instagram"></a></li>
                            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer/fb.svg" alt="facebook"></a></li>
                            <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/footer/linkdin.svg" alt="linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <div class="bottom-block">
        <div class="container">
            <div class="wrap">
                <p><a href="">© 2025 Callp. All Rights Reserved.</a></p>
                <p><a href="">Terms & conditions</a>/<a href="">Privacy policy</a></p>
                <p>Site by <a class="acodez" href="">Acodez</a></p>
            </div>
        </div>
     </div>
 </footer> 

<?php wp_footer(); 
if (get_field('custom_javascripts', 'option')) : ?>
    <?php echo get_field('custom_javascripts', 'option'); ?>
<?php endif;
wp_reset_query();
global $post;
if ($post->ID) {
    if (get_post_meta($post->ID, 'custom_javascripts', true) != '') {
        echo get_post_meta($post->ID, 'custom_javascripts', true);
    }
}
?>


</body>
</html>
