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
    <link rel="stylesheet" href="../assets/sass/common.css">
    <link rel="stylesheet" href="../assets/sass/navigation.css">
    <link rel="stylesheet" href="../assets/sass/banners.css">
    <link rel="stylesheet" href="../assets/sass/inner-pages.css">
    <link rel="stylesheet" href="../assets/sass/footer.css">
    <link rel="stylesheet" href="../assets/sass/why-excis.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />

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
            cursor: pointer;
        }

        .pie-containers-center-point .pie-slice.active .pie-triangle {
            background: rgb(245, 133, 32);
            top: 30px;
            transition: all .2s ease-in-out;
        }

        .pie-containers-center-point .pie-slice:hover .pie-triangle {
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

        .pie-containers-center-point .pie-slice:hover .pie-triangle .pie-triangle-left-curve-block .pie-triangle-curve,
        .pie-containers-center-point .pie-slice:hover .pie-triangle .pie-triangle-right-curve-block .pie-triangle-curve {
            background: rgb(245, 133, 32);
            transition: .2s ease-in-out;
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

        .pie-containers-center-point .pie-slice:hover .pie-triangle-outer-circle {
            top: 0;
            background: rgb(21, 35, 75);
            box-shadow: 0px 8px 3px -1px rgb(21, 35, 75, 0.5);
            transition: all .2s ease-in-out;
        }

        .pie-containers-center-point .pie-slice.active .pie-triangle-outer-circle {
            top: 0;
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

        .pie-containers-center-point .pie-slice:hover .pie-triangle-outer-circle .pie-triangle-inner-circle {
            background: rgb(245, 133, 32);
            transition: all .2s ease-in-out;
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

        .pie-containers-center-point .pie-slice:hover .txt-content {
            top: calc(50% - 30px);
            color: #fff;
            font-size: 13px;
            transition: all .2s ease-in-out;
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

        .pie-section-info-card {
            max-width: 550px;
            margin-left: auto;
            display: none;
        }

        .pie-section-info-card:hover {
            display: block;
        }

        .pie-section-info-card.active {
            display: block;
        }

        .fabulous {
            position: relative;
        }

        .fabulous::before {
            content: "";
            width: 100%;
            height: 58px;
            position: absolute;
            top: 0;
            left: -525px;
            background: #1B315D;
            clip-path: polygon(0% 0%, 88% 0%, 100% 100%, 0% 100%);
        }
    </style>

</head>

<body>

    <?php
    include("../templates/navigation.php");
    ?>

    <div class="full-container">
        <div class="pages-banner">
            <div class="banner-bg-map-img">
                <picture>
                    <source srcset="../assets/images/inner-pages-banner-mobile.png" media="(max-width: 600px)">
                    <img src="../assets/images/inner-pages-banner.png" alt="Banner">
                </picture>
            </div>
            <div class="banner-left-abstract desktop">
                <img src="../assets/images/inner-pages-banner-abstract.png" alt="Abstract">
            </div>
            <div class="banner-right-abstract desktop">
                <img src="../assets/images/inner-pages-banner-abstract.png" alt="Abstract">
            </div>

            <div class="main-content-container">
                <div class="banner-txt d-flex flex-column justify-content-center">
                    <div class="breadcrumb">
                        <a href="<?php echo $desktop_url; ?>">Home</a> - <a href="<?php echo $desktop_url . 'services'; ?>">Services</a> - <span class="page">Global IT Support Services</span>
                    </div>
                    <div class="page-title">
                        Global IT Support Services
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div class="white-container-bg">
            <div class="container" style="overflow: visible;">
                <div class="left-btm-abstract2 desktop" style="bottom: -150px;"></div>
                <div class="right-top-abstract2 desktop" style="top: -150px;"></div>

                <div class="main-content-container">
                    <div class="page-about-feature-content d-flex justify-content-between align-items-center">
                        <div class="txt-content">
                            <div class="heading-txt">
                                Delivering 24/7 IT Support <br> Across the Globe
                            </div>

                            <div class="m-creative d-flex">
                                <img src="<?php echo $desktop_images . 'services/global-it-support-services-creative.png'; ?>" alt="Global IT Support Services">
                            </div>

                            <div class="sub-txt">
                                Excis’s Global IT Support Services provide on-demand, skilled resources to ensure your organization runs smoothly, no matter where you operate. With a global network of qualified IT engineers, we deliver on-site “smart hands” support and technical troubleshooting across time zones, in local languages, and in compliance with regional regulations.
                                <br> <br>
                                Our services cover a wide range of technologies, including enterprise infrastructure, networking, datacentres, cloud environments, and cybersecurity. Whether rolling out new systems, maintaining mission-critical infrastructure, or addressing technical challenges, Excis ensures consistent service quality and agility across global markets.
                                <br> <br>
                                <b>Ready to enhance your IT capabilities?</b>
                            </div>

                            <div class="desktop">
                                <div class="learn-more-btn-container d-flex justify-content-start align-items-center">
                                    <a href="<?php echo $desktop_url . 'contact-us.php'; ?>">
                                        <div class="learn-more-btn d-flex align-items-center">
                                            <p>Contact Us Today</p>
                                            <div class="arrow d-flex">
                                                <img src="<?php echo $desktop_images . 'btn-arrow.png'; ?>" alt="Arrow">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="creative d-flex">
                            <img src="<?php echo $desktop_images . 'services/global-it-support-services-creative.png'; ?>" alt="Global IT Support Services">
                        </div>
                    </div>

                    <div class="services-extend-capabilities">
                        <div class="content-container">
                            <div class="content d-flex align-items-start">
                                <div class="text-content">
                                    <div class="heading-txt">
                                        Extend Your IT Capabilities
                                    </div>
                                    <div class="sub-txt">
                                        Excis provides comprehensive global IT support services to enhance your organization’s technology infrastructure, ensuring optimal performance and security.
                                        <br> <br>
                                        From end-user support to cloud services and data center management, our team delivers reliable solutions that keep your systems running smoothly and efficiently across all platforms.
                                    </div>
                                </div>
                                <div class="cards d-flex justify-content-center">
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="icon-img-container">
                                                <div class="icon-img d-flex justify-content-center align-items-center">
                                                    <div class="img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Dollar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="heading-txt">
                                                End User Computing Support
                                            </div>
                                            <div class="sub-txt">
                                                Providing IT support for end-user devices and systems.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="icon-img-container">
                                                <div class="icon-img d-flex justify-content-center align-items-center">
                                                    <div class="img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Dollar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="heading-txt">
                                                Network Support
                                            </div>
                                            <div class="sub-txt">
                                                Ensuring stable and secure network connectivity for users.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="icon-img-container">
                                                <div class="icon-img d-flex justify-content-center align-items-center">
                                                    <div class="img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Dollar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="heading-txt">
                                                Enterprise WiFI Support
                                            </div>
                                            <div class="sub-txt">
                                                Managing and optimizing enterprise-level wireless network solutions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="icon-img-container">
                                                <div class="icon-img d-flex justify-content-center align-items-center">
                                                    <div class="img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Dollar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="heading-txt">
                                                Datacenter Support
                                            </div>
                                            <div class="sub-txt">
                                                Providing maintenance and troubleshooting for data center operations.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="icon-img-container">
                                                <div class="icon-img d-flex justify-content-center align-items-center">
                                                    <div class="img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Dollar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="heading-txt">
                                                Operating System Support
                                            </div>
                                            <div class="sub-txt">
                                                Assisting with OS installation, updates, and troubleshooting.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="icon-img-container">
                                                <div class="icon-img d-flex justify-content-center align-items-center">
                                                    <div class="img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Dollar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="heading-txt">
                                                Microsoft Cloud Services Support
                                            </div>
                                            <div class="sub-txt">
                                                Offering guidance and support for Microsoft cloud solutions.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="icon-img-container">
                                                <div class="icon-img d-flex justify-content-center align-items-center">
                                                    <div class="img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Dollar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="heading-txt">
                                                Amazon Web Services Support
                                            </div>
                                            <div class="sub-txt">
                                                Managing and supporting AWS cloud infrastructure and tools.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-content">
                                            <div class="icon-img-container">
                                                <div class="icon-img d-flex justify-content-center align-items-center">
                                                    <div class="img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'dollar-icon.png'; ?>" alt="Dollar">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="heading-txt">
                                                Google Cloud Support
                                            </div>
                                            <div class="sub-txt">
                                                Providing expertise and assistance for Google Cloud services.
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
    </div>

    <div class="full-container">
        <div class="blue-container-bg">
            <div class="main-content-container">
                <div class="container-txt-content">
                    <div class="heading-txt">
                        Why Choose Excis?
                    </div>
                    <div class="sub-txt">
                        Trusted Global IT Partner
                    </div>
                </div>

                <div class="common-grid-cards">
                    <div class="cards">
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-start align-items-center">
                                <div class="card-icon-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'career-growth-icon.png'; ?>" alt="Global Growth">
                                </div>
                                <div class="text-content">
                                    <div class="heading-txt">
                                        Localized Globalization
                                    </div>
                                    <div class="sub-txt">
                                        On-site support in multiple languages ensures smooth operations worldwide.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-start align-items-center">
                                <div class="card-icon-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'career-culture-icon.png'; ?>" alt="Innovative and Inclusive Culture">
                                </div>
                                <div class="text-content">
                                    <div class="heading-txt">
                                        Broad Expertise
                                    </div>
                                    <div class="sub-txt">
                                        Skilled engineers cover enterprise systems, cloud platforms, and cybersecurity.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-start align-items-center">
                                <div class="card-icon-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'career-benefits-icon.png'; ?>" alt="Comprehensive Support and Benefits">
                                </div>
                                <div class="text-content">
                                    <div class="heading-txt">
                                        Quick Deployment
                                    </div>
                                    <div class="sub-txt">
                                        Rapid on-demand resources minimize downtime and disruptions.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-start align-items-center">
                                <div class="card-icon-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'career-benefits-icon.png'; ?>" alt="Comprehensive Support and Benefits">
                                </div>
                                <div class="text-content">
                                    <div class="heading-txt">
                                        Flexible Scaling
                                    </div>
                                    <div class="sub-txt">
                                        Seamlessly extend IT operations into new markets with consistent service quality.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-content d-flex flex-column justify-content-start align-items-center">
                                <div class="card-icon-img d-flex">
                                    <img loading="lazy" src="<?php echo $desktop_images . 'career-benefits-icon.png'; ?>" alt="Comprehensive Support and Benefits">
                                </div>
                                <div class="text-content">
                                    <div class="heading-txt">
                                        Proven Track Record
                                    </div>
                                    <div class="sub-txt">
                                        Trusted by enterprises to handle diverse IT challenges across industries.
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
                            Benefits of Excis IT Support Service
                        </div>
                        <div class="sub-txt">
                            Optimized Operations and Reliable Support
                        </div>
                    </div>

                    <div class="service-benefits">
                        <div class="cards-container">
                            <div class="container-line">
                                <div class="card-block d-flex">
                                    <div class="img-content">
                                        <div class="img-circle d-flex justify-content-center align-items-center">
                                            <div class="tick-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'white-tick.png'; ?>" alt="✓">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-content d-flex align-items-start">
                                        <div class="heading-txt">
                                            Faster Issue Resolution
                                        </div>
                                        <div class="sub-txt">
                                            Skilled engineers quickly address and resolve technical challenges.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block d-flex">
                                    <div class="img-content">
                                        <div class="img-circle d-flex justify-content-center align-items-center">
                                            <div class="tick-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'white-tick.png'; ?>" alt="✓">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-content d-flex align-items-start">
                                        <div class="heading-txt">
                                            Enhanced Service Consistency
                                        </div>
                                        <div class="sub-txt">
                                            Uniform support ensures smooth operations across global markets.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block d-flex">
                                    <div class="img-content">
                                        <div class="img-circle d-flex justify-content-center align-items-center">
                                            <div class="tick-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'white-tick.png'; ?>" alt="✓">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-content d-flex align-items-start">
                                        <div class="heading-txt">
                                            Scalable IT Operations
                                        </div>
                                        <div class="sub-txt">
                                            Flexible solutions grow with your organization’s needs.
                                        </div>
                                    </div>
                                </div>
                                <div class="card-block d-flex">
                                    <div class="img-content">
                                        <div class="img-circle d-flex justify-content-center align-items-center">
                                            <div class="tick-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'white-tick.png'; ?>" alt="✓">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-content d-flex align-items-start">
                                        <div class="heading-txt">
                                            Regulatory-Compliant Solutions
                                        </div>
                                        <div class="sub-txt">
                                            Adherence to local laws ensures smooth and compliant operations.
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
        <div style="width: 100%; background: linear-gradient(to bottom, #1B315D, #354D7D);;">
            <div style="height: 100%; padding: 100px 15px;" class="main-content-container">
                <div style="max-width: 700px; margin-inline: auto; color: #fff; font-size: 38px; line-height: 50px; font-weight: 700; text-align: center;">
                    Start your business transformation today with Excis!
                </div>

                <div class="learn-more-btn-container d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="1000" style="margin: 30px 0 0;">
                    <a href="<?php echo $desktop_url . 'contact-us.php'; ?>">
                        <div class="learn-more-btn d-flex align-items-center">
                            <p>Partner With Us</p>
                            <div class="arrow d-flex">
                                <img loading="lazy" src="<?php echo $desktop_images . 'btn-arrow.png'; ?>" alt="Arrow">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("../templates/explore-other-services.php");
    ?>

    <?php
    include("../templates/footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        const navItem = document.querySelectorAll('.nav-menu .nav-block-container');
        navItem[2].querySelector('a .nav-tab-item').classList.add('active');
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