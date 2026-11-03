<?php
/**
 * ACF Blocks
 *
 */

add_filter('block_categories_all', function ($categories) {
    // Adding a new category and prepending it to the top.
    array_unshift($categories, array(
        'slug'  => 'celeritas',
        'title' => 'celeritas Layouts',
    ));

    return $categories;
});

add_action('acf_block_render_template', 'aco_render_acf_preview', 10, 3);

function aco_render_acf_preview($block, $content, $is_preview)
{
    if ($is_preview) {
        if (isset($block['data']['aco_has_preview_image']) && $block['data']['aco_has_preview_image']) :    /* rendering in inserter preview  */
            echo '<img src="' . get_stylesheet_directory_uri() . '/' . dirname($block['render_template']) . '/preview.png" style="width:100%; height:auto;">';
        // get_stylesheet_directory_uri()
        endif;
    }
}

add_action('acf/init', 'my_acf_init');
function my_acf_init()
{
    // landing-banner-block
    acf_register_block_type(array(
        'name' => 'landing-banner',
        'title' => __('Landing page banner'),
        'description' => __('A custom banner block for landing page'),
        'render_template' => 'blocks/landing-banner/landing-banner.php',
        'category' => 'celeritas',
        'icon' => 'cover-image',
        'keywords' => array('banner', 'landing'),
        'mode' => 'auto',
        'supports' => [
            'align' => true,
            'mode' => true,
            'anchor' => true,
        ],
        'align' => array('left', 'right', 'full'),
        'enqueue_assets' => function () {
            wp_enqueue_style('landing-banner', get_stylesheet_directory_uri() . '/blocks/landing-banner/landing-banner.css');
        },
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'aco_has_preview_image' => true
                ),
            ),
        ),
    ));

    // common-banner-block
    acf_register_block_type(array(
        'name' => 'common-banner',
        'title' => __('Common Banner'),
        'description' => __('A custom common banner for default pages '),
        'render_template' => 'blocks/common-banner/common-banner.php',
        'category' => 'celeritas',
        'icon' => 'format-image',
        'keywords' => array('common banner', 'default banner','banner '),
        'mode' => 'auto',
        'supports' => [
            'align' => true,
            'mode' => true,
            'anchor' => true,
        ],
        'align' => array('left', 'right', 'full'),
        'enqueue_assets' => function () {
            wp_enqueue_style('common-banner', get_stylesheet_directory_uri() . '/blocks/common-banner/common-banner.css');
        },
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'aco_has_preview_image' => true
                ),
            ),
        ),
    ));

    // content-with-right-image-block
    acf_register_block_type(array(
        'name' => 'content-with-right-image',
        'title' => __('Content With Right Image'),
        'description' => __('A custom block for title ,content with image in right side '),
        'render_template' => 'blocks/content-with-right-image/content-with-right-image.php',
        'category' => 'celeritas',
        'icon' => 'format-image',
        'keywords' => array('Right Image with content', 'content and image','image and content '),
        'mode' => 'auto',
        'supports' => [
            'align' => true,
            'mode' => true,
            'anchor' => true,
        ],
        'align' => array('left', 'right', 'full'),
        'enqueue_assets' => function () {
            wp_enqueue_style('content-with-right-image', get_stylesheet_directory_uri() . '/blocks/content-with-right-image/content-with-right-image.css');
        },
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'aco_has_preview_image' => true
                ),
            ),
        ),
    ));

    // rightcontent-with-left-image-block
    acf_register_block_type(array(
        'name' => 'rightcontent-button-with-left-image',
        'title' => __('Content With Left Image'),
        'description' => __('A custom block for title ,content and button with image in left side '),
        'render_template' => 'blocks/rightcontent-button-with-left-image/rightcontent-button-with-left-image.php',
        'category' => 'celeritas',
        'icon' => 'welcome-write-blog',
        'keywords' => array('Left Image with content', 'content and image','image and content '),
        'mode' => 'auto',
        'supports' => [
            'align' => true,
            'mode' => true,
            'anchor' => true,
        ],
        'align' => array('left', 'right', 'full'),
        'enqueue_assets' => function () {
            wp_enqueue_style('rightcontent-button-with-left-image', get_stylesheet_directory_uri() . '/blocks/rightcontent-button-with-left-image/rightcontent-button-with-left-image.css');
        },
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'aco_has_preview_image' => true
                ),
            ),
        ),
    ));
    
    // service-listing-slider-block
    acf_register_block_type(array(
        'name' => 'service-listing-slider',
        'title' => __('Service Listing Slider'),
        'description' => __('A custom block for listing services as slider '),
        'render_template' => 'blocks/service-listing-slider/service-listing-slider.php',
        'category' => 'celeritas',
        'icon' => 'slides',
        'keywords' => array('Services', 'Slider for Services','Listing Service '),
        'mode' => 'auto',
        'supports' => [
            'align' => true,
            'mode' => true,
            'anchor' => true,
        ],
        'align' => array('left', 'right', 'full'),
        'enqueue_assets' => function () {
            wp_enqueue_style('service-listing-slider', get_stylesheet_directory_uri() . '/blocks/service-listing-slider/service-listing-slider.css');
        },
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'aco_has_preview_image' => true
                ),
            ),
        ),
    ));

    // left-content-with-button-and-right-image-block
    acf_register_block_type(array(
        'name' => 'left-content-with-button-and-right-image',
        'title' => __('Background Color left content with button and right image'),
        'description' => __('A custom block for left aligned content and right image with background color '),
        'render_template' => 'blocks/left-content-with-button-and-right-image/left-content-with-button-and-right-image.php',
        'category' => 'celeritas',
        'icon' => 'format-image',
        'keywords' => array('left content with button', 'right image','background section'),
        'mode' => 'auto',
        'supports' => [
            'align' => true,
            'mode' => true,
            'anchor' => true,
        ],
        'align' => array('left', 'right', 'full'),
        'enqueue_assets' => function () {
            wp_enqueue_style('left-content-with-button-and-right-image', get_stylesheet_directory_uri() . '/blocks/left-content-with-button-and-right-image/left-content-with-button-and-right-image.css');
        },
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'aco_has_preview_image' => true
                ),
            ),
        ),
    ));

    // blog-news-events-listing-block
    acf_register_block_type(array(
        'name' => 'blog-news-events-listing',
        'title' => __('Blog , News and Events Listing'),
        'description' => __('A custom block for display single item of blog,news and events in box structure'),
        'render_template' => 'blocks/blog-news-events-listing/blog-news-events-listing.php',
        'category' => 'celeritas',
        'icon' => 'format-image',
        'keywords' => array('blog , news and events-listing', 'box structure','single items'),
        'mode' => 'auto',
        'supports' => [
            'align' => true,
            'mode' => true,
            'anchor' => true,
        ],
        'align' => array('left', 'right', 'full'),
        'enqueue_assets' => function () {
            wp_enqueue_style('blog-news-events-listing', get_stylesheet_directory_uri() . '/blocks/blog-news-events-listing/blog-news-events-listing.css');
        },
        'example'           => array(
            'attributes' => array(
                'mode' => 'preview',
                'data' => array(
                    'is_preview' => true,
                    'aco_has_preview_image' => true
                ),
            ),
        ),
    ));

}