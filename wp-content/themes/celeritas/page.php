<?php

    get_header();

    wp_enqueue_script('slick');

    wp_enqueue_script('timeline');

    add_action('wp_footer','home_scripts',25); 

    $page_ID=get_the_ID();
?>

<?php function home_scripts(){ ?>

<?php }?>
<!-- <style>p{
    margin-bottom:10px;
}</style> -->
<!-- <div class="innerBanner">
    <div class="container">
        <div class="innerbox">
            <h2><?php the_title()?></h2>
        </div>
    </div>
</div> -->
<?php $banner = get_field('service_banner',$page_ID);
if(isset($banner) && !empty(array_filter($banner))) {?>
<section class="inner-banner-sec deafult-banner-sec">
    <div class="container">
        <div class="innerbanner-wrapper">
            <div class="banner-txt" >
                <div class="container" data-aos="fade-right" data-aos-duration="1500">
                    <?php if($banner['title']) { ?>
                    <span><?php echo $banner['title']; ?></span>
                    <?php } if($banner['banner_content']) { ?>
                    <h1><?php echo $banner['banner_content']; ?></h1>
                    <?php } ?>
                    <?php //include(get_template_directory() . '/breadcrumb.php'); ?>
                </div>
            </div>
            <?php if($banner['banner_image']) { ?>
            <div class="hero-bnr">
                <img src="<?php echo $banner['banner_image']; ?>" alt="banner of  <?php echo $banner['title']; ?>" title="<?php echo $banner['title']; ?>" width="685" height="385"/>
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