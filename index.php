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
    <meta name='og:url' content='http://www.exc1s.com'>
    <meta name='og:image' content='<?php echo $desktop_images . 'email-signature.gif'; ?>'>
    <meta name='og:description' content='Your Global IT SupportOur IT helpdesk is comprised of certified IT professionals, trained and experienced across a wide variety of vendors - Excis'>

    <title>Excis Compliance Ltd.</title>

    <link rel="canonical" href="http://www.exc1s.com">
    <link rel="icon" type="image/x-icon" href="https://www.excis.com/wp-content/uploads/2021/12/fav.png">
    <link rel="stylesheet" href="assets/sass/index.css">
    <link rel="stylesheet" href="assets/sass/common.css">
    <link rel="stylesheet" href="assets/sass/contact-us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />

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

        .countries-spot-container {
            width: 150px;
            background: white;
            position: absolute;
            bottom: 20px;
            left: 0;
            transform: translate(-50%, 0);
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px 2px rgb(0, 0, 0, 0.15);
            display: none;
        }

        .countries-spot-point:hover+.countries-spot-container {
            display: block;
        }

        .countries-spot-point {
            height: 6px;
            width: 6px;
            position: absolute;
            top: 0;
            left: 0;
            background: #F58520;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 0px 1px 1px #0000001a;
        }

        .countries-spot-point.blue {
            height: 6px;
            width: 6px;
            position: absolute;
            top: 0;
            left: 0;
            background: #4383C3;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 0px 1px 1px #0000001a;
        }

        .countries-spot-point:hover {
            animation: pulse-animation 1s infinite;
        }

        .countries-spot-point.blue:hover {
            animation: pulse-animation-blue 1s infinite;
        }

        @keyframes pulse-animation {
            0% {
                box-shadow: 0 0 0 0px rgb(245, 133, 32, 1);
            }

            100% {
                box-shadow: 0 0 0 15px rgba(245, 133, 32, 0);
            }
        }

        @keyframes pulse-animation-blue {
            0% {
                box-shadow: 0 0 0 0px rgb(67, 131, 195, 1);
            }

            100% {
                box-shadow: 0 0 0 15px rgb(67, 131, 195, 0);
            }
        }

        .countries-spot-container::after {
            content: '';
            width: 20px;
            height: 10px;
            position: absolute;
            bottom: 0%;
            left: 52%;
            transform: translate(-50%, 96%);
            background: #fff;
            clip-path: polygon(0% 0%, 100% 0%, 50% 100%, 0% 0%);
            box-shadow: 0 0 5px 5px rgb(0, 0, 0, 0.15);
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

        .nav-tab-dropdown {
            display: none;
        }

        #nav-tab:hover .nav-tab-dropdown,
        .nav-tab-dropdown:hover {
            display: block;
        }

        .nav-tab-item {
            position: relative;
        }

        #nav-tab .nav-tab-item::after {
            content: "";
            width: 0%;
            height: 4px;
            position: absolute;
            bottom: 0;
            left: 0;
            background: #F58520;
            border-radius: 5px 5px 0 0;
            transition: all .1s ease-in-out;
        }

        #nav-tab .nav-tab-item.active::after {
            width: 100%;
        }

        #nav-tab .nav-tab-item.active {
            color: #F58520 !important;
        }

        #nav-tab:hover .nav-tab-item::after {
            width: 100%;
            transition: all .3s ease-in-out;
        }

        #nav-tab:hover .nav-tab-item {
            color: #F58520 !important;
            transition: all .2s ease-in-out;
        }
    </style>

</head>

<body>

    <div id="landing-header-menu" style="position: sticky; top: 0; z-index: 2;">
        <div class="full-container">
            <div style="width: 100%; height: 52px; background: #121820;">
                <div style="height: 100%; padding: 0 15px;" class="main-content-container">
                    <div style="width: 100%; height: 100%;" class="d-flex justify-content-between">
                        <div style="height: 100%; gap: 25px;" class="d-flex">
                            <a href="#" title="Career">
                                <div style="height: 100%; font-size: 12px; color: #FAF9F6;"
                                    class="d-flex align-items-center">
                                    Career
                                </div>
                            </a>
                            <a href="#" title="CSR">
                                <div style="height: 100%; font-size: 12px; color: #FAF9F6;"
                                    class="d-flex align-items-center">
                                    CSR
                                </div>
                            </a>
                            <a href="#" title="News">
                                <div style="height: 100%; font-size: 12px; color: #FAF9F6;"
                                    class="d-flex align-items-center">
                                    News
                                </div>
                            </a>
                        </div>

                        <div class="d-flex align-items-center"
                            style="font-size: 12px; text-align: center; color: #FAF9F6;">
                            <p style="font-weight: 700;">Now Hiring : &nbsp;</p>
                            <p>Are you a driven and motivated 1st Line IT Support Engineer?</p>
                        </div>

                        <a href="#" class="d-flex align-items-center" style="padding: 0 10px 0 0;"
                            title="Excis Worldwide">
                            <div class="d-flex" style="gap: 16px;">
                                <div style="width: 24px;" class="d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'global-presence.png'; ?>" alt="Global">
                                </div>
                                <p style="font-size: 16px; color: #FAF9F6;">
                                    Global | EN
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="full-container">
            <div
                style="width: 100%; height: 65px; background: #FAF9F6; box-shadow: 0 0 10px rgb(0, 0, 0, 0.2); position: relative;">
                <div style="height: 100%; padding: 0 15px;" class="main-content-container">
                    <div style="width: 100%; height: 100%;" class="d-flex justify-content-between">
                        <a href="<?php echo $desktop_url; ?>" title="Excis Logo" style="margin: 0 70px 0 0;"
                            class="d-flex align-items-center">
                            <div style="width: 60px;" class="d-flex">
                                <img loading="lazy" src="<?php echo $desktop_images . 'main-logo.png'; ?>" alt="Excis">
                            </div>
                        </a>

                        <ul class="d-flex align-items-center" style="font-size: 13px; list-style-type: none;">
                            <li id="nav-tab" class="d-flex align-items-center" style="cursor: pointer;">
                                <a href="<?php echo $desktop_url . 'services'; ?>">
                                    <div style="height: 65px; font-size: 13px; font-weight: 400; color: #000; padding: 0 13px; cursor: pointer;"
                                        class="nav-tab-item d-flex align-items-center">
                                        Services
                                    </div>
                                </a>

                                <div style="position: absolute; top: 65px; left: 50%; transform: translate(-50%, 0); box-shadow: 5px 5px 5px rgb(0, 0, 0, 0.05), -5px 5px 5px rgb(0, 0, 0, 0.05), 0px 5px 5px rgb(0, 0, 0, 0.05); padding: 0 50px 50px;  z-index: 1; background: rgb(250,249,246);"
                                    class="nav-tab-dropdown">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <ul style="list-style-type: none; padding: 10px 20px 0; width: 215px;">
                                            <li style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25); text-wrap: nowrap;">Infrastructure</li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Network</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Data Center Support</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">End User Support</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Audio-Visual</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">WiFi Services</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Operating System</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">New Office + Migration <br> Solutions</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Helpdesk</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Storage As A Service (SAAS)</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Device As A Service (DAAS)</a></li>
                                        </ul>

                                        <ul style="list-style-type: none; padding: 10px 20px 0; width: 215px;">
                                            <li style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25); text-wrap: nowrap;">Cyber Security Services</li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Cyber Security Consulting</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">End Point Security</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Network Security</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Application Security</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Web Security</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Email Security</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Hybrid Cloud Security</a></li>

                                            <li style="padding: 10px 0 0;">
                                                <ul style="list-style-type: none; padding: 10px 0 0; width: 215px;">
                                                    <li style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25); text-wrap: nowrap;">Cloud Services</li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Public Cloud Integration And Migration (AWS, Azure, GCP)</a></li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Private Cloud Solutions</a></li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Hybrid Cloud</a></li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Office 365 And G-Suite Migration + Integration</a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                        <ul style="list-style-type: none; padding: 10px 20px 0; width: 215px;">
                                            <li style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25); text-wrap: nowrap;">Development</li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Software And Application Development</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">API Integration</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Network And Systems Automation</a></li>

                                            <li style="padding: 10px 0 0;">
                                                <ul style="list-style-type: none; padding: 10px 0 0; width: 215px;">
                                                    <li style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25); text-wrap: nowrap;">Depot</li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Warehousing</a></li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Logistics</a></li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Staging</a></li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">Wiping + Disposal</a></li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">PMO</a></li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">NOC Services</a></li>
                                                    <li style="padding: 10px 0 0;"><a href="#" style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: wrap;">SOC Services</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li id="nav-tab" class="d-flex align-items-center" style="cursor: pointer;">
                                <a href="<?php echo $desktop_url . 'industries'; ?>">
                                    <div style="height: 65px; font-size: 13px; font-weight: 400; color: #000; padding: 0 13px; cursor: pointer;"
                                        class="nav-tab-item d-flex align-items-center">
                                        Industries
                                    </div>
                                </a>
                            </li>

                            <li id="nav-tab" class="d-flex align-items-center" style="cursor: pointer;">
                                <a href="<?php echo $desktop_url . 'insights/'; ?>">
                                    <div style="height: 65px; font-size: 13px; font-weight: 400; color: #000; padding: 0 13px; cursor: pointer;"
                                        class="nav-tab-item d-flex align-items-center">
                                        Insights
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <a href="<?php echo $desktop_url . 'contact-us'; ?>" class="d-flex align-items-center">
                            <div style="height: 42px; width: 129px; font-size: 12px; font-weight: 600; text-align: center; border-radius: 10px; background: #F58520; color: #FAF9F6; "
                                class="d-flex justify-content-center align-items-center">
                                Contact Us
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div
            style="height: 520px; width: 100%; background: linear-gradient(160deg, #1b315d, #24345A, rgb(36, 52, 90), #473F4A, #664D47, #84593F, #95603c); border-radius: 0 0 50px 50px;">
            <div style="height: 100%; padding: 0 15px;" class="inner-content-container">
                <div style="width: 100%;" class="d-flex justify-content-center">
                    <div style="height: 520px; position: relative; display: flex; align-items: center;">
                        <div style="height: 88%; display: flex; opacity: 0.7;">
                            <img loading="lazy" src="<?php echo $desktop_images . 'map.png'; ?>" alt="">
                        </div>

                        <div style="position: absolute; top: 50%; left: 50%; transform:translate(-50%, -50%);">
                            <div style="height: 520px; flex-direction: column;" class="d-flex justify-content-center">
                                <div
                                    style="width: 100%; font-size: 70px; font-weight: 800; line-height: 70px; color: #fff; text-wrap: nowrap; text-align: center; text-transform: uppercase; text-shadow: 0 4px 0 #000;">
                                    One World <br> One Team
                                </div>
                                <div
                                    style="width: 100%; font-size: 24px; font-weight: 600; line-height: 32px; letter-spacing: 3.5px; text-align: center; text-transform: uppercase; padding: 15px 0 0; color: #fff; text-wrap: wrap; text-shadow: 0px 5px 10px rgb(0, 0, 0, 0.5);">
                                    &nbsp; Your Global IT Solution
                                </div>
                                <div style="width: fit-content; padding: 12px 14px; margin: 35px auto 0; color: #252525; background: #FAF9F6; gap: 12px; border-radius: 10px;"
                                    class="d-flex justify-content-center align-items-center">
                                    <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap;">Let's Work Together
                                    </p>
                                    <div style="width: 20px;" class="d-flex">
                                        <img loading="lazy" src="<?php echo $desktop_images . 'btn-arrow.png'; ?>" alt="Excis Compliance">
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
                        <div
                            style="width: fit-content; font-size: 13px; font-weight: 700; padding: 7px 90px 7px 10px; color: #FAF9F6; background: #252525; border-radius: 4px;">
                            ABOUT US
                        </div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div style="font-size: 48px; font-weight: 700; padding: 10px 0 0; color: #F58520;">
                                    Why Choose Excis?
                                </div>
                                <div style="font-size: 18px; font-weight: 400; padding: 15px 0 0; color: #000;">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat minus cum
                                    veritatis ipsum neque unde.
                                </div>
                            </div>
                            <div style="width: fit-content; padding: 14px 30px; margin: 25px 0 0; color: #FAF9F6; background: #252525; gap: 12px; border-radius: 10px;"
                                class="d-flex justify-content-center align-items-center">
                                <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap;">Learn More</p>
                                <div style="width: 20px;" class="d-flex">
                                    <img loading="lazy" src="assets/images/btn-arrow.png" alt="Excis Compliance">
                                </div>
                            </div>
                        </div>

                        <div style="height: 100%; padding: 20px 0 0 0; gap: 30px;"
                            class="d-flex justify-content-between">
                            <div style="width: 100%;" class="">
                                <div style="max-width: 100%; padding: 50px; border-radius: 10px;"
                                    class="about-us-box d-flex justify-content-between align-items-center">
                                    <div>
                                        <div style="font-size: 24px; font-weight: 700;" class="heading">
                                            4 Hour SLA
                                        </div>
                                        <div style="width: 60%; font-size: 14px; font-weight: 400; line-height: 25px; padding: 20px 0 0; text-wrap: wrap;"
                                            class="subtxt">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga aliquid iusto
                                            sunt dignissimos eum architecto, natus mollitia temporibus nulla rem.
                                        </div>
                                    </div>
                                    <div style="width: 300px;">
                                        <img loading="lazy" style="height: auto;" src="assets/images/about-us-creative.png"
                                            alt="">
                                    </div>
                                </div>
                                <div style="max-width: 100%; padding: 50px; margin-top: 30px; border-radius: 10px;"
                                    class="about-us-box d-flex justify-content-between align-items-center">
                                    <div>
                                        <div style="font-size: 24px; font-weight: 700;" class="heading">
                                            24/7 Support
                                        </div>
                                        <div style="width: 60%; font-size: 14px; font-weight: 400; line-height: 25px; padding: 20px 0 0; text-wrap: wrap;"
                                            class="subtxt">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fuga aliquid iusto
                                            sunt dignissimos eum architecto, natus mollitia temporibus nulla rem.
                                        </div>
                                    </div>
                                    <div style="width: 300px;">
                                        <img loading="lazy" style="height: auto;" src="assets/images/about-us-creative.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>

                            <div style="width: 55%; border-radius: 10px;" class="about-us-box">
                                <div style="height: 100%; flex-direction: column;"
                                    class="d-flex justify-content-between">
                                    <div>
                                        <div class="heading"
                                            style="font-size: 24px; font-weight: 700; padding: 50px 50px 0 50px;">
                                            Flexible IT Solutions
                                        </div>

                                        <div class="subtxt"
                                            style="font-size: 16px; font-weight: 400; line-height: 25px; padding: 15px 50px 0 50px;">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam illum
                                            aperiam voluptates, numquam facere repellendus.
                                        </div>
                                    </div>
                                    <div style="padding: 50px;">
                                        <div style="width: 85%; margin-inline: auto;">
                                            <img loading="lazy" src="assets/images/about-us-creative.png" alt="">
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
        <div style="width: 100%; background: #121820;">

            <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                <div style="width: 100%;">
                    <div style="font-size: 36px; font-weight: 500; text-align: center; color: #FAF9F6;">
                        Our Global Presence
                    </div>
                    <div
                        style="max-width: 500px; font-size: 14px; font-weight: 400; line-height: 22px; text-align: center; padding: 10px 0 0; margin-inline: auto; color: rgb(250, 249, 246, 0.6);">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                        quis culpa cumque, laboriosam deserunt unde?
                    </div>

                    <div style="width: 100%; padding: 50px 0 0; display: flex; justify-content: center;">
                        <div style="max-width: 800px; position: relative;">

                            <div style="max-width: 100%; display: flex;">
                                <img style="width: 100%; height: 100%;" src="assets/images/world-map.png" alt="">
                            </div>

                            <div class="countries-position" style="position: absolute; top: 63%; left: 67.1%;">
                                <div class="countries-spot-point blue"></div>
                                <div class="countries-spot-container">
                                    <div
                                        style="font-family: 'Manrope', sans-serif; font-size: 16px; font-weight: 600; color: #F58520; padding: 0 0 3px; text-transform: uppercase;">
                                        India</div>
                                    <ul
                                        style="font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 0 0 15px; text-transform: uppercase;">
                                        <li style="line-height: 19px;">Navi-Mumbai</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position" style="position: absolute; top: 60%; left: 18.5%;">
                                <div class="countries-spot-point"></div>
                                <div class="countries-spot-container">
                                    <div
                                        style="font-family: 'Manrope', sans-serif; font-size: 16px; font-weight: 600; color: #F58520; padding: 0 0 3px; text-transform: uppercase;">
                                        USA</div>
                                    <ul
                                        style="font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 0 0 15px; text-transform: uppercase;">
                                        <li style="line-height: 19px;">Mexico</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position" style="position: absolute; top: 78.8%; left: 59.7%;">
                                <div class="countries-spot-point"></div>
                                <div class="countries-spot-container">
                                    <div
                                        style="font-family: 'Manrope', sans-serif; font-size: 16px; font-weight: 600; color: #F58520; padding: 0 0 3px; text-transform: uppercase;">
                                        Madagascar</div>
                                    <ul
                                        style="font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 0 0 15px; text-transform: uppercase;">
                                        <li style="line-height: 19px;">Porte A 103</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position" style="position: absolute; top: 85.5%; left: 52.2%;">
                                <div class="countries-spot-point"></div>
                                <div class="countries-spot-container">
                                    <div
                                        style="font-family: 'Manrope', sans-serif; font-size: 16px; font-weight: 600; color: #F58520; padding: 0 0 3px; text-transform: uppercase;">
                                        South Africa</div>
                                    <ul
                                        style="font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 0 0 15px; text-transform: uppercase;">
                                        <li style="line-height: 19px;">Capetown</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position" style="position: absolute; top: 45%; left: 46.1%;">
                                <div class="countries-spot-point blue"></div>
                                <div class="countries-spot-container">
                                    <div
                                        style="font-family: 'Manrope', sans-serif; font-size: 16px; font-weight: 600; color: #F58520; padding: 0 0 3px; text-transform: uppercase;">
                                        United Kingdom</div>
                                    <ul
                                        style="font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 0 0 15px; text-transform: uppercase;">
                                        <li style="line-height: 19px;">Bracknell</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position" style="position: absolute; top: 41%; left: 56%;">
                                <div class="countries-spot-point"></div>
                                <div class="countries-spot-container">
                                    <div
                                        style="font-family: 'Manrope', sans-serif; font-size: 16px; font-weight: 600; color: #F58520; padding: 0 0 3px; text-transform: uppercase;">
                                        Russia</div>
                                    <ul
                                        style="font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 0 0 15px; text-transform: uppercase;">
                                        <li style="line-height: 19px;">Moscow</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="countries-position" style="position: absolute; top: 67%; left: 73.8%;">
                                <div class="countries-spot-point"></div>
                                <div class="countries-spot-container">
                                    <div
                                        style="font-family: 'Manrope', sans-serif; font-size: 16px; font-weight: 600; color: #F58520; padding: 0 0 3px; text-transform: uppercase;">
                                        Thailand</div>
                                    <ul
                                        style="font-family: 'Manrope', sans-serif; font-size: 12px; font-weight: 400; margin: 10px 0 0 15px; text-transform: uppercase;">
                                        <li style="line-height: 19px;">Phuket</li>
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