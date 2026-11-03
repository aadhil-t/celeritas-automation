<?php
/*
Template Name: Contact Page
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/contact/contact-bnr.png" />
        </div>
    </div>
    <div class="sub-banner-content">
        <div class="container">
            <h1 data-aos="fade-up">Contact Us</h1>
        </div>
    </div>
</section>

<section class="solution-sec">
    <div class="container">
        <div class="solution-blk">
            <div class="connect-blk">   
                <h2>Connect With Us For Expert Solutions</h2>
                <div>
                    <div class="connect-cntnt">
                        <h5>Call</h5>
                        <p>+919048180690, 08049898974</p>
                    </div>
                    <div class="connect-cntnt">
                        <h5>E-mail</h5>
                        <p>snair@callp.in</p>
                    </div>
                    <div class="connect-cntnt">
                        <h5>Visit</h5>
                        <p>CELERITAS AUTOMATION LLP 1271, 
                           15th Main,<br>BTM 2nd Stage, 
                           1st Phase, Bengaluru - 560076 Karnataka, 
                           India
                        </p>
                    </div>
                </div>
            </div>
            <div class="form-outer">
                <?php echo do_shortcode(get_field('form_short_code_cntct', $page_ID)); ?>
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