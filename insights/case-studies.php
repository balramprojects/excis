<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excis Compliance</title>

    <link rel="stylesheet" href="../assets/sass/index.css">
    <link rel="stylesheet" href="../assets/sass/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />

    <style>
        .anchor-offset {
            scroll-margin-top: 117px;
        }

        .recent-news::after {
            content: "";
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 70px;
            height: 3px;
            background: #000;

        }

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
                                    <img loading="lazy" src="../assets/images/global-presence.png" alt="Global">
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
                        <a href="../index.html" title="Excis Logo" style="margin: 0 70px 0 0;"
                            class="d-flex align-items-center">
                            <div style="width: 60px;" class="d-flex">
                                <img loading="lazy" src="../assets/images/main-logo.png" alt="Excis">
                            </div>
                        </a>

                        <ul class="d-flex align-items-center" style="font-size: 13px; list-style-type: none;">
                            <li id="nav-tab">
                                <a href="../about-us.html">
                                    <div style="height: 65px; font-size: 13px; font-weight: 400; color: #000; padding: 0 13px; cursor: pointer;"
                                        class="nav-tab-item d-flex align-items-center">
                                        About Us
                                    </div>
                                </a>

                                <div style="position: absolute; top: 65px; left: 50%; transform: translate(-50%, 0); box-shadow: 5px 5px 5px rgb(0, 0, 0, 0.05), -5px 5px 5px rgb(0, 0, 0, 0.05), 0px 5px 5px rgb(0, 0, 0, 0.05); padding: 0 50px 50px;  z-index: 1; background: rgb(250,249,246);"
                                    class="nav-tab-dropdown">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <ul style="list-style-type: none; padding: 10px 20px 0;">
                                            <li
                                                style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25);">
                                                About Us</li>
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
                                                About Us</li>
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
                                </div>
                            </li>

                            <li id="nav-tab" class="d-flex align-items-center" style="cursor: pointer;">
                                <a href="../services.html">
                                    <div style="height: 65px; font-size: 13px; font-weight: 400; color: #000; padding: 0 13px; cursor: pointer;"
                                        class="nav-tab-item d-flex align-items-center">
                                        Services
                                    </div>
                                </a>

                                <div style="position: absolute; top: 65px; left: 50%; transform: translate(-50%, 0); box-shadow: 5px 5px 5px rgb(0, 0, 0, 0.05), -5px 5px 5px rgb(0, 0, 0, 0.05), 0px 5px 5px rgb(0, 0, 0, 0.05); padding: 0 50px 50px;  z-index: 1; background: rgb(250,249,246);"
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
                                </div>
                            </li>

                            <li id="nav-tab" class="d-flex align-items-center" style="cursor: pointer;">
                                <a href="../industries.html">
                                    <div style="height: 65px; font-size: 13px; font-weight: 400; color: #000; padding: 0 13px; cursor: pointer;"
                                        class="nav-tab-item d-flex align-items-center">
                                        Industries
                                    </div>
                                </a>

                                <div style="position: absolute; top: 65px; left: 50%; transform: translate(-50%, 0); box-shadow: 5px 5px 5px rgb(0, 0, 0, 0.05), -5px 5px 5px rgb(0, 0, 0, 0.05), 0px 5px 5px rgb(0, 0, 0, 0.05); padding: 0 50px 50px;  z-index: 1; background: rgb(250,249,246);"
                                    class="nav-tab-dropdown">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <ul style="list-style-type: none; padding: 10px 20px 0;">
                                            <li
                                                style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25);">
                                                Industries</li>
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
                                                Industries</li>
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
                                </div>
                            </li>

                            <li id="nav-tab" class="d-flex align-items-center" style="cursor: pointer;">
                                <a href="../partners.html">
                                    <div style="height: 65px; font-size: 13px; font-weight: 400; color: #000; padding: 0 13px; cursor: pointer;"
                                        class="nav-tab-item d-flex align-items-center">
                                        Partners
                                    </div>
                                </a>

                                <div style="position: absolute; top: 65px; left: 50%; transform: translate(-50%, 0); box-shadow: 5px 5px 5px rgb(0, 0, 0, 0.05), -5px 5px 5px rgb(0, 0, 0, 0.05), 0px 5px 5px rgb(0, 0, 0, 0.05); padding: 0 50px 50px;  z-index: 1; background: rgb(250,249,246);"
                                    class="nav-tab-dropdown">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <ul style="list-style-type: none; padding: 10px 20px 0;">
                                            <li
                                                style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25);">
                                                Partners</li>
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
                                                Partners</li>
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
                                </div>
                            </li>

                            <li id="nav-tab" class="d-flex align-items-center" style="cursor: pointer;">
                                <a href="index.html">
                                    <div style="height: 65px; font-size: 13px; font-weight: 400; color: #000; padding: 0 13px; cursor: pointer;"
                                        class="nav-tab-item active d-flex align-items-center">
                                        Insights
                                    </div>
                                </a>

                                <div style="position: absolute; top: 65px; left: 50%; transform: translate(-50%, 0); box-shadow: 5px 5px 5px rgb(0, 0, 0, 0.05), -5px 5px 5px rgb(0, 0, 0, 0.05), 0px 5px 5px rgb(0, 0, 0, 0.05); padding: 0 50px 50px;  z-index: 1; background: rgb(250,249,246);"
                                    class="nav-tab-dropdown">
                                    <div class="d-flex justify-content-center align-items-start">
                                        <ul style="list-style-type: none; padding: 10px 20px 0;">
                                            <li
                                                style="padding: 10px 0; font-size: 18px; font-weight: 700; color: #F58520; border-bottom: 1px solid rgba(37, 37, 37, 0.25);">
                                                Insights</li>
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
                                                Insights</li>
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
                                </div>
                            </li>
                        </ul>

                        <a href="contact-us.php" class="d-flex align-items-center">
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
                        Home - Insights - <span style="font-weight: 600;">Case Studies</span>
                    </div>
                    <div style="font-size: 40px; font-weight: 600; padding: 5px 0 0; color: rgba(37, 37, 37, 1);">
                        Case Studies
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
                    <div style="width: 100%; gap: 40px;" class="d-flex justify-content-start align-items-start">
                        <div style="max-width: 30%; width: 100%;">
                            <div
                                style="width: 100%; height: 100%; background: rgba(250, 249, 246); border-radius: 10px;">
                                <div style="padding: 30px;">
                                    <div style="width: 100%;">
                                        <div class="recent-news"
                                            style="font-size: 20px; font-weight: 500; line-height: 24px; color: #000; margin: 0 0 15px 0; position: relative;">
                                            Recent News
                                        </div>

                                        <div>
                                            <div style="width: 100%; padding: 20px 0 0; gap: 10px;"
                                                class="d-flex justify-content-start">
                                                <div style="min-width: 70px; max-width: 70px;" class="d-flex">
                                                    <img src="../assets/images/recent-news-img.png" alt="">
                                                </div>
                                                <div>
                                                    <p
                                                        style="font-size: 14px; font-weight: 700; line-height: 24px; color: #000;">
                                                        Lorem ipsum dolor, sit amet consectetur.</p>
                                                    <p
                                                        style="font-size: 12px; font-weight: 500; line-height: 24px; color: rgba(0, 0, 0, 0.5);">
                                                        April 10, 2024</p>
                                                </div>
                                            </div>

                                            <div style="width: 100%; padding: 20px 0 0; gap: 10px;"
                                                class="d-flex justify-content-start">
                                                <div style="min-width: 70px; max-width: 70px;" class="d-flex">
                                                    <img src="../assets/images/recent-news-img.png" alt="">
                                                </div>
                                                <div>
                                                    <p
                                                        style="font-size: 14px; font-weight: 700; line-height: 24px; color: #000;">
                                                        Lorem ipsum dolor, sit amet consectetur.</p>
                                                    <p
                                                        style="font-size: 12px; font-weight: 500; line-height: 24px; color: rgba(0, 0, 0, 0.5);">
                                                        April 10, 2024</p>
                                                </div>
                                            </div>

                                            <div style="width: 100%; padding: 20px 0 0; gap: 10px;"
                                                class="d-flex justify-content-start">
                                                <div style="min-width: 70px; max-width: 70px;" class="d-flex">
                                                    <img src="../assets/images/recent-news-img.png" alt="">
                                                </div>
                                                <div>
                                                    <p
                                                        style="font-size: 14px; font-weight: 700; line-height: 24px; color: #000;">
                                                        Lorem ipsum dolor, sit amet consectetur.</p>
                                                    <p
                                                        style="font-size: 12px; font-weight: 500; line-height: 24px; color: rgba(0, 0, 0, 0.5);">
                                                        April 10, 2024</p>
                                                </div>
                                            </div>

                                            <div style="width: 100%; padding: 20px 0 0; gap: 10px;"
                                                class="d-flex justify-content-start">
                                                <div style="min-width: 70px; max-width: 70px;" class="d-flex">
                                                    <img src="../assets/images/recent-news-img.png" alt="">
                                                </div>
                                                <div>
                                                    <p
                                                        style="font-size: 14px; font-weight: 700; line-height: 24px; color: #000;">
                                                        Lorem ipsum dolor, sit amet suiiyja consectetur.</p>
                                                    <p
                                                        style="font-size: 12px; font-weight: 500; line-height: 24px; color: rgba(0, 0, 0, 0.5);">
                                                        April 10, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                style="width: 100%; height: 100%; background: rgba(250, 249, 246); border-radius: 10px; margin: 20px 0 0;">
                                <div style="padding: 30px;">
                                    <div style="width: 100%;">
                                        <div class="recent-news"
                                            style="font-size: 20px; font-weight: 500; line-height: 24px; color: #000; margin: 0 0 15px 0; position: relative;">
                                            Popular Tag
                                        </div>

                                        <div>
                                            <div style="width: 100%; padding: 20px 0 0; gap: 10px;"
                                                class="d-flex justify-content-start">
                                                <div style="min-width: 70px; max-width: 70px;" class="d-flex">
                                                    <img src="../assets/images/recent-news-img.png" alt="">
                                                </div>
                                                <div>
                                                    <p
                                                        style="font-size: 14px; font-weight: 700; line-height: 24px; color: #000;">
                                                        Lorem ipsum dolor, sit amet consectetur.</p>
                                                    <p
                                                        style="font-size: 12px; font-weight: 500; line-height: 24px; color: rgba(0, 0, 0, 0.5);">
                                                        April 10, 2024</p>
                                                </div>
                                            </div>

                                            <div style="width: 100%; padding: 20px 0 0; gap: 10px;"
                                                class="d-flex justify-content-start">
                                                <div style="min-width: 70px; max-width: 70px;" class="d-flex">
                                                    <img src="../assets/images/recent-news-img.png" alt="">
                                                </div>
                                                <div>
                                                    <p
                                                        style="font-size: 14px; font-weight: 700; line-height: 24px; color: #000;">
                                                        Lorem ipsum dolor, sit amet consectetur.</p>
                                                    <p
                                                        style="font-size: 12px; font-weight: 500; line-height: 24px; color: rgba(0, 0, 0, 0.5);">
                                                        April 10, 2024</p>
                                                </div>
                                            </div>

                                            <div style="width: 100%; padding: 20px 0 0; gap: 10px;"
                                                class="d-flex justify-content-start">
                                                <div style="min-width: 70px; max-width: 70px;" class="d-flex">
                                                    <img src="../assets/images/recent-news-img.png" alt="">
                                                </div>
                                                <div>
                                                    <p
                                                        style="font-size: 14px; font-weight: 700; line-height: 24px; color: #000;">
                                                        Lorem ipsum dolor, sit amet consectetur.</p>
                                                    <p
                                                        style="font-size: 12px; font-weight: 500; line-height: 24px; color: rgba(0, 0, 0, 0.5);">
                                                        April 10, 2024</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            style="width: 100%; gap: 20px 40px; display: grid; grid-template-columns: repeat(2, 1fr); overflow-y: auto;">

                            <div style="width: calc(100% - 2px); border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                <div style="margin: 20px;">
                                    <div style="width: 100%; border-radius: 10px;" class="d-flex">
                                        <img loading="lazy" src="../assets/images/recent-news-cards-img.png" alt="">
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

                                        <div
                                            style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                            Read More
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="width: calc(100% - 2px); border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                <div style="margin: 20px;">
                                    <div style="width: 100%; border-radius: 10px;" class="d-flex">
                                        <img loading="lazy" src="../assets/images/recent-news-cards-img.png" alt="">
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

                                        <div
                                            style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                            Read More
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="width: calc(100% - 2px); border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                <div style="margin: 20px;">
                                    <div style="width: 100%; border-radius: 10px;" class="d-flex">
                                        <img loading="lazy" src="../assets/images/recent-news-cards-img.png" alt="">
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

                                        <div
                                            style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                            Read More
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div style="width: calc(100% - 2px); border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                <div style="margin: 20px;">
                                    <div style="width: 100%; border-radius: 10px;" class="d-flex">
                                        <img loading="lazy" src="../assets/images/recent-news-cards-img.png" alt="">
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

                                        <div
                                            style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                            Read More
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
        <div style="width: 100%; background: rgba(18, 24, 32, 1);">
            <div style="height: 100%; padding: 50px 15px 0;" class="main-content-container">
                <div style="width: 100%; gap: 80px;" class="d-flex justify-content-between align-items-start">
                    <div>
                        <div
                            style="font-size: 18px; font-weight: 700; color: rgba(245, 133, 32, 1); text-transform: uppercase; text-wrap: nowrap;">
                            Excis Compliance Ltd.
                        </div>
                        <div
                            style="font-size: 13px; font-weight: 300; line-height: 20px; letter-spacing: 1px; padding: 15px 0 0; color: rgba(250, 249, 246, 1);">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, repellat? Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Obcaecati temporibus tenetur,
                            necessitatibus
                            officiis quisquam consectetur. Blanditiis autem ipsum eos aut?
                        </div>
                        <div style="width: 60%; padding: 30px 0 0;"
                            class="d-flex justify-content-between align-items-center">
                            <div style="height: 22px;">
                                <img src="../assets/images/facebook.png" style="width: auto;" alt="">
                            </div>
                            <div style="height: 22px;">
                                <img src="../assets/images/youtube.png" style="width: auto;" alt="">
                            </div>
                            <div style="height: 22px;">
                                <img src="../assets/images/instagram.png" style="width: auto;" alt="">
                            </div>
                            <div style="height: 22px;">
                                <img src="../assets/images/twitter.png" style="width: auto;" alt="">
                            </div>
                            <div style="height: 22px;">
                                <img src="../assets/images/linkedin.png" style="width: auto;" alt="">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div
                                style="font-size: 18px; font-weight: 700; color: rgba(245, 133, 32, 1); text-transform: capitalize; text-wrap: nowrap;">
                                Our Services
                            </div>
                            <div style="padding: 10px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Network</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Data
                                    Center Support</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">End-User
                                    Support</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Audio-Visual</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">WiFi
                                    Services</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Cybersecurity
                                    Consulting</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">API
                                    Integration</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Warehousing</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Audio-Visual</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">WiFi
                                    Services</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Cybersecurity
                                    Consulting</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">All
                                    Services &nbsp; -></a>
                            </div>
                        </div>

                        <div>
                            <div
                                style="font-size: 18px; font-weight: 700; padding: 20px 0 0; color: rgba(245, 133, 32, 1); text-transform: capitalize; text-wrap: nowrap;">
                                About Us
                            </div>
                            <div style="padding: 10px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Why
                                    Excis</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Career
                                    Opportunities</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">CSR</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Worldwide</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Partners</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div
                                style="font-size: 18px; font-weight: 700; color: rgba(245, 133, 32, 1); text-transform: capitalize; text-wrap: nowrap;">
                                Industries
                            </div>
                            <div style="padding: 10px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Retail</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Energy</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Life
                                    Sciences</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Financial
                                    Services (FS&I)</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Telecoms</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Utilities</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Public
                                    Sector</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Manufacturing</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Education</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">IT
                                    & Consulting</a>
                            </div>
                        </div>

                        <div>
                            <div
                                style="font-size: 18px; font-weight: 700; padding: 20px 0 0; color: rgba(245, 133, 32, 1); text-transform: capitalize; text-wrap: nowrap;">
                                Insights
                            </div>
                            <div style="padding: 10px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Blogs/Case
                                    Studies</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">News</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#"
                                    style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Research
                                    & Development</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div
                            style="font-size: 16px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">
                            ISO Certfications Certified <br> Covering The UK
                        </div>
                        <div style="padding: 20px 0 0; gap: 10px;"
                            class="d-flex justify-content-between align-itemcenter">
                            <div style="width: 60px;" class="d-flex">
                                <img src="../assets/images/iso-1.png" alt="">
                            </div>
                            <div style="width: 60px;" class="d-flex">
                                <img src="../assets/images/iso-2.png" alt="">
                            </div>
                            <div style="width: 60px;" class="d-flex">
                                <img src="../assets/images/iso-3.png" alt="">
                            </div>
                            <div style="width: 60px;" class="d-flex">
                                <img src="../assets/images/iso-4.png" alt="">
                            </div>
                        </div>
                        <div style="padding: 15px 0 0;">
                            <div style="width: 100px;" class="d-flex">
                                <img src="../assets/images/cyber-essentials.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 100%; padding: 25px 0 0; border-bottom: 1px solid #fff;"></div>
                <div style="height: 70px;" class="d-flex justify-content-between align-items-center">
                    <div style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1);">
                        ©2024 Excis Compliance Ltd. All Rights Reserved.
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div style="padding: 0 15px 0;">
                            <a href="" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1);">General
                                Policies</a>
                        </div>
                        <div style="padding: 0 15px 0;">
                            <a href=""
                                style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1);">Privacy/
                                Cookies Policy</a>
                        </div>
                        <div style="padding: 0 15px 0;">
                            <a href="" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1);">Terms
                                and Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const cards = document.querySelector('.cards');

        let cardIndex = 0;
        const cardWidth = 33.27; // Card width including margin
        const visibleCards = 3;
        const totalCards = cards.children.length;

        function updateCarousel() {
            cards.style.transform = `translateX(${-cardIndex * cardWidth}%)`;
            prevBtn.disabled = cardIndex === 0;
            nextBtn.disabled = cardIndex >= totalCards - visibleCards;
        }

        prevBtn.addEventListener('click', () => {
            if (cardIndex > 0) {
                cardIndex--;
                updateCarousel();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (cardIndex < totalCards - visibleCards) {
                cardIndex++;
                updateCarousel();
            }
        });
    </script>

    <script>
        // Initialize the intl-tel-input plugin
        var input = document.querySelector("#phone");
        var iti = window.intlTelInput(input, {
            initialCountry: "auto",
            separateDialCode: true,
            geoIpLookup: function (success, failure) {
                $.get("https://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "us";
                    success(countryCode);
                });
            }
            // },
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js" // just for formatting/placeholders etc
        });

        // Log the selected country on change
        input.addEventListener("countrychange", function () {
            var selectedCountryData = iti.getSelectedCountryData();
            // console.log("Selected country:", selectedCountryData.name, selectedCountryData.dialCode);
            // console.log("Selected country phone code:", selectedCountryData.dialCode);
        });
    </script>

</body>

</html>