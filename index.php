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
    <link rel="stylesheet" href="assets/sass/contact-us.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <style>
        .submitBtn {
            background: rgb(27, 49, 93, 0.8);
        }

        .submitBtn:hover {
            background: rgb(27, 49, 93, 1);
        }
    </style>

</head>

<body>
    <script>
        AOS.init();
    </script>

    <!-- Navigation Panel -->
    <div class="pg-nav-sticky">
        <div class="full-container">
            <div class="desktop black-nav-container">
                <div class="main-content-container d-flex justify-content-between">
                    <div class="left-content d-flex">
                        <a href="#" title="Career">
                            <div class="block-txt d-flex align-items-center">
                                Career
                            </div>
                        </a>
                        <a href="#" title="CSR">
                            <div class="block-txt d-flex align-items-center">
                                CSR
                            </div>
                        </a>
                        <a href="#" title="News">
                            <div class="block-txt d-flex align-items-center">
                                News
                            </div>
                        </a>
                    </div>

                    <div class="middle-content d-flex align-items-center">
                        <p>Now Hiring :</p>
                        <p>Are you a driven and motivated 1st Line IT Support Engineer?</p>
                    </div>

                    <a href="#" class="right-content d-flex align-items-center" title="Excis Worldwide">
                        <div class="img-and-txt d-flex">
                            <div class="icon-img d-flex align-items-center">
                                <img loading="lazy" src="<?php echo $desktop_images . 'global-presence.png'; ?>" alt="Global Presence">
                            </div>
                            <p>Global | EN</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="main-nav-container">
                <div class="main-content-container d-flex justify-content-between">
                    <a href="<?php echo $desktop_url; ?>" title="Excis Logo" class="left-content d-flex align-items-center">
                        <div class="logo-img d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'main-logo.png'; ?>" alt="Excis">
                        </div>
                    </a>

                    <div class="desktop">
                        <ul class="middle-content d-flex align-items-center">
                            <li class="nav-block-container d-flex align-items-center">
                                <a href="<?php echo $desktop_url . 'about-us.php'; ?>">
                                    <div class="nav-tab-item d-flex align-items-center">
                                        About Us
                                    </div>
                                </a>
                            </li>
                            <li class="nav-block-container d-flex align-items-center">
                                <a href="<?php echo $desktop_url . 'services'; ?>">
                                    <div class="nav-tab-item d-flex align-items-center">
                                        Services
                                    </div>
                                </a>

                                <div class="nav-tab-dropdown">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <ul>
                                            <li class="title">Infrastructure</li>
                                            <li><a href="<?php echo $desktop_url . 'services/network.php'; ?>">Network</a></li>
                                            <li><a href="<?php echo $desktop_url . 'services/data-center-support.php'; ?>">Data Center Support</a></li>
                                            <li><a href="<?php echo $desktop_url . 'services/end-user-support.php'; ?>">End User Support</a></li>
                                            <li><a href="<?php echo $desktop_url . 'services/audio-visual.php'; ?>">Audio-Visual</a></li>
                                            <li><a href="<?php echo $desktop_url . 'services/wifi-services.php'; ?>">WiFi Services</a></li>
                                            <li><a href="<?php echo $desktop_url . 'services/operating-system.php'; ?>">Operating System</a></li>
                                            <li><a href="<?php echo $desktop_url . 'services/new-office-and-migration-solutions.php'; ?>">New Office + Migration <br> Solutions</a></li>
                                            <li><a href="<?php echo $desktop_url . 'services/helpdesk.php'; ?>">Helpdesk</a></li>
                                            <li><a href="<?php echo $desktop_url . 'services/storage-as-a-service.php'; ?>">Storage As A Service (SAAS)</a></li>
                                            <li><a href="<?php echo $desktop_url . 'services/device-as-a-service.php'; ?>">Device As A Service (DAAS)</a></li>
                                        </ul>

                                        <div>
                                            <ul>
                                                <li class="title">Cyber Security Services</li>
                                                <li><a href="<?php echo $desktop_url . 'services/cyber-security-consulting.php'; ?>">Cyber Security Consulting</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/end-point-security.php'; ?>">End Point Security</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/network-security.php'; ?>">Network Security</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/application-security.php'; ?>">Application Security</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/web-security.php'; ?>">Web Security</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/email-security.php'; ?>">Email Security</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/hybrid-cloud-security.php'; ?>">Hybrid Cloud Security</a></li>
                                            </ul>
                                        </div>

                                        <div>
                                            <ul>
                                                <li class="title">Cloud Services</li>
                                                <li><a href="<?php echo $desktop_url . 'services/public-cloud-integartion-and-migration.php'; ?>">Public Cloud Integration And Migration (AWS, Azure, GCP)</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/private-cloud-solutions.php'; ?>">Private Cloud Solutions</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/hybrid-cloud.php'; ?>">Hybrid Cloud</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/office-365-and-g-suite-migration-and-integraion.php'; ?>">Office 365 And G-Suite Migration + Integration</a></li>
                                            </ul>

                                            <ul>
                                                <li class="title">Development</li>
                                                <li><a href="<?php echo $desktop_url . 'services/software-and-application-development.php'; ?>">Software And Application Development</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/api-integration.php'; ?>">API Integration</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/network-and-system-automation.php'; ?>">Network And System Automation</a></li>
                                            </ul>

                                            <!-- <ul>
                                                <li class="title">Depot</li>
                                                <li><a href="<?php echo $desktop_url . 'services/warehousing.php'; ?>">Warehousing</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/logistics.php'; ?>">Logistics</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/staging.php'; ?>">Staging</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/wiping-and-disposal.php'; ?>">Wiping + Disposal</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/pmo.php'; ?>">PMO</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/noc-services.php'; ?>">NOC Services</a></li>
                                                <li><a href="<?php echo $desktop_url . 'services/soc-services.php'; ?>">SOC Services</a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-block-container d-flex align-items-center">
                                <a href="<?php echo $desktop_url . 'industries'; ?>">
                                    <div class="nav-tab-item d-flex align-items-center">
                                        Industries
                                    </div>
                                </a>

                                <div class="nav-tab-dropdown">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <ul>
                                            <li><a href="<?php echo $desktop_url . 'industries/retail.php'; ?>">Retail</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/energy.php'; ?>">Energy</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/life-sciences.php'; ?>">Life Sciences</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/financial-services.php'; ?>">Financial Services (FS&I)</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/telecoms.php'; ?>">Telecoms</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/utilities.php'; ?>">Utilities</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/public-sector.php'; ?>">Public Sector</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/manufacturing.php'; ?>">Manufacturing</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/education.php'; ?>">Education</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/it-and-consulting.php'; ?>">IT & Consulting</a></li>
                                            <li><a href="<?php echo $desktop_url . 'industries/consumer-goods.php'; ?>">Consumer Goods</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-block-container d-flex align-items-center">
                                <a href="<?php echo $desktop_url . 'insights/'; ?>">
                                    <div class="nav-tab-item d-flex align-items-center">
                                        Insights
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="d-flex align-items-center">
                        <a href="<?php echo $desktop_url . 'contact-us.php'; ?>" class="right-content desktop">
                            <div class="contact-us-btn d-flex justify-content-center align-items-center">
                                Contact Us
                            </div>
                        </a>
                    </div>

                    <div class="mobile">
                        <div class="m-nav d-flex align-items-center">
                            <a href="#">
                                <div class="global-icon-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'global-presence-black.png'; ?>" alt="Global Presence">
                                </div>
                            </a>

                            <div class="hamburger d-flex align-items-center justify-content-end">
                                <div class="middle-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                            <img loading="lazy" src="<?php echo $desktop_images . 'about-us-creative.png'; ?>" alt="4 Hour SLA">
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
                                            <img loading="lazy" src="<?php echo $desktop_images . 'about-us-creative.png'; ?>" alt="24/7 Support">
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
                                                <img loading="lazy" src="<?php echo $desktop_images . 'about-us-creative.png'; ?>" alt="Flexible IT Solution">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="horizontal-card">
                                    <div class="card d-flex justify-content-between" data-aos="fade-left" data-aos-duration="1000">
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
                                                <img loading="lazy" src="<?php echo $desktop_images . 'about-us-creative.png'; ?>" alt="Flexible IT Solution">
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
                        <div>
                            <p>120+</p>
                            <p>Delivery Centers</p>
                            <p>
                                Our Delivery Centers support global customers and partners by providing access to the latest technology expertise and business-oriented technology solutions.
                            </p>
                        </div>
                        <div>
                            <p>20+</p>
                            <p>Branches</p>
                            <p>
                                Our Delivery Centers support global customers and partners by providing access to the latest technology expertise and business-oriented technology solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="countries-data-card-slide">
                <div>
                    <div class="slide-nav d-flex justify-content-between">
                        <select class="countryCityDropdown">
                            <option value="" selected disabled>Select a Region</option>
                        </select>
                        <div class="slide-close-btn">
                            ×
                        </div>
                    </div>
                </div>

                <?php
                include("./global-presence-location-data.php");
                ?>
            </div>

            <div class="exact-black-container">
                <div class="main-content-container">
                    <div class="our-presence-container">
                        <div class="title" data-aos="zoom-out" data-aos-duration="1000">
                            Our Global Presence
                        </div>
                        <div class="subtxt" data-aos="zoom-out" data-aos-duration="1000">
                            Lorem ipsum, dolor sit adipisicing elit. Quia, omnis quae. Sequi
                            quis culpa cumque, deserunt unde?
                        </div>

                        <div class="our-presence-map d-flex justify-content-center align-items-center">
                            <div class="map-legends-container d-flex">
                                <!-- <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                                <div class="legends-box1">
                                    <div class="inner-box"></div>
                                </div>
                                <div class="legends-txt">
                                    Excis Entities
                                </div>
                            </div>
                             <div class="d-flex" data-aos="fade-left" data-aos-duration="1000">
                                <div class="legends-box2">
                                    <div class="inner-box"></div>
                                </div>
                                <div class="legends-txt">
                                    Excis Entities
                                </div>
                            </div> -->

                                <div class="d-flex" data-aos="fade-left" data-aos-duration="1000">
                                    <select class="countryCityDropdown">
                                        <option value="" selected disabled>Select a Region</option>
                                    </select>
                                </div>
                            </div>

                            <div class="map-container" data-aos="zoom-in" data-aos-duration="1000">
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
                        <div class="title-txt" data-aos="zoom-out" data-aos-duration="1000">
                            Our Services
                        </div>
                        <div class="subtitle-txt" data-aos="zoom-out" data-aos-duration="1000">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                            quis culpa cumque, laboriosam deserunt unde?
                        </div>

                        <div class="service-cards-container">
                            <div class="desktop">
                                <div class="cards">
                                    <div class="card d-flex justify-content-between" data-aos="fade-right" data-aos-duration="1000">
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
                                            <a href="#">
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
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-left" data-aos-duration="1000">
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
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-right" data-aos-duration="1000">
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
                                            <a href="#">
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
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-left" data-aos-duration="1000">
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
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
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
                                                    Help Desk
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
                                                    Data Security
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
                                                    Email Security
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
                        <div class="stats-column" data-aos="fade-right" data-aos-duration="1000">
                            <p>50000+</p>
                            <p>Tickets Per Month</p>
                        </div>
                        <div class="stats-line-breaker" data-aos="fade-up" data-aos-duration="1000"></div>
                        <div class="stats-column" data-aos="fade-up" data-aos-duration="1000">
                            <p>200+</p>
                            <p>Enterprise Clients</p>
                        </div>
                        <div class="stats-line-breaker" data-aos="fade-up" data-aos-duration="1000"></div>
                        <div class="stats-column" data-aos="fade-left" data-aos-duration="1000">
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
                <div class="left-btm-abstract"></div>
                <div class="right-top-abstract"></div>

                <div class="core-values">
                    <div class="main-content-container">
                        <div class="content-container">
                            <div class="title-txt" data-aos="zoom-out" data-aos-duration="1000">
                                Our Core Values
                            </div>
                            <div class="subtitle-txt" data-aos="zoom-out" data-aos-duration="1000">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet quis culpa cumque, laboriosam deserunt unde?
                            </div>

                            <div class="cards-container">
                                <div class="cards d-flex justify-content-between align-items-center">
                                    <div class="card d-flex justify-content-start align-items-center" data-aos="fade-right" data-aos-duration="1000">
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

                                    <div class="card d-flex justify-content-start align-items-center" data-aos="fade-left" data-aos-duration="1000">
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
                            <div class="title-txt" data-aos="zoom-out" data-aos-duration="1000">
                                Case Studies
                            </div>
                            <div class="subtitle-txt" data-aos="zoom-out" data-aos-duration="1000">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                                quis culpa cumque, laboriosam deserunt unde?
                            </div>

                            <div class="case-studies-container">
                                <div class="cards d-flex justify-content-between align-items-start">
                                    <a href="#" data-aos="fade-right" data-aos-duration="1000">
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

                                    <a href="#" data-aos="fade-left" data-aos-duration="1000">
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
                <div class="title-txt" data-aos="zoom-out" data-aos-duration="1000">
                    Lorem ipsum dolor sit amet.
                </div>

                <div class="partner-cards d-flex" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card d-flex justify-content-center align-items-center">
                        <div class="logo-img-25 d-flex">
                            <img loading="lazy" src="<?php echo $desktop_images . 'partner-microsoft.png' ?>" alt="">
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
                </div>
            </div>
        </div>
    </div>

    <?php
    include("./footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="assets\js\global-presence-map.js"></script>

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