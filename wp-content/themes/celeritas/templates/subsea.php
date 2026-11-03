<?php
/*
Template Name: Subsea Page
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
// var newsSwiper = new Swiper(".blogSwiper", {
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/subsea/banner.png" alt="banner-png"/>
        </div>
    </div>
    <div class="sub-banner-content">
        <div class="container">
            <h1 data-aos="fade-up">Subsea Installation</h1>
        </div>
    </div>
</section>

<section class="subsea-sec">
    <div class="container">
        <div class="subsea-blk">
            <div class="subsea-cntnt">
                <h4 data-aos="fade-up">Subsea Installation</h4>
                <h1 data-aos="fade-up">Precision-engineered solutions for underwater 
                    defense and communication systems.
                </h1>
                <p>Our Sub Sea Installation Services deliver cutting-edge solutions for 
                   deploying and maintaining underwater defense and communication systems. 
                   With expertise in deep-sea technology, we ensure reliability and efficiency 
                   for mission-critical applications.
                </p>
            </div>
            <div class="subsea-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/subsea/install.png" alt="banner-png"/>
            </div>
        </div>
    </div>
</section>

<section class="service-sec">
    <div class="container">
        <div class="service-blk">
            <h1 data-aos="fade-up">Service Capabilities</h1>
            <div class="service-card">
                <div class="service-cntnt">
                    <h2 data-aos="fade-up">01.</h2>
                    <h3>Underwater Infrastructure Installation</h3>
                    <p>Expert deployment of subsea systems, cables, 
                       and networked surveillance solutions.
                    </p>
                </div>
                <div class="service-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/subsea/service-one.png" />
                </div>
            </div>
            <div class="service-card">
                <div class="service-cntnt">
                    <h2 data-aos="fade-up">02.</h2>
                    <h3>Maintenance & Upgrades</h3>
                    <p>Regular servicing and enhancements to ensure 
                       long-term performance and reliability.
                    </p>
                </div>
                <div class="service-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/subsea/service-two.png" />
                </div>
            </div>
            <div class="service-card">
                <div class="service-cntnt">
                    <h2 data-aos="fade-up">03.</h2>
                    <h3>Testing & Inspection</h3>
                    <p>Advanced diagnostic tools to assess and certify 
                       underwater installations.
                    </p>
                </div>
                <div class="service-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/subsea/service-three.png" />
                </div>
            </div>
            <div class="service-card">
                <div class="service-cntnt">
                    <h2 data-aos="fade-up">04.</h2>
                    <h3>Custom Solutions for Defense & Aerospace</h3>
                    <p>Tailored subsea systems for military applications,
                       ensuring strategic operational advantage.
                    </p>
                </div>
                <div class="service-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/subsea/service-four.png" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Highlights-sec">
<div class="container">
        <div class="Highlights-blk">
            <div class="Highlights-cntnt">
                <h2 data-aos="fade-up">Key Highlights</h2>
                <p>Our Sub Sea Installation Services are designed to support critical 
                   underwater defense and communication systems with precision and reliability. 
                   Leveraging advanced technology and industry expertise, we ensure seamless 
                   installation, maintenance, and monitoring of subsea infrastructure. Our 
                   solutions enhance operational efficiency, security, and durability, meeting 
                   the most demanding requirements of modern defense applications.
                </p>
                <ul>
                    <li>Specialized in defense-grade underwater installations</li>
                    <li>High-performance underwater surveillance systems</li>
                    <li>Expertise in subsea cable laying and maintenance</li>
                    <li>Compliance with international defense standards</li>
                </ul>
            </div>
            <div class="Highlights-img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/subsea/key.png" />
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
                    <h2 data-aos="fade-up">Ready to enhance your underwater defense capabilities</h2>
                    <p data-aos="fade-up">Contact us today to discuss your requirements.</p>
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