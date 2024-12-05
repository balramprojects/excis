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

    <title>Insights - Excis Compliance Ltd.</title>

    <link rel="canonical" href="https://www.exc1s.com/insights/">
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

    <style>
        .anchor-offset {
            scroll-margin-top: 117px;
        }
    </style>

    <style>
        .accordion-tab-box {
            width: 100%;
            position: relative;
            margin: 15px 0;
            border: 1px solid rgb(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .accordion-tab-box .accordion-tab-title {
            gap: 20px;
            padding: 30px 50px;
            background: rgba(250, 249, 246);
            cursor: pointer;
        }

        .accordion-tab-box .accordion-tab-title .txt {
            font-size: 22px;
            font-weight: 700;
            line-height: 28px;
            color: rgba(245, 133, 32, 1);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .accordion-tab-box .accordion-tab-title .icon {
            font-size: 32px;
            line-height: 28px;
            font-weight: 400;
            color: #000;
            text-transform: uppercase;
        }

        .accordion-tab-box .accordion-tab-desc {
            height: 0px;
            padding: 0;
            background: rgba(250, 249, 246);
            /* transition: all .1s ease-in-out; */
        }

        .accordion-tab-box.active .accordion-tab-desc {
            height: 100%;
            padding: 0 50px 30px;
            /* transition: all .1s ease-in-out; */
        }

        .view-all-btn {
            width: fit-content;
            padding: 14px 50px;
            margin: 30px auto 0;
            color: #252525;
            background: transparent;
            gap: 12px;
            border: 1px solid #252525;
            border-radius: 10px;
        }

        .view-all-btn:hover {
            background: #121820;
            color: #fff;
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
                        <a href="<?php echo $desktop_url; ?>">Home</a> - <span class="page">Insights</span>
                    </div>
                    <div class="page-title">
                        Insights
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative;">
                <div style="height: 100%; padding: 50px 15px;" class="main-content-container">

                    <div class="accordions">
                        <div class="accordion-tab-box">
                            <div class="accordion-tab-title d-flex justify-content-between align-items-center">
                                <div class="txt">
                                    Case Studies
                                </div>
                                <div class="icon">
                                    +
                                </div>
                            </div>
                            <div class="accordion-tab-desc">
                                <div style="width: 100%; gap: 30px;"
                                    class="d-flex justify-content-between align-items-start">
                                    <a href="<?php echo $desktop_url . 'insights/case-studies.php'; ?>">
                                        <div style="width: 100%; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;"
                                            class="case-studies-card">
                                            <div style="margin: 20px;">
                                                <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 140px;" class="d-flex">
                                                        <img loading="lazy"
                                                            src="../assets/images/case-studies-card-creative.png" alt="">
                                                    </div>
                                                </div>
                                                <div style="width: 100%; padding: 10px 5px;">
                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                                        RETAIL
                                                    </div>

                                                    <div
                                                        style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                                        Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing elit. Temporibus, odit.
                                                    </div>

                                                    <div
                                                        style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Nihil dolorum
                                                        distinctio vel praesentium voluptatibus possimus
                                                        illum et velit harum neque.
                                                    </div>

                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="<?php echo $desktop_url . 'insights/case-studies.php'; ?>">
                                        <div style="width: 100%; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;"
                                            class="case-studies-card">
                                            <div style="margin: 20px;">
                                                <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 140px;" class="d-flex">
                                                        <img loading="lazy"
                                                            src="../assets/images/case-studies-card-creative.png" alt="">
                                                    </div>
                                                </div>
                                                <div style="width: 100%; padding: 10px 5px;">
                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                                        RETAIL
                                                    </div>

                                                    <div
                                                        style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                                        Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing elit. Temporibus, odit.
                                                    </div>

                                                    <div
                                                        style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Nihil dolorum
                                                        distinctio vel praesentium voluptatibus possimus
                                                        illum et velit harum neque.
                                                    </div>

                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="<?php echo $desktop_url . 'insights/case-studies.php'; ?>">
                                        <div style="width: 100%; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;"
                                            class="case-studies-card">
                                            <div style="margin: 20px;">
                                                <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;"
                                                    class="d-flex justify-content-center align-items-center">
                                                    <div style="width: 140px;" class="d-flex">
                                                        <img loading="lazy"
                                                            src="../assets/images/case-studies-card-creative.png" alt="">
                                                    </div>
                                                </div>
                                                <div style="width: 100%; padding: 10px 5px;">
                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                                        RETAIL
                                                    </div>

                                                    <div
                                                        style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                                        Lorem ipsum dolor sit, amet consectetur
                                                        adipisicing elit. Temporibus, odit.
                                                    </div>

                                                    <div
                                                        style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                                        Lorem ipsum dolor sit amet consectetur
                                                        adipisicing elit. Nihil dolorum
                                                        distinctio vel praesentium voluptatibus possimus
                                                        illum et velit harum neque.
                                                    </div>

                                                    <div
                                                        style="font-size: 12px; font-weight: 700; color: #252525; padding: 30px 0 0;">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="view-all-btn d-flex justify-content-center align-items-center">
                                    <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap;">
                                        View All</p>
                                    <div style="width: 20px;" class="d-flex">
                                        <img loading="lazy" src="../assets/images/btn-arrow.png" alt="Excis Compliance">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-tab-box">
                            <div class="accordion-tab-title d-flex justify-content-between align-items-center">
                                <div class="txt">
                                    News
                                </div>
                                <div class="icon">
                                    +
                                </div>
                            </div>
                            <div class="accordion-tab-desc">
                                <div style="width: 100%; flex-direction: column; gap: 20px;"
                                    class="d-flex justify-content-start">
                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-lenovo.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Deleniti nam consequuntur assumenda rem dolores non.
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                                                            minima repudiandae voluptatum facere ducimus accusantium
                                                            voluptatem in qui omnis nemo.
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-cisco.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Incidunt nemo odio quis fuga, voluptate numquam!
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Tempora at reprehenderit libero esse in fugit iure
                                                            exercitationem, possimus debitis ipsum?
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-dell.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                            Sunt quia enim perspiciatis, natus unde incidunt quam
                                                            temporibus doloribus minima voluptates.
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                            Doloremque dolores maxime inventore est, voluptas vel
                                                            dignissimos accusamus eligendi maiores similique.
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-tab-box">
                            <div class="accordion-tab-title d-flex justify-content-between align-items-center">
                                <div class="txt">
                                    Insights
                                </div>
                                <div class="icon">
                                    +
                                </div>
                            </div>
                            <div class="accordion-tab-desc">
                                <div style="width: 100%; flex-direction: column; gap: 20px;"
                                    class="d-flex justify-content-start">
                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-lenovo.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Deleniti nam consequuntur assumenda rem dolores non.
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                                                            minima repudiandae voluptatum facere ducimus accusantium
                                                            voluptatem in qui omnis nemo.
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-cisco.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Incidunt nemo odio quis fuga, voluptate numquam!
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Tempora at reprehenderit libero esse in fugit iure
                                                            exercitationem, possimus debitis ipsum?
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div
                                        style="width: 100%; border: 1px solid rgba(37, 37, 37, 0.1); border-radius: 10px; background: #fff;">
                                        <a href="">
                                            <div style="margin: 20px; gap: 30px;" class="d-flex justify-content-start">
                                                <div style="max-width: 400px; width: 100%; border-radius: 10px;">
                                                    <img loading="lazy" src="../assets/images/insights-news-img.png" alt="">
                                                </div>
                                                <div style=" flex-direction: column;"
                                                    class="d-flex justify-content-between">
                                                    <div>
                                                        <div style="height: 20px; margin: 5px 0 0;">
                                                            <img loading="lazy" style="width: auto;"
                                                                src="../assets/images/partner-dell.png" alt="">
                                                        </div>
                                                        <div
                                                            style="font-size: 18px; font-weight: 700; line-height: 20px; padding: 15px 0 0; color: #000;">
                                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                            Sunt quia enim perspiciatis, natus unde incidunt quam
                                                            temporibus doloribus minima voluptates.
                                                        </div>
                                                        <div
                                                            style="font-size: 14px; font-weight: 400; line-height: 16px; padding: 10px 0 0; color: rgba(0, 0, 0, 0.5);">
                                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                            Doloremque dolores maxime inventore est, voluptas vel
                                                            dignissimos accusamus eligendi maiores similique.
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="font-size: 14px; font-weight: 500; line-height: 20px; color: rgb(0, 105, 255);">
                                                        Read More
                                                    </div>
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
        navItem[4].querySelector('a .nav-tab-item').classList.add('active');
    </script>

    <script>
        let accordions = document.querySelectorAll('.accordion-tab-box');

        accordions.forEach((accord, index) => {
            accord.onclick = (e) => {
                if (accord.classList.contains('active')) {
                    accord.classList.remove('active');
                    accord.querySelector('.accordion-tab-title .icon').innerHTML = "+";

                } else {
                    accordions.forEach(subaccord => {
                        subaccord.classList.remove('active');
                        subaccord.querySelector('.accordion-tab-title .icon').innerHTML = "+";
                    });
                    accord.classList.add('active');
                    accord.querySelector('.accordion-tab-title .icon').innerHTML = "-";

                }

                const scrollCount = 312 + (103 * index);

                let top = e.target.offsetTop;
                window.scroll({
                    top: top + scrollCount, // if you have a sticky nav, take the height of that off 'top' e.g. 'top - 100';
                    behavior: 'smooth'
                });
            };
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