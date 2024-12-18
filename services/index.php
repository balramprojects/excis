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
    <link rel="stylesheet" href="../assets/sass/services.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />

</head>

<body>

    <?php
    include("../templates/navigation.php");
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
                                <a href="<?php echo $desktop_url . 'industries/oil-and-gas.php'; ?>">
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
                                <a href="<?php echo $desktop_url . 'industries/banking-and-financial.php'; ?>">
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
                                <a href="<?php echo $desktop_url . 'industries/retail.php'; ?>">
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
                                <a href="<?php echo $desktop_url . 'industries/healthcare.php'; ?>">
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
                                <a href="<?php echo $desktop_url . 'industries/telecom.php'; ?>">
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
                                <a href="<?php echo $desktop_url . 'industries/oil-and-gas.php'; ?>">
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
                                <a href="<?php echo $desktop_url . 'industries/banking-and-financial.php'; ?>">
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
                                <a href="<?php echo $desktop_url . 'industries/retail.php'; ?>">
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
                                <a href="<?php echo $desktop_url . 'industries/healthcare.php'; ?>">
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
                                <a href="<?php echo $desktop_url . 'industries/telecom.php'; ?>">
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
                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/global-service-desk-icon.png'; ?>" alt="Global Service Desk">
                                            </div>
                                            <div class="title">
                                                Global Service Desk
                                            </div>
                                            <div class="subtitle">
                                                A centralized support team offering timely IT assistance across global teams and operations.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/global-service-desk.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/global-it-support-services-icon.png'; ?>" alt="Global IT Support Services">
                                            </div>
                                            <div class="title">
                                                Global IT Support Services
                                            </div>
                                            <div class="subtitle">
                                                Providing comprehensive IT support to ensure seamless operations and quick issue resolution worldwide.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/global-it-support-services.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/global-it-staffing-icon.png'; ?>" alt="Global IT Staffing">
                                            </div>
                                            <div class="title">
                                                Global IT Staffing
                                            </div>
                                            <div class="subtitle">
                                                Delivering skilled IT professionals globally, ensuring effective project execution and access to top talent.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/global-it-staffing.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/global-it-asset-lifecycle-management-icon.png'; ?>" alt="Global IT Asset Lifecycle Management">
                                            </div>
                                            <div class="title">
                                                Global IT Asset Lifecycle Management
                                            </div>
                                            <div class="subtitle">
                                                Managing the entire lifecycle of IT assets, ensuring cost-efficiency and compliance across organizations.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/global-it-asset-lifecycle-management.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/cyber-risk-assessments-icon.png'; ?>" alt="Cyber Risk Assessments">
                                            </div>
                                            <div class="title">
                                                Cyber Risk Assessments
                                            </div>
                                            <div class="subtitle">
                                                Identifying and mitigating security vulnerabilities to protect systems, data, and operations from cyber threats.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/cyber-risk-assessments.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/cyber-security-audits-icon.png'; ?>" alt="Cyber Security Audits">
                                            </div>
                                            <div class="title">
                                                Cyber Security Audits
                                            </div>
                                            <div class="subtitle">
                                                Evaluating security policies and systems to ensure compliance and strengthen defenses against cyber threats.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/cyber-security-audits.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/penetration-testing-icon.png'; ?>" alt="Penetration Testing">
                                            </div>
                                            <div class="title">
                                                Penetration Testing
                                            </div>
                                            <div class="subtitle">
                                                Simulating cyberattacks to uncover vulnerabilities and enhance security measures against potential threats.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/penetration-testing.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/cyber-security-solutions-icon.png'; ?>" alt="Cyber Security Solutions">
                                            </div>
                                            <div class="title">
                                                Cyber Security Solutions
                                            </div>
                                            <div class="subtitle">
                                                Providing comprehensive tools and strategies to safeguard systems and data from evolving cyber risks.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/cyber-security-solutions.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/firewall-and-cloud-security-solutions-icon.png'; ?>" alt="Firewall & Cloud Security Solutions">
                                            </div>
                                            <div class="title">
                                                Firewall & Cloud Security Solutions
                                            </div>
                                            <div class="subtitle">
                                                Securing networks and clouds with advanced protocols and monitoring.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/firewall-and-cloud-security-solutions.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/it-project-management-icon.png'; ?>" alt="IT Project Management">
                                            </div>
                                            <div class="title">
                                                IT Project Management
                                            </div>
                                            <div class="subtitle">
                                                Managing IT projects efficiently, ensuring timely delivery, resource allocation, and alignment with organizational goals.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/it-project-management.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/it-infrastructure-audits-icon.png'; ?>" alt="IT Infrastructure Audits">
                                            </div>
                                            <div class="title">
                                                IT Infrastructure Audits
                                            </div>
                                            <div class="subtitle">
                                                Assessing technology systems to ensure efficiency, security, and compliance with industry standards and regulations.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/it-infrastructure-audits.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/it-deployments-icon.png'; ?>" alt="IT Deployments">
                                            </div>
                                            <div class="title">
                                                IT Deployments
                                            </div>
                                            <div class="subtitle">
                                                Ensuring seamless installation, configuration, and integration of IT systems for business continuity and optimal performance.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/it-deployments.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/it-asset-recycling-icon.png'; ?>" alt="IT Asset Recycling">
                                            </div>
                                            <div class="title">
                                                IT Asset Recycling
                                            </div>
                                            <div class="subtitle">
                                                Environmentally responsible disposal and repurposing of outdated IT assets while maintaining data security.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/it-asset-recycling.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/procurement-icon.png'; ?>" alt="Procurement">
                                            </div>
                                            <div class="title">
                                                Procurement
                                            </div>
                                            <div class="subtitle">
                                                Strategic sourcing and acquisition of goods and services, ensuring cost-effective solutions and quality control.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/procurement.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'services/storage-staging-and-logistics-icon.png'; ?>" alt="Storage, Staging & Logistics">
                                            </div>
                                            <div class="title">
                                                Storage, Staging & Logistics
                                            </div>
                                            <div class="subtitle">
                                                Efficient management of goods for secure storage, preparation, and timely distribution or deployment.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="<?php echo $desktop_url . 'services/storage-staging-and-logistics.php'; ?>">
                                                <p>Know More</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mobile">
                                <div class="m-forward-linking-cards m-services-our-services-container">
                                    <div class="cards d-flex flex-column">
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/global-service-desk.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/global-service-desk-icon.png'; ?>" alt="Global Service Desk">
                                                        </div>
                                                        <div class="titletxt">
                                                            Global Service Desk
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/global-it-support-services.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/global-it-support-services-icon.png'; ?>" alt="Global IT Support Services">
                                                        </div>
                                                        <div class="titletxt">
                                                            Global IT Support Services
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/global-it-staffing-icon.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/global-it-staffing-icon.png'; ?>" alt="Global IT Staffing">
                                                        </div>
                                                        <div class="titletxt">
                                                            Global IT Staffing
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/global-it-asset-lifecycle-management.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/global-it-asset-lifecycle-management-icon.png'; ?>" alt="Global IT Asset Lifecycle Management">
                                                        </div>
                                                        <div class="titletxt">
                                                            Global IT Asset Lifecycle Management
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/cyber-risk-assessments.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/cyber-risk-assessments-icon.png'; ?>" alt="Cyber Risk Assessments">
                                                        </div>
                                                        <div class="titletxt">
                                                            Cyber Risk Assessments
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/cyber-security-audits.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/cyber-security-audits-icon.png'; ?>" alt="Cyber Security Audits">
                                                        </div>
                                                        <div class="titletxt">
                                                            Cyber Security Audits
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/penetration-testing.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/penetration-testing-icon.png'; ?>" alt="Penetration Testing">
                                                        </div>
                                                        <div class="titletxt">
                                                            Penetration Testing
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/cyber-security-solutions.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/cyber-security-solutions-icon.png'; ?>" alt="Cyber Security Solutions">
                                                        </div>
                                                        <div class="titletxt">
                                                            Cyber Security Solutions
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/firewall-and-cloud-security-solutions.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/firewall-and-cloud-security-solutions-icon.png'; ?>" alt="Firewall & Cloud Security Solutions">
                                                        </div>
                                                        <div class="titletxt">
                                                            Firewall & Cloud Security Solutions
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/it-project-management.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/it-project-management-icon.png'; ?>" alt="IT Project Management">
                                                        </div>
                                                        <div class="titletxt">
                                                            IT Project Management
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/it-infrastructure-audits.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/it-infrastructure-audits-icon.png'; ?>" alt="IT Infrastructure Audits">
                                                        </div>
                                                        <div class="titletxt">
                                                            IT Infrastructure Audits
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/it-deployments.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/it-deployments-icon.png'; ?>" alt="IT Deployments">
                                                        </div>
                                                        <div class="titletxt">
                                                            IT Deployments
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/it-asset-recycling.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/it-asset-recycling-icon.png'; ?>" alt="IT Asset Recycling">
                                                        </div>
                                                        <div class="titletxt">
                                                            IT Asset Recycling
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/procurement.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/procurement-icon.png'; ?>" alt="Procurement">
                                                        </div>
                                                        <div class="titletxt">
                                                            Procurement
                                                        </div>
                                                    </div>
                                                    <div class="forward-arrow-img d-flex">
                                                        <img loading="lazy" src="<?php echo $desktop_images . 'black-arrow.png'; ?>" alt="Arrow">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card" data-aos="zoom-out" data-aos-duration="1000">
                                            <a href="<?php echo $desktop_url . 'services/storage-staging-and-logistics.php'; ?>">
                                                <div class="card-content d-flex justify-content-between align-items-center">
                                                    <div class="left-portion d-flex align-items-center">
                                                        <div class="card-icon-img d-flex">
                                                            <img loading="lazy" src="<?php echo $desktop_images . 'services/storage-staging-and-logistics-icon.png'; ?>" alt="Storage, Staging & Logistics">
                                                        </div>
                                                        <div class="titletxt">
                                                            Storage, Staging & Logistics
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
    include("../templates/contact-form.php");
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