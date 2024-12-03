<?php
include('../constant.php');
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
        .carousel-container {
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0 0 50px 0;
        }

        .carousel-container .carousel {
            overflow: visible;
            max-width: 1265px;
            width: 100%;
            margin-inline: auto;
        }

        .carousel-container .carousel .cards {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .carousel-container .carousel .cards .card {
            flex: 0 0 31.6%;
            margin: 0 10px;
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
                        <a href="<?php echo $desktop_url; ?>">Home</a> - <span class="page">Services</span>
                    </div>
                    <div class="page-title">
                        Services
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
                    <div style="width: 100%;" class="d-flex justify-content-between align-items-start">
                        <div>
                            <div style="font-size: 32px; font-weight: 500; color: #F58520;">
                                Services we’ve excelled in
                            </div>
                            <div
                                style="max-width: 60%; font-size: 14px; font-weight: 400; line-height: 20px; padding: 10px 0 0; color: rgba(37, 37, 37, 1);">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore mollitia veniam
                                temporibus molestias consequuntur provident voluptatem eligendi a consectetur nostrum.
                            </div>
                        </div>
                        <div>
                            <div style="gap: 15px;" class="d-flex justify-content-center">
                                <button class="prev-btn d-flex justify-content-center align-items-center" id="prev-btn"
                                    disabled>
                                    <div class="btn-arrow d-flex justify-content-center align-items-center">
                                        <div style="max-width: 12px;" class="d-flex">
                                            <img src="./../assets/images/prev-arrow-icon.png" alt="">
                                        </div>
                                    </div>
                                </button>
                                <button class="next-btn d-flex justify-content-center align-items-center" id="next-btn">
                                    <div class="btn-arrow d-flex justify-content-center align-items-center">
                                        <div style="max-width: 12px;" class="d-flex">
                                            <img src="./../assets/images/next-arrow-icon.png" alt="">
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-container">
                    <div class="carousel">
                        <div class="cards">
                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px;">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'oil-and-gas-industries-icon.png'; ?>" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            Oil & Gas
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px;">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'banking-and-financial-industries-icon.png'; ?>" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            Banking & Financial
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px;">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'retail-industries-icon.png'; ?>" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            Retail
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px;">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'healthcare-industries-icon.png'; ?>" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            Healthcare
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="">
                                    <div style="padding: 50px;">
                                        <div style="max-width: 80px;">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'telecom-industries-icon.png'; ?>" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            Telecom
                                        </div>
                                        <div
                                            style="font-size: 16px; font-weight: 400; line-height: 24px; padding: 20px 0 0; color: #000;">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia, sit.
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

    <!-- Our Services -->
    <div class="full-container">
        <div class="our-services-bg" style="background: linear-gradient(to bottom, #1B315D, #354D7D);">
            <div class="our-services-container">
                <div class="left-btm-abstract desktop"></div>
                <div class="right-top-abstract desktop"></div>

                <div class="main-content-container">
                    <div class="content-container">
                        <div class="title-txt" style="color: #fff;" data-aos="zoom-out" data-aos-duration="1000">
                            Our Services
                        </div>
                        <div class="subtitle-txt" style="color: #fff;" data-aos="zoom-out" data-aos-duration="1000">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                            quis culpa cumque, laboriosam deserunt unde?
                        </div>

                        <div class="service-cards-container">
                            <div class="desktop">
                                <div class="cards">
                                    <div class="card d-flex justify-content-between" data-aos="fade-right" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'data-center-support-service-icon.png'; ?>" alt="Help Desk">
                                            </div>
                                            <div class="title">
                                                Data Center Support
                                            </div>
                                            <div class="subtitle">
                                                Comprehensive support for your data center infrastructure, ensuring optimal performance, uptime, and security.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/data-center-support.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'cyber-security-consultng-service-icon.png'; ?>" alt="Cyber Security Consulting">
                                            </div>
                                            <div class="title">
                                                Cyber Security Consulting
                                            </div>
                                            <div class="subtitle">
                                                Expert guidance to protect your business from evolving cyber threats with tailored security strategies and solutions.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/cyber-security-consulting.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'hybrid-cloud-service-icon.png'; ?>" alt="Hybrid Cloud">
                                            </div>
                                            <div class="title">
                                                Hybrid Cloud
                                            </div>
                                            <div class="subtitle">
                                                Seamless integration of private and public cloud environments, offering flexibility, scalability, and secure data management.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/hybrid-cloud.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'network-service-icon.png'; ?>" alt="Email Security">
                                            </div>
                                            <div class="title">
                                                Network
                                            </div>
                                            <div class="subtitle">
                                                Reliable network management and optimization services to ensure fast, secure, and efficient connectivity for your business.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/network.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'helpdesk-service-icon.png'; ?>" alt="Help Desk">
                                            </div>
                                            <div class="title">
                                                Help Desk
                                            </div>
                                            <div class="subtitle">
                                                24/7 support to resolve technical issues and ensure smooth IT operations for your team.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/helpdesk.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'end-user-support-service-icon.png'; ?>" alt="Web Security">
                                            </div>
                                            <div class="title">
                                                End-User Support
                                            </div>
                                            <div class="subtitle">
                                                Proactive assistance for end users, ensuring quick resolution of issues and enhancing overall productivity.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/end-user-support.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-left" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'audio-visual-service-icon.png'; ?>" alt="Audio Visual">
                                            </div>
                                            <div class="title">
                                                Audio Visual
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/audio-visual.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-right" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'wifi-services-icon.png'; ?>" alt="WiFi Services">
                                            </div>
                                            <div class="title">
                                                WiFi Services
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/wifi-services.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'opearting-system-service-icon.png'; ?>" alt="Operating System">
                                            </div>
                                            <div class="title">
                                                Operating System
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/operating-system.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-left" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'new-office-and-migration-solutions-service-icon.png'; ?>" alt="New Office + Migration Solutions">
                                            </div>
                                            <div class="title">
                                                New Office + Migration Solutions
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/new-office-and-migration-solutions.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-right" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'storage-as-a-service-icon.png'; ?>" alt="Storage As A Service (SaaS)">
                                            </div>
                                            <div class="title">
                                                Storage as a Service (SaaS)
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/storage-as-a-service.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'device-as-a-service-icon.png'; ?>" alt="Device as a Service (Daas)">
                                            </div>
                                            <div class="title">
                                                Device as a Service (Daas)
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/device-as-a-service.php'; ?>">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container" style="margin: 50px 0;">
        <div style="width: 100%; background: #fff">
            <div style="height: 100%; padding: 70px 15px;" class="main-content-container">
                <div style="width: 100%;" class="d-flex justify-content-between align-items-center">
                    <div style="font-size: 40px; font-weight: 700; line-height: 54px; color: #F58520;">
                        Get Your Right Solution, <br> Connect with Excis Today!
                    </div>
                    <div style="width: fit-content; padding: 12px 14px; background: rgba(18, 24, 32); gap: 12px; border-radius: 10px;"
                        class="d-flex justify-content-center align-items-center">
                        <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap; color: #fff;">
                            Let's Work Together</p>
                        <div style="width: 20px;" class="d-flex">
                            <img loading="lazy" src="../assets/images/btn-arrow.png" alt="Excis Compliance">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("../templates/partners.php");
    ?>

    <?php
    include("../templates/footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        const navItem = document.querySelectorAll('.middle-content .nav-block-container');
        navItem[1].querySelector('a .nav-tab-item').classList.add('active');
    </script>

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