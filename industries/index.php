<?php
require_once('../constant.php');
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

    <title>Industries - Excis Compliance Ltd.</title>

    <link rel="canonical" href="https://www.exc1s.com/industries">
    <link rel="icon" type="image/x-icon" href="https://www.excis.com/wp-content/uploads/2021/12/fav.png">
    <link rel="stylesheet" href="../assets/sass/index.css">
    <link rel="stylesheet" href="../assets/sass/why-excis.css">
    <link rel="stylesheet" href="../assets/sass/navigation.css">
    <link rel="stylesheet" href="../assets/sass/common.css">
    <link rel="stylesheet" href="../assets/sass/contact-us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />

    <style>
        .submitBtn {
            background: rgb(27, 49, 93, 0.8);
        }

        .submitBtn:hover {
            background: rgb(27, 49, 93, 1);
        }
    </style>

    <style>
        .carousel-container {
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0 0 50px 0;
        }

        .carousel {
            overflow: visible;
            max-width: 1265px;
            width: 100%;
            margin-inline: auto;
        }

        .cards {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .card {
            flex: 0 0 31.6%;
            background: rgba(250, 249, 246);
            border: 1px solid rgba(227, 227, 227, 1);
            border-radius: 8px;
            z-index: 1;
        }

        button {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0);
            background: #000;
            cursor: pointer;
        }

        button .btn-arrow {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #F58520;
        }

        button:disabled {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0);
            background: rgba(250, 249, 246);
            /* cursor: not-allowed; */
        }

        button:disabled .btn-arrow {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #000;
        }

        .prev-btn,
        .next-btn {
            z-index: 1;
        }
    </style>

</head>

<body>

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
                                            <li><a href="<?php echo $desktop_url . 'services/data-center-support.php'; ?>">Data Center Support</a></li>
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
                                    <div class="nav-tab-item active d-flex align-items-center">
                                        Industries
                                    </div>
                                </a>

                                <div class="nav-tab-dropdown">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <ul>
                                            <li>Industries</li>
                                            <li><a href="#">Retail</a></li>
                                            <li><a href="#">Energy</a></li>
                                            <li><a href="#">Life Sciences</a></li>
                                            <li><a href="#">Financial Services (FS&I)</a></li>
                                            <li><a href="#">Telecoms</a></li>
                                            <li><a href="#">Utilities</a></li>
                                            <li><a href="#">Public Sector</a></li>
                                            <li><a href="#">Manufacturing</a></li>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">IT & Consulting</a></li>
                                            <li><a href="#">Consumer Goods</a></li>
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

    <div class="full-container">
        <div style="height: 260px; width: 100%; background: rgba(250, 249, 246, 1); position: relative;">
            <div
                style="position: absolute; top: 0; left: 50%; height: 260px; width: max-content; transform: translate(-50%, 0);">
                <img src="../assets/images/inner-pages-banner.png" alt="">
            </div>

            <div style="height: 170px; width: max-content; position: absolute; top: 0; left: 0; opacity: 0.5">
                <img src="../assets/images/inner-pages-banner-abstract.png" alt="">
            </div>

            <div
                style="height: 170px; width: max-content; position: absolute; top: 0; right: 0; transform: scaleX(-1); opacity: 0.5">
                <img src="../assets/images/inner-pages-banner-abstract.png" alt="">
            </div>

            <div style="height: 100%; padding: 0 15px;" class="main-content-container">
                <div style="width: 100%; height: 100%; flex-direction: column;" class="d-flex justify-content-center">
                    <div style="font-size: 16px; font-weight: 400; color: rgba(0, 0, 0, 1);">
                        Home - <span style="font-weight: 600;">Industries</span>
                    </div>
                    <div style="font-size: 40px; font-weight: 600; padding: 5px 0 0; color: rgba(37, 37, 37, 1);">
                        Industries
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative;">
                <div
                    style="width: 290px; height: 416px; background-image: url('../assets/images/abstract-bg-btm.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; bottom: 0; left: 0;">
                </div>
                <div
                    style="width: 290px; height: 416px; background-image: url('../assets/images/abstract-bg.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; top: 0; right: 0;">
                </div>

                <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                    <div style="width: 100%;" class="d-flex justify-content-between align-items-start">
                        <div style="width: 100%;">
                            <div style="font-size: 32px; font-weight: 500; text-align: center; color: #F58520;">
                                Industries we’ve excelled in
                            </div>
                            <div
                                style="max-width: 60%; font-size: 14px; font-weight: 400; text-align: center; line-height: 20px; padding: 10px 0 0; margin-inline: auto; color: rgba(37, 37, 37, 1);">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore mollitia veniam
                                temporibus molestias consequuntur provident voluptatem eligendi a consectetur nostrum.
                            </div>
                        </div>

                    </div>

                    <div style="padding: 50px 0 0;">
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Retail
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Energy
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Life Sciences
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Financial Services (FS&I)
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Telecoms
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Utilities
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Public Sector
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Manufacturing
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Education
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            IT & Consulting
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px; margin-inline: auto;">
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; text-align: center; padding: 25px 0 0; color: #000;">
                                            Consumer Goods
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; text-align: center; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: linear-gradient(to bottom, rgba(27, 49, 93), rgba(53, 77, 125));">
            <div style="height: 100%; padding: 70px 15px;" class="main-content-container">
                <div style="width: 100%;" class="d-flex justify-content-between align-items-center">
                    <div>
                        <div style="font-size: 40px; font-weight: 700; line-height: 54px; color: #fff;">
                            Don’t see your industry?
                        </div>
                        <div
                            style="max-width: 60%; font-size: 16px; font-weight: 400; line-height: 40px; padding: 30px 0 0; color: #fff;">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi consequatur perspiciatis
                            odio sit! Ut impedit aut non, saepe ea aliquid!
                        </div>
                    </div>
                    <div style="width: fit-content; padding: 12px 40px; background: transparent; border: 1px solid #fff; gap: 12px; border-radius: 10px;"
                        class="d-flex justify-content-center align-items-center">
                        <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap; color: #fff;">
                            Contact Us</p>
                        <div style="width: 20px;" class="d-flex">
                            <img loading="lazy" src="../assets/images/btn-arrow.png" alt="Excis Compliance">
                        </div>
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

    <div class="full-container">
        <div style="width: 100%; background: linear-gradient(#1B315D, #354D7D);">
            <div style="width: 100%; padding: 80px 15px;" class="main-content-container">
                <div style="max-width: 1000px; margin-inline: auto;"
                    class="d-flex justify-content-between align-items-start">
                    <div style="max-width: 180px;">
                        <div style="max-width: 60px; margin-inline: auto;">
                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                        </div>
                        <p
                            style="font-size: 44px; font-weight: 700; line-height: 50px; text-align: center; padding: 30px 0 0; color: #FAF9F6;">
                            20+</p>
                        <p
                            style="font-size: 24px; font-weight: 300; text-align: center; padding: 10px 0 0; color: #FAF9F6;">
                            Years</p>
                    </div>
                    <div style="max-width: 180px;">
                        <div style="max-width: 60px; margin-inline: auto;">
                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                        </div>
                        <p
                            style="font-size: 44px; font-weight: 700; line-height: 50px; text-align: center; padding: 30px 0 0; color: #FAF9F6;">
                            50K+</p>
                        <p
                            style="font-size: 24px; font-weight: 300; text-align: center; padding: 10px 0 0; color: #FAF9F6;">
                            Tickets per
                            month</p>
                    </div>
                    <div style="max-width: 180px;">
                        <div style="max-width: 60px; margin-inline: auto;">
                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                        </div>
                        <p
                            style="font-size: 44px; font-weight: 700; line-height: 50px; text-align: center; padding: 30px 0 0; color: #FAF9F6;">
                            60+</p>
                        <p
                            style="font-size: 24px; font-weight: 300; text-align: center; padding: 10px 0 0; color: #FAF9F6;">
                            Global
                            Entities</p>
                    </div>
                    <div style="max-width: 180px;">
                        <div style="max-width: 60px; margin-inline: auto;">
                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                        </div>
                        <p
                            style="font-size: 44px; font-weight: 700; line-height: 50px; text-align: center; padding: 30px 0 0; color: #FAF9F6;">
                            800+</p>
                        <p
                            style="font-size: 24px; font-weight: 300; text-align: center; padding: 10px 0 0; color: #FAF9F6;">
                            Engineers
                            On-site</p>
                    </div>
                    <div style="max-width: 180px;">
                        <div style="max-width: 60px; margin-inline: auto;">
                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                        </div>
                        <p
                            style="font-size: 44px; font-weight: 700; line-height: 50px; text-align: center; padding: 30px 0 0; color: #FAF9F6;">
                            200+</p>
                        <p
                            style="font-size: 24px; font-weight: 300; text-align: center; padding: 10px 0 0; color: #FAF9F6;">
                            Enterprise
                            Clients</p>
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
    include("../footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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