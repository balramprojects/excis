<?php
require_once('./constant.php');
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

        .drop {
            box-shadow: 0px 0px 1px 1px #cfd3da;
        }

        .core-values-card:hover .drop {
            animation: drop 1.3s infinite;
        }

        @keyframes drop {
            0% {
                box-shadow: 0 0 0 0px rgb(27, 49, 93, 0.4);
            }

            100% {
                box-shadow: 0 0 0 15px rgb(27, 49, 93, 0);
            }
        }

        .services-list,
        .services-list-backdrop {
            display: none;
        }

        .services:hover .services-list {
            display: block;
        }

        .services:hover .services-list-backdrop {
            display: block;
        }

        .services-list-backdrop:hover {
            display: none;
        }

        .case-studies-card:hover {
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.15);
        }



        .partner-cards {
            min-width: 248px;
            border: 1px solid rgb(255, 255, 255, 0.1);
            filter: grayscale(1);
            transition: all .3s ease-in-out;
            cursor: pointer;
        }

        .partner-cards:hover {
            background: rgb(255, 255, 255, 1);
            border: 1px solid #fff;
            filter: grayscale(0);
            transition: all .3s ease-in-out;
        }
    </style>

</head>

<body>
    <script>
        AOS.init();
    </script>

    <!-- Navigation -->
    <div class="pg-nav-sticky">
        <div class="full-container">
            <div class="black-nav-container">
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
                                <img loading="lazy" src="<?php echo $desktop_images . 'global-presence.png'; ?>" alt="Global">
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

                    <ul class="middle-content d-flex align-items-center">
                        <li class="nav-block-container d-flex align-items-center">
                            <a href="<?php echo $desktop_url . 'services'; ?>">
                                <div class="nav-tab-item d-flex align-items-center">
                                    Services
                                </div>
                            </a>

                            <div class="nav-tab-dropdown">
                                <div class="d-flex justify-content-center align-items-start">
                                    <ul>
                                        <li>Infrastructure</li>
                                        <li><a href="#">Network</a></li>
                                        <li><a href="#">Data Center Support</a></li>
                                        <li><a href="#">End User Support</a></li>
                                        <li><a href="#">Audio-Visual</a></li>
                                        <li><a href="#">WiFi Services</a></li>
                                        <li><a href="#">Operating System</a></li>
                                        <li><a href="#">New Office + Migration <br> Solutions</a></li>
                                        <li><a href="#">Helpdesk</a></li>
                                        <li><a href="#">Storage As A Service (SAAS)</a></li>
                                        <li><a href="#">Device As A Service (DAAS)</a></li>
                                    </ul>

                                    <div>
                                        <ul>
                                            <li>Cyber Security Services</li>
                                            <li><a href="#">Cyber Security Consulting</a></li>
                                            <li><a href="#">End Point Security</a></li>
                                            <li><a href="#">Network Security</a></li>
                                            <li><a href="#">Application Security</a></li>
                                            <li><a href="#">Web Security</a></li>
                                            <li><a href="#">Email Security</a></li>
                                            <li><a href="#">Hybrid Cloud Security</a></li>
                                        </ul>

                                        <ul>
                                            <li>Development</li>
                                            <li><a href="#">Software And Application Development</a></li>
                                            <li><a href="#">API Integration</a></li>
                                            <li><a href="#">Network And Systems Automation</a></li>
                                        </ul>
                                    </div>

                                    <div>
                                        <ul>
                                            <li>Cloud Services</li>
                                            <li><a href="#">Public Cloud Integration And Migration (AWS, Azure, GCP)</a></li>
                                            <li><a href="#">Private Cloud Solutions</a></li>
                                            <li><a href="#">Hybrid Cloud</a></li>
                                            <li><a href="#">Office 365 And G-Suite Migration + Integration</a></li>
                                        </ul>

                                        <ul>
                                            <li>Depot</li>
                                            <li><a href="#">Warehousing</a></li>
                                            <li><a href="#">Logistics</a></li>
                                            <li><a href="#">Staging</a></li>
                                            <li><a href="#">Wiping + Disposal</a></li>
                                            <li><a href="#">PMO</a></li>
                                            <li><a href="#">NOC Services</a></li>
                                            <li><a href="#">SOC Services</a></li>
                                        </ul>
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
                        </li>

                        <li class="nav-block-container d-flex align-items-center">
                            <a href="<?php echo $desktop_url . 'insights/'; ?>">
                                <div class="nav-tab-item d-flex align-items-center">
                                    Insights
                                </div>
                            </a>
                        </li>
                    </ul>

                    <a href="<?php echo $desktop_url . 'contact-us'; ?>" class="right-content d-flex align-items-center">
                        <div class="contact-us-btn d-flex justify-content-center align-items-center">
                            Contact Us
                        </div>
                    </a>
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
                <div class="left-btm-abstract"></div>
                <div class="right-top-abstract"></div>

                <div class="main-content-container">
                    <div class="content-container">
                        <div class="heading-txt" data-aos="fade-up" data-aos-duration="1000">
                            ABOUT US
                        </div>
                        <div class="d-flex justify-content-between align-items-start" data-aos="fade-up" data-aos-duration="1000">
                            <div class="why-choose-title">
                                <div class="why-choose-title-txt">
                                    Why Choose Excis?
                                </div>
                                <div class="why-choose-subtitle-txt">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, architecto!
                                </div>
                            </div>
                            <div class="learn-more-btn d-flex justify-content-center align-items-center">
                                <p>Learn More</p>
                                <div class="arrow d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'btn-arrow.png'; ?>" alt="-->">
                                </div>
                            </div>
                        </div>

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
                                    <div class="card-img">
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
                                    <div class="card-img">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'about-us-creative.png'; ?>" alt="24/7 Support">
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
                                        <div class="card-img">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'about-us-creative.png'; ?>" alt="Flexible IT Solution">
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

    <div class="full-container">
        <div class="our-presence-bg">
            <div class="main-content-container">
                <div class="our-presence-container">
                    <div class="title" data-aos="zoom-out" data-aos-duration="1000">
                        Our Global Presence
                    </div>
                    <div class="subtxt" data-aos="zoom-out" data-aos-duration="1000">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                        quis culpa cumque, laboriosam deserunt unde?
                    </div>

                    <div class="our-presence-map d-flex justify-content-center align-items-center">
                        <div class="map-legends-container d-flex">
                            <div class="d-flex" data-aos="fade-right" data-aos-duration="1000">
                                <div class="legends-box1">
                                    <div class="inner-box"></div>
                                </div>
                                <div class="legends-txt">
                                    Excis Offices
                                </div>
                            </div>
                            <div class="d-flex" data-aos="fade-left" data-aos-duration="1000">
                                <div class="legends-box2">
                                    <div class="inner-box"></div>
                                </div>
                                <div class="legends-txt">
                                    Excis Entities
                                </div>
                            </div>
                        </div>

                        <div class="map-container" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="map-img">
                                <img loading="lazy" src="<?php echo $desktop_images . 'world-map.png'; ?>" alt="Our Presence in World">
                            </div>

                            <div class="countries-position active navimumbai" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="countries-spot-point branch"></div>
                                <div class="countries-spot-container">
                                    <div class="country-name">India</div>
                                    <ul class="city-name">
                                        <li>Navi-Mumbai</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position mexico">
                                <div class="countries-spot-point branch"></div>
                                <div class="countries-spot-container">
                                    <div class="country-name">USA</div>
                                    <ul class="city-name">
                                        <li>Mexico</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position madagascar">
                                <div class="countries-spot-point branch"></div>
                                <div class="countries-spot-container">
                                    <div class="country-name">Madagascar</div>
                                    <ul class="city-name">
                                        <li>Antananarivo</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position southafrica">
                                <div class="countries-spot-point branch"></div>
                                <div class="countries-spot-container">
                                    <div class="country-name">South Africa</div>
                                    <ul class="city-name">
                                        <li>Capetown</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position uk">
                                <div class="countries-spot-point branch"></div>
                                <div class="countries-spot-container">
                                    <div class="country-name">United Kingdom</div>
                                    <ul class="city-name">
                                        <li>Bracknell</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position russia">
                                <div class="countries-spot-point entities"></div>
                                <div class="countries-spot-container">
                                    <div class="country-name">Russia</div>
                                    <ul class="city-name">
                                        <li>Moscow</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position thailand">
                                <div class="countries-spot-point entities"></div>
                                <div class="countries-spot-container">
                                    <div class="country-name">Thailand</div>
                                    <ul class="city-name">
                                        <li>Phuket</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div class="our-services-bg">
            <div class="our-services-container">
                <div class="left-btm-abstract"></div>
                <div class="right-top-abstract"></div>

                <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                    <div style="width: 100%;">
                        <div style="font-size: 36px; font-weight: 500; text-align: center; color: #F58520;">
                            Our Services
                        </div>
                        <div
                            style="max-width: 500px; font-size: 14px; font-weight: 400; line-height: 22px; text-align: center; padding: 10px 0 0; margin-inline: auto; color: #252525;">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                            quis culpa cumque, laboriosam deserunt unde?
                        </div>

                        <div style="padding: 30px 0 0;">
                            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/help-desk-icon.png" alt="">
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Help Desk
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;"
                                        class="d-flex justify-content-center align-items-center">
                                        <a href="#"
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/data-security-icon.png" alt="">
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Data Security
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;"
                                        class="d-flex justify-content-center align-items-center">
                                        <a href="#"
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/data-security-icon.png" alt="">
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Email Security
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;"
                                        class="d-flex justify-content-center align-items-center">
                                        <a href="#"
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/web-security-icon.png" alt="">
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Web Security
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;"
                                        class="d-flex justify-content-center align-items-center">
                                        <a href="#"
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/application-security-icon.png" alt="">
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Application Security
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;"
                                        class="d-flex justify-content-center align-items-center">
                                        <a href="#"
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/hybrid-cloud-icon.png" alt="">
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Hybrid Cloud
                                        </div>

                                        <div
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;"
                                        class="d-flex justify-content-center align-items-center">
                                        <a href="#"
                                            style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="width: fit-content; padding: 14px 45px; margin: 40px auto 0; color: #252525; background: #fff; gap: 12px; border: 1px solid #252525; border-radius: 10px;"
                            class="d-flex justify-content-center align-items-center">
                            <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap;">View All</p>
                            <div style="width: 20px;" class="d-flex">
                                <img loading="lazy" src="assets/images/btn-arrow.png" alt="Excis Compliance">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: linear-gradient(#1B315D, #354D7D);">
            <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                <div style="width: 100%; padding: 80px 0;">
                    <div style="max-width: 1000px; height: 110px; margin-inline: auto;"
                        class="d-flex justify-content-between align-items-center">
                        <div>
                            <p style="font-size: 80px; font-weight: 700; line-height: 80px; color: #FAF9F6;">50000+</p>
                            <p style="font-size: 24px; font-weight: 300; padding: 10px 0 0; color: #FAF9F6;">Tickets Per
                                Month</p>
                        </div>
                        <div style="height: 100%; padding: 0 .5px; margin: 0 40px; background: #fff;"></div>
                        <div>
                            <p style="font-size: 80px; font-weight: 700; line-height: 80px; color: #FAF9F6;">200+</p>
                            <p style="font-size: 24px; font-weight: 300; padding: 10px 0 0; color: #FAF9F6;">Enterprise
                                Clients</p>
                        </div>
                        <div style="height: 100%; padding: 0 .5px; margin: 0 40px; background: #fff;"></div>
                        <div>
                            <p style="font-size: 80px; font-weight: 700; line-height: 80px; color: #FAF9F6;">100+</p>
                            <p style="font-size: 24px; font-weight: 300; padding: 10px 0 0; color: #FAF9F6;">Countries
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative;">
                <div
                    style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg-btm.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; bottom: 0; left: 0;">
                </div>
                <div
                    style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; top: 0; right: 0;">
                </div>

                <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                    <div style="width: 100%;">
                        <div style="font-size: 36px; font-weight: 500; text-align: center; color: #F58520;">
                            Our Core Values
                        </div>
                        <div
                            style="max-width: 500px; font-size: 14px; font-weight: 400; line-height: 22px; text-align: center; padding: 10px 0 0; margin-inline: auto; color: #252525;">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                            quis culpa cumque, laboriosam deserunt unde?
                        </div>

                        <div style="padding: 30px 0 0;">
                            <div style="width: 100%; gap: 30px;"
                                class="d-flex justify-content-between align-items-center">
                                <div style="width: 100%; padding: 20px; background: #FAF9F6; border: 1px solid rgb(37, 37, 37, 0.2); border-radius: 10px; gap: 20px;"
                                    class="core-values-card d-flex justify-content-start align-items-center">
                                    <div style="height: 70px; width: 70px; border-radius: 50%;"
                                        class="d-flex justify-content-center align-items-center">
                                        <div style="height: 55px; width: 55px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 50%;"
                                            class="drop d-flex justify-content-center align-items-center">
                                            <div style="width: 20px;" class="d-flex">
                                                <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="font-size: 22px; font-weight: 800; color: #252525;">
                                        Integrity & Ethics
                                    </div>
                                </div>

                                <div style="width: 100%; padding: 20px; background: #FAF9F6; border: 1px solid rgb(37, 37, 37, 0.2); border-radius: 10px; gap: 20px;"
                                    class="core-values-card d-flex justify-content-start align-items-center">
                                    <div style="height: 70px; width: 70px; border-radius: 50%;"
                                        class="d-flex justify-content-center align-items-center">
                                        <div style="height: 55px; width: 55px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 50%;"
                                            class="drop d-flex justify-content-center align-items-center">
                                            <div style="width: 20px;" class="d-flex">
                                                <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="font-size: 22px; font-weight: 800; color: #252525;">
                                        Emp Development
                                    </div>
                                </div>

                                <div style="width: 100%; padding: 20px; background: #FAF9F6; border: 1px solid rgb(37, 37, 37, 0.2); border-radius: 10px; gap: 20px;"
                                    class="core-values-card d-flex justify-content-start align-items-center">
                                    <div style="height: 70px; width: 70px; border-radius: 50%;"
                                        class="d-flex justify-content-center align-items-center">
                                        <div style="height: 55px; width: 55px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 50%;"
                                            class="drop d-flex justify-content-center align-items-center">
                                            <div style="width: 20px;" class="d-flex">
                                                <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="font-size: 22px; font-weight: 800; color: #252525;">
                                        Trust & Teamwork
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="height: 100%; padding: 30px 15px 50px;" class="main-content-container">
                    <div style="width: 100%;">
                        <div style="font-size: 36px; font-weight: 500; text-align: center; color: #F58520;">
                            Case Studies
                        </div>
                        <div
                            style="max-width: 500px; font-size: 14px; font-weight: 400; line-height: 22px; text-align: center; padding: 10px 0 0; margin-inline: auto; color: #252525;">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                            quis culpa cumque, laboriosam deserunt unde?
                        </div>

                        <div style="padding: 30px 0 0;">
                            <div style="width: 100%; gap: 30px;"
                                class="d-flex justify-content-between align-items-start">
                                <div style="width: 100%; padding: 20px; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;"
                                    class="case-studies-card">
                                    <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <div style="width: 140px;" class="d-flex">
                                            <img loading="lazy" src="assets/images/case-studies-card-creative.png" alt="">
                                        </div>
                                    </div>
                                    <div style="width: 100%; padding: 10px 5px;">
                                        <div style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                            RETAIL
                                        </div>

                                        <div style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, odit.
                                        </div>

                                        <div
                                            style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum
                                            distinctio vel praesentium voluptatibus possimus illum et velit harum neque.
                                        </div>

                                        <div style="padding: 30px 0 0;">
                                            <a href="#" style="font-size: 12px; font-weight: 700; color: #252525;">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <div style="width: 100%; padding: 20px; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;"
                                    class="case-studies-card">
                                    <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <div style="width: 140px;" class="d-flex">
                                            <img loading="lazy" src="assets/images/case-studies-card-creative.png" alt="">
                                        </div>
                                    </div>
                                    <div style="width: 100%; padding: 10px 5px;">
                                        <div style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                            RETAIL
                                        </div>

                                        <div style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, odit.
                                        </div>

                                        <div
                                            style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum
                                            distinctio vel praesentium voluptatibus possimus illum et velit harum neque.
                                        </div>

                                        <div style="padding: 30px 0 0;">
                                            <a href="#" style="font-size: 12px; font-weight: 700; color: #252525;">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <div style="width: 100%; padding: 20px; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;"
                                    class="case-studies-card">
                                    <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <div style="width: 140px;" class="d-flex">
                                            <img loading="lazy" src="assets/images/case-studies-card-creative.png" alt="">
                                        </div>
                                    </div>
                                    <div style="width: 100%; padding: 10px 5px;">
                                        <div style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                            RETAIL
                                        </div>

                                        <div style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, odit.
                                        </div>

                                        <div
                                            style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum
                                            distinctio vel praesentium voluptatibus possimus illum et velit harum neque.
                                        </div>

                                        <div style="padding: 30px 0 0;">
                                            <a href="#" style="font-size: 12px; font-weight: 700; color: #252525;">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width: fit-content; padding: 14px 45px; margin: 40px auto 0; color: #252525; background: #fff; gap: 12px; border: 1px solid #252525; border-radius: 10px;"
                            class="d-flex justify-content-center align-items-center">
                            <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap;">View All</p>
                            <div style="width: 20px;" class="d-flex">
                                <img loading="lazy" src="assets/images/btn-arrow.png" alt="Excis Compliance">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: rgba(18, 24, 32, 1);">
            <div style="height: 100%; padding: 80px 15px;" class="main-content-container">
                <div style="font-size: 34px; font-weight: 500; color: #fff; text-align: center;">
                    Lorem ipsum dolor sit amet.
                </div>

                <div style="margin-top: 50px; flex-wrap: wrap;" class="d-flex">
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 25px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-microsoft.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 30px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-lenovo.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 60px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-dell.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 20px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-vmware.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 35px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-deutsche-bank.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 35px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-cisco.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 25px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-nokia.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 25px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-microsoft.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 30px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-lenovo.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;"
                        class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 60px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-dell.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require("./footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script>
        const countries = document.querySelectorAll('.countries-position');

        countries.forEach(country => {
            country.addEventListener('mouseover', () => {
                countries.forEach(country => {
                    country.classList.remove('active');
                })

                country.classList.add('active');
            });

            // country.addEventListener('mouseout', () => {
            //     country.classList.add('active');
            // });
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