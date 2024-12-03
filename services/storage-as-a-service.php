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
                        <a href="<?php echo $desktop_url; ?>">Home</a> - <a href="<?php echo $desktop_url . 'services'; ?>">Services</a> - <span class="page">Storage As a Service (SaaS)</span>
                    </div>
                    <div class="page-title">
                        Storage As a Service (SaaS)
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
                                Complete Storage As a Service
                            </div>
                            <div style="padding: 25px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                In the modern day, businesses have been looking for the right platform for handling the growing volume of data to embrace the high-tech environment such as cloud computing. Businesses across the world also have realized the importance of STaaS in the digital world. Storage As A Service is an amazing option for every small and medium-scale business. Storing files remotely is quick and safe when compared to other techniques. To improve service-based consumption, many enterprises lease on-premises storage from public cloud vendors or managed service providers.
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
                    Increasing demands for performance
                </div>
                <div style="max-width: 800px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; text-align: center; padding: 20px 0 0;">
                    With the use of Storage As A Service, it is quite a convenient option to compute, network as well as store the files with specifying the encryption. Increasing demand for performance and scalability is higher. Google Cloud Platform, AWS, Microsoft Azure public clouds, and many others allow the user to scale storage. These give a better option to move data from local storage into the Cloud archives.
                </div>

                <div style="padding: 50px 0 0;">
                    <div style="max-width: 700px; margin-inline: auto; color: #fff; font-size: 30px; line-height: 40px; font-weight: 500; text-align: center;">
                        Optimizes storage management
                    </div>
                    <div style="max-width: 800px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; text-align: center; padding: 20px 0 0;">
                        Storage has become a great utility for business so switching to the STaaS model is the ultimate option. Fully managed and self-managed options are available for the business. These also integrate other tools as well as applications using the right storage solution. Acquiring storage as an on-demand cloud service gives a better option to expand capacity quickly.
                    </div>
                </div>

                <div style="padding: 50px 0 0;">
                    <div style="max-width: 700px; margin-inline: auto; color: #fff; font-size: 30px; line-height: 40px; font-weight: 500; text-align: center;">
                        Automated features
                    </div>
                    <div style="max-width: 800px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; text-align: center; padding: 20px 0 0;">
                        Storage system allows the data centers to gain the flexible scale capacity for running the business needs. The storage system is secure and available to authorized users, so the data will be placed on HDDs or solid-state media. STaaS ultimately increases safety and reduces data sprawl. These also easily aid in infrastructure consolidation.
                        <br> <br>
                        Excis Compliance Ltd is the leading in providing the organization and businesses to securely store data. Our expert team handles the data to reduce your workload. Your data remains safe and secure in our high-end data centers giving you absolute control of your data.
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
                            <div class="pie-section-info-card active">
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

                            <div class="pie-section-info-card">
                                <div style="font-size: 28px; font-weight: 500; color: #F58520;">
                                    WiFi Services
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

                            <div id="slice3" class="pie-section-info-card">
                                <div style="font-size: 28px; font-weight: 500; color: #F58520;">
                                    Network Security Solutions
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

                            <div id="slice4" class="pie-section-info-card">
                                <div style="font-size: 28px; font-weight: 500; color: #F58520;">
                                    Audio Video Solutions
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

                            <div id="slice5" class="pie-section-info-card">
                                <div style="font-size: 28px; font-weight: 500; color: #F58520;">
                                    Data Center Support
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

                            <div id="slice6" class="pie-section-info-card">
                                <div style="font-size: 28px; font-weight: 500; color: #F58520;">
                                    End Support Solutions
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

                            <div id="slice7" class="pie-section-info-card">
                                <div style="font-size: 28px; font-weight: 500; color: #F58520;">
                                    Data Storage Solutions
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

                            <div id="slice8" class="pie-section-info-card">
                                <div style="font-size: 28px; font-weight: 500; color: #F58520;">
                                    Migration Solutions
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