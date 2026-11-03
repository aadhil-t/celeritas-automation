<?php

/**
 * A block left with bordered image and right with content.
 *
 * @param array $block The block settings and attributes.
 */

$blockID = $block['id'];
$anchor = 'blog-news-sec' . $blockID;
$class_name = '';
if (! empty($block['className'])) {
    $class_name = $block['className'];
}
if (! empty($block['anchor'])) {
    $anchor = $block['anchor'];
} 
// $page_ID = get_the_ID();
?>

<?php $blog_sec = get_field('blog__news_and_events_listing',$blockID);
if(isset($blog_sec) && !empty(array_filter($blog_sec))) { ?>
<section class="news-events-section <?php echo esc_attr($class_name); ?>" id="<?php echo $anchor; ?>">
    <div class="container">
        <div class="top-block">
            <div class="left-part">
                <?php if($blog_sec['title']) { ?>
                <h3 class="label-title"><?php echo $blog_sec['title']; ?></h3>
                <?php } if($blog_sec['sub_title__bold_']) { ?>
                <h2 data-aos="fade-up"><?php echo $blog_sec['sub_title__bold_']; ?></h2>
                <?php } ?>
            </div>
            <?php if($blog_sec['link_url']) { ?>
            <div class="right-part">
                <a class="view-more" href="<?php echo $blog_sec['link_url']; ?>"><?php echo $blog_sec['link_text']; ?></a>
            </div>
            <?php } ?>
        </div>
        <?php  if($blog_sec['select_displaying_items']) { ?>
        <div class="swiper newsSwiper">
            <div class="swiper-wrapper">
                <?php foreach($blog_sec['select_displaying_items'] as $blg) { ?>
                <div class="swiper-slide">
                    <div class="box">
                        <div class="image-block">
                            <?php if (has_post_thumbnail($blg['choose_item'])) { ?>
                                <img src="<?php echo get_the_post_thumbnail_url($blg['choose_item']); ?>" alt="<?php echo esc_attr(get_the_title($blg['choose_item'])); ?>" />
                            <?php } else { ?>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/no-image.png" alt="<?php echo esc_attr(get_the_title($blg['choose_item'])); ?>" />
                            <?php } ?>

                            <!-- Dynamic Date -->
                            <div class="date">
                                <?php echo get_the_date('F j, Y', $blg['choose_item']); ?>
                            </div>

                            <?php if (!empty($blg['tag_name'])) { ?>
                                <h6><?php echo esc_html($blg['tag_name']); ?></h6>
                            <?php } ?>
                        </div>

                        <div class="content">
                            <h5><?php echo esc_html(get_the_title($blg['choose_item'])); ?></h5>

                            <!-- Dynamic Description (Excerpt) -->
                            <p>
                                <?php
                                $post_content = get_post_field('post_excerpt', $blg['choose_item']);
                                if (empty($post_content)) {
                                    $post_content = wp_trim_words(get_post_field('post_content', $blg['choose_item']), 20, '...');
                                }
                                echo esc_html($post_content);
                                ?>
                            </p>

                            <!-- Dynamic Permalink -->
                            <a class="view-more" href="<?php echo esc_url(get_permalink($blg['choose_item'])); ?>">Read more</a>
                        </div>
                    </div>      

                </div>
                <?php } ?>

            </div>

        </div>
        <?php } ?>
    </div>
</section>
<?php } ?>