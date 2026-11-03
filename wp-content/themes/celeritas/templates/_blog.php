<?php
/*
Template Name: Blog Page
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
// var ourServiceSwiper = new Swiper(".radarSwiper", {
//     slidesPerView: 1,
//     spaceBetween: 10,
//     navigation: {
//         nextEl: ".radar-swiper-button-next",
//         prevEl: ".radar-swiper-button-prev",
//     },
//     breakpoints: {
//         580: {
//             slidesPerView: 3,
//             spaceBetween: 20,
//         },


//     },
// });
var newsSwiper = new Swiper(".blogSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,

    breakpoints: {
        580: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        991: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 47,
        },

    },
});
</script>


<?php
}
?>

<section class="sub-banner-sec">
    <div class="sub-bnr">
        <div class="bnr-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/blog/ship-bnr.png" />
        </div>
    </div>
    <div class="sub-banner-content">
        <div class="container">
            <h1 data-aos="fade-up">News and Blogs</h1>
        </div>
    </div>
</section>

<section class="news-sec">
    <div class="container">
        <div class="new-head">
            <h2>Latest News</h2>
        </div>
        <div class="news-blk">
            <div class="latest-news">
                <img src="<?php echo get_template_directory_uri(); ?>/images/blog/latest.png" />
                <h4>July 30, 2024 / Banglore</h4>
                <h3>Advanced war weapons: Shaping the future of modern combat</h3>
                <p>Tempus integer ornare fringilla mattis vestibulum nulla elit justo dictum. Nibh
                   augue cum proin massa turpis nunc non. Condimentum libero et risus erat lobortis 
                   nunc euismod interdum sem. Feugiat purus massa
                </p>
                <div class="career-link">
                        <a class="view-more" href="">Read More</a>
                </div>
            </div>
            <div class="left-blk">
                <div class="lft-news">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog/news-one.png" />
                    <p>July 30, 2024</p>
                    <h3>Lorem ipsum dolor sit amet consectetur. Cras arcu at sit eget laoreet eleifend </h3>
                </div>
                <div class="lft-news">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog/news-two.png" />
                    <p>July 30, 2024</p>
                    <h3>Lorem ipsum dolor sit amet consectetur. Cras arcu at sit eget laoreet eleifend </h3>
                </div>
            </div>
        </div>
        
            <div class="blog-section">
                    <div class="top-block">
                        <div class="left-part">
                            <h2 data-aos="fade-up">Our Blogs</h2>
                        </div>
                    </div>
                    <div class="swiper blogSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box">
                                <a href=""></a>
                                <div class="image-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-one.png" alt="">
                                    <div class="date">
                                        July 30, 2024
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Advanced war weapons: Shaping the future of modern combat</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur. Cras arcu at sit eget laoreet eleifend </p>
                                    <a class="view-more" href="">Read more</a>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box">
                                <div class="image-block">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-two.png" alt="">
                                    <div class="date">
                                        July 30, 2024
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Advanced war weapons: Shaping the future of modern combat</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur. Cras arcu at sit eget laoreet eleifend </p>
                                    <a class="view-more" href="">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                                <div class="box">
                                    <div class="image-block">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-three.png" alt="">
                                        <div class="date">
                                            July 30, 2024
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5>Advanced war weapons: Shaping the future of modern combat</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur. Cras arcu at sit eget laoreet eleifend </p>
                                        <a class="view-more" href="">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="box">
                                    <div class="image-block">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/blog-one.png" alt="">
                                        <div class="date">
                                            July 30, 2024
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5>Advanced war weapons: Shaping the future of modern combat</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur. Cras arcu at sit eget laoreet eleifend </p>
                                        <a class="view-more" href="">Read more</a>
                                    </div>
                                </div>
                            </div>
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