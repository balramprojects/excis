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

    <title>Insights - Excis Compliance Ltd.</title>

    <link rel="canonical" href="https://www.exc1s.com/insights/">
    <link rel="icon" type="image/x-icon" href="https://www.excis.com/wp-content/uploads/2021/12/fav.png">
    <link rel="stylesheet" href="../assets/sass/index.css">
    <link rel="stylesheet" href="../assets/sass/why-excis.css">
    <link rel="stylesheet" href="../assets/sass/navigation.css">
    <link rel="stylesheet" href="../assets/sass/common.css">
    <link rel="stylesheet" href="../assets/sass/contact-us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />

    <style>
        .anchor-offset {
            scroll-margin-top: 117px;
        }

        .submitBtn {
            background: rgb(27, 49, 93, 0.8);
        }

        .submitBtn:hover {
            background: rgb(27, 49, 93, 1);
        }
    </style>

    <style>
        .accordion-tab-box {
            width: 100%;
            position: relative;
            margin: 15px 0;
            border: 1px solid rgb(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .accordion-tab-box .accordion-tab-title {
            gap: 20px;
            padding: 30px 50px;
            background: rgba(250, 249, 246);
            cursor: pointer;
        }

        .accordion-tab-box .accordion-tab-title .txt {
            font-size: 22px;
            font-weight: 700;
            line-height: 28px;
            color: rgba(245, 133, 32, 1);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .accordion-tab-box .accordion-tab-title .icon {
            font-size: 32px;
            line-height: 28px;
            font-weight: 400;
            color: #000;
            text-transform: uppercase;
        }

        .accordion-tab-box .accordion-tab-desc {
            height: 0px;
            padding: 0;
            background: rgba(250, 249, 246);
            /* transition: all .1s ease-in-out; */
        }

        .accordion-tab-box.active .accordion-tab-desc {
            height: 100%;
            padding: 0 50px 30px;
            /* transition: all .1s ease-in-out; */
        }

        .view-all-btn {
            width: fit-content;
            padding: 14px 50px;
            margin: 30px auto 0;
            color: #252525;
            background: transparent;
            gap: 12px;
            border: 1px solid #252525;
            border-radius: 10px;
        }

        .view-all-btn:hover {
            background: #121820;
            color: #fff;
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
                                    <div class="nav-tab-item d-flex align-items-center">
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
                                            <li><a href="#">Telecom</a></li>
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
                                    <div class="nav-tab-item active d-flex align-items-center">
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
                        Home - <span style="font-weight: 600;">Insights</span>
                    </div>
                    <div style="font-size: 40px; font-weight: 600; padding: 5px 0 0; color: rgba(37, 37, 37, 1);">
                        Insights
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative;">
                <div style="height: 100%; padding: 50px 15px;" class="main-content-container">

                    <div class="accordions">
                        <div class="accordion-tab-box">
                            <div class="accordion-tab-title d-flex justify-content-between align-items-center">
                                <div class="txt">
                                    Case Studies
                                </div>
                                <div class="icon">
                                    +
                                </div>
                            </div>
                            <div class="accordion-tab-desc">
                                <div style="width: 100%; gap: 30px;"
                                    class="d-flex justify-content-between align-items-start">
                                    <a href="<?php echo $desktop_url . 'insights/case-studies.php'; ?>">
                                        <div style="width: 100%; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;"
                                            class="case-studies-card">
                                            <div style="margin: 20px;">
                                                <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 140px;" class="d-flex">
                                                        <img loading="lazy"
                                                            src="../assets/images/case-studies-card-creative.png" alt="">
                                                    </div>
                                                </div>
                                                <div style="width: 100%; padding: 10px 5px;">
                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                                        RETAIL
                                                    </div>

                                                    <div
                                                        style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                                        Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing elit. Temporibus, odit.
                                                    </div>

                                                    <div
                                                        style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Nihil dolorum
                                                        distinctio vel praesentium voluptatibus possimus
                                                        illum et velit harum neque.
                                                    </div>

                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="<?php echo $desktop_url . 'insights/case-studies.php'; ?>">
                                        <div style="width: 100%; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;"
                                            class="case-studies-card">
                                            <div style="margin: 20px;">
                                                <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 140px;" class="d-flex">
                                                        <img loading="lazy"
                                                            src="../assets/images/case-studies-card-creative.png" alt="">
                                                    </div>
                                                </div>
                                                <div style="width: 100%; padding: 10px 5px;">
                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                                        RETAIL
                                                    </div>

                                                    <div
                                                        style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                                        Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing elit. Temporibus, odit.
                                                    </div>

                                                    <div
                                                        style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Nihil dolorum
                                                        distinctio vel praesentium voluptatibus possimus
                                                        illum et velit harum neque.
                                                    </div>

                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="<?php echo $desktop_url . 'insights/case-studies.php'; ?>">
                                        <div style="width: 100%; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;"
                                            class="case-studies-card">
                                            <div style="margin: 20px;">
                                                <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 140px;" class="d-flex">
                                                        <img loading="lazy"
                                                            src="../assets/images/case-studies-card-creative.png" alt="">
                                                    </div>
                                                </div>
                                                <div style="width: 100%; padding: 10px 5px;">
                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                                        RETAIL
                                                    </div>

                                                    <div
                                                        style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                                        Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing elit. Temporibus, odit.
                                                    </div>

                                                    <div
                                                        style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Nihil dolorum
                                                        distinctio vel praesentium voluptatibus possimus
                                                        illum et velit harum neque.
                                                    </div>

                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="view-all-btn d-flex justify-content-center align-items-center">
                                    <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap;">
                                        View All</p>
                                    <div style="width: 20px;" class="d-flex">
                                        <img loading="lazy" src="../assets/images/btn-arrow.png" alt="Excis Compliance">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-tab-box">
                            <div class="accordion-tab-title d-flex justify-content-between align-items-center">
                                <div class="txt">
                                    News
                                </div>
                                <div class="icon">
                                    +
                                </div>
                            </div>
                            <div class="accordion-tab-desc">
                                <div style="width: 100%; flex-direction: column; gap: 20px;"
                                    class="d-flex justify-content-start">
                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-lenovo.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Deleniti nam consequuntur assumenda rem dolores non.
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                                                            minima repudiandae voluptatum facere ducimus accusantium
                                                            voluptatem in qui omnis nemo.
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-cisco.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Incidunt nemo odio quis fuga, voluptate numquam!
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Tempora at reprehenderit libero esse in fugit iure
                                                            exercitationem, possimus debitis ipsum?
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-dell.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                            Sunt quia enim perspiciatis, natus unde incidunt quam
                                                            temporibus doloribus minima voluptates.
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                            Doloremque dolores maxime inventore est, voluptas vel
                                                            dignissimos accusamus eligendi maiores similique.
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-tab-box">
                            <div class="accordion-tab-title d-flex justify-content-between align-items-center">
                                <div class="txt">
                                    Insights
                                </div>
                                <div class="icon">
                                    +
                                </div>
                            </div>
                            <div class="accordion-tab-desc">
                                <div style="width: 100%; flex-direction: column; gap: 20px;"
                                    class="d-flex justify-content-start">
                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-lenovo.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Deleniti nam consequuntur assumenda rem dolores non.
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                                                            minima repudiandae voluptatum facere ducimus accusantium
                                                            voluptatem in qui omnis nemo.
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-cisco.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Incidunt nemo odio quis fuga, voluptate numquam!
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Tempora at reprehenderit libero esse in fugit iure
                                                            exercitationem, possimus debitis ipsum?
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-dell.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                            Sunt quia enim perspiciatis, natus unde incidunt quam
                                                            temporibus doloribus minima voluptates.
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                            Doloremque dolores maxime inventore est, voluptas vel
                                                            dignissimos accusamus eligendi maiores similique.
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
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
    require("../footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        let accordions = document.querySelectorAll('.accordion-tab-box');

        accordions.forEach((accord, index) => {
            accord.onclick = (e) => {
                if (accord.classList.contains('active')) {
                    accord.classList.remove('active');
                    accord.querySelector('.accordion-tab-title .icon').innerHTML = "+";

                } else {
                    accordions.forEach(subaccord => {
                        subaccord.classList.remove('active');
                        subaccord.querySelector('.accordion-tab-title .icon').innerHTML = "+";
                    });
                    accord.classList.add('active');
                    accord.querySelector('.accordion-tab-title .icon').innerHTML = "-";

                }

                const scrollCount = 312 + (103 * index);

                let top = e.target.offsetTop;
                window.scroll({
                    top: top + scrollCount, // if you have a sticky nav, take the height of that off 'top' e.g. 'top - 100';
                    behavior: 'smooth'
                });
            };
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