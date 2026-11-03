<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta name="theme-color" content="#FFFFFF" />
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/styles.css?version1" type="text/css"
        media="screen" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed"
        href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (get_field('fav_icon', 'option')): ?>
        <link rel="shortcut icon" href="<?php echo get_field('fav_icon', 'option'); ?>" />
    <?php else: ?>
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <?php endif;
    wp_head(); ?>
    <script>
        var site_url = '<?php echo site_url(); ?>';
        var directory_url = "<?php bloginfo('template_directory'); ?>";
        window.stylesheet_directory_uri = '<?php echo get_stylesheet_directory_uri(); ?>';
        var theme_url = '<?php echo get_template_directory_uri(); ?>';
        var directory_url = "<?php bloginfo('template_directory'); ?>";
        var ajax_url = "<?php echo admin_url() . "/admin-ajax.php"; ?>";
    </script>
    <script>
        <?php global $wp_query;
        global $post; ?>
            < style >
            <?php if (get_field('custom_css', 'option') != '') {
                echo get_field('custom_css', 'option');
            }
            if ($post->ID) {
                if (get_field('custom_css', $post->ID)) {
                    echo get_field('custom_css', $post->ID);
                }
            } ?>
    </style >
    <?php if ($post->ID) {
        if (get_field('custom_js_header', $post->ID)) {
            echo get_field('custom_js_header', $post->ID);
        }
    } ?>
    <?php echo get_field('google_analytics_tracking_code', 'option'); ?>
    </script>
</head>

<body <?php body_class(); ?>>
    <?php $pageID = get_the_ID();
    global $post; ?>
    <?php if ((is_front_page() || is_home())) { ?>



    <?php } ?>

    <?php if (!(is_front_page() || is_home())) { ?>


    <?php } ?>
    <header class="header">
        <div class="container">
            <div class="wrap">
                <?php if(get_field('logo','option')) { ?>
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_field('logo','option'); ?>" alt="logo">
                    </a>
                </div>
                <?php } ?>
                <div class="right-part">
                    <div class="nav-list">
                        <?php echo wp_nav_menu(array('theme_location' => 'header_menu')); ?>
                        <div class="close-icon" onclick="sideBarClose()">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/header/close.svg" alt="close icon">
                        </div>
                    </div>
                    <!-- <ul class="nav-list"> -->
                        
                    <!-- </ul> -->
                    <form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form-section">
                        <div class="search-field">
                            <input type="search" class="search expandright" value="" name="s" id="searchright" >
                        </div>
                        <div class="search-icon" onClick="search()">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/header/search-icon.svg"
                                alt="search">
                        </div>
                    </form>
                    <div class="hamburger-icon" onClick="sideBarOpen()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </div>
    </header>