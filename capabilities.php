<?php
include('constant.php');
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
    <link rel="stylesheet" href="assets/sass/common.css">
    <link rel="stylesheet" href="assets/sass/navigation.css">
    <link rel="stylesheet" href="assets/sass/banners.css">
    <link rel="stylesheet" href="assets/sass/inner-pages.css">
    <link rel="stylesheet" href="assets/sass/footer.css">
    <link rel="stylesheet" href="assets/sass/why-excis.css">
    <link rel="stylesheet" href="assets/sass/services.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />

</head>

<body>

    <?php
    include("templates/navigation.php");
    ?>

    <div class="full-container">
        <div class="pages-banner">
            <div class="banner-bg-map-img">
                <picture>
                    <source srcset="<?php echo $desktop_images . 'inner-pages-banner-mobile.png'; ?>" media="(max-width: 600px)">
                    <img src="<?php echo $desktop_images . 'inner-pages-banner.png'; ?>" alt="Banner">
                </picture>
            </div>
            <div class="banner-left-abstract desktop">
                <img src="<?php echo $desktop_images . 'inner-pages-banner-abstract.png'; ?>" alt="Abstract">
            </div>
            <div class="banner-right-abstract desktop">
                <img src="<?php echo $desktop_images . 'inner-pages-banner-abstract.png'; ?>" alt="Abstract">
            </div>

            <div class="main-content-container">
                <div class="banner-txt d-flex flex-column justify-content-center">
                    <div class="breadcrumb">
                        <a href="<?php echo $desktop_url; ?>">Home</a> - <span class="page">Capabilities</span>
                    </div>
                    <div class="page-title">
                        Capabilities
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div class="white-container-bg">
            <div class="container">
                <div class="left-btm-abstract desktop"></div>
                <div class="right-top-abstract desktop"></div>

                <div class="main-content-container" style="padding: 50px 15px 0;">
                    <div class="services-excelled-container d-flex justify-content-between align-items-center">
                        <div class="content-txt">
                            <div class="heading-txt">
                                Services we’ve excelled in
                            </div>
                            <div class="sub-txt">
                                Our proven solutions are tailored to meet the unique needs of businesses across industries worldwide.
                            </div>
                        </div>
                        <div class="desktop">
                            <div class="carousel-prev-next-btn d-flex justify-content-center">
                                <button class="prev-btn d-flex justify-content-center align-items-center" id="prev-btn" disabled>
                                    <div class="btn-arrow d-flex justify-content-center align-items-center">
                                        <div class="arrow d-flex">
                                            <img src="<?php echo $desktop_images . 'prev-arrow-icon.png'; ?>" alt="">
                                        </div>
                                    </div>
                                </button>
                                <button class="next-btn d-flex justify-content-center align-items-center" id="next-btn">
                                    <div class="btn-arrow d-flex justify-content-center align-items-center">
                                        <div class="arrow d-flex">
                                            <img src="<?php echo $desktop_images . 'next-arrow-icon.png'; ?>" alt="">
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="desktop">
                    <div class="services-excelled-carousel-container">
                        <div class="cards d-flex">
                            <div class="card">
                                <a href="<?php echo $desktop . 'industries/oil-and-gas.php'; ?>">
                                    <div class="content-container">
                                        <div class="icon-image d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'oil-and-gas-industries-icon.png'; ?>" alt="Oil & Gas">
                                        </div>
                                        <div class="heading-txt">
                                            Oil & Gas
                                        </div>
                                        <div class="sub-txt">
                                            Streamlined IT solutions to optimize operations, enhance safety, and ensure reliability in the energy sector.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="<?php echo $desktop . 'industries/banking-and-financial.php'; ?>">
                                    <div class="content-container">
                                        <div class="icon-image d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'banking-and-financial-industries-icon.png'; ?>" alt="Banking & Financial Services">
                                        </div>
                                        <div class="heading-txt">
                                            Banking & Financial Services
                                        </div>
                                        <div class="sub-txt">
                                            Secure and scalable IT support tailored for seamless transactions, compliance, and digital transformation.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="<?php echo $desktop . 'industries/retail.php'; ?>">
                                    <div class="content-container">
                                        <div class="icon-image d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'retail-industries-icon.png'; ?>" alt="Retail">
                                        </div>
                                        <div class="heading-txt">
                                            Retail
                                        </div>
                                        <div class="sub-txt">
                                            Innovative technology solutions to enhance customer experiences, streamline operations, and drive sales.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="<?php echo $desktop . 'industries/healthcare.php'; ?>">
                                    <div class="content-container">
                                        <div class="icon-image d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'healthcare-industries-icon.png'; ?>" alt="Healthcare">
                                        </div>
                                        <div class="heading-txt">
                                            Healthcare
                                        </div>
                                        <div class="sub-txt">
                                            Reliable IT support to streamline patient care, maintain compliance, and optimize healthcare delivery systems.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card">
                                <a href="<?php echo $desktop . 'industries/telecom.php'; ?>">
                                    <div class="content-container">
                                        <div class="icon-image d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'telecom-industries-icon.png'; ?>" alt="Telecom">
                                        </div>
                                        <div class="heading-txt">
                                            Telecom
                                        </div>
                                        <div class="sub-txt">
                                            Robust IT services ensuring connectivity, network optimization, and enhanced communication for global telecom operations.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mobile">
                    <div class="m-forward-linking-cards m-services-excelled-container">
                        <div class="cards d-flex flex-column">
                            <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                <a href="<?php echo $desktop . 'industries/oil-and-gas.php'; ?>">
                                    <div class="card-content d-flex justify-content-between align-items-center">
                                        <div class="left-portion d-flex align-items-center">
                                            <div class="card-icon-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'oil-and-gas-industries-icon.png'; ?>" alt="Oil & Gas">
                                            </div>
                                            <div class="titletxt">
                                                Oil & Gas
                                            </div>
                                        </div>
                                        <div class="forward-arrow-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                <a href="<?php echo $desktop . 'industries/banking-and-financial.php'; ?>">
                                    <div class="card-content d-flex justify-content-between align-items-center">
                                        <div class="left-portion d-flex align-items-center">
                                            <div class="card-icon-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'banking-and-financial-industries-icon.png'; ?>" alt="Banking & Financial Services">
                                            </div>
                                            <div class="titletxt">
                                                Banking & Financial Services
                                            </div>
                                        </div>
                                        <div class="forward-arrow-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                <a href="<?php echo $desktop . 'industries/retail.php'; ?>">
                                    <div class="card-content d-flex justify-content-between align-items-center">
                                        <div class="left-portion d-flex align-items-center">
                                            <div class="card-icon-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'retail-industries-icon.png'; ?>" alt="Retail">
                                            </div>
                                            <div class="titletxt">
                                                Retail
                                            </div>
                                        </div>
                                        <div class="forward-arrow-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                <a href="<?php echo $desktop . 'industries/healthcare.php'; ?>">
                                    <div class="card-content d-flex justify-content-between align-items-center">
                                        <div class="left-portion d-flex align-items-center">
                                            <div class="card-icon-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'healthcare-industries-icon.png'; ?>" alt="Healthcare">
                                            </div>
                                            <div class="titletxt">
                                                Healthcare
                                            </div>
                                        </div>
                                        <div class="forward-arrow-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                <a href="<?php echo $desktop . 'industries/telecom.php'; ?>">
                                    <div class="card-content d-flex justify-content-between align-items-center">
                                        <div class="left-portion d-flex align-items-center">
                                            <div class="card-icon-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'telecom-industries-icon.png'; ?>" alt="Telecom">
                                            </div>
                                            <div class="titletxt">
                                                Telecom
                                            </div>
                                        </div>
                                        <div class="forward-arrow-img d-flex">
                                            <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
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
                            We offer comprehensive IT services, including end-user computing, networking, onsite support, and multilingual 24/7 assistance. With tailored solutions and global reach, we ensure your business stays connected and operates efficiently.
                        </div>

                        <div class="service-cards-container">
                            <div class="desktop">
                                <div class="cards">
                                    <div class="card d-flex justify-content-between" data-aos="fade-right" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'data-center-support-service-icon.png'; ?>" alt="Data Center Support">
                                            </div>
                                            <div class="title">
                                                Data Center Support
                                            </div>
                                            <div class="subtitle">
                                                Comprehensive support for your data center infrastructure, ensuring optimal performance, uptime, and security.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/data-center-support.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/cyber-security-consulting.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/hybrid-cloud.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/network.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/helpdesk.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/end-user-support.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/audio-visual.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/wifi-services.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/operating-system.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/new-office-and-migration-solutions.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/storage-as-a-service.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
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
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/device-as-a-service.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'end-point-security-service-icon.png'; ?>" alt="End Point Security">
                                            </div>
                                            <div class="title">
                                                End Point Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/end-point-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'network-security-service-icon.png'; ?>" alt="Network Security">
                                            </div>
                                            <div class="title">
                                                Network Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/network-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'application-security-service-icon.png'; ?>" alt="Application Security">
                                            </div>
                                            <div class="title">
                                                Application Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/application-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'web-security-service-icon.png'; ?>" alt="Web Security">
                                            </div>
                                            <div class="title">
                                                Web Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/web-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'email-security-service-icon.png'; ?>" alt="Email Security">
                                            </div>
                                            <div class="title">
                                                Email Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/email-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'hybrid-cloud-security-service-icon.png'; ?>" alt="Hybrid Cloud Security">
                                            </div>
                                            <div class="title">
                                                Hybrid Cloud Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/hybrid-cloud-security.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'warehouse-service-icon.png'; ?>" alt="Warehouse">
                                            </div>
                                            <div class="title">
                                                Warehouse
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/warehouse.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'public-cloud-integartion-and-migration-service-icon.png'; ?>" alt="Device as a Service (Daas)">
                                            </div>
                                            <div class="title">
                                                Public Cloud Integration + Migration
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/public-cloud-integartion-and-migration.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'private-cloud-solutions-service-icon.png'; ?>" alt="Private Cloud Solutions">
                                            </div>
                                            <div class="title">
                                                Private Cloud Solutions
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/private-cloud-solutions.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'office-365-and-g-suite-migration-and-integration-service-icon.png'; ?>" alt="Office 365 And G-Suite Migration + Integration">
                                            </div>
                                            <div class="title">
                                                Office 365 And G-Suite Migration + Integration
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/office-365-and-g-suite-migration-and-integration.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'software-and-application-development-service-icon.png'; ?>" alt="Software and Application Development">
                                            </div>
                                            <div class="title">
                                                Software and Application Development
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/software-and-application-development.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'api-integration-service-icon.png'; ?>" alt="API Integration">
                                            </div>
                                            <div class="title">
                                                API Integration
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/api-integration.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'network-and-system-automation-service-icon.png'; ?>" alt="Network And System Automation">
                                            </div>
                                            <div class="title">
                                                Network And System Automation
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <!-- <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/network-and-system-automation.php'; ?>">
                                                <p>Learn More</p>
                                            </a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <div class="mobile">
                                <div class="m-forward-linking-cards m-services-our-services-container">
                                    <div class="cards d-flex flex-column">
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/data-center-support.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'data-center-support-service-icon.png'; ?>" alt="Data Center Support">
                                                        </div>
                                                        <div class="titletxt">
                                                            Data Center Support
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/cyber-security-consulting.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'cyber-security-consultng-service-icon.png'; ?>" alt="Cyber Security Consulting">
                                                        </div>
                                                        <div class="titletxt">
                                                            Cyber Security Consulting
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/hybrid-cloud.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'hybrid-cloud-service-icon.png'; ?>" alt="Hybrid Cloud">
                                                        </div>
                                                        <div class="titletxt">
                                                            Hybrid Cloud
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/network.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'network-service-icon.png'; ?>" alt="Network">
                                                        </div>
                                                        <div class="titletxt">
                                                            Network
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/helpdesk.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'helpdesk-service-icon.png'; ?>" alt="Help Desk">
                                                        </div>
                                                        <div class="titletxt">
                                                            Help Desk
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/end-user-support.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'end-user-support-service-icon.png'; ?>" alt="End-User Support">
                                                        </div>
                                                        <div class="titletxt">
                                                            End-User Support
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/audio-visual.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'audio-visual-service-icon.png'; ?>" alt="Audio Visual">
                                                        </div>
                                                        <div class="titletxt">
                                                            Audio Visual
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/wifi-services.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'wifi-services-icon.png'; ?>" alt="WiFi Services">
                                                        </div>
                                                        <div class="titletxt">
                                                            WiFi Services
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/operating-system.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'opearting-system-service-icon.png'; ?>" alt="Operating System">
                                                        </div>
                                                        <div class="titletxt">
                                                            Operating System
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/new-office-and-migration-solutions.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'new-office-and-migration-solutions-service-icon.png'; ?>" alt="New Office + Migration Solutions">
                                                        </div>
                                                        <div class="titletxt">
                                                            New Office + Migration Solutions
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/storage-as-a-service.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'storage-as-a-service-icon.png'; ?>" alt="Storage as a Service (SaaS)">
                                                        </div>
                                                        <div class="titletxt">
                                                            Storage as a Service (SaaS)
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/device-as-a-service.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'device-as-a-service-icon.png'; ?>" alt="Device as a Service (Daas)">
                                                        </div>
                                                        <div class="titletxt">
                                                            Device as a Service (Daas)
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/end-point-security.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'end-point-security-service-icon.png'; ?>" alt="End Point Security">
                                                        </div>
                                                        <div class="titletxt">
                                                            End Point Security
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/network-security.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'network-security-service-icon.png'; ?>" alt="Network Security">
                                                        </div>
                                                        <div class="titletxt">
                                                            Network Security
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/application-security.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'application-security-service-icon.png'; ?>" alt="Application Security">
                                                        </div>
                                                        <div class="titletxt">
                                                            Application Security
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/web-security.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'web-security-service-icon.png'; ?>" alt="Web Security">
                                                        </div>
                                                        <div class="titletxt">
                                                            Web Security
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/email-security.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'email-security-service-icon.png'; ?>" alt="Email Security">
                                                        </div>
                                                        <div class="titletxt">
                                                            Email Security
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/hybrid-cloud-security.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'hybrid-cloud-security-service-icon.png'; ?>" alt="Hybrid Cloud Security">
                                                        </div>
                                                        <div class="titletxt">
                                                            Hybrid Cloud Security
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/warehouse.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'warehouse-service-icon.png'; ?>" alt="Warehouse">
                                                        </div>
                                                        <div class="titletxt">
                                                            Warehouse
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/public-cloud-integartion-and-migration.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'public-cloud-integartion-and-migration-service-icon.png'; ?>" alt="Public Cloud Integration + Migration">
                                                        </div>
                                                        <div class="titletxt">
                                                            Public Cloud Integration + Migration
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/private-cloud-solutions.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'private-cloud-solutions-service-icon.png'; ?>" alt="Private Cloud Solutions">
                                                        </div>
                                                        <div class="titletxt">
                                                            Private Cloud Solutions
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/office-365-and-g-suite-migration-and-integration.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'office-365-and-g-suite-migration-and-integration-service-icon.png'; ?>" alt="Office 365 And G-Suite Migration + Integration">
                                                        </div>
                                                        <div class="titletxt">
                                                            Office 365 And G-Suite Migration + Integration
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/software-and-application-development.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'software-and-application-development-service-icon.png'; ?>" alt="Software and Application Development">
                                                        </div>
                                                        <div class="titletxt">
                                                            Software and Application Development
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/api-integration.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'api-integration-service-icon.png'; ?>" alt="API Integration">
                                                        </div>
                                                        <div class="titletxt">
                                                            API Integration
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop . 'services/network-and-system-automation.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'network-and-system-automation-service-icon.png'; ?>" alt="Network And System Automation">
                                                        </div>
                                                        <div class="titletxt">
                                                            Network And System Automation
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
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
                            <img loading="lazy" src="assets/images/btn-arrow.png" alt="Excis Compliance">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("templates/partners.php");
    ?>

    <?php
    include("templates/footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        const navItem = document.querySelectorAll('.middle-content .nav-block-container');
        navItem[2].querySelector('a .nav-tab-item').classList.add('active');
    </script>

    <script>
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const cards = document.querySelector('.services-excelled-carousel-container .cards');

        let cardIndex = 0;
        var cardWidth = 33.33; // Card width including margin
        var visibleCards = 3;
        const totalCards = cards.children.length;

        // Function to update visible cards based on screen size
        // function updateVisibleCards() {
        //     if (window.matchMedia('(max-width: 600px)').matches) {
        //         visibleCards = 1;
        //         cardWidth = 100;
        //     } else if (window.matchMedia('(max-width: 768px)').matches) {
        //         visibleCards = 2;
        //         cardWidth = 50;
        //     } else {
        //         visibleCards = 3;
        //         cardWidth = 33.33;
        //     }
        //     updateCarousel();
        // }

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

        // Add a listener to update visible cards on window resize
        // window.addEventListener('resize', updateVisibleCards);

        // Initial call to set up visible cards based on initial screen size
        // updateVisibleCards();
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