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
    <link rel="stylesheet" href="assets/sass/index.css">
    <link rel="stylesheet" href="assets/sass/why-excis.css">
    <link rel="stylesheet" href="assets/sass/navigation.css">
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
                                <a href="<?php echo $desktop_url . 'about-us'; ?>">
                                    <div class="nav-tab-item active d-flex align-items-center">
                                        About Us
                                    </div>
                                </a>
                            </li>

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
                                            <li><a href="<?php echo $desktop_url . 'services/infrastructure/data-center-support.php'; ?>">Data Center Support</a></li>
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
                        <a href="<?php echo $desktop_url; ?>" style="color: rgba(0, 0, 0, 1);">Home</a> - <span style="font-weight: 600;">About Us</span>
                    </div>
                    <div style="font-size: 40px; font-weight: 600; padding: 5px 0 0; color: rgba(37, 37, 37, 1);">
                        About Us
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative; overflow: hidden;">
                <div
                    style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg-btm.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; bottom: -100px; left: 0;">
                </div>
                <div
                    style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; top: -100px; right: 0;">
                </div>

                <div style="padding: 50px 15px;" class="main-content-container">
                    <div class="d-flex justify-content-between align-items-center">
                        <div style="max-width: 600px;">
                            <div style="font-size: 30px; font-weight: 500; line-height: 40px; color: #F58520;">
                                Transforming Businesses <br> Through Global IT Expertise
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
                            <img loading="lazy" src="assets/images/data-center-creativity.png" alt="">
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

                <div class="main-content-container" style="padding: 0 15px !important;">
                    <div class="content-container">
                        <div class="d-flex">
                            <div style="width: 50%; padding: 100px 0;">
                                <div>
                                    <div style="width: fit-content; font-size: 13px; font-weight: 700; padding: 4px 60px 4px 10px; background: #fff; color: #000; border-radius: 4px;">
                                        JOURNEY
                                    </div>
                                    <div style="font-size: 30px; font-weight: 700; line-height: 40px; color: #fff; padding: 30px 0 0;">
                                        The Journey Of <span style="color: #F58520;">Excis</span>
                                    </div>
                                    <div style="max-width: 550px; font-size: 14px; font-weight: 14px; line-height: 22px; color: #fff; padding: 20px 0 0;">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure soluta, quos deserunt nisi omnis quam unde tempore placeat, quo error cupiditate natus? Enim, soluta aspernatur? Dolorum incidunt ducimus amet fuga alias veniam quasi eveniet odio sunt est, nesciunt voluptatibus nulla!
                                    </div>
                                </div>
                            </div>
                            <div style="width: 50%;">
                                <div style="height: 610px; padding: 0 0 0 50px; overflow: scroll; mask-image: linear-gradient(to bottom, rgb(0, 0, 0, 1) 70%, rgb(53, 77, 125, 0.1));">
                                    <div class="d-flex justify-content-start align-items-center" style="padding: 200px 0 0;">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2001 - Establishment</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Excis was founded as an IT services company in Belgium</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2003 - Procurement Setup</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Setup global procurement platform</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2005 - Belgium</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Retail operations started in Belgium</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2007 - UK</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Retail operations started in UK</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2009 - Mexico</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Retail operations started in Mexico</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2011 - Madgascar</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Retail operations started in Madgascar</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2013 - South Africa</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Retail operations started in South Africa</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2015 - India</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Retail operations started in India</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2017 - India</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Office started in India</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2019 - India</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Noida Office started in India</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2021 - India</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Noida Office closed in India</p>
                                        </div>
                                    </div>

                                    <div style="height: 40px; width: 2px; background: #F58520;"></div>

                                    <div class="d-flex justify-content-start align-items-center" style="padding: 0 0 100px;">
                                        <div style="margin: 0 0 0 -50px;" class="d-flex justify-content-center align-items-center">
                                            <div style="width: 80px; height: 80px; margin: 10px; border-radius: 50%; background: rgb(255, 255, 255, 0.2);" class="d-flex justify-content-center align-items-center">
                                                <div style="width: 60px; height: 60px; border-radius: 50%; background:linear-gradient(to bottom, #F58520, #1B315D);" class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 25px;" class="d-flex">
                                                        <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 0 0 0 10px;">
                                            <p style="font-size: 30px; font-weight: 800; line-height: 25px; color: #F58520;">2023 - India</p>
                                            <p style="color: #fff; font-size: 14px; font-weight: 400; padding: 15px 0 0;">Recruitment started in India</p>
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
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative; overflow: hidden;">
                <div
                    style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg-btm.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; bottom: 0; left: 0;">
                </div>
                <div
                    style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; top: 0; right: 0;">
                </div>

                <div class="main-content-container">
                    <div style="padding: 50px 15px;">
                        <div style="max-width: 700; margin-inline: auto; font-size: 30px; font-weight: 500; line-height: 40px; text-align: center; color: #F58520;">
                            Meet Our Leadership Team
                        </div>

                        <div class="about-us-card-container">
                            <div class="card-flex d-flex justify-content-between">
                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/bert.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Bert Uitterlinden</p>
                                            <p>CEO-Owner</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/bertu/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/finn.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Finn Lyskov</p>
                                            <p>Director-Owner</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/finn-lyskov-002005a/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/thomas.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Thomas Lyskov</p>
                                            <p>Global Sales Director</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/thomaslyskov/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/anna.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Anna Nel</p>
                                            <p>Chief Revenue Officer</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/anna-nel-133136a6/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/rodica.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Rodica Petrea</p>
                                            <p>Chief Financial Officer</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/rodica-petrea-825b2447/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/max.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Max Uitterlinden</p>
                                            <p>Head of IT</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/maximilian-uitterlinden-a7b48b224/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/gabrielle.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Gabrielle D’arch</p>
                                            <p>Head of Global Service Delivery</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/gabrielle-d-arch-81b1149a/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/theo.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt" style="padding: 6.6px 15px;">
                                            <p>Theo Ramarolahy</p>
                                            <p>Head of Remote Services & Coordination</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/theo-ramarolahy/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/andrew.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Andrew Bremner</p>
                                            <p>Global Operations Director</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/bremnerandrew/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/jean.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Jean Oosthuizen</p>
                                            <p>Head of Contract Management</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/jean-oosthuizen-a203aaa/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/dawn.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Dawn Everts</p>
                                            <p>Head of Global Transition</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/dawn-everts-4a4a2766/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="member-img d-flex">
                                        <img loading="lazy" src="assets/images/excis-members/douglas.png" alt="">
                                    </div>
                                    <div class="card-info">
                                        <div class="txt">
                                            <p>Douglas Houle</p>
                                            <p>Head of Transition NA & LATAM</p>
                                        </div>
                                        <a href="https://www.linkedin.com/in/douglashoule/">
                                            <div class="member-linkedin">
                                                <div class="linkedin-img d-flex">
                                                    <img loading="lazy" src="assets/images/excis-members/linkedin.png" alt="">
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
    include("footer.php");
    ?>

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