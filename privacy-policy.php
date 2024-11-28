<?php
require_once('constant.php');
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

    <title>Privacy Policy - Excis Compliance Ltd.</title>

    <link rel="canonical" href="https://www.exc1s.com/services">
    <link rel="icon" type="image/x-icon" href="https://www.excis.com/wp-content/uploads/2021/12/fav.png">
    <link rel="stylesheet" href="assets/sass/common.css">
    <link rel="stylesheet" href="assets/sass/navigation.css">
    <link rel="stylesheet" href="assets/sass/banners.css">
    <link rel="stylesheet" href="assets/sass/inner-pages.css">
    <link rel="stylesheet" href="assets/sass/footer.css">
    <link rel="stylesheet" href="assets/sass/why-excis.css">

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
    include("templates/navigation.php");
    ?>

    <div class="full-container">
        <div class="pages-banner">
            <div class="banner-bg-map-img">
                <picture>
                    <source srcset="assets/images/inner-pages-banner-mobile.png" media="(max-width: 600px)">
                    <img src="assets/images/inner-pages-banner.png" alt="Banner">
                </picture>
            </div>
            <div class="banner-left-abstract desktop">
                <img src="assets/images/inner-pages-banner-abstract.png" alt="Abstract">
            </div>
            <div class="banner-right-abstract desktop">
                <img src="assets/images/inner-pages-banner-abstract.png" alt="Abstract">
            </div>

            <div class="main-content-container">
                <div class="banner-txt d-flex flex-column justify-content-center">
                    <div class="breadcrumb">
                        <a href="<?php echo $desktop_url; ?>">Home</a> - <span class="page">Privacy Policy</span>
                    </div>
                    <div class="page-title">
                        Privacy Policy
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Service -->
    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative; overflow: hidden;">
                <div style="padding: 50px 15px;" class="main-content-container">
                    <div style="font-size: 30px; font-weight: 900; line-height: 40px; color: #F58520;">
                        About Excis Privacy Policy
                    </div>


                    <ul style="list-style-type: decimal; padding: 0 0 0 25px;">
                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                This Notice
                            </div>
                            <ul style="padding: 5px 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">This Notice is issued by Excis Compliance Ltd on behalf of itself, its subsidiaries and its affiliates (together, “Excis Compliance Ltd ”, “we”, “us” and “our”) and is addressed to candidates, referees, sources, clients and other individuals outside our organisation with whom we interact, including clients, visitors to our Sites, and other users of our services (together, “you”). Defined terms used in this Notice are explained in Section (19) below.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">For the purposes of this Notice, Excis is the controller. Contact details are provided in Section (18) below.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">This Notice may be amended or updated from time to time to reflect changes in our practices with respect to the Processing of Personal Data, or changes in applicable law. We encourage you to read this Notice carefully, and to regularly check this page to review any changes we might make in accordance with the terms of this Notice.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Collection Of Personal Data
                            </div>
                            <ul style="padding: 5px 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Collection of Personal Data:</b> We may collect Personal Data about you from the following sources</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Data you provide:</b> We may obtain your Personal Data when you provide it to us (e.g., where you contact us via email or telephone, or by any other means, or when you provide us with your CV or business card).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Relationship data:</b> We may collect or obtain your Personal Data in the ordinary course of our relationship with you (e.g., if you purchase a service from us).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Data you make public:</b> We may collect or obtain your Personal Data that you manifestly choose to make public, including via social media (e.g., we may collect information from your social media profile(s)).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Site data:</b> We may collect or obtain your Personal Data when you visit any of our Sites or use any features or resources available on or through a Site.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Registration details:</b> We may collect or obtain your Personal Data when you use, or register to use, any of our Sites, or services.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Third party information:</b> We may collect or obtain your Personal Data from third parties who provide it to us (e.g., credit reference agencies; law enforcement authorities; etc.).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Single invoice</b></li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Policy Creation Of Personal Data
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                We may also create Personal Data about you, such as records of your interactions with us, and any interactions we have with clients on your behalf.
                            </div>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Categories Of Personal Data We May Process
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                We may Process the following categories of Personal Data about you:
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Personal details:</b> given name(s); preferred name; photograph; employment history; education; and other typical CV content.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Demographic information:</b> gender; date of birth / age; nationality; salutation; title; and language preferences.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Contact details:</b> correspondence address; telephone number; email address; and details of your public social media profile(s).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Consent records:</b> records of any consent you may have given, together with the date and time, means of consent and any related information (e.g., the subject matter of the consent).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Data relating to our Sites:</b> device type; operating system; browser type; browser settings; IP address; language settings; dates and times of connecting to a Site;username; password; security login details; usage data; aggregate statistical information.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Employer details:</b> where you interact with us in your capacity as an employee, the name, address, telephone number and email address of your employer, to the extent relevant.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Views and opinions:</b> any views and opinions that you choose to send to us, or publicly post Overview on social media platforms.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Lawful Basis For Processing Personal Data
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                In processing your Personal Data in connection with the purposes set out in this Notice, we may rely on one or more of the following legal bases, depending on the circumstances:
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Consent:</b> We may Process your Personal Data where we have obtained your prior, express consent to the Processing (this legal basis is only used in relation to Processing that is entirely voluntary – it is not used for Processing that is necessary or obligatory in any way).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Legitimate interests:</b> We may Process your Personal Data where we have a legitimate interest in carrying out the Processing for the purpose of managing, operating or promoting our business, and that legitimate interest is not overridden by your interests, fundamental rights, or freedoms.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Contractual necessity:</b> We may Process your Personal Data where the Processing is necessary in connection with any contract that you may enter into with us.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Compliance with applicable law:</b> We may Process your Personal Data where the Processing is required by applicable law; or</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Vital interests:</b> We may Process your Personal Data where the Processing is necessary to protect the vital interests of any individual.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Data relating to our Sites:</b> device type; operating system; browser type; browser settings; IP address; language settings; dates and times of connecting to a Site;username; password; security login details; usage data; aggregate statistical information.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Employer details:</b> where you interact with us in your capacity as an employee, the name, address, telephone number and email address of your employer, to the extent relevant.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Views and opinions:</b> any views and opinions that you choose to send to us, or publicly post Overview on social media platforms.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Sensitive Personal Data
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                We do not seek to collect or otherwise Process your Sensitive Personal Data in the ordinary course of our business. Where it becomes necessary to process your Sensitive Personal Data for any reason, we rely on one of the following legal bases:
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Compliance with applicable law:</b> We may Process your Sensitive Personal Data where the Processing is required or permitted by applicable law (e.g., to comply with our diversity reporting obligations).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Detection and prevention of crime:</b> We may Process your Sensitive Personal Data where the Processing is necessary for the detection or prevention of crime (including the prevention of fraud);</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Establishment, exercise or defense of legal rights:</b> We may Process your Sensitive Personal Data where the Processing is necessary for the establishment, exercise or defense of legal rights; or</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Consent:</b> We may Process your Sensitive Personal Data where we have, in accordance with applicable law, obtained your prior, express consent prior to Processing your Sensitive Personal Data (this legal basis is only used in relation to Processing that is entirely voluntary – it is not used for Processing that is necessary or obligatory in any way).</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Purposes For Which We May Process Your Personal Data
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                The purposes, for which we may Process Personal Data, subject to applicable law, include:
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Provision of services to you:</b> providing our Sites or services to you; providing you with services that you have requested; providing you with promotional items at your request; and communicating with you in relation to those services.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Compliance checks:</b> fulfilling our compliance obligations, including ‘Know Your Client’ checks; and confirming and verifying your identity (including by using credit reference agencies); and screening against government and/or law enforcement agency sanctions lists and other legal restrictions.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Our Sites:</b> operating and managing our Sites ; providing content to you; displaying advertising and other information to you; communicating and interacting with you via our Sites; and notifying you of changes to any of our Sites, or our services.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Communications:</b> communicating with you via any means (including via email, telephone, text message, social media, post or in person) news items and other information in which you may be interested, subject to ensuring that such communications are provided to you in compliance with applicable law; maintaining and updating your contact information where appropriate; and obtaining your prior, opt-in consent where required.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Communications and IT operations:</b> management of our communications systems; operation of IT security systems; and IT security audits.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Financial management:</b> sales; finance; corporate audit; and vendor management.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Surveys:</b> engaging with you for the purposes of obtaining your views on our services.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Security:</b> physical security of our premises (including records of visits to our premises; and CCTV recordings); and electronic security (including login records and access details).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Investigations:</b> detecting, investigating and preventing breaches of policy, and criminal offences, in accordance with applicable law.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Legal proceedings:</b> establishing, exercising and defending legal rights.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;"><b>Legal compliance:</b> compliance with our legal and regulatory obligations under applicable law.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Disclosure Of Personal Data To Third Parties
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                We may disclose your Personal Data to other entities within the Excis Compliance Ltd group, for legitimate business purposes (including operating our Sites, and providing services to you), in accordance with applicable law. In addition, we may disclose your Personal Data to
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">legal and regulatory authorities, upon request, or for the purposes of reporting any actual or suspected breach of applicable law or regulation;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">accountants, auditors, lawyers and other outside professional advisors to Excis Compliance Ltd , subject to binding contractual obligations of confidentiality;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">third party Processors (such as payment services providers; shipping companies; etc.), located anywhere in the world, subject to the requirements noted below in this Section (H);</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">any relevant party, law enforcement agency or court, to the extent necessary for the establishment, exercise or defense of legal rights;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">any relevant party for the purposes of prevention, investigation, detection or prosecution of criminal offences or the execution of criminal penalties, including safeguarding against and the prevention of threats to public security;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">any relevant third party acquirer(s), in the event that we sell or transfer all or any relevant portion of our business or assets (including in the event of a reorganization, dissolution or liquidation);</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">If we engage a third-party Processor to Process your Personal Data, the Processor will be subject to binding contractual obligations to: (i) only Process the Personal Data in accordance with our prior written instructions; and (ii) use measures to protect the confidentiality and security of the Personal Data; together with any additional requirements under applicable law.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                International Transfer Of Personal Data
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                Because of the international nature of our business, we may need to transfer your Personal Data within the Excis Compliance Ltd group, and to third parties as noted in Section (H) above, in connection with the purposes set out in this Notice. For this reason, we may transfer your Personal Data to other countries that may have different laws and data protection compliance requirements to those that apply in the country in which you are located.
                            </div>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Data Security
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">We have implemented appropriate technical and organizational security measures designed to protect your Personal Data against accidental or unlawful destruction, loss, alteration, unauthorized disclosure, unauthorized access, and other unlawful or unauthorized forms of Processing, in accordance with applicable law.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">Because the internet is an open system, the transmission of information via the internet is not completely secure. Although we will implement all reasonable measures to protect your personal data, we cannot guarantee the security of your data transmitted to us using the internet – any such transmission is at your own risk and you are responsible for ensuring that any Personal Data that you send to us are sent securely.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Data Accuracy
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                We take every reasonable step to ensure that:
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">Your Personal Data that we Process are accurate and, where necessary, kept up to date;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">Any of your Personal Data that we Process that are inaccurate (having regard to the purposes for which they are processed) are erased or rectified without delay.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">From time to time we may ask you to confirm the accuracy of your Personal Data.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Data Minimization
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                We take every reasonable step to ensure that your Personal Data that we Process are limited to the Personal Data reasonably necessary in connection with the purposes set out in this Notice.
                            </div>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Data Retention
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">We take every reasonable step to ensure that your Personal Data are only processed for the minimum period necessary for the purposes set out in this Notice.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">The criteria for determining the duration for which we will keep your Personal Data are as follows: we will retain copies of your Personal Data in a form that permits identification only for as long as is necessary in connection with the purposes set out in this Notice, unless applicable law requires a longer retention period. In particular, we may retain your Personal Data for the duration of any period necessary to establish, exercise or defend any legal rights.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Your Legal Rights
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                All Subject to applicable law, you may have a number of rights regarding the Processing of your Relevant Personal Data, including:
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">The right not to provide your Personal Data to us (however, please note that we may be unable to provide you with the full benefit of our Sites, or our services, if you do not provide us with your Personal Data);</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">The right to request access to, or copies of, your Relevant Personal Data, together with information regarding the nature, Processing and disclosure of those Relevant Personal Data;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">The right to request rectification of any inaccuracies in your Relevant Personal Data;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">The right to request, on legitimate grounds:</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">Erasure of your Relevant Personal Data; or</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">Restriction of Processing of your Relevant Personal Data;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">The right to object, on legitimate grounds, to the Processing of your Relevant Personal Data by us or on our behalf;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">The right to have certain Relevant Personal Data transferred to another Controller, in a structured, commonly used and machine-readable format, to the extent applicable;</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">And does not prevent the Processing of your Personal Data in reliance upon any other available legal bases); and</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">The right to lodge complaints with a Data Protection Authority regarding the Processing of your Relevant Personal Data by us or on our behalf.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">This does not affect your statutory rights.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">To exercise one or more of these rights, or to ask a question about these rights or any other provision of this Notice, or about our processing of your Personal Data, please use the contact details provided in Section (18) below. Please note that:</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">We may require proof of your identity before we can give effect to these rights; and</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">Where your request requires the establishment of additional facts (e.g., a determination of whether any Processing is non-compliant with applicable law) we will investigate your request reasonably promptly, before deciding what action to take.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">Where we Process your Relevant Personal Data on the basis of your consent, the right to withdraw that consent (noting that such withdrawal does not affect the lawfulness of any Processing performed prior to the date on which we receive notice of such withdrawal.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Cookies And Similar Technologies
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                When you visit a Site we may place Cookies onto your device, or read Cookies already on your device, subject always to obtaining your consent, where required, in accordance with applicable law. We use Cookies to record information about your device, your browser and, in some cases, your preferences and browsing habits. We may Process your Personal Data through Cookies and similar technologies, in accordance with our Cookie Notice.
                            </div>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Direct Marketing
                            </div>
                            <ul style="padding: 5px 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">We may Process your Personal Data to contact you via email, telephone, direct mail or other communication formats to provide you with information regarding services that may be of interest to you. If we provide services to you, we may send information to you regarding our services, upcoming promotions and other information that may be of interest to you, using the contact details that you have provided to us and always in compliance with applicable law.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">You may unsubscribe from our promotional email list at any time by simply clicking on the unsubscribe link included in every promotional email we send. After you unsubscribe, we will not send you further promotional emails, but we may continue to contact you to the extent necessary for the purposes of any services you have requested.</li>
                            </ul>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Contact Details
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                Excis Compliance Ltd.
                                <br>
                                Ocean House,Bracknell Enterprise & Innovation Hub,
                                <br>
                                The Ring, Bracknell, RG12 1AX
                                <br>
                                <b>Email:</b> info@excis.com
                            </div>
                        </li>

                        <li style="font-size: 24px; font-weight: 700; color: #000; padding: 30px 0 0;">
                            <div style="line-height: 30px;">
                                Definitions
                            </div>
                            <div style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 15px;">
                                “Adequate Jurisdiction” a jurisdiction that has been formally designated by the European Commission as providing an adequate level of protection for Personal Data.
                            </div>
                            <ul style="padding: 0 0 0 20px; list-style-type: disc;">
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“Controller” means the entity that decides how and why Personal Data are processed. In many jurisdictions, the Controller has primary responsibility for complying with applicable data protection laws.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“Cookie” means a small file that is placed on your device when you visit a website (including our Sites). In this Notice, a reference to a “Cookie” includes analogous technologies such as web beacons and clear GIFs.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“Data Protection Authority” means an independent public authority that is legally tasked with overseeing compliance with applicable data protection laws.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“EEA” means the European Economic Area.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“Personal Data” means information that is about any individual, or from which any individual is directly or indirectly identifiable, in particular by reference to an identifier such as a name, an identification number, location data, an online identifier or to one or more factors specific to the physical, physiological, genetic, mental, economic, cultural or social identity of that individual.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“Process”, “Processing” or “Processed” means anything that is done with any Personal Data, whether or not by automated means, such as collection, recording, organization, structuring, storage, adaptation or alteration, retrieval, consultation, use, disclosure by transmission, dissemination or otherwise making available, alignment or combination, restriction, erasure or destruction.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“Processor” means any person or entity that Processes Personal Data on behalf of the Controller (other than employees of the Controller).</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“Relevant Personal Data” means Personal Data in respect of which we are the Controller. It expressly does not include Personal Data of which we are not the Controller.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">"Sensitive Personal Data” means Personal Data about race or ethnicity, political opinions, religious or philosophical beliefs, trade union membership, physical or mental health, sexual life, any actual or alleged criminal offences or penalties, national identification number, or any other information that may be deemed to be sensitive under applicable law.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“Site” means any website operated, or maintained, by us or on our behalf.</li>
                                <li style="font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">“Standard Contractual Clauses” means template transfer clauses adopted by the European Commission or adopted by a Data Protection Authority and approved by the European Commission.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
    include("templates/footer.php");
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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