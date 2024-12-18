<?php
require_once('constant.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='keywords' content='excis, excis compliance, axis, exis'>
    <meta name='description' content='Your Global IT SupportOur IT helpdesk is comprised of certified IT professionals, trained and experienced across a wide variety of vendors - Excis'>
    <meta http-equiv='Pragma' content='no-cache'>
    <meta http-equiv='Cache-Control' content='no-cache'>
    <meta name='robots' content='noindex, nofollow'>
    <meta name='author' content='Excis Compliance'>
    <meta name='copyright' content='Excis Compliance'>
    <meta name='og:title' content='Excis Compliance'>
    <meta name='og:type' content='image'>
    <meta name='og:url' content='https://www.excis.com/wp-content/uploads/2021/12/fav.png'>
    <meta name='og:image' content='htpps://www.excis.com'>
    <meta name='og:description' content='Your Global IT SupportOur IT helpdesk is comprised of certified IT professionals, trained and experienced across a wide variety of vendors - Excis'>

    <title>Services - Excis Compliance Ltd.</title>

    <link rel="canonical" href="https://www.exc1s.com/services">
    <link rel="icon" type="image/x-icon" href="https://www.excis.com/wp-content/uploads/2021/12/fav.png">
    <link rel="stylesheet" href="assets/sass/common.css">
    <link rel="stylesheet" href="assets/sass/navigation.css">
    <link rel="stylesheet" href="assets/sass/banners.css">
    <link rel="stylesheet" href="assets/sass/inner-pages.css">
    <link rel="stylesheet" href="assets/sass/footer.css">
    <link rel="stylesheet" href="assets/sass/why-excis.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>

    <?php
    include("templates/navigation.php");
    ?>

    <div class="full-container">
        <div class="pages-banner">
            <div class="banner-bg-map-img">
                <picture>
                    <source srcset="<?php echo $desktop_images . 'inner-pages-banner-mobile.png'; ?>" media="(max-width: 600px)">
                    <img src="<?php echo $desktop_images . 'inner-pages-banner.png'; ?>" alt="Banner">
                </picture>
            </div>
            <div class="banner-left-abstract desktop">
                <img src="<?php echo $desktop_images . 'inner-pages-banner-abstract.png'; ?>" alt="Abstract">
            </div>
            <div class="banner-right-abstract desktop">
                <img src="<?php echo $desktop_images . 'inner-pages-banner-abstract.png'; ?>" alt="Abstract">
            </div>

            <div class="main-content-container">
                <div class="banner-txt d-flex flex-column justify-content-center">
                    <div class="breadcrumb">
                        <a href="<?php echo $desktop_url; ?>">Home</a> - <span class="page">Why Us</span>
                    </div>
                    <div class="page-title">
                        Why Us
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div class="white-container-bg">
            <div class="container">
                <div class="left-btm-abstract2 desktop" style="bottom: -150px;"></div>
                <div class="right-top-abstract2 desktop" style="top: -150px;"></div>

                <div class="main-content-container" style="padding: 20px 15px;">
                    <div class="page-about-feature-content d-flex justify-content-between align-items-center">
                        <div class="txt-content">
                            <div class="heading-txt">
                                Your Global IT Solution
                            </div>

                            <div class="m-creative d-flex">
                                <img src="<?php echo $desktop_images . 'careers-about-us-creativity.png'; ?>" alt="Careers">
                            </div>

                            <div class="sub-txt">
                                Excis delivers comprehensive IT services and solutions across 190+ countries, ensuring businesses stay connected and efficient worldwide. From tailored IT support to cutting-edge technology solutions, we enable seamless operations and empower growth in an ever-evolving digital landscape. With a commitment to excellence and a global reach, we are your trusted partner for all your IT needs.
                            </div>

                            <div class="desktop">
                                <div class="learn-more-btn-container d-flex justify-content-start align-items-center">
                                    <a href="<?php echo $desktop_url . 'services'; ?>">
                                        <div class="learn-more-btn d-flex align-items-center">
                                            <p>Explore Our Services</p>
                                            <div class="arrow d-flex">
                                                <img src="<?php echo $desktop_images . 'btn-arrow.png'; ?>" alt="Arrow">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="creative d-flex">
                            <img src="<?php echo $desktop_images . 'why-us-global-it-solution-creative.png'; ?>" alt="Careers">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div class="blue-container-bg">
            <div class="main-content-container">
                <div class="why-us">
                    <div class="cards d-flex justify-content-betweeen align-items-start">
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-start align-items-center">
                                <div class="card-icon-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'assured-services-icon.png'; ?>" alt="Assured Services">
                                </div>
                                <div class="text-content">
                                    <div class="heading-txt">
                                        Assured Services
                                    </div>
                                    <div class="sub-txt">
                                        We deliver reliable, high-quality IT solutions backed by a commitment to excellence, ensuring seamless operations and customer satisfaction. Our team guarantees consistent support tailored to meet your unique business needs.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-start align-items-center">
                                <div class="card-icon-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'worldwide-clients-icon.png'; ?>" alt="Worldwide Clients">
                                </div>
                                <div class="text-content">
                                    <div class="heading-txt">
                                        Worldwide Clients
                                    </div>
                                    <div class="sub-txt">
                                        Excis proudly serves a diverse portfolio of clients across 190+ countries, delivering tailored IT solutions to meet global business needs. Our commitment to excellence ensures lasting partnerships and mutual success worldwide.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-start align-items-center">
                                <div class="card-icon-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'end-to-end-service-icon.png'; ?>" alt="End to End Service">
                                </div>
                                <div class="text-content">
                                    <div class="heading-txt">
                                        End to End Service
                                    </div>
                                    <div class="sub-txt">
                                        Excis offers comprehensive IT solutions, managing every aspect of your technology needs. From initial setup to ongoing support, we ensure seamless integration, reliable performance, and consistent service across all stages of your business operations.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div class="white-container-bg">
            <div class="container">
                <div class="left-btm-abstract2 desktop" style="bottom: -150px;"></div>
                <div class="right-top-abstract2 desktop" style="top: -150px;"></div>

                <div class="main-content-container">
                    <div class="container-txt-content">
                        <div class="heading-txt">
                            Certifications
                        </div>
                        <div class="sub-txt">
                            We are committed to delivering exceptional service through adherence to the highest international standards. Our ISO certifications reflect our dedication to quality, ensuring our processes consistently meet global benchmarks. With regular audits and a focus on innovation, we continually enhance our offerings to provide superior IT solutions for you and your business.
                        </div>
                    </div>

                    <div class="iso-certifications">
                        <div class="cards d-flex justify-content-between align-items-start">
                            <div class="card">
                                <div class="card-content">
                                    <div class="iso-img d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'iso/iso-dummy-9001.png'; ?>" alt="">
                                    </div>
                                    <div class="text-content">
                                        <div class="txt1">ISO 9001:2015</div>
                                        <div class="txt2">Quality management system</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="iso-img d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'iso/iso-dummy-14001.png'; ?>" alt="">
                                    </div>
                                    <div class="text-content">
                                        <div class="txt1">ISO 14001:2015</div>
                                        <div class="txt2">Environmental management system</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="iso-img d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'iso/iso-dummy-27001.png'; ?>" alt="">
                                    </div>
                                    <div class="text-content">
                                        <div class="txt1">ISO 27001:2022</div>
                                        <div class="txt2">Information security management system</div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <div class="iso-img d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'iso/iso-dummy-45001.png'; ?>" alt="">
                                    </div>
                                    <div class="text-content">
                                        <div class="txt1">ISO 45001:2018</div>
                                        <div class="txt2">Health and safety management system</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div class="blue-container-bg">
            <div class="main-content-container">
                <div class="why-us-testimonial d-flex justify-content-between align-items-center">
                    <div class="text-content">
                        <div class="txt1">
                            Client Testimonials
                        </div>
                        <div class="heading-txt">
                            What Our Customer Says
                        </div>
                        <div class="sub-txt">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia dolor consequatur eius porro ullam repudiandae aspernatur reiciendis, sequi assumenda minima, incidunt esse asperiores labore fugiat. Illo dolor, voluptas qui alias tempora illum dicta cum repudiandae facere impedit pariatur omnis voluptatibus necessitatibus molestiae quisquam. Cupiditate ullam deserunt, illo accusantium expedita eveniet!
                        </div>
                    </div>

                    <div class="review-cards d-flex flex-column align-items-end">
                        <div class="card">
                            <div class="card-content">
                                <div class="position-quote">
                                    <div class="quote-img d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'white-quote.png'; ?>" alt="Quote">
                                    </div>
                                </div>

                                <div class="review">
                                    <div class="txt">
                                        <i>The team delivered exceptional support and resolved issues efficiently. Highly impressed!</i>
                                    </div>
                                    <div class="company-name">
                                        A Leading IT Services Company
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card middle-card">
                            <div class="card-content">
                                <div class="position-quote">
                                    <div class="quote-img d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'white-quote.png'; ?>" alt="Quote">
                                    </div>
                                </div>

                                <div class="review">
                                    <div class="txt">
                                        <i>The team delivered exceptional support and resolved issues efficiently. Highly impressed!</i>
                                    </div>
                                    <div class="company-name">
                                        A Leading IT Services Company
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-content">
                                <div class="position-quote">
                                    <div class="quote-img d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'white-quote.png'; ?>" alt="Quote">
                                    </div>
                                </div>

                                <div class="review">
                                    <div class="txt">
                                        <i>The team delivered exceptional support and resolved issues efficiently. Highly impressed!</i>
                                    </div>
                                    <div class="company-name">
                                        A Leading IT Services Company
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Global Presence -->
    <div class="full-container">
        <div class="our-presence-bg white">

            <!-- <div class="desktop">
                <div class="default-data-card-slide">
                    <div class="data d-flex flex-column">
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <p>120+</p>
                            <p>Delivery Centers</p>
                            <p>
                                Our Delivery Centers support global customers and partners by providing access to the latest technology expertise and business-oriented technology solutions.
                            </p>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="1000">
                            <p>20+</p>
                            <p>Branches</p>
                            <p>
                                Our Delivery Centers support global customers and partners by providing access to the latest technology expertise and business-oriented technology solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="countries-data-card-slide desktop">
                <div class="mobile">
                    <div class="slide-nav d-flex justify-content-between">
                        <select class="countryCityDropdown">
                            <option value="" selected disabled>Select a Region</option>
                        </select>
                        <div class="slide-close-btn">
                            ×
                        </div>
                    </div>
                </div>

                <div style="padding: 210px 15px 50px;">
                    <?php
                    include("templates/global-presence-location-data.php");
                    ?>
                </div>
            </div> -->

            <div class="exact-black-container">
                <div class="main-content-container">
                    <div class="our-presence-container">
                        <div class="title black" data-aos="fade-up" data-aos-duration="1000">
                            Our Entities
                        </div>
                        <div class="subtxt black" data-aos="fade-up" data-aos-duration="1000">
                            Excis operates in over 190+ countries, offering seamless IT support and services across the globe. Our extensive reach ensures reliable, localized assistance wherever you are. We are committed to delivering excellence worldwide.
                        </div>

                        <div class="our-presence-map d-flex justify-content-center align-items-center">
                            <div class="map-legends-container d-flex">
                                <!-- <div class="d-flex" data-aos="fade-up" data-aos-duration="1000">
                                <div class="legends-box1">
                                    <div class="inner-box"></div>
                                </div>
                                <div class="legends-txt">
                                    Excis Entities
                                </div>
                            </div>
                             <div class="d-flex" data-aos="fade-up" data-aos-duration="1000">
                                <div class="legends-box2">
                                    <div class="inner-box"></div>
                                </div>
                                <div class="legends-txt">
                                    Excis Entities
                                </div>
                            </div> -->

                                <!-- <div class="d-flex" data-aos="fade-up" data-aos-duration="1000">
                                    <select class="countryCityDropdown">
                                        <option value="" selected disabled>Select a Region</option>
                                    </select>
                                </div> -->
                            </div>

                            <div class="map-container" data-aos="fade-up" data-aos-duration="1000">
                                <div class="map-img">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'world-map.png'; ?>" alt="Our Presence in World">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("templates/footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="assets\js\global-presence-map.js"></script>

    <script>
        const navItem = document.querySelectorAll('.nav-menu .nav-block-container');
        navItem[1].querySelector('a .nav-tab-item').classList.add('active');
    </script>

    <script>
        var owl = $('.career-testimonial-carousel').owlCarousel({
            loop: true,
            responsiveClass: true,
            margin: 0,
            autoplayTimeout: 4000,
            smartSpeed: 400,
            center: true,
            nav: false, // Disable default nav
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 5
                },
                1200: {
                    items: 5
                }
            }
        });

        // Bind custom buttons to Owl Carousel methods
        document.querySelector('.testimonial-prev-btn').addEventListener('click', function() {
            owl.trigger('prev.owl.carousel');
        });

        document.querySelector('.testimonial-next-btn').addEventListener('click', function() {
            owl.trigger('next.owl.carousel');
        });
    </script>

    <script>
        // Mobile Nav Menu Hamburger
        const hamburger = document.querySelector('.m-nav .m-menu .hamburger');
        const mNavSlider = document.querySelector('.m-nav-slider');
        const mNavCloseBtn = document.querySelector('.m-nav .m-menu .nav-menu-close-btn');
        const body = document.querySelector('body');

        hamburger.onclick = () => {
            mNavSlider.classList.add('active');
            mNavCloseBtn.classList.add('active');
            hamburger.classList.remove('active');
            body.style.overflow = "hidden";
        }

        mNavCloseBtn.onclick = () => {
            mNavSlider.classList.remove('active');
            mNavCloseBtn.classList.remove('active');
            hamburger.classList.add('active');
            body.style.overflow = "auto";
        }

        // Mobile Menu Accordion 
        // Select top-level <details> (not nested within other <details>)
        const details = document.querySelectorAll(".m-nav-slider .container .menu-list details:not(details details)");

        // Add click event listener to top-level <details>
        details.forEach(detail => {
            detail.addEventListener("click", () => {
                // Close other top-level <details> if they are not the clicked one
                details.forEach(otherDetail => {
                    if (otherDetail !== detail) {
                        otherDetail.removeAttribute("open");
                    }
                });

                // Close any open nested <details> inside other <details>
                const allMenuSubDetails = document.querySelectorAll(".m-nav-slider .container .menu-list details details");
                allMenuSubDetails.forEach(subDetail => {
                    if (!detail.contains(subDetail)) {
                        subDetail.removeAttribute("open");
                    }
                });
            });
        });

        // Select nested <details> (within other <details>)
        const menuSubDetails = document.querySelectorAll(".m-nav-slider .container .menu-list details details");

        // Add click event listener to nested <details>
        menuSubDetails.forEach(detail => {
            detail.addEventListener("click", (event) => {
                // Close other nested <details> if they are not the clicked one
                menuSubDetails.forEach(otherDetail => {
                    if (otherDetail !== detail) {
                        otherDetail.removeAttribute("open");
                    }
                });

                // Close all top-level <details> except the one containing this nested <details>
                details.forEach(topDetail => {
                    if (!topDetail.contains(detail)) {
                        topDetail.removeAttribute("open");
                    }
                });

                // Stop the event from bubbling to the parent <details>
                event.stopPropagation();
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const detailsElements = document.querySelectorAll('.footer-list details');

            detailsElements.forEach(details => {
                details.addEventListener('click', function() {
                    detailsElements.forEach(otherDetails => {
                        if (otherDetails !== details && otherDetails.hasAttribute('open')) {
                            otherDetails.removeAttribute('open');
                        }
                    });
                });
            });
        });
    </script>

    <script>
        const triangles = document.querySelectorAll('.pie-containers-center-point .pie-slice');

        const infoCards = document.querySelectorAll('.pie-section-info-card');

        triangles.forEach(triangle => {

            triangle.onclick = function() {

                // Extract the class that starts with "slice-"
                const className = triangle.className;
                const sliceClass = className.split(' ').find(cls => cls.startsWith('slice-'));

                // If sliceClass exists, extract the number after "slice-"
                const sliceNumber = sliceClass ? sliceClass.split('-')[1] : '';

                // Remove 'active' class from all triangles
                triangles.forEach(triangle => {
                    triangle.classList.remove('active');
                });

                triangle.classList.add('active');

                // Remove 'active' class from all info cards
                infoCards.forEach(card => {
                    card.classList.remove('active');
                });

                // Add 'active' class to the corresponding info card (use sliceNumber - 1 if needed)
                if (sliceNumber && infoCards[sliceNumber - 1]) {
                    infoCards[sliceNumber - 1].classList.add('active');
                }
            }
        });

        window.onload = function() {
            var n = 0;
            var pieSlices = document.querySelectorAll(".pie-containers-center-point .pie-slice");

            pieSlices.forEach((slice, index) => {
                setTimeout(function() {
                    var n = index + 1;
                    slice.classList.add(`slice-${n}`);
                }, 300 * (index + 1));
            });

            setTimeout(function() {
                pieSlices[0].classList.add("active");
            }, 3100);
        };
    </script>

    <script>
        // Initialize the intl-tel-input plugin
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            initialCountry: "auto",
            separateDialCode: true,
            geoIpLookup: function(success, failure) {
                $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "us";
                    success(countryCode);
                });
            }
            // },
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // just for formatting/placeholders etc
        });

        // Log the selected country on change
        input.addEventListener("countrychange", function() {
            var selectedCountryData = iti.getSelectedCountryData();
            // console.log("Selected country:", selectedCountryData.name, selectedCountryData.dialCode);
            // console.log("Selected country phone code:", selectedCountryData.dialCode);
        });
    </script>

</body>

</html>