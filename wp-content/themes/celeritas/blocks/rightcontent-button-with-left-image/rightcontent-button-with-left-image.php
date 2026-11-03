<?php

/**
 * A block left with bordered image and right with content.
 *
 * @param array $block The block settings and attributes.
 */

$blockID = $block['id'];
$anchor = 'left-image-right-content' . $blockID;
$class_name = '';
if (! empty($block['className'])) {
    $class_name = $block['className'];
}
if (! empty($block['anchor'])) {
    $anchor = $block['anchor'];
} 
// $page_ID = get_the_ID();
?>

<?php $left_img = get_field('left_image_and_right_content_section',$blockID);
if(isset($left_img) && !empty(array_filter($left_img))) { ?>
<section class="about-us <?php echo esc_attr($class_name); ?>" id="<?php echo $anchor; ?>">
    <div class="container">
        <div class="wrap">
            <?php if($left_img['image']) { ?>
            <div class="left-section">
                <img src="<?php echo $left_img['image']; ?>" alt="Aerospace">
            </div>
            <?php } ?>
            <div class="right-section">
                <?php if($left_img['main_title']) { ?>
                <h3 class="label-title"><?php echo $left_img['main_title']; ?></h3>
                <?php } if($left_img['sub_title']) { ?>
                <h2 data-aos="fade-up"><?php echo $left_img['sub_title']; ?></h2>
                <?php } if($left_img['content_']) { ?>
                <p data-aos="fade-up"><?php echo $left_img['content_']; ?></p>
                <?php } if($left_img['button_url']) { ?>
                <a class="btn" href="<?php echo $left_img['button_url']; ?>">
                    <span class="transition"></span>
                    <span class="label"><?php echo $left_img['button_text']; ?></span>
                </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>