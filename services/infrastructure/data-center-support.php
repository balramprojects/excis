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

    <title>Services - Excis Compliance Ltd.</title>

    <link rel="canonical" href="https://www.exc1s.com/services">
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
        .benefits-cards {
            width: 98%;
            margin-inline: auto;
            padding: 50px 0 0;
            gap: 20px;
        }

        .benefits-cards .benefits-card {
            width: 100%;
            background: #fff;
            border-radius: 10px;
        }

        .benefits-cards .benefits-card .card-content {
            padding: 20px 20px 40px 20px;
        }

        .benefits-cards .benefits-card .card-content ul {
            list-style-type: disc;
            padding: 0 30px 0 50px;
        }

        .benefits-cards .benefits-card .card-content ul li {
            font-size: 13px;
            font-weight: 400;
            line-height: 22px;
            color: #000;
        }

        .support-cards {
            width: 98%;
            margin-inline: auto;
            padding: 50px 0 0;
            gap: 20px;
            flex-wrap: wrap;
        }

        .support-cards .support-card {
            max-width: 400px;
            height: 250px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
        }

        .support-cards .support-card .card-content {
            padding: 40px;
        }
    </style>

    <style>
        .pie-containers {
            width: 600px;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-inline: auto;
        }

        .pie-containers-center-point {
            width: 0;
            height: 0;
            position: relative;
        }

        .pie-containers-center-point .pie-container-center-circle {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            background: rgba(21, 35, 75);
            position: absolute;
            z-index: 1;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .pie-containers-center-point .pie-slice {
            width: 206px;
            height: 300px;
            position: absolute;
            top: -300px;
            left: 50%;
            transform-origin: bottom;
            clip-path: polygon(0% 0%, 100% 0%, 100% 40px, 50% 100%, 0% 40px);
            transform: translate(-50%, 0);
            transition: all .5s ease-in-out;
        }

        .pie-containers-center-point .pie-slice.slice-1 {
            transform: translate(-50%, 0) rotate(0deg);
        }

        .pie-containers-center-point .pie-slice.slice-2 {
            transform: translate(-50%, 0) rotate(45deg);
        }

        .pie-containers-center-point .pie-slice.slice-3 {
            transform: translate(-50%, 0) rotate(90deg);
        }

        .pie-containers-center-point .pie-slice.slice-4 {
            transform: translate(-50%, 0) rotate(135deg);
        }

        .pie-containers-center-point .pie-slice.slice-5 {
            transform: translate(-50%, 0) rotate(180deg);
        }

        .pie-containers-center-point .pie-slice.slice-6 {
            transform: translate(-50%, 0) rotate(225deg);
        }

        .pie-containers-center-point .pie-slice.slice-7 {
            transform: translate(-50%, 0) rotate(270deg);
        }

        .pie-containers-center-point .pie-slice.slice-8 {
            transform: translate(-50%, 0) rotate(315deg);
        }

        .pie-containers-center-point .pie-slice .pie-triangle {
            height: 250px;
            width: 206px;
            position: relative;
            top: 40px;
            background: rgba(233, 233, 233);
            clip-path: polygon(0% 0%, 100% 0%, 50% 100%);
        }

        .pie-containers-center-point .pie-slice.active .pie-triangle {
            background: rgb(245, 133, 32);
            top: 30px;
            transition: all .2s ease-in-out;
        }

        .pie-containers-center-point .pie-slice .pie-triangle .pie-triangle-left-curve-block,
        .pie-containers-center-point .pie-slice .pie-triangle .pie-triangle-right-curve-block {
            width: 17px;
            height: 17px;
            position: absolute;
            top: -2px;
            background: #fff;
        }

        .pie-containers-center-point .pie-slice .pie-triangle .pie-triangle-left-curve-block {
            border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;
            left: 0;
        }

        .pie-containers-center-point .pie-slice .pie-triangle .pie-triangle-right-curve-block {
            border-bottom-left-radius: 10px;
            border-top-left-radius: 10px;
            right: 0;
        }

        .pie-containers-center-point .pie-slice .pie-triangle .pie-triangle-left-curve-block .pie-triangle-curve,
        .pie-containers-center-point .pie-slice .pie-triangle .pie-triangle-right-curve-block .pie-triangle-curve {
            width: 25px;
            height: 25px;
            position: absolute;
            top: 1px;
            background: rgba(233, 233, 233);
            border-radius: 50%;
        }

        .pie-containers-center-point .pie-slice .pie-triangle .pie-triangle-left-curve-block .pie-triangle-curve {
            left: 5.5px;
        }

        .pie-containers-center-point .pie-slice .pie-triangle .pie-triangle-right-curve-block .pie-triangle-curve {
            right: 5.5px;
        }

        .pie-containers-center-point .pie-slice.active .pie-triangle .pie-triangle-left-curve-block .pie-triangle-curve,
        .pie-containers-center-point .pie-slice.active .pie-triangle .pie-triangle-right-curve-block .pie-triangle-curve {
            background: rgb(245, 133, 32);
            transition: .2s ease-in-out;
        }

        .pie-containers-center-point .pie-slice .pie-triangle-outer-circle {
            height: 52px;
            width: 52px;
            position: absolute;
            top: 15px;
            left: 50%;
            transform: translate(-50%, 0%);
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgb(233, 233, 233);
            border: 1.5px solid #fff;
            border-radius: 50%;
            box-shadow: 0px 8px 3px -1px rgb(137, 147, 152);
        }

        .pie-containers-center-point .pie-slice.active .pie-triangle-outer-circle {
            top: 0;
            transition: all .2s ease-in-out;
        }

        .pie-containers-center-point .pie-slice.active .pie-triangle-outer-circle {
            background: rgb(21, 35, 75);
            box-shadow: 0px 8px 3px -1px rgb(21, 35, 75, 0.5);
            transition: all .2s ease-in-out;
        }

        .pie-containers-center-point .pie-slice .pie-triangle-outer-circle .pie-triangle-inner-circle {
            height: 42px;
            width: 42px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(191, 191, 191, 1);
            border: 1.5px solid #fff;
            border-radius: 50%;
        }

        .pie-containers-center-point .pie-slice.active .pie-triangle-outer-circle .pie-triangle-inner-circle {
            background: rgb(245, 133, 32);
            transition: all .2s ease-in-out;
        }

        .pie-containers-center-point .pie-slice .pie-triangle-outer-circle .pie-triangle-inner-circle .icon-img {
            max-width: 21px;
            display: flex;
        }

        .pie-containers-center-point .pie-slice .txt-content {
            position: absolute;
            top: calc(50% - 15px);
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: rgba(115, 115, 115, 0.5);
            font-size: 12px;
            font-weight: 700;
            text-wrap: wrap;
        }

        .pie-containers-center-point .pie-slice.active .txt-content {
            top: calc(50% - 30px);
            color: #fff;
            font-size: 13px;
            transition: all .2s ease-in-out;
        }

        .pie-containers-center-point .pie-slice.slice-1 .pie-triangle-outer-circle .pie-triangle-inner-circle .icon-img {
            transform: rotate(0deg);
        }

        .pie-containers-center-point .pie-slice.slice-2 .pie-triangle-outer-circle .pie-triangle-inner-circle .icon-img {
            max-width: 15px;
            transform: rotate(-45deg);
        }

        .pie-containers-center-point .pie-slice.slice-3 .pie-triangle-outer-circle .pie-triangle-inner-circle .icon-img {
            max-width: 21px;
            transform: rotate(-90deg);
        }

        .pie-containers-center-point .pie-slice.slice-4 .pie-triangle-outer-circle .pie-triangle-inner-circle .icon-img {
            transform: rotate(-135deg);
        }

        .pie-containers-center-point .pie-slice.slice-5 .pie-triangle-outer-circle .pie-triangle-inner-circle .icon-img {
            transform: rotate(-180deg);
        }

        .pie-containers-center-point .pie-slice.slice-6 .pie-triangle-outer-circle .pie-triangle-inner-circle .icon-img {
            transform: rotate(-225deg);
        }

        .pie-containers-center-point .pie-slice.slice-7 .pie-triangle-outer-circle .pie-triangle-inner-circle .icon-img {
            transform: rotate(-270deg);
        }

        .pie-containers-center-point .pie-slice.slice-8 .pie-triangle-outer-circle .pie-triangle-inner-circle .icon-img {
            transform: rotate(-315deg);
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
                                    <div class="nav-tab-item active d-flex align-items-center">
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

    <!-- Banner + Breadcrumb -->
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
                        Home - Services - <span style="font-weight: 600;">Data Center Support</span>
                    </div>
                    <div style="font-size: 40px; font-weight: 600; padding: 5px 0 0; color: rgba(37, 37, 37, 1);">
                        Data Center Support
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Service -->
    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative; overflow: hidden;">
                <div class="main-content-container">
                    <div style="padding: 50px 15px;" class="d-flex justify-content-between align-items-center">
                        <div style="max-width: 600px;">
                            <div style="font-size: 30px; font-weight: 500; line-height: 40px; color: #F58520;">
                                Complete Data Center <br> Support Services
                            </div>
                            <div style="padding: 25px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias temporibus, dicta veniam, quis, accusantium perspiciatis consectetur sapiente ab modi sed excepturi vitae. Sapiente velit quibusdam rerum natus enim culpa a nemo delectus illum consequuntur, architecto illo corporis sed cumque? Necessitatibus.
                                <br> <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque sed ratione reiciendis minus amet! Quo sit quos reprehenderit blanditiis, qui exercitationem architecto commodi quidem similique ad culpa ipsum eum non fuga dolores aut dolorem eos, neque suscipit dicta cupiditate, nisi dolorum voluptatibus! Explicabo quisquam aspernatur quod, autem nemo sit velit libero, veritatis amet quis odit facere vel, unde dicta quas. Perferendis quaerat omnis unde harum necessitatibus debitis nam alias ratione reprehenderit recusandae, nisi incidunt. Asperiores laborum esse maxime sint amet?
                                <br> <br>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet vitae, ratione, qui neque temporibus deserunt omnis nemo soluta eum magni fuga consectetur! Libero, incidunt molestiae reprehenderit saepe omnis dicta. Recusandae!
                            </div>
                        </div>
                        <div style="max-width: 360px;" class="d-flex">
                            <img loading="lazy" src="../assets/images/data-center-creativity.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Support Service -->
    <div class="full-container">
        <div style="width: 100%; background: linear-gradient(to bottom, #1B315D, #354D7D);;">
            <div style="height: 100%; padding: 70px 15px;" class="main-content-container">
                <div style="max-width: 700px; margin-inline: auto; color: #fff; font-size: 30px; line-height: 40px; font-weight: 500; text-align: center;">
                    What data center support services do we offer?
                </div>
                <div style="max-width: 800px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; text-align: center; padding: 20px 0 0;">
                    Our technicians are available around the clock so you can contact them anytime. The expert offers the end-to-end data center support solution quickly. You can stay in peace when our expert provides remote support service. We provide the following data center services with certified professionals and modern technologies.
                </div>

                <div class="support-cards d-flex">
                    <div class="support-card">
                        <div class="card-content">
                            <div style="font-size: 24px; font-weight: 700; color: #000;">
                                Technical Support
                            </div>
                            <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                Our experienced technicians are available on-site to perform critical tasks and resolve issues quickly. They are experienced in diagnosing and fixing hardware and software issues, ensuring minimal downtime.
                            </div>
                        </div>
                    </div>

                    <div class="support-card">
                        <div class="card-content">
                            <div style="font-size: 24px; font-weight: 700; color: #000;">
                                Installing Racks
                            </div>
                            <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                We carry out careful rack installation, ensuring optimal space and organization of your equipment.
                            </div>
                        </div>
                    </div>

                    <div class="support-card">
                        <div class="card-content">
                            <div style="font-size: 24px; font-weight: 700; color: #000;">
                                Remote Monitoring
                            </div>
                            <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                Our advanced monitoring tools keep a close eye on the health of your data center. We proactively identify and fix potential problems before they escalate, minimizing disruptions to your operations.
                            </div>
                        </div>
                    </div>

                    <div class="support-card">
                        <div class="card-content">
                            <div style="font-size: 24px; font-weight: 700; color: #000;">
                                Device Integration
                            </div>
                            <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                Our experts are well-versed in integrating various devices into your data center, from servers to network equipment, ensuring smooth operations.
                            </div>
                        </div>
                    </div>

                    <div class="support-card">
                        <div class="card-content">
                            <div style="font-size: 24px; font-weight: 700; color: #000;">
                                Cloud Support
                            </div>
                            <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                As cloud technology continues to play a key role in data center operations, we offer comprehensive cloud support services, including migration and management.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative; overflow: hidden;">
                <div
                    style="width: 290px; height: 416px; background-image: url('../assets/images/abstract-bg-btm.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; bottom: 0; left: 0;">
                </div>
                <div
                    style="width: 290px; height: 416px; background-image: url('../assets/images/abstract-bg.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; top: 0; right: 0;">
                </div>

                <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                    <div style="font-size: 36px; font-weight: 500; color: #F58520; text-align: center;">
                        Explore Our Other Services
                    </div>

                    <div style="padding: 30px 0 0;" class="d-flex justify-content-between align-items-center">
                        <div style="width: 50%;">
                            <div class="pie-containers">
                                <div class="pie-containers-center-point">
                                    <div class="pie-container-center-circle">
                                        <div style="width: 120px; display: flex;">
                                            <img loading="lazy" style="height: 100%; width: 100%;" src="../assets/images/excis-logo.png" alt="">
                                        </div>
                                    </div>

                                    <div class="pie-slice">
                                        <div class="pie-triangle">
                                            <div class="pie-triangle-left-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                            <div class="pie-triangle-right-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                        </div>
                                        <div class="pie-triangle-outer-circle">
                                            <div class="pie-triangle-inner-circle">
                                                <div class="icon-img">
                                                    <img loading="lazy" src="../assets/images/pie-icon8.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt-content">
                                            Cyber Security Solutions
                                        </div>
                                    </div>
                                    <div class="pie-slice">
                                        <div class="pie-triangle">
                                            <div class="pie-triangle-left-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                            <div class="pie-triangle-right-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                        </div>
                                        <div class="pie-triangle-outer-circle">
                                            <div class="pie-triangle-inner-circle">
                                                <div class="icon-img">
                                                    <img loading="lazy" src="../assets/images/pie-icon2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt-content">
                                            WiFi Services
                                        </div>
                                    </div>
                                    <div class="pie-slice">
                                        <div class="pie-triangle">
                                            <div class="pie-triangle-left-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                            <div class="pie-triangle-right-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                        </div>
                                        <div class="pie-triangle-outer-circle">
                                            <div class="pie-triangle-inner-circle">
                                                <div class="icon-img">
                                                    <img loading="lazy" src="../assets/images/pie-icon3.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt-content">
                                            Network Security Solutions
                                        </div>
                                    </div>
                                    <div class="pie-slice">
                                        <div class="pie-triangle">
                                            <div class="pie-triangle-left-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                            <div class="pie-triangle-right-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                        </div>
                                        <div class="pie-triangle-outer-circle">
                                            <div class="pie-triangle-inner-circle">
                                                <div class="icon-img">
                                                    <img loading="lazy" src="../assets/images/pie-icon4.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt-content">
                                            Audio Visual Solutions
                                        </div>
                                    </div>
                                    <div class="pie-slice">
                                        <div class="pie-triangle">
                                            <div class="pie-triangle-left-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                            <div class="pie-triangle-right-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                        </div>
                                        <div class="pie-triangle-outer-circle">
                                            <div class="pie-triangle-inner-circle">
                                                <div class="icon-img">
                                                    <img loading="lazy" src="../assets/images/pie-icon5.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt-content">
                                            Data Center Support
                                        </div>
                                    </div>
                                    <div class="pie-slice">
                                        <div class="pie-triangle">
                                            <div class="pie-triangle-left-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                            <div class="pie-triangle-right-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                        </div>
                                        <div class="pie-triangle-outer-circle">
                                            <div class="pie-triangle-inner-circle">
                                                <div class="icon-img">
                                                    <img loading="lazy" src="../assets/images/pie-icon6.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt-content">
                                            End Support Solution
                                        </div>
                                    </div>
                                    <div class="pie-slice">
                                        <div class="pie-triangle">
                                            <div class="pie-triangle-left-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                            <div class="pie-triangle-right-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                        </div>
                                        <div class="pie-triangle-outer-circle">
                                            <div class="pie-triangle-inner-circle">
                                                <div class="icon-img">
                                                    <img loading="lazy" src="../assets/images/pie-icon7.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt-content">
                                            Data Storage Solutions
                                        </div>
                                    </div>
                                    <div class="pie-slice">
                                        <div class="pie-triangle">
                                            <div class="pie-triangle-left-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                            <div class="pie-triangle-right-curve-block">
                                                <div class="pie-triangle-curve"></div>
                                            </div>
                                        </div>
                                        <div class="pie-triangle-outer-circle">
                                            <div class="pie-triangle-inner-circle">
                                                <div class="icon-img">
                                                    <img loading="lazy" src="../assets/images/pie-icon1.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="txt-content">
                                            Migration Solutions
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width: 50%;">
                            <div style="max-width: 550px; margin-left: auto;">
                                <div style="font-size: 28px; font-weight: 500; color: #F58520;">
                                    Cyber Security Solutions
                                </div>
                                <div style="font-size: 14px; font-weight: 400; line-height: 22px; color: #000; padding: 25px 0 0;">
                                    We are focused on your unique business needs and will work hard to ensure your network is in safe hands. With managed services for your data center, you can work hard doing your thing while we work hard doing our thing.
                                    <br> <br>
                                    With our managed data center support services, you have all the support you need with your data center management. As a service, we can provide the people, security, and technology that your business needs to optimize your cloud and IT infrastructure. And knowing how busy you are running your operation, you can have the peace of mind knowing that we will support you remotely. With our management and automation capabilities, you will have more time to focus on your strategic initiatives.
                                    <br> <br>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum distinctio quasi itaque architecto odit vitae laboriosam, delectus odio nulla sunt cumque iusto neque deserunt placeat eum ad blanditiis? Aperiam modi odio doloremque, fugiat ipsam repellat esse accusantium error inventore facilis.
                                </div>
                                <a href="#">
                                    <div style="width: fit-content; padding: 12px 20px; margin: 30px 0 0; background: transparent; border: 1px solid #000; gap: 12px; border-radius: 10px;"
                                        class="d-flex justify-content-center align-items-center">
                                        <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap; color: #000;">
                                            Learn More</p>
                                        <div style="width: 20px;" class="d-flex">
                                            <img loading="lazy" src="../assets/images/btn-arrow.png" alt="Excis Compliance">
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

    <!-- Benefits Of Working -->
    <div class="full-container">
        <div style="width: 100%; background: linear-gradient(to bottom, #1B315D, #354D7D);;">
            <div style="height: 100%; padding: 70px 15px;" class="main-content-container">
                <div style="max-width: 700px; margin-inline: auto; color: #fff; font-size: 30px; line-height: 40px; font-weight: 500; text-align: center;">
                    Benefits of working with Excis
                </div>
                <div style="max-width: 650px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; text-align: center; padding: 20px 0 0;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto amet molestiae deserunt accusamus consequuntur minima at tenetur iure!\
                </div>

                <div class="benefits-cards d-flex">
                    <div class="benefits-card">
                        <div class="card-content">
                            <div style="width: 50px; margin-inline: auto;" class="flex">
                                <img loading="lazy" src="../assets/images/sparkling-stars.png" alt="">
                            </div>
                            <div style="font-size: 20px; font-weight: 500; text-align: center; color: #1B315D; padding: 15px 0;">
                                One Point of Contact
                            </div>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptas!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptas!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptas!</li>
                            </ul>
                        </div>
                    </div>

                    <div class="benefits-card">
                        <div class="card-content">
                            <div style="width: 50px; margin-inline: auto;" class="flex">
                                <img loading="lazy" src="../assets/images/sparkling-stars.png" alt="">
                            </div>
                            <div style="font-size: 20px; font-weight: 500; text-align: center; color: #1B315D; padding: 15px 0;">
                                Centralized Operations
                            </div>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptas!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptas!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptas!</li>
                            </ul>
                        </div>
                    </div>

                    <div class="benefits-card">
                        <div class="card-content">
                            <div style="width: 50px; margin-inline: auto;" class="flex">
                                <img loading="lazy" src="../assets/images/sparkling-stars.png" alt="">
                            </div>
                            <div style="font-size: 20px; font-weight: 500; text-align: center; color: #1B315D; padding: 15px 0;">
                                24/7 Global Coverage
                            </div>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptas!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptas!</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, voluptas!</li>
                            </ul>
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

    <!-- Start your Business Transformation -->
    <div class="full-container">
        <div style="width: 100%; background: linear-gradient(to bottom, #1B315D, #354D7D);;">
            <div style="height: 100%; padding: 70px 15px;" class="main-content-container">
                <div style="max-width: 700px; margin-inline: auto; color: #fff; font-size: 35px; line-height: 50px; font-weight: 700; text-align: center;">
                    Start your business transformation today with Excis!
                </div>
                <div style="max-width: 500px; margin-inline: auto; color: #fff; font-size: 16px; line-height: 24px; font-weight: 400; text-align: center; padding: 20px 0 0;">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, impedit. Ipsa nemo eligendi laudantium totam.
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
        const triangles = document.querySelectorAll('.pie-containers-center-point .pie-slice');

        triangles.forEach(triangle => {

            triangle.addEventListener('mouseenter', function() {

                triangles.forEach(tri => {
                    tri.classList.remove('active');
                })

                this.classList.add('active');
            });

            // triangle.addEventListener('mouseleave', function() {
            //     this.classList.remove('active');
            // });

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