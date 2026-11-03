<?php

/**
 * A block left with bordered image and right with content.
 *
 * @param array $block The block settings and attributes.
 */

$blockID = $block['id'];
$anchor = 'landing-banner' . $blockID;
$class_name = '';
if (! empty($block['className'])) {
    $class_name = $block['className'];
}
if (! empty($block['anchor'])) {
    $anchor = $block['anchor'];
} 
// $page_ID = get_the_ID();
?>

<?php $banner_image = get_field('banner_home',$blockID); 
if(isset($banner_image) && !empty(array_filter($banner_image))) { ?>
<section class="home-banner <?php echo esc_attr($class_name); ?>" id="<?php echo $anchor; ?>">
    <?php if($banner_image['banner_images']) { ?>
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            <?php 
            $i = 1;
            foreach($banner_image['banner_images'] as $bg_img ) { ?>
            <div class="swiper-slide">
                <img src="<?php echo $bg_img['banner_image']; ?>" alt="banner-image<?php echo $i; ?>" />
            </div>
            <?php $i++; } ?>

        </div>
       
    </div>
    <?php } ?>
    <div class="banner-content">
        <div class="container">
            <?php if($banner_image['title']) { ?>
            <h1 data-aos="fade-up"><?php echo $banner_image['title']; ?></h1>
            <?php } if($banner_image['sub_title']) {?>
            <h2 data-aos="fade-up"><?php echo $banner_image['sub_title']; ?></h2>
            <?php } if($banner_image['button_url']) { ?>
            <a href="<?php echo $banner_image['button_url']; ?>" <?php if($banner_image['open_in_new_tab'] == 'true') { ?> target="_blank" <?php } ?>><?php echo $banner_image['button_text']; ?></a>
            <div class="banner-swiper-pagination"></div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>
<?php if ($banner_image['select_domains']) { ?>
<section class="defense-zone">
    <div class="container">
        <div class="swiper defenseSwiper">
            <div class="swiper-wrapper">
                <?php foreach($banner_image['select_domains'] as $domains) { 

                    // Fetch the taxonomy term details
                    $term = get_term($domains['domain_category']); 
                    //var_dump($term->term_id);
                    $cat_image = get_field('thumbnail_image', $term->taxonomy . '_' . $term->term_id);
                ?>
                <div class="swiper-slide">
                    <a href="<?php echo esc_url($domains['page_url']); ?>" class="block">
                        <img src="<?php echo $cat_image; ?>" alt="<?php echo $term->name; ?>" />
                        
                        <div class="title">
                            <?php 
                            if (!is_wp_error($term) && $term) {
                                echo esc_html($term->name); // Display taxonomy term name
                            } else {
                                echo "No Category Found"; // Fallback in case of an error
                            }
                            ?>
                        </div>
                    </a>
                </div>
                <?php } ?>

            </div>
            <div class="btn-wrap">
                <div class="defense-swiper-button-prev swiper-btn swiper-btn-prev"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt=""></div>
                <div class="defense-swiper-button-next swiper-btn"><img
                        src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt=""></div>
            </div>

        </div>
    </div>
</section>
<?php } ?>