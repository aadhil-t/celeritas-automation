<?php
/*
Template Name: Home Page
*/
get_header();
add_action('wp_footer', 'home_scripts', 25);
$page_ID = get_the_ID();
function home_scripts()
{ ?>
    <script>
        var bannerSwiper = new Swiper(".bannerSwiper", {
            spaceBetween: 30,
            effect: "fade",

            pagination: {
                el: ".banner-swiper-pagination",
                clickable: true,
            },

        });
        var defenseSwiper = new Swiper(".defenseSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: ".defense-swiper-button-next",
                prevEl: ".defense-swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
        var ourServiceSwiper = new Swiper(".ourServiceSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            navigation: {
                nextEl: ".ourService-swiper-button-next",
                prevEl: ".ourService-swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },

            },
        });
        var newsSwiper = new Swiper(".newsSwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
          
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 47,
                },

            },
        });
    </script>


    <?php
}
?>
<section class="home-banner">
    <div class="swiper bannerSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/banner-img1.png" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/banner-img1.png" />
            </div>
            <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/banner-img1.png" />
            </div>

        </div>
        <div class="banner-swiper-pagination"></div>
    </div>
    <div class="banner-content">
        <div class="container">
            <h1>Driving Innovation for Defence & Aerospace</h1>
            <h2>Delivering Cutting-Edge Solutions for a Safer Tomorrow</h2>
            <a href="">Explore</a>
        </div>
    </div>
</section>
<section class="defense-zone">
    <div class="container">
        <div class="swiper defenseSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="" class="block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/space.png" alt="Space" />
                        <div class="title">Space</div>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a href="" class="block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/naval.png" alt="Naval" />
                        <div class="title">Naval</div>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a href="" class="block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/land.png" alt="Land" />
                        <div class="title">Land</div>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a href="" class="block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/air.png" alt="Air" />
                        <div class="title">Air</div>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a href="" class="block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/land.png" />
                        <div class="title">Land</div>
                    </a>

                </div>
                <div class="swiper-slide">
                    <a href="" class="block">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/air.png" />
                        <div class="title">Air</div>
                    </a>

                </div>

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
<section class="about-us">
    <div class="container">
        <div class="wrap">
            <div class="left-section">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/about.jpg" alt="Aerospace">
            </div>
            <div class="right-section">
                <h3 class="label-title">About Us</h3>
                <h2>Seamless Solutions By Celeritas Automations</h2>
                <p>Celeritas Automation LLP (CALLP) is a system-driven design, manufacturing, and maintenance repair
                    firm serving the Indian Defence and Aerospace sectors. We specialize in delivering innovative
                    plug-and-play solutions, addressing engineering challenges at any stage, from design to the end of a
                    product's life cycle. Our expertise spans weapon control systems, radar components, electro-optical
                    systems, emergency communications, EMP protection, and space-grade cameras. </p>
                <a class="btn" href="">Read More</a>
            </div>
        </div>
    </div>
</section>
<section class="our-services">
    <div class="container">
        <h3 class="label-title">Our Services</h3>
        <h2>Elevating Defence & Aerospace with Advanced Technology Services</h2>
        <div class="swiper ourServiceSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img1.png"
                    alt="Sub-sea Installation">
                    </a>
                   
                    <h5>Sub-sea Installation</h5>
                </div>
                <div class="swiper-slide">
                    <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img2.png"
                    alt="repair services">
                    </a>
                   
                    <h5>Repair services</h5>
                </div>
                <div class="swiper-slide">
                    <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img2.png"
                    alt="Sub-sea Installation">
                    </a>
                   
                    <h5>Sub-sea Installation</h5>
                </div>
                <div class="swiper-slide">
                    <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img2.png"
                    alt="repair services">
                    </a>
                    
                    <h5>Repair services</h5>
                </div>

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
    </div>
</section>
<section class="career-section">
    <div class="container">
        <div class="wrap">
            <div class="left-section">
                <h3 class="label-title">Careers</h3>
                <h2>Join us to innovate in Defence and Aerospace</h2>
                <p>Join our team at Celeritas Automation and be part of a dynamic group of innovators, where your skills
                    and passion can make a real impact.</p>
                <a class="btn" href="">Apply Now</a>
            </div>
            <div class="right-section">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/careers-image.png" alt="">
            </div>
        </div>
    </div>
</section>
<section class="news-events-section">
    <div class="container">
        <div class="top-block">
            <div class="left-part">
                <h3 class="label-title">News and Events</h3>
                <h2>Latest Updates & Events</h2>
            </div>
            <div class="right-part">
                    <a class="view-more" href="">View More</a>
            </div>
        </div>
        <div class="swiper newsSwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="box">
            <div class="image-block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/blog-img1.png" alt="">
                <div class="date">
                July 30, 2024
                </div>
                <h6>Blog</h6>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/blog-img2.png" alt="">
                <div class="date">
                July 30, 2024
                </div>
                <h6>News</h6>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/blog-img3.png" alt="">
                <div class="date">
                July 30, 2024
                </div>
                <h6>Events</h6>
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/blog-img1.png" alt="">
                <div class="date">
                July 30, 2024
                </div>
                <h6>Blog</h6>
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