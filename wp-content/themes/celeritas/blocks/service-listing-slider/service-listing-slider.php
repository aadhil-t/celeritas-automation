<?php

/**
 * A block left with bordered image and right with content.
 *
 * @param array $block The block settings and attributes.
 */

$blockID = $block['id'];
$anchor = 'service-slider' . $blockID;
$class_name = '';
if (! empty($block['className'])) {
    $class_name = $block['className'];
}
if (! empty($block['anchor'])) {
    $anchor = $block['anchor'];
} 
// $page_ID = get_the_ID();
?>

<?php $servc = get_field('service_slider_block',$blockID);
if(isset($servc) && !empty(array_filter($servc))) { ?>
<section class="our-services <?php echo esc_attr($class_name); ?>" id="<?php echo $anchor; ?>">
    <div class="container">
        <?php if($servc['main_title']) { ?>
        <h3 class="label-title"><?php echo $servc['main_title']; ?></h3>
        <?php } if($servc['sub_title_bold__']) { ?>
        <h2 data-aos="fade-up"><?php echo $servc['sub_title_bold__']; ?></h2>
        <?php } ?>
        <?php if($servc['list_services']) { ?>
        <div class="swiper ourServiceSwiper">
            <div class="swiper-wrapper">
                <?php foreach($servc['list_services'] as $items ) { ?>
                <div class="swiper-slide">
                    <a href="<?php echo esc_url(get_permalink($items['select_service'])); ?>">
                        <?php if(has_post_thumbnail($items['select_service'])) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url($items['select_service']);?>" alt="<?php echo get_the_title($items['select_service']); ?>" />
                            <?php } else { ?>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image.png" alt="<?php echo get_the_title($items['select_service']); ?>" />

                        <?php } ?>
                    </a>

                    <h5><?php echo get_the_title($items['select_service']); ?></h5>
                </div>
                <?php } ?>

            </div>
            <div class="btn-wrap">

                <div class="ourService-swiper-button-prev swiper-btn swiper-btn-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                </div>
                <div class="ourService-swiper-button-next swiper-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                </div>
            </div>

        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>