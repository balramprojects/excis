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
    <meta name='copyright' content='Excis Compliance'>
    <meta name='og:title' content='Excis Compliance'>
    <meta name='og:type' content='image'>
    <meta name='og:url' content='https://www.excis.com/wp-content/uploads/2021/12/fav.png'>
    <meta name='og:image' content='htpps://www.excis.com'>
    <meta name='og:description' content='Your Global IT SupportOur IT helpdesk is comprised of certified IT professionals, trained and experienced across a wide variety of vendors - Excis'>

    <title>Industries - Excis Compliance Ltd.</title>

    <link rel="canonical" href="https://www.exc1s.com/industries">
    <link rel="icon" type="image/x-icon" href="https://www.excis.com/wp-content/uploads/2021/12/fav.png">
    <link rel="stylesheet" href="assets/sass/index.css">
    <link rel="stylesheet" href="assets/sass/common.css">
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

        .iti {
            width: 100%;
        }

        .iti__flag-container {
            margin-right: 5px;
        }

        .iti__selected-flag {
            height: 101%;
            padding: 0 9px;
            background-size: contain;
            display: flex;
            justify-content: space-between;
            align-items: center;
            outline: none;
        }

        .iti__country-name {
            margin-left: 10px;
        }

        .iti__country-list {
            min-width: 300px;
            width: 100%;
            max-height: 150px;
            margin: 0 0 0 -1px;
            z-index: 1;
        }

        .iti__dial-code {
            margin-left: 5px;
        }

        .iti--separate-dial-code {
            margin: 6px 0 0 0;
        }

        .iti__selected-dial-code {
            width: 36px;
            font-size: 15px;
            font-weight: 700;
        }

        .iti__arrow {
            width: 10px;
            height: 5px;
            background: rgb(0, 0, 0, 0.9);
            clip-path: polygon(0% 0%, 100% 0%, 50% 100%, 0% 0%);
            border-left: none;
            border-right: none;
            border-top: none;
            transform: rotate(0deg);
            transition: all .3s ease-in-out;
        }

        .iti__arrow.iti__arrow--up {
            border-left: none;
            border-right: none;
            border-bottom: none;
            transform: rotate(-180deg);
            transition: all .3s ease-in-out;
        }

        #phone::placeholder {
            color: rgb(0, 0, 0, 0.25);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 2px;
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

                        <a href="" class="d-flex align-items-center" style="padding: 0 10px 0 0;"
                            title="Excis Worldwide">
                            <div class="d-flex" style="gap: 16px;">
                                <div style="width: 24px;" class="d-flex">
                                    <img loading="lazy" src="assets/images/global-presence.png" alt="Global">
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

                                <!-- <div style="position: absolute; top: 65px; left: 50%; transform: translate(-50%, 0); box-shadow: 5px 5px 5px rgb(0, 0, 0, 0.05), -5px 5px 5px rgb(0, 0, 0, 0.05), 0px 5px 5px rgb(0, 0, 0, 0.05); padding: 0 50px 50px;  z-index: 1; background: rgb(250,249,246);"
                                    class="nav-tab-dropdown">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <ul style="list-style-type: none; padding: 10px 20px 0;">
                                            <li
                                                style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25);">
                                                Services</li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">Network</a>
                                            </li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">Data
                                                    Center Support</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">End
                                                    User Support</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">Audio-Visual</a>
                                            </li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">WiFi
                                                    Services</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">Operating
                                                    System</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: nowrap;">New
                                                    Office + Migration <br> Solutions</a></li>
                                        </ul>

                                        <ul style="list-style-type: none; padding: 10px 20px 0;">
                                            <li
                                                style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25);">
                                                Services</li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">Network</a>
                                            </li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">Data
                                                    Center Support</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">End
                                                    User Support</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">Audio-Visual</a>
                                            </li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">WiFi
                                                    Services</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px;">Operating
                                                    System</a></li>
                                            <li style="padding: 10px 0 0;"><a href="#"
                                                    style="font-size: 14px; font-weight: 400px; color: #000; line-height: 20px; text-wrap: nowrap;">New
                                                    Office + Migration <br> Solutions</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </li>

                            <li id="nav-tab" class="d-flex align-items-center" style="cursor: pointer;">
                                <a href="<?php echo $desktop_url . 'industries'; ?>">
                                    <div style="height: 65px; font-size: 13px; font-weight: 400; color: #000; padding: 0 13px; cursor: pointer;"
                                        class="nav-tab-item active d-flex align-items-center">
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
        <div style="height: 260px; width: 100%; background: rgba(250, 249, 246, 1); position: relative;">
            <div
                style="position: absolute; top: 0; left: 50%; height: 260px; width: max-content; transform: translate(-50%, 0);">
                <img src="assets/images/inner-pages-banner.png" alt="">
            </div>

            <div style="height: 170px; width: max-content; position: absolute; top: 0; left: 0; opacity: 0.5">
                <img src="assets/images/inner-pages-banner-abstract.png" alt="">
            </div>

            <div
                style="height: 170px; width: max-content; position: absolute; top: 0; right: 0; transform: scaleX(-1); opacity: 0.5">
                <img src="assets/images/inner-pages-banner-abstract.png" alt="">
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
                    style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg-btm.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; bottom: 0; left: 0;">
                </div>
                <div
                    style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; top: 0; right: 0;">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                            <img loading="lazy" src="assets/images/btn-arrow.png" alt="Excis Compliance">
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
        <div style="width: 100%; background: linear-gradient(#1B315D, #354D7D);">
            <div style="width: 100%; padding: 80px 15px;" class="main-content-container">
                <div style="max-width: 1000px; margin-inline: auto;"
                    class="d-flex justify-content-between align-items-start">
                    <div style="max-width: 180px;">
                        <div style="max-width: 60px; margin-inline: auto;">
                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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
                            <img loading="lazy" src="./assets/images/trophy-icon.png" alt="">
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

    <div class="full-container">
        <div style="width: 100%; background: rgba(18, 24, 32);">
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