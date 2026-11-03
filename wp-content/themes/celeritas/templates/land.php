<?php
/*
Template Name: Land Page
*/
get_header();
add_action('wp_footer', 'home_scripts', 25);
$page_ID = get_the_ID();
function home_scripts()
{ ?>
<script>
 AOS.init({
  duration: 1000 
});
</script>
<script>
// var bannerSwiper = new Swiper(".bannerSwiper", {
//     spaceBetween: 30,
//     effect: "fade",
//     autoplay: {
//     delay: 5000,
//   },
//     pagination: {
//         el: ".banner-swiper-pagination",
//         clickable: true,
//     },

// });
// var defenseSwiper = new Swiper(".defenseSwiper", {
//     slidesPerView: 1,
//     spaceBetween: 10,
//     navigation: {
//         nextEl: ".defense-swiper-button-next",
//         prevEl: ".defense-swiper-button-prev",
//     },
//     breakpoints: {
//         580: {
//             slidesPerView: 2,
//             spaceBetween: 20,
//         },
//         840: {
//             slidesPerView: 3,
//             spaceBetween: 40,
//         },
//         1110: {
//             slidesPerView: 4,
//             spaceBetween: 50,
//         },
//     },
// });
var ourServiceSwiper = new Swiper(".radarSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
        nextEl: ".radar-swiper-button-next",
        prevEl: ".radar-swiper-button-prev",
    },
    breakpoints: {
        580: {
            slidesPerView: 3,
            spaceBetween: 20,
        },


    },
});
// var newsSwiper = new Swiper(".newsSwiper", {
//     slidesPerView: 1,
//     spaceBetween: 10,

//     breakpoints: {
//         580: {
//             slidesPerView: 2,
//             spaceBetween: 20,
//         },
//         991: {
//             slidesPerView: 3,
//             spaceBetween: 20,
//         },
//         1200: {
//             slidesPerView: 3,
//             spaceBetween: 47,
//         },

//     },
// });
</script>


<?php
}
?>

<section class="sub-banner-sec">
    <div class="sub-bnr">
        <div class="bnr-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/land-banner.png" />
        </div>
    </div>
    <div class="sub-banner-content">
        <div class="container">
            <h1 data-aos="fade-up">Land</h1>
        </div>
    </div>
</section>

<section class="communication-sec">
    <div class="comm-blk container">
        <div class="comm-content">
            <h3 data-aos="fade-up">CALLP Delivers Advanced Solutions For Land-Based Defense And Communication.</h3>
            <p>Celeritas Automations (CALLP) specializes in delivering cutting-edge technologies
               for land-based defense and communication systems. Our solutions enhance operational
               effectiveness, ensuring superior performance in critical defense applications.
            </p>
        </div>
        <div class="comm-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home/land-com.png" />
        </div>
    </div>
</section>

<section class="radar-sec">
    <div class="container">
            <div class="top-block">
                <div class="left-part">
                    <!-- <h3 class="label-title">News and Events</h3> -->
                    <h2 data-aos="fade-up">Radars & EW</h2>
                    <p>Advanced Radar Technologies for Superior Land Defense and Surveillance</p>
                </div>
                <div class="right-part">
                    <a class="view-more" href="">View More</a>
                </div>
            </div>
            <div class="swiper radarSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/land/rotary.png"
                                alt="Sub-sea Installation">
                        </a>
    
                        <h5>Sub-sea Installation</h5>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/land/honey.png"
                                alt="repair services">
                        </a>
    
                        <h5>Repair services</h5>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/land/micro.png"
                                alt="Sub-sea Installation">
                        </a>
    
                        <h5>Sub-sea Installation</h5>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/land/rotary.png"
                                alt="repair services">
                        </a>
    
                        <h5>Repair services</h5>
                    </div>
    
                </div>
                <div class="btn-wrap">
    
                    <div class="radar-swiper-button-prev swiper-btn swiper-btn-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                    </div>
                    <div class="radar-swiper-button-next swiper-btn">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                    </div>
                </div>
    
            </div>
    </div>
</section>

<section class="radar-sec">
    <div class="container">
            <div class="top-block">
                <div class="left-part">
                    <!-- <h3 class="label-title">News and Events</h3> -->
                    <h2 data-aos="fade-up">Radars & EW</h2>
                    <p>Advanced Radar Technologies for Superior Land Defense and Surveillance</p>
                </div>
                <div class="right-part">
                    <a class="view-more" href="">View More</a>
                </div>
            </div>
            <div class="swiper radarSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/land/rotary.png"
                                alt="Sub-sea Installation">
                        </a>
    
                        <h5>Sub-sea Installation</h5>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/land/honey.png"
                                alt="repair services">
                        </a>
    
                        <h5>Repair services</h5>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/land/micro.png"
                                alt="Sub-sea Installation">
                        </a>
    
                        <h5>Sub-sea Installation</h5>
                    </div>
                    <div class="swiper-slide">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/land/rotary.png"
                                alt="repair services">
                        </a>
    
                        <h5>Repair services</h5>
                    </div>
    
                </div>
                <div class="btn-wrap">
    
                    <div class="radar-swiper-button-prev swiper-btn swiper-btn-prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                    </div>
                    <div class="radar-swiper-button-next swiper-btn">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                    </div>
                </div>
    
            </div>
    </div>
</section>

<section class="contact-us">
    <div class="career-section">
        <div class="container">
            <div class="wrap">
                <div class="left-section">
                    <h3 class="label-title">Contact us</h3>
                    <h2 data-aos="fade-up">Get in Touch for Advanced Defense & Aerospace Solutions</h2>
                    <p data-aos="fade-up">Let’s discuss how we can support your defence and aerospace needs.</p>
                    <a class="btn" href="">
                        <span class="transition"></span>
                        <span class="label">Contact Now</span>
                    </a>
                </div>
                <div class="right-section">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/subsea/underwater.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="subscribe">
    <div class="container">
        <div class="wrap">
            <div class="left-section">
                <h3>Subscribe to our newsletter to keep upto date with us</h3>
            </div>
            <div class="right-section">
                <form action="">
                    <input type="email" placeholder="Your email">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>