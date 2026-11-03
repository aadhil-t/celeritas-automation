<?php
/*
Template Name: Product Page
Template Post Type: products
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

<?php $common_bnr = get_field('common_banner',$page_ID);
if(isset($common_bnr) && !empty(array_filter($common_bnr))) { ?>
<section class="sub-banner-sec <?php echo esc_attr($class_name); ?>" id="<?php echo $anchor; ?>">
    <?php if($common_bnr['banner_image']) { ?>
    <div class="sub-bnr">
        <div class="bnr-img">
            <img src="<?php echo $common_bnr['banner_image']; ?>"  alt="<?php echo $common_bnr['title']; ?>" />
        </div>
    </div>
    <?php } if($common_bnr['title']) { ?>
    <div class="sub-banner-content">
        <div class="container">
            <h1 data-aos="fade-up"><?php echo $common_bnr['title']; ?></h1>
        </div>
    </div>
    <?php } ?>
</section>
<?php } ?>

<section class="radar-sec">
    <div class="container">
        <div class="radar-blk">
            <div class="rdr-left">
                <div class="dropdown">
                        <button class="dropdown-btn">
                            Antennas <span class="arrow">↑</span>
                        </button>
                    <div class="dropdown-content">
                        <!-- <div class="category">- Rotary Waveguides/ Slip Rings</div> -->
                        <ul>
                            <li data-title="Rotary Waveguides" 
                                data-image="<?php echo get_template_directory_uri(); ?>/images/radar-ev/slip-ring.png" 
                                data-description="Rotary waveguides, also known as slip rings, are essential components in antenna systems.">
                                Rotary Waveguides/ Slip Rings
                            </li>
                            <li data-title="Another Item" 
                                data-image="<?php echo get_template_directory_uri(); ?>/images/radar-ev/slip-ring.png" 
                                data-description="Description for another item.">
                                Another Item
                            </li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                        <button class="dropdown-btn">
                        Signal Processing <span class="arrow">↑</span>
                        </button>
                    <div class="dropdown-content">
                        <div class="category">- Rotary Waveguides/ Slip Rings</div>
                        <ul>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                        <button class="dropdown-btn">
                        Display systems <span class="arrow">↑</span>
                        </button>
                    <div class="dropdown-content">
                        <div class="category">- Rotary Waveguides/ Slip Rings</div>
                        <ul>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                        <button class="dropdown-btn">
                        Power supplies <span class="arrow">↑</span>
                        </button>
                    <div class="dropdown-content">
                        <div class="category">- Rotary Waveguides/ Slip Rings</div>
                        <ul>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                        <button class="dropdown-btn">
                        Integration to weapons <span class="arrow">↑</span>
                        </button>
                    <div class="dropdown-content">
                        <div class="category">- Rotary Waveguides/ Slip Rings</div>
                        <ul>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                            <li>Rotary Waveguides/ Slip Rings</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="rdr-right">
                <div>
                    <h2>Rotary Waveguides/ Slip Rings</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/radar-ev/slip-ring.png" />
                    <p>Rotary waveguides, also known as slip rings, are essential components in antenna systems that enable 
                       seamless signal transmission between stationary and rotating parts. These high-frequency transmission 
                       devices ensure minimal signal loss and maintain consistent performance in radar and communication systems. 
                       Designed for military and aerospace applications, rotary waveguides provide durability, precision, and 
                       reliable connectivity in demanding operational environments.
                    </p>
                </div>

                <div class="spec-blk">
                    <div class="specs-table">
                        <!-- <table>
                            <tr>
                                <th>Focal Plane</th>
                                <td>1/2" color CMOS Sony*</td>
                            </tr>
                            <tr>
                                <th>Frame Rate</th>
                                <td>30fps, Pixels</td>
                            </tr>
                            <tr>
                                <th>Output</th>
                                <td>NTSC 768 × 494 (PAL 752 × 582 )<br>1080X720 (HDMI variant)</td>
                            </tr>
                            <tr>
                                <th>Shutter Speed</th>
                                <td>1/60 to 1/4000 sec (Auto CCD Iris)</td>
                            </tr>
                            <tr>
                                <th>Minimum Illumination</th>
                                <td>3 lux (F1.2, AGC ON)</td>
                            </tr>
                            <tr>
                                <th>Sensitivity</th>
                                <td>2000 lux @ F8, AGC OFF (0dB)</td>
                            </tr>
                            <tr>
                                <th>Gain Control</th>
                                <td>AGC (0 - 18dB)/Fixed (0 dB)</td>
                            </tr>
                            <tr>
                                <th>White Balance</th>
                                <td>AutoTrace, 3200K, 5600K & Manual</td>
                            </tr>
                            <tr>
                                <th>Video S/N</th>
                                <td>40 dB</td>
                            </tr>
                            <tr>
                                <th>Temperature</th>
                                <td>Storage: -53 to +100°C<br>Operating: -40 to 85°C</td>
                            </tr>
                            <tr>
                                <th>Humidity</th>
                                <td>Storage: 20 - 90%<br>Operating: 20 - 80%</td>
                            </tr>
                            <tr>
                                <th>Size</th>
                                <td>35 × 35 × 85 mm</td>
                            </tr>
                            <tr>
                                <th>Mass</th>
                                <td>100 g</td>
                            </tr>
                            <tr>
                                <th>Power</th>
                                <td>5 V, 24 W</td>
                            </tr>
                            <tr>
                                <th>Mounting External</th>
                                <td>(Fairing)</td>
                            </tr>
                            <tr>
                                <th>Mounting Internal</th>
                                <td>(Bracket)</td>
                            </tr>
                            <tr>
                                <th>Monitoring</th>
                                <td>Environmental monitoring<br>(optional Tech)</td>
                            </tr>
                        </table> -->
                        <?php
                        wp_reset_query();
                        if (have_posts()):
                            while (have_posts()): the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                    
            </div>
        </div>
    </div>
</section>

<section>

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

<script>
    // drop down script //
//     document.querySelector(".dropdown-btn").addEventListener("click", function () {
//     const content = document.querySelector(".dropdown-content");
//     const arrow = document.querySelector(".arrow");
    
//     if (content.style.display === "block") {
//         content.style.display = "none";
//         arrow.style.transform = "rotate(0deg)";
//     } else {
//         content.style.display = "block";
//         arrow.style.transform = "rotate(180deg)";
//     }
// });
// Dropdown toggle script for multiple dropdowns
document.addEventListener("DOMContentLoaded", function () {
    const dropdownButtons = document.querySelectorAll(".dropdown-btn");

    dropdownButtons.forEach((btn) => {
        btn.addEventListener("click", function () {
            const content = this.nextElementSibling; // Get the next sibling (dropdown-content)
            const arrow = this.querySelector(".arrow");

            // Toggle the dropdown
            if (content.style.display === "block") {
                content.style.display = "none";
                arrow.style.transform = "rotate(0deg)";
            } else {
                content.style.display = "block";
                arrow.style.transform = "rotate(180deg)";
            }
        });
    });
});


// right content panel script //
document.addEventListener("DOMContentLoaded", function () {
    const listItems = document.querySelectorAll(".dropdown-content ul li");
    
    listItems.forEach(item => {
        item.addEventListener("click", function () {
            const newTitle = this.getAttribute("data-title");
            const newImage = this.getAttribute("data-image");
            const newDescription = this.getAttribute("data-description");

            // Find the closest .rdr-right container and update the content
            const rdrRight = document.querySelector(".rdr-right");
            if (rdrRight) {
                rdrRight.querySelector("h2").textContent = newTitle;
                rdrRight.querySelector("img").src = newImage;
                rdrRight.querySelector("p").textContent = newDescription;
            }
        });
    });
});


</script>
<?php get_footer(); ?>