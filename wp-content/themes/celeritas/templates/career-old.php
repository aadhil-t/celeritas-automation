<?php
/*
Template Name: Career Page
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/career/career-bnr.png" />
        </div>
    </div>
    <div class="sub-banner-content">
        <div class="container">
            <h1 data-aos="fade-up">career</h1>
        </div>
    </div>
</section>

<section class="automation-sec">
    <div class="container">
        <div class="celeritas-blk">
            <div class="atomation-blk">
                <h1>Join Our Team at Celeritas Automations</h1>
                <p>At Celeritas Automations, we are at the forefront of designing and delivering 
                   cutting-edge solutions for the defense and aerospace industries. Our team thrives 
                   on innovation, precision, and a commitment to excellence.
                </p>
            </div>
            <div class="careers-blk">
                <div class="career-card">
                    <div class="career-cntnt">
                        <h2>Engineering & Research</h2>
                       <ul>
                        <li>Full Time</li>
                        <li>10k-20k</li>
                        <li>Banglore</li>
                       </ul>
                        <p>Porttitor cursus nibh accumsan imperdiet ipsum non sodales hac. Facilisis dui ut 
                           cursus ultrices lacus convallis amet. Neque massa fermentum sit quisque enim eget 
                           mi. Faucibus tincidunt mattis viverra m quam ullamcorper in. Scelerisque nulla urna diam orci.
                        </p>
                    </div>
                    <div class="career-link">
                        <a class="view-more" href="">Apply Now</a>
                    </div>
                </div>
                <div class="career-card">
                    <div class="career-cntnt">
                        <h2>Manufacturing & Production</h2>
                       <ul>
                        <li>Full Time</li>
                        <li>10k-20k</li>
                        <li>Banglore</li>
                       </ul>
                        <p>Porttitor cursus nibh accumsan imperdiet ipsum non sodales hac. Facilisis dui ut 
                           cursus ultrices lacus convallis amet. Neque massa fermentum sit quisque enim eget 
                           mi. Faucibus tincidunt mattis viverra m quam ullamcorper in. Scelerisque nulla urna diam orci.
                        </p>
                    </div>
                    <div class="career-link">
                        <a class="view-more" href="">Apply Now</a>
                    </div>
                </div>
                <div class="career-card">
                    <div class="career-cntnt">
                        <h2>Software & Signal Processing</h2>
                       <ul>
                        <li>Full Time</li>
                        <li>10k-20k</li>
                        <li>Banglore</li>
                       </ul>
                        <p>Porttitor cursus nibh accumsan imperdiet ipsum non sodales hac. Facilisis dui ut 
                           cursus ultrices lacus convallis amet. Neque massa fermentum sit quisque enim eget 
                           mi. Faucibus tincidunt mattis viverra m quam ullamcorper in. Scelerisque nulla urna diam orci.
                        </p>
                    </div>
                    <div class="career-link">
                        <a class="view-more" href="">Apply Now</a>
                    </div>
                </div>
            </div>
            <div>
                <h1>Form</h1>
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