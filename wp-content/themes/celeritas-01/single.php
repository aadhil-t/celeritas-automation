<?php
    get_header();
    add_action('wp_footer','blog_scripts',25);
    $page_ID = get_the_ID();
    function blog_scripts(){?>
        <script>
            
            $(document).ready(function(){
                
               
                
            });  
        </script>
	<?php
    }
?>


<!-- <div class="blog-details-page">
    <?php if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php }
    } ?>
</div> -->
<!-- blog-page -->
<?php $banner = get_field('service_banner',$page_ID);
if(isset($banner) && !empty(array_filter($banner))) {?>
<section class="innerpage-banner-sec aboutus-banner-sec">
    <div class="container">
        <div class="innerpg-bnr-wrapper">
            <div class="contnt-blk" data-aos="fade-right" data-aos-duration="1500">
                <?php if($banner['title']) { ?>
                <span><?php echo $banner['title']; ?></span>
                <?php } if($banner['banner_content']) { ?>
                <h1><?php echo $banner['banner_content']; ?></h1>
                <?php } ?>
                <?php include(get_template_directory() . '/breadcrumb.php'); ?>
            </div>
            <?php if($banner['banner_image']) { ?>
            <div class="img-blk">
                <img src="<?php echo $banner['banner_image']; ?>" alt="banner of  <?php echo $banner['title']; ?>" title="<?php echo $banner['title']; ?>" width="622" height="407"/>
            </div>
            <?php } ?>
        </div>
       
    </div>
</section>
<?php } ?>
<section class="default-inner-page single-detail-page single-bottom single-page">
    <div class="container">
        <div class="default-outer-sec">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </div>
    </div>
</section>




<?php get_footer(); ?>