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

        .carousel .cards {
            display: flex;
            transition: transform 0.3s ease-in-out;
        }

        .carousel .cards .card {
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
                <a href="#">
                    <div style="width: fit-content; padding: 12px 40px; margin: 30px auto 0; background: transparent; border: 1px solid #fff; gap: 12px; border-radius: 10px;"
                        class="d-flex justify-content-center align-items-center">
                        <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap; color: #fff;">
                            Contact Us</p>
                        <div style="width: 20px;" class="d-flex">
                            <img loading="lazy" src="../assets/images/btn-arrow.png" alt="Excis Compliance">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Explore Other Services -->
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
                                Explore Our Other Services
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
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            End User Computing
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
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            New Site Setups
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
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            SaaS
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
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            PaaS
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
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            DaaS
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
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            WiFi Services
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
                                            <img loading="lazy" src="./../assets/images/trophy-icon.png" alt="">
                                        </div>
                                        <div
                                            style="font-size: 24px; font-weight: 700; line-height: 32px; padding: 25px 0 0; color: #000;">
                                            Audio-Visual
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
    <!-- <div class="full-container">
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
                                                <img loading="lazy" src="<?php echo $desktop_images . 'help-desk-icon.png'; ?>" alt="Help Desk">
                                            </div>
                                            <div class="title">
                                                Help Desk
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'data-security-icon.png'; ?>" alt="Data Security">
                                            </div>
                                            <div class="title">
                                                Data Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-left" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'email-security-icon.png'; ?>" alt="Email Security">
                                            </div>
                                            <div class="title">
                                                Email Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-right" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'web-security-icon.png'; ?>" alt="Web Security">
                                            </div>
                                            <div class="title">
                                                Web Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'application-security-icon.png'; ?>" alt="Application Security">
                                            </div>
                                            <div class="title">
                                                Application Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-left" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'hybrid-cloud-icon.png'; ?>" alt="Hybrid Cloud">
                                            </div>
                                            <div class="title">
                                                Hybrid Cloud
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-right" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'help-desk-icon.png'; ?>" alt="Help Desk">
                                            </div>
                                            <div class="title">
                                                Help Desk
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'data-security-icon.png'; ?>" alt="Data Security">
                                            </div>
                                            <div class="title">
                                                Data Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-left" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'email-security-icon.png'; ?>" alt="Email Security">
                                            </div>
                                            <div class="title">
                                                Email Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-right" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'web-security-icon.png'; ?>" alt="Web Security">
                                            </div>
                                            <div class="title">
                                                Web Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-up" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'application-security-icon.png'; ?>" alt="Application Security">
                                            </div>
                                            <div class="title">
                                                Application Security
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
                                                <p>Learn More</p>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="card d-flex justify-content-between" data-aos="fade-left" data-aos-duration="1000">
                                        <div class="top-part">
                                            <div class="creative-img d-flex">
                                                <img loading="lazy" src="<?php echo $desktop_images . 'hybrid-cloud-icon.png'; ?>" alt="Hybrid Cloud">
                                            </div>
                                            <div class="title">
                                                Hybrid Cloud
                                            </div>
                                            <div class="subtitle">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                            </div>
                                        </div>
                                        <div class="btm-part d-flex justify-content-center align-items-center">
                                            <a href="#">
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
    </div> -->

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
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const cards = document.querySelector('.carousel .cards');

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