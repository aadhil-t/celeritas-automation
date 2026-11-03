<?php

/**
 * A block left with bordered image and right with content.
 *
 * @param array $block The block settings and attributes.
 */

$blockID = $block['id'];
$anchor = 'right-image-left-content' . $blockID;
$class_name = '';
if (! empty($block['className'])) {
    $class_name = $block['className'];
}
if (! empty($block['anchor'])) {
    $anchor = $block['anchor'];
} 
// $page_ID = get_the_ID();
?>

<?php $career_sec = get_field('left_content_with_button_and_right_image_background_color',$blockID);
if(isset($career_sec) && !empty(array_filter($career_sec))) { ?>
<section class="career-section <?php echo esc_attr($class_name); ?>" id="<?php echo $anchor; ?>" style="background-color:<?php echo $career_sec['select_background_color']; ?>" >
    <div class="container">
        <div class="wrap">
            <div class="left-section">
                <?php if($career_sec['title']) { ?>
                <h3 class="label-title"><?php echo $career_sec['title']; ?></h3>
                <?php } if($career_sec['sub_title__bold']) { ?>
                <h2 data-aos="fade-up"><?php echo $career_sec['sub_title__bold']; ?></h2>
                <?php } if($career_sec['content']) { ?>
                <p data-aos="fade-up"><?php echo $career_sec['content']; ?></p>
                <?php } if($career_sec['button_url']) { ?>
                <a class="btn" href="<?php echo $career_sec['button_url']; ?>">
                    <span class="transition"></span>
                    <span class="label"><?php echo $career_sec['button_text']; ?></span>
                </a>
                <?php } ?>
            </div>
            <?php  if($career_sec['right_image']) { ?>
            <div class="right-section">
                <img src="<?php echo $career_sec['right_image']; ?>" alt="careerimage">
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>