<?php
include('./constant.php');
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
    <meta name='copyright' content='Excis Compliance Ltd.'>
    <meta name='og:title' content='Excis Compliance Ltd.'>
    <meta name='og:type' content='image'>
    <meta name='og:url' content='https://www.excis.com'>
    <meta name='og:image' content='<?php echo $desktop_images . 'email-signature.gif'; ?>'>
    <meta name='og:description' content='Your Global IT SupportOur IT helpdesk is comprised of certified IT professionals, trained and experienced across a wide variety of vendors - Excis'>

    <title>Home - Excis Compliance</title>

    <link rel="canonical" href="https://www.excis.com">
    <link rel="icon" type="image/x-icon" href="<?php echo $desktop_images . 'favicon.ico'; ?>">
    <link rel="stylesheet" href="assets/sass/index.css">
    <link rel="stylesheet" href="assets/sass/why-excis.css">
    <link rel="stylesheet" href="assets/sass/navigation.css">
    <link rel="stylesheet" href="assets/sass/common.css">
    <link rel="stylesheet" href="assets/sass/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>
    <script>
        AOS.init();
    </script>

    <?php
    include("templates/navigation.php");
    ?>

    <!-- Landing Banner -->
    <div class="full-container">
        <div class="d-landing-banner">
            <div class="inner-content-container">
                <div class="banner-content d-flex justify-content-center align-items-center">
                    <div class="map-img">
                        <img loading="lazy" src="<?php echo $desktop_images . 'map.png'; ?>" alt="World Map">
                    </div>

                    <div class="text-content d-flex justify-content-center">
                        <div class="slogan-main-txt" data-aos="zoom-out" data-aos-duration="1000">
                            One World <br> One Team
                        </div>
                        <div class="slogan-sub-txt">
                            &nbsp; Your Global IT Solution
                        </div>
                        <a href="#">
                            <div class="banner-btn d-flex justify-content-center align-items-center">
                                <p>Let's Work Together</p>
                                <div class="arrow d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'btn-arrow.png'; ?>" alt="Excis Compliance">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div class="full-container">
        <div class="why-choose-bg">
            <div class="why-choose-container">
                <div class="left-btm-abstract desktop"></div>
                <div class="right-top-abstract desktop"></div>

                <div class="main-content-container">
                    <div class="content-container">
                        <div class="heading-txt" data-aos="fade-up" data-aos-duration="1000">
                            ABOUT US
                        </div>

                        <div class="why-choose-title d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-duration="1000">
                            <div class="title-txt">
                                Why Choose Excis?
                            </div>
                            <a href="#" class="desktop">
                                <div class="learn-more-btn d-flex justify-content-center align-items-center">
                                    <p>Learn More</p>
                                    <div class="arrow d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'btn-arrow.png'; ?>" alt="-->">
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="subtitle-txt" data-aos="fade-up" data-aos-duration="1000">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, architecto!
                        </div>

                        <div class="desktop">
                            <div class="cards d-flex justify-content-between">
                                <div class="vertical-card d-flex flex-column justify-content-between">
                                    <div class="card d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="txt">
                                            <div class="heading">
                                                4 Hour SLA
                                            </div>
                                            <div class="subtxt">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus ea recusandae maxime perferendis! Eos quasi quod animi doloremque nobis nulla!
                                            </div>
                                        </div>
                                        <div class="card-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . '4-hour-sla.png'; ?>" alt="4 Hour SLA">
                                        </div>
                                    </div>
                                    <div class="card d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="txt">
                                            <div class="heading">
                                                24/7 Support
                                            </div>
                                            <div class="subtxt">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga aliquid iusto
                                                sunt dignissimos eum architecto, natus mollitia temporibus nulla rem.
                                            </div>
                                        </div>
                                        <div class="card-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . '24-7-support.png'; ?>" alt="24/7 Support">
                                        </div>
                                    </div>
                                    <div class="extra-vertical-card">
                                        <div class="card d-flex justify-content-between align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="txt">
                                                <div class="heading">
                                                    Flexible IT Solutions
                                                </div>
                                                <div class="subtxt">
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga aliquid iusto
                                                    sunt dignissimos eum architecto, natus mollitia temporibus nulla rem.
                                                </div>
                                            </div>
                                            <div class="card-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'flexible-it-solution.png'; ?>" alt="Flexible IT Solution">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="horizontal-card">
                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="txt">
                                            <div class="heading">
                                                Flexible IT Solutions
                                            </div>

                                            <div class="subtxt">
                                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam illum
                                                aperiam voluptates, numquam facere repellendus.
                                            </div>
                                        </div>
                                        <div class="card-img-container">
                                            <div class="card-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'flexible-it-solution.png'; ?>" alt="Flexible IT Solution">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mobile">
                            <div class="cards d-flex flex-column">
                                <div class="card">
                                    <div class="card-content d-flex justify-content-between align-items-center">
                                        <div class="left-portion d-flex align-items-center">
                                            <div class="card-icon-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'help-desk-icon.png'; ?>" alt="">
                                            </div>
                                            <div class="titletxt">
                                                4 Hour SLA
                                            </div>
                                        </div>
                                        <div class="forward-arrow-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content d-flex justify-content-between align-items-center">
                                        <div class="left-portion d-flex align-items-center">
                                            <div class="card-icon-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'data-security-icon.png'; ?>" alt="">
                                            </div>
                                            <div class="titletxt">
                                                24/7 Support
                                            </div>
                                        </div>
                                        <div class="forward-arrow-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content d-flex justify-content-between align-items-center">
                                        <div class="left-portion d-flex align-items-center">
                                            <div class="card-icon-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'email-security-icon.png'; ?>" alt="">
                                            </div>
                                            <div class="titletxt">
                                                Flexible IT Soultions
                                            </div>
                                        </div>
                                        <div class="forward-arrow-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="">
                                        </div>
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
        <div class="our-presence-bg">
            <div class="desktop">
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
            </div>

            <div class="countries-data-card-slide desktop">
                <div class="slide-nav d-flex justify-content-between">
                    <select class="countryCityDropdown">
                        <option value="" selected disabled>Select a Region</option>
                    </select>
                    <div class="slide-close-btn">
                        ×
                    </div>
                </div>

                <?php
                include("templates/global-presence-location-data.php");
                ?>
            </div>

            <div class="exact-black-container">
                <div class="main-content-container">
                    <div class="our-presence-container">
                        <div class="title" data-aos="fade-up" data-aos-duration="1000">
                            Our Global Presence
                        </div>
                        <div class="subtxt" data-aos="fade-up" data-aos-duration="1000">
                            Lorem ipsum, dolor sit adipisicing elit. Quia, omnis quae. Sequi
                            quis culpa cumque, deserunt unde?
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

                                <div class="d-flex" data-aos="fade-up" data-aos-duration="1000">
                                    <select class="countryCityDropdown">
                                        <option value="" selected disabled>Select a Region</option>
                                    </select>
                                </div>
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

    <!-- Our Services -->
    <div class="full-container">
        <div class="our-services-bg">
            <div class="our-services-container">
                <div class="left-btm-abstract desktop"></div>
                <div class="right-top-abstract desktop"></div>

                <div class="main-content-container">
                    <div class="content-container">
                        <div class="title-txt" data-aos="fade-up" data-aos-duration="1000">
                            Our Services
                        </div>
                        <div class="subtitle-txt" data-aos="fade-up" data-aos-duration="1000">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                            quis culpa cumque, laboriosam deserunt unde?
                        </div>

                        <div class="service-cards-container">
                            <div class="desktop">
                                <div class="cards">
                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'help-desk-icon.png'; ?>" alt="Help Desk">
                                            </div>
                                            <div class="title">
                                                Help Desk
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'helpdesk.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'data-security-icon.png'; ?>" alt="Data Security">
                                            </div>
                                            <div class="title">
                                                Data Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'data-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'help-desk-icon.png'; ?>" alt="Email Security">
                                            </div>
                                            <div class="title">
                                                Email Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'email-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'web-security-icon.png'; ?>" alt="Web Security">
                                            </div>
                                            <div class="title">
                                                Web Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'web-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'application-security-icon.png'; ?>" alt="Application Security">
                                            </div>
                                            <div class="title">
                                                Application Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'application-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'hybrid-cloud-icon.png'; ?>" alt="Hybrid Cloud">
                                            </div>
                                            <div class="title">
                                                Hybrid Cloud
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'hybrid-cloud.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mobile">
                                <div class="cards d-flex flex-column">
                                    <a href="<?php echo $desktop_url . 'helpdesk.php'; ?>">
                                        <div class="card">
                                            <div class="card-content d-flex justify-content-between align-items-center">
                                                <div class="left-portion d-flex align-items-center">
                                                    <div class="card-icon-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'help-desk-icon.png'; ?>" alt="">
                                                    </div>
                                                    <div class="titletxt">
                                                        Help Desk
                                                    </div>
                                                </div>
                                                <div class="forward-arrow-img d-flex">
                                                    <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="<?php echo $desktop_url . 'data-security.php'; ?>">
                                        <div class="card">
                                            <div class="card-content d-flex justify-content-between align-items-center">
                                                <div class="left-portion d-flex align-items-center">
                                                    <div class="card-icon-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'data-security-icon.png'; ?>" alt="">
                                                    </div>
                                                    <div class="titletxt">
                                                        Data Security
                                                    </div>
                                                </div>
                                                <div class="forward-arrow-img d-flex">
                                                    <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="<?php echo $desktop_url . 'email-security.php'; ?>">
                                        <div class="card">
                                            <div class="card-content d-flex justify-content-between align-items-center">
                                                <div class="left-portion d-flex align-items-center">
                                                    <div class="card-icon-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'email-security-icon.png'; ?>" alt="">
                                                    </div>
                                                    <div class="titletxt">
                                                        Email Security
                                                    </div>
                                                </div>
                                                <div class="forward-arrow-img d-flex">
                                                    <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <a href="#">
                            <div class="learn-more-btn-container d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                <p><span class="desktop">View All</span> <span class="mobile">View All Services</span></p>
                                <div class="arrow-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'btn-arrow.png'; ?>" alt="-->">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div class="full-container">
        <div class="stats-bg" data-aos="fade-up" data-aos-duration="1000">
            <div class="main-content-container">
                <div class="content-container desktop">
                    <div class="stats-space d-flex justify-content-between align-items-center">
                        <div class="stats-column" data-aos="fade-up" data-aos-duration="1000">
                            <p>50000+</p>
                            <p>Tickets Per Month</p>
                        </div>
                        <div class="stats-line-breaker" data-aos="fade-up" data-aos-duration="1000"></div>
                        <div class="stats-column" data-aos="fade-up" data-aos-duration="1000">
                            <p>200+</p>
                            <p>Enterprise Clients</p>
                        </div>
                        <div class="stats-line-breaker" data-aos="fade-up" data-aos-duration="1000"></div>
                        <div class="stats-column" data-aos="fade-up" data-aos-duration="1000">
                            <p>100+</p>
                            <p>Countries</p>
                        </div>
                    </div>
                </div>

                <div class="mobile">
                    <div class="content-container d-flex flex-column">
                        <div class="stats-container d-flex justify-content-start" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon-img d-flex">
                                <img loading="lazy" src="<?php echo $desktop_images . 'trophy-icon.png'; ?>" alt="">
                            </div>
                            <div class="stats-txt">
                                <p>50K+</p>
                                <p>Tickets Per Month</p>
                            </div>
                        </div>
                        <div class="stats-container d-flex justify-content-start" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon-img d-flex">
                                <img loading="lazy" src="<?php echo $desktop_images . 'trophy-icon.png'; ?>" alt="">
                            </div>
                            <div class="stats-txt">
                                <p>200+</p>
                                <p>Enterprise Clients</p>
                            </div>
                        </div>
                        <div class="stats-container d-flex justify-content-start" data-aos="fade-up" data-aos-duration="1000">
                            <div class="icon-img d-flex">
                                <img loading="lazy" src="<?php echo $desktop_images . 'trophy-icon.png'; ?>" alt="">
                            </div>
                            <div class="stats-txt">
                                <p>100+</p>
                                <p>Countries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Core Values & Case Studies -->
    <div class="full-container">
        <div class="core-values-bg">
            <div class="core-values-container">
                <div class="left-btm-abstract desktop"></div>
                <div class="right-top-abstract desktop"></div>

                <div class="core-values">
                    <div class="main-content-container">
                        <div class="content-container">
                            <div class="title-txt" data-aos="fade-up" data-aos-duration="1000">
                                Our Core Values
                            </div>
                            <div class="subtitle-txt" data-aos="fade-up" data-aos-duration="1000">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet quis culpa cumque, laboriosam deserunt unde?
                            </div>

                            <div class="cards-container">
                                <div class="cards d-flex justify-content-between align-items-center">
                                    <div class="card d-flex justify-content-start align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="icon-img d-flex justify-content-center align-items-center">
                                            <div class="icon-img-bg d-flex justify-content-center align-items-center">
                                                <div class="img d-flex">
                                                    <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Integrity & Ethics">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="title">
                                            Integrity & Ethics
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-start align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="icon-img d-flex justify-content-center align-items-center">
                                            <div class="icon-img-bg d-flex justify-content-center align-items-center">
                                                <div class="img d-flex">
                                                    <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Emp Development">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="title">
                                            Emp Development
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-start align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="icon-img d-flex justify-content-center align-items-center">
                                            <div class="icon-img-bg d-flex justify-content-center align-items-center">
                                                <div class="img d-flex">
                                                    <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Trust & Teamwork">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="title">
                                            Trust & Teamwork
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="case-studies">
                    <div class="main-content-container">
                        <div class="content-container">
                            <div class="title-txt" data-aos="fade-up" data-aos-duration="1000">
                                Case Studies
                            </div>
                            <div class="subtitle-txt" data-aos="fade-up" data-aos-duration="1000">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                                quis culpa cumque, laboriosam deserunt unde?
                            </div>

                            <div class="case-studies-container">
                                <div class="cards d-flex justify-content-between align-items-start">
                                    <a href="#" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card">
                                            <div class="creative d-flex justify-content-center align-items-center">
                                                <div class="img d-flex">
                                                    <img loading="lazy" src="<?php echo $desktop_images . 'case-studies-card-creative.png'; ?>" alt="Retai">
                                                </div>
                                            </div>
                                            <div class="txt-content">
                                                <div class="case-study-type">
                                                    RETAIL
                                                </div>

                                                <div class="case-study-type-heading">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, odit.
                                                </div>

                                                <div class="case-study-type-desc">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum
                                                    distinctio vel praesentium voluptatibus possimus illum et velit harum neque.
                                                </div>

                                                <div class="case-study-read-more">
                                                    Read More...
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card">
                                            <div class="creative d-flex justify-content-center align-items-center">
                                                <div class="img d-flex">
                                                    <img loading="lazy" src="<?php echo $desktop_images . 'case-studies-card-creative.png'; ?>" alt="Retai">
                                                </div>
                                            </div>
                                            <div class="txt-content">
                                                <div class="case-study-type">
                                                    RETAIL
                                                </div>

                                                <div class="case-study-type-heading">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, odit.
                                                </div>

                                                <div class="case-study-type-desc">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum
                                                    distinctio vel praesentium voluptatibus possimus illum et velit harum neque.
                                                </div>

                                                <div class="case-study-read-more">
                                                    Read More...
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="card">
                                            <div class="creative d-flex justify-content-center align-items-center">
                                                <div class="img d-flex">
                                                    <img loading="lazy" src="<?php echo $desktop_images . 'case-studies-card-creative.png'; ?>" alt="Retai">
                                                </div>
                                            </div>
                                            <div class="txt-content">
                                                <div class="case-study-type">
                                                    RETAIL
                                                </div>

                                                <div class="case-study-type-heading">
                                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, odit.
                                                </div>

                                                <div class="case-study-type-desc">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum
                                                    distinctio vel praesentium voluptatibus possimus illum et velit harum neque.
                                                </div>

                                                <div class="case-study-read-more">
                                                    Read More...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <a href="#">
                                <div class="learn-more-btn-container d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000">
                                    <p>View All</p>
                                    <div class="arrow-img d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'btn-arrow.png'; ?>" alt="-->">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Clients & Partners -->
    <div class="full-container">
        <div class="partners-bg" data-aos="fade-up" data-aos-duration="1000">
            <div class="main-content-container">
                <div class="title-txt" data-aos="fade-up" data-aos-duration="1000">
                    Partners
                </div>

                <div class="partner-cards d-flex" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="logo-img-25 d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'partners/airmagnet.jpg' ?>" alt="">
                        </div>
                    </div>
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="logo-img-30 d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'partner-lenovo.png' ?>" alt="">
                        </div>
                    </div>
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="logo-img-60 d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'partner-dell.png' ?>" alt="">
                        </div>
                    </div>
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="logo-img-20 d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'partner-vmware.png' ?>" alt="">
                        </div>
                    </div>
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="logo-img-35 d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'partner-deutsche-bank.png' ?>" alt="">
                        </div>
                    </div>
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="logo-img-35 d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'partner-cisco.png' ?>" alt="">
                        </div>
                    </div>
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="logo-img-25 d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'partner-nokia.png' ?>" alt="">
                        </div>
                    </div>
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="logo-img-25 d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'partner-microsoft.png' ?>" alt="">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="assets\js\global-presence-map.js"></script>

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