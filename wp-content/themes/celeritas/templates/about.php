<?php
/*
Template Name: About Page
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

//   EXCELLENCE SWIPPER //
var ourServiceSwiper = new Swiper(".ExcellenceSwiper", {
    slidesPerView: 2,
    spaceBetween: 20,
    navigation: {
        nextEl: ".Excellence-swiper-button-next",
        prevEl: ".Excellence-swiper-button-prev",
    },
    breakpoints: {
        580: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
    },
});

//   OUR SERVICE SWIPPER //
var ourServiceSwiper = new Swiper(".ServiceSwiper", {
    slidesPerView: 2,
    spaceBetween: 20,
    navigation: {
        nextEl: ".Service-swiper-button-next",
        prevEl: ".Service-swiper-button-prev",
    },
    breakpoints: {
        580: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        320: {
            slidesPerView: 1,
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

<?php
wp_reset_query();
if (have_posts()):
    while (have_posts()): the_post();
        the_content();
    endwhile;
endif;
?>

<section class="sub-banner-sec">
    <div class="sub-bnr">
        <div class="bnr-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/about-bnr.png" />
        </div>
    </div>
    <div class="sub-banner-content">
        <div class="container">
            <h1 data-aos="fade-up">About Us</h1>
        </div>
    </div>
</section>

<!-- <section class="who-we-sec">
    <div class="container">
        <div class="who-we-blk">
            <div class="who-we-cntnt">
                <h2 data-aos="fade-up">Who We Are</h2>
                <p>Lorem ipsum dolor sit amet consectetur. Felis vitae pharetra vitae
                   mauris sed felis sem at. Viverra tellus tellus sagittis eu at nec 
                   consectetur viverra duis. Tristique pulvinar magnis at libero in 
                   sit elementum. Sed vel eleifend ut faucibus facilisis fermentum 
                   cong vulputate imperdiet.Lorem ipsum dolor sit amet consectetur. 
                   Felis vitae pharetra vitae mauris sed felis sem at. Viverra tellus 
                   tellus sagitteu at nec consectetur viverra duis. Tristique pulvinar 
                   magnis libero in sit elementum. Sed vel eleifend ut faucibus facilisis 
                </p>
            </div>
            <div class="who-img-blk">
                <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/Missile-abt.png" />
            </div>
        </div>
    </div>
</section> -->

<section class="communication-sec">
    <div class="comm-blk container">
        <div class="comm-content">
            <h3 data-aos="fade-up">Who We Are</h3>
            <p>Lorem ipsum dolor sit amet consectetur. Felis vitae pharetra vitae
                mauris sed felis sem at. Viverra tellus tellus sagittis eu at nec 
                consectetur viverra duis. Tristique pulvinar magnis at libero in 
                sit elementum. Sed vel eleifend ut faucibus facilisis fermentum 
                cong vulputate imperdiet.Lorem ipsum dolor sit amet consectetur. 
                Felis vitae pharetra vitae mauris sed felis sem at. Viverra tellus 
                tellus sagitteu at nec consectetur viverra duis. Tristique pulvinar 
                magnis libero in sit elementum. Sed vel eleifend ut faucibus facilisis 
            </p>
        </div>
        <div class="comm-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/Missile-abt.png" />
        </div>
    </div>
</section>

<section class="mission-sec">
    <div class="container">
        <div class="mission-blk">
            <div class="mission-cntnt">
                <h2 data-aos="fade-up">Our Mission</h2>
                <p>At Celeritas Automations, our mission is to pioneer cutting-edge technology
                   solutions that redefine the possibilities of modern engineering. We are dedicated
                   to pushing the limits of innovation, striving to set new standards in reliability,
                   safety, and performance. Our unwavering commitment to quality ensures that every 
                   product and service we deliver meets the rigorous demands of the defence and aerospace 
                   sectors.
                </p>
            </div>
            <div class="mission-img-blk">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/Ellipse.png">
                </div>
                <div class="img-inner-txt">
                    <div class="first-txt">
                        <p class="zoom-hover" data-aos="zoom-in">Industry expertise</p>
                        <p class="zoom-hover" data-aos="zoom-in">Innovative Engineering</p>
                    </div>
                    <div class="second-txt">
                        <p class="zoom-hover" data-aos="zoom-in">Plug-and-Play Solutions</p>
                        <p class="zoom-hover" data-aos="zoom-in">Tailored to Client Needs </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="excellence-sec">
    <div class="container">
        <div class="excellence-blk">
            <div class="excellence-cntnt">
                <h2 data-aos="fade-up">Our Domains of Excellence</h2>
                <p>At Celeritas Automations, our values are the cornerstone of everything we do. 
                   Driven by excellence, innovation, and integrity, we deliver superior solutions 
                   to our clients in the defence and aerospace sectors. These principles shape our 
                   approach, ensuring reliable, cutting-edge technologies that meet our clients' 
                   needs while fostering long-lasting partnerships built on trust and success.
                </p>
            </div>
            <div>
                <div class="swiper ExcellenceSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img1.png" alt="">
                            </a>
                            <span>Space</span>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img1.png" alt="">
                            </a>
                            <span>Air</span>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img1.png" alt="">
                            </a>
                            <span>Land</span>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img1.png" alt="">
                            </a>
                            <span>Water</span>
                        </div>
                    </div>
                    <div class="btn-wrap excellence-btn"> 
                        <div class="Excellence-swiper-button-prev swiper-btn swiper-btn-prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                        </div>
                        <div class="Excellence-swiper-button-next swiper-btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>       

        </div> 
    </div>
</section>

<section class="value-sec">
    <div class="container">
        <div class="value-blk">
            <div class="value-cntnt">
                <h2 data-aos="fade-up">Our Values</h2>
                <p>At Celeritas Automations, our values are the cornerstone of everything we do.
                   Driven by excellence, innovation, and integrity, we deliver superior solutions 
                   to our clients in the defence and aerospace sectors. These principles shape our 
                   approach, ensuring reliable, cutting-edge technologies that meet our clients' 
                   needs while fostering long-lasting partnerships built on trust and success.
                </p>
            </div>
            <div class="value-card-blk">
                <div data-aos="zoom-in" class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/comitment.svg" />
                    <h3>Commitment to Excellence</h3>
                    <p>We are relentless in our pursuit of perfection, ensuring that every 
                       solution we engineer meets the highest standards of quality and performance.
                    </p>
                </div>
                <div data-aos="zoom-in" class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/inovation.svg" />
                    <h3>Innovation-Driven</h3>
                    <p>We champion innovation by staying ahead with cutting-edge technology, 
                       delivering solutions that are both groundbreaking and relevant to the 
                       defense and aerospace sectors.
                    </p>
                </div>
                <div data-aos="zoom-in" class="card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about-us/client-centric.svg" />
                    <h3>Client-Centric Approach</h3>
                    <p>We build strong relationships with clients by understanding their
                       needs and creating customized solutions that ensure seamless execution 
                        and success.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-service-sec">
    <div class="container">
        <div class="our-service-blk">
            <div class="service-cntnt">
                <h2 data-aos="fade-up">Our Services</h2>
                <p>Celeritas Automations offers a wide range of specialized services to support defense, 
                   aerospace, and high-tech industries. Our expertise spans from design and development 
                   to testing and maintenance, ensuring reliable and cutting-edge solutions.
                </p>
            </div>
            <div>
                <div class="swiper ServiceSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img1.png" alt="">
                            </a>
                            <span>Space</span>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img1.png" alt="">
                            </a>
                            <span>Air</span>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img1.png" alt="">
                            </a>
                            <span>Land</span>
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/home/our-service-img1.png" alt="">
                            </a>
                            <span>Water</span>
                        </div>
                    </div>
                    <div class="btn-wrap"> 
                        <div class="Service-swiper-button-prev swiper-btn swiper-btn-prev">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                        </div>
                        <div class="Service-swiper-button-next swiper-btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/home/swiper-btn.svg" alt="">
                        </div>
                    </div>
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
                <h2 data-aos="fade-up">Join us to innovate in Defence and Aerospace</h2>
                <p data-aos="fade-up">Join our team at Celeritas Automation and be part of a dynamic group of innovators, where your skills
                    and passion can make a real impact.</p>
                <a class="btn" href="">
                    <span class="transition"></span>
                    <span class="label">Apply Now</span>
                </a>
            </div>
            <div class="right-section">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/careers-image.png" alt="">
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