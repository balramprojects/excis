<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excis Compliance</title>

    <link rel="stylesheet" href="assets/sass/index.css">
    <link rel="stylesheet" href="assets/sass/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/themes/clean.css" />

    <style>
        .submitBtn {
            background: rgb(27, 49, 93, 0.8);
        }

        .submitBtn:hover {
            background: rgb(27, 49, 93, 1);
        }

        .drop {
            box-shadow: 0px 0px 1px 1px #cfd3da;

        }

        .core-values-card:hover .drop {
            animation: drop 1.3s infinite;
        }

        @keyframes drop {
            0% {
                box-shadow: 0 0 0 0px rgb(27, 49, 93, 0.4);
            }

            100% {
                box-shadow: 0 0 0 15px rgb(27, 49, 93, 0);
            }
        }

        .services-list,
        .services-list-backdrop {
            display: none;
        }

        .services:hover .services-list {
            display: block;
        }

        .services:hover .services-list-backdrop {
            display: block;
        }

        .services-list-backdrop:hover {
            display: none;
        }

        .case-studies-card:hover {
            box-shadow: 0 0 10px rgb(0, 0, 0, 0.15);
        }

        .countries-spot-container {
            width: 150px;
            background: white;
            position: absolute;
            bottom: 20px;
            left: 0;
            transform: translate(-50%, 0);
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px 2px rgb(0, 0, 0, 0.15);
            display: none;
        }

        .countries-spot-point:hover+.countries-spot-container {
            display: block;
        }

        .countries-spot-point {
            height: 6px;
            width: 6px;
            position: absolute;
            top: 0;
            left: 0;
            background: #F58520;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 0px 1px 1px #0000001a;
        }

        .countries-spot-point.blue {
            height: 6px;
            width: 6px;
            position: absolute;
            top: 0;
            left: 0;
            background: #4383C3;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 0px 1px 1px #0000001a;
        }

        .countries-spot-point:hover {
            animation: pulse-animation 1s infinite;
        }

        .countries-spot-point.blue:hover {
            animation: pulse-animation-blue 1s infinite;
        }

        @keyframes pulse-animation {
            0% {
                box-shadow: 0 0 0 0px rgb(245, 133, 32, 1);
            }

            100% {
                box-shadow: 0 0 0 15px rgba(245, 133, 32, 0);
            }
        }

        @keyframes pulse-animation-blue {
            0% {
                box-shadow: 0 0 0 0px rgb(67, 131, 195, 1);
            }

            100% {
                box-shadow: 0 0 0 15px rgb(67, 131, 195, 0);
            }
        }

        .countries-spot-container::after {
            content: '';
            width: 20px;
            height: 10px;
            position: absolute;
            bottom: 0%;
            left: 52%;
            transform: translate(-50%, 96%);
            background: #fff;
            clip-path: polygon(0% 0%, 100% 0%, 50% 100%, 0% 0%);
            box-shadow: 0 0 5px 5px rgb(0, 0, 0, 0.15);
        }

        .partner-cards {
            min-width: 248px;
            border: 1px solid rgb(255, 255, 255, 0.1);
            filter: grayscale(1);
            transition: all .3s ease-in-out;
            cursor: pointer;
        }

        .partner-cards:hover {
            background: rgb(255, 255, 255, 1);
            border: 1px solid #fff;
            filter: grayscale(0);
            transition: all .3s ease-in-out;
        }

        .iti {
            width: 100%;
        }

        .iti__flag-container {
            margin-right: 5px;
        }

        .iti__selected-flag {
            height: 101%;
            padding: 0 9px;
            background-size: contain;
            display: flex;
            justify-content: space-between;
            align-items: center;
            outline: none;
        }

        .iti__country-name {
            margin-left: 10px;
        }

        .iti__country-list {
            min-width: 300px;
            width: 100%;
            max-height: 150px;
            margin: 0 0 0 -1px;
            z-index: 1;
        }

        .iti__dial-code {
            margin-left: 5px;
        }

        .iti--separate-dial-code {
            margin: 6px 0 0 0;
        }

        .iti__selected-dial-code {
            width: 36px;
            font-size: 15px;
            font-weight: 700;
        }

        .iti__arrow {
            width: 10px;
            height: 5px;
            background: rgb(0, 0, 0, 0.9);
            clip-path: polygon(0% 0%, 100% 0%, 50% 100%, 0% 0%);
            border-left: none;
            border-right: none;
            border-top: none;
            transform: rotate(0deg);
            transition: all .3s ease-in-out;
        }

        .iti__arrow.iti__arrow--up {
            border-left: none;
            border-right: none;
            border-bottom: none;
            transform: rotate(-180deg);
            transition: all .3s ease-in-out;
        }

        #phone::placeholder {
            color: rgb(0, 0, 0, 0.25);
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 2px;
        }

        .nav-tab-dropdown {
            display: none;
        }

        #nav-tab:hover .nav-tab-dropdown,
        .nav-tab-dropdown:hover {
            display: block;
        }

        #nav-tab:hover {
            background: rgb(0, 0, 0, 0.1);
        }
    </style>

</head>

<body>

    <div id="landing-header-menu" style="position: sticky; top: 0; z-index: 2;"></div>

    <script>
        fetch('landing-header-menu.html')
            .then(response => response.text())
            .then(data => {
                document.getElementById('landing-header-menu').innerHTML = data;
            });
    </script>

    <!-- <div class="full-container">
        <div style="height: 520px; width: 100%; background-image: url('assets/images/homepage.jpg'); background-size: 100% 100%; background-repeat: no-repeat; border-radius: 0 0 50px 50px;">
            <div style="height: 100%; padding: 0 15px;" class="inner-content-container">
                <div style="width: 100%;" class="d-flex justify-content-center">


                    <div style="height: 520px; position: relative; display: flex; align-items: center;">
                        <div style="width: 460px; display: flex; opacity: 0.2;">
                            <img loading="lazy" src="assets/images/banner-world.png" alt="">
                        </div>

                        <div style="position: absolute; top: 50%; left: 50%; transform:translate(-50%, -50%);">
                            <div style="height: 520px; flex-direction: column;" class="d-flex justify-content-center">
                                <div style="width: 100%; font-size: 70px; font-weight: 800; line-height: 70px; color: #fff; text-wrap: nowrap; text-align: center; text-transform: uppercase; text-shadow: 0 4px 0 #000;">
                                    One World <br> One Team
                                </div>
                                <div style="width: 100%; font-size: 24px; font-weight: 600; line-height: 32px; letter-spacing: 3.5px; text-align: center; text-transform: uppercase; padding: 15px 0 0; color: #fff; text-wrap: wrap; text-shadow: 0px 5px 10px rgb(0, 0, 0, 0.5);">
                                    &nbsp; Your Global IT Solution
                                </div>
                                <div style="width: fit-content; padding: 12px 14px; margin: 35px auto 0; color: #252525; background: #FAF9F6; gap: 12px; border-radius: 10px;" class="d-flex justify-content-center align-items-center">
                                    <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap;">Let's Work Together
                                    </p>
                                    <div style="width: 20px;" class="d-flex">
                                        <img loading="lazy" src="assets/images/btn-arrow.png" alt="Excis Compliance">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="full-container">
        <div style="height: 260px; width: 100%; background: rgba(250, 249, 246, 1); position: relative;">
            <div style="position: absolute; top: 0; left: 50%; height: 260px; width: max-content; transform: translate(-50%, 0);">
                <img src="assets/images/inner-pages-banner.png" alt="">
            </div>

            <div style="height: 170px; width: max-content; position: absolute; top: 0; left: -10px; opacity: 0.5">
                <img src="assets/images/inner-pages-banner-abstract.png" alt="">
            </div>

            <div style="height: 170px; width: max-content; position: absolute; top: 0; right: -10px; transform: scaleX(-1); opacity: 0.5">
                <img src="assets/images/inner-pages-banner-abstract.png" alt="">
            </div>

            <div style="height: 100%; padding: 0 15px;" class="main-content-container">
                <div style="width: 100%; height: 100%; flex-direction: column;" class="d-flex justify-content-center">
                    <div style="font-size: 16px; font-weight: 400; color: rgba(0, 0, 0, 1);">
                        Home - <span style="font-weight: 600;">Services</span>
                    </div>
                    <div style="font-size: 40px; font-weight: 600; padding: 5px 0 0; color: rgba(37, 37, 37, 1);">
                        Services
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative;">
                <div style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg-btm.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; bottom: 0; left: 0;">
                </div>
                <div style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; top: 0; right: 0;">
                </div>

                <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                    <div style="width: 100%;">
                        <div style="font-size: 36px; font-weight: 500; text-align: center; color: rgba(37, 37, 37, 1);">
                            Our Services
                        </div>
                        <div style="max-width: 500px; font-size: 14px; font-weight: 400; line-height: 22px; text-align: center; padding: 10px 0 0; margin-inline: auto; color: #252525;">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                            quis culpa cumque, laboriosam deserunt unde?
                        </div>

                        <div style="padding: 30px 0 0;">
                            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/help-desk-icon.png" alt="">
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Help Desk
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;" class="d-flex justify-content-center align-items-center">
                                        <a href="#" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/data-security-icon.png" alt="">
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Data Security
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;" class="d-flex justify-content-center align-items-center">
                                        <a href="#" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/data-security-icon.png" alt="">
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Email Security
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;" class="d-flex justify-content-center align-items-center">
                                        <a href="#" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/web-security-icon.png" alt="">
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Web Security
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;" class="d-flex justify-content-center align-items-center">
                                        <a href="#" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/application-security-icon.png" alt="">
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Application Security
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;" class="d-flex justify-content-center align-items-center">
                                        <a href="#" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>

                                <div class="services-cards d-flex justify-content-between">
                                    <div style="padding: 20px 25px;">
                                        <div style="width: 100px; margin-inline: auto;" class="d-flex">
                                            <img loading="lazy" src="assets/images/hybrid-cloud-icon.png" alt="">
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 30px; font-weight: 500; text-align: center; padding: 20px 0 0; color: #1B315D;">
                                            Hybrid Cloud
                                        </div>

                                        <div style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 400; text-align: center; padding: 15px 0 0; color: #000; text-wrap: wrap">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, tenetur.
                                        </div>
                                    </div>
                                    <div style="height: 55px; border-top: 1px solid #CACFD7;" class="d-flex justify-content-center align-items-center">
                                        <a href="#" style="font-family: 'Poppins', sans-serif; font-size: 15px; font-weight: 600; color: #1B315D;">
                                            <u>Learn more</u>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="width: fit-content; padding: 14px 45px; margin: 40px auto 0; color: #252525; background: #fff; gap: 12px; border: 1px solid #252525; border-radius: 10px;" class="d-flex justify-content-center align-items-center">
                            <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap;">View All</p>
                            <div style="width: 20px;" class="d-flex">
                                <img loading="lazy" src="assets/images/btn-arrow.png" alt="Excis Compliance">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: linear-gradient(#1B315D, #354D7D);">
            <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                <div style="width: 100%; padding: 80px 0;">
                    <div style="max-width: 1000px; height: 110px; margin-inline: auto;" class="d-flex justify-content-between align-items-center">
                        <div>
                            <p style="font-size: 80px; font-weight: 700; line-height: 80px; color: #FAF9F6;">50000+</p>
                            <p style="font-size: 24px; font-weight: 300; padding: 10px 0 0; color: #FAF9F6;">Tickets Per
                                Month</p>
                        </div>
                        <div style="height: 100%; padding: 0 .5px; margin: 0 40px; background: #fff;"></div>
                        <div>
                            <p style="font-size: 80px; font-weight: 700; line-height: 80px; color: #FAF9F6;">200+</p>
                            <p style="font-size: 24px; font-weight: 300; padding: 10px 0 0; color: #FAF9F6;">Enterprise
                                Clients</p>
                        </div>
                        <div style="height: 100%; padding: 0 .5px; margin: 0 40px; background: #fff;"></div>
                        <div>
                            <p style="font-size: 80px; font-weight: 700; line-height: 80px; color: #FAF9F6;">100+</p>
                            <p style="font-size: 24px; font-weight: 300; padding: 10px 0 0; color: #FAF9F6;">Countries
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative;">
                <div style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg-btm.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; bottom: 0; left: 0;">
                </div>
                <div style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; top: 0; right: 0;">
                </div>

                <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                    <div style="width: 100%;">
                        <div style="font-size: 36px; font-weight: 500; text-align: center; color: #F58520;">
                            Our Core Values
                        </div>
                        <div style="max-width: 500px; font-size: 14px; font-weight: 400; line-height: 22px; text-align: center; padding: 10px 0 0; margin-inline: auto; color: #252525;">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                            quis culpa cumque, laboriosam deserunt unde?
                        </div>

                        <div style="padding: 30px 0 0;">
                            <div style="width: 100%; gap: 30px;" class="d-flex justify-content-between align-items-center">
                                <div style="width: 100%; padding: 20px; background: #FAF9F6; border: 1px solid rgb(37, 37, 37, 0.2); border-radius: 10px; gap: 20px;" class="core-values-card d-flex justify-content-start align-items-center">
                                    <div style="height: 70px; width: 70px; border-radius: 50%;" class="d-flex justify-content-center align-items-center">
                                        <div style="height: 55px; width: 55px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 50%;" class="drop d-flex justify-content-center align-items-center">
                                            <div style="width: 20px;" class="d-flex">
                                                <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="font-size: 22px; font-weight: 800; color: #252525;">
                                        Integrity & Ethics
                                    </div>
                                </div>

                                <div style="width: 100%; padding: 20px; background: #FAF9F6; border: 1px solid rgb(37, 37, 37, 0.2); border-radius: 10px; gap: 20px;" class="core-values-card d-flex justify-content-start align-items-center">
                                    <div style="height: 70px; width: 70px; border-radius: 50%;" class="d-flex justify-content-center align-items-center">
                                        <div style="height: 55px; width: 55px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 50%;" class="drop d-flex justify-content-center align-items-center">
                                            <div style="width: 20px;" class="d-flex">
                                                <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="font-size: 22px; font-weight: 800; color: #252525;">
                                        Emp Development
                                    </div>
                                </div>

                                <div style="width: 100%; padding: 20px; background: #FAF9F6; border: 1px solid rgb(37, 37, 37, 0.2); border-radius: 10px; gap: 20px;" class="core-values-card d-flex justify-content-start align-items-center">
                                    <div style="height: 70px; width: 70px; border-radius: 50%;" class="d-flex justify-content-center align-items-center">
                                        <div style="height: 55px; width: 55px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 50%;" class="drop d-flex justify-content-center align-items-center">
                                            <div style="width: 20px;" class="d-flex">
                                                <img loading="lazy" src="assets/images/dollar-icon.png" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div style="font-size: 22px; font-weight: 800; color: #252525;">
                                        Trust & Teamwork
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="height: 100%; padding: 30px 15px 50px;" class="main-content-container">
                    <div style="width: 100%;">
                        <div style="font-size: 36px; font-weight: 500; text-align: center; color: #F58520;">
                            Case Studies
                        </div>
                        <div style="max-width: 500px; font-size: 14px; font-weight: 400; line-height: 22px; text-align: center; padding: 10px 0 0; margin-inline: auto; color: #252525;">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia, omnis quae. Sequi ullam amet
                            quis culpa cumque, laboriosam deserunt unde?
                        </div>

                        <div style="padding: 30px 0 0;">
                            <div style="width: 100%; gap: 30px;" class="d-flex justify-content-between align-items-start">
                                <div style="width: 100%; padding: 20px; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;" class="case-studies-card">
                                    <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;" class="d-flex justify-content-center align-items-center">
                                        <div style="width: 140px;" class="d-flex">
                                            <img loading="lazy" src="assets/images/case-studies-card-creative.png" alt="">
                                        </div>
                                    </div>
                                    <div style="width: 100%; padding: 10px 5px;">
                                        <div style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                            RETAIL
                                        </div>

                                        <div style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, odit.
                                        </div>

                                        <div style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum
                                            distinctio vel praesentium voluptatibus possimus illum et velit harum neque.
                                        </div>

                                        <div style="padding: 30px 0 0;">
                                            <a href="#" style="font-size: 12px; font-weight: 700; color: #252525;">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <div style="width: 100%; padding: 20px; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;" class="case-studies-card">
                                    <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;" class="d-flex justify-content-center align-items-center">
                                        <div style="width: 140px;" class="d-flex">
                                            <img loading="lazy" src="assets/images/case-studies-card-creative.png" alt="">
                                        </div>
                                    </div>
                                    <div style="width: 100%; padding: 10px 5px;">
                                        <div style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                            RETAIL
                                        </div>

                                        <div style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, odit.
                                        </div>

                                        <div style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum
                                            distinctio vel praesentium voluptatibus possimus illum et velit harum neque.
                                        </div>

                                        <div style="padding: 30px 0 0;">
                                            <a href="#" style="font-size: 12px; font-weight: 700; color: #252525;">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>

                                <div style="width: 100%; padding: 20px; background: #FDFDFD; border: 1px solid rgb(37, 37, 37, 0.1); border-radius: 10px;" class="case-studies-card">
                                    <div style="width: 100%; height: 176px; background: linear-gradient(to bottom, #1B315D, #354D7D); border-radius: 10px;" class="d-flex justify-content-center align-items-center">
                                        <div style="width: 140px;" class="d-flex">
                                            <img loading="lazy" src="assets/images/case-studies-card-creative.png" alt="">
                                        </div>
                                    </div>
                                    <div style="width: 100%; padding: 10px 5px;">
                                        <div style="font-size: 12px; font-weight: 700; color: rgb(37, 37, 37, 0.5);">
                                            RETAIL
                                        </div>

                                        <div style="font-size: 20px; font-weight: 700; padding: 10px 0 0; color: #000;">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, odit.
                                        </div>

                                        <div style="font-size: 14px; font-weight: 400; line-height: 24px; padding: 10px 0 0; color: rgb(0, 0, 0, 0.5);">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil dolorum
                                            distinctio vel praesentium voluptatibus possimus illum et velit harum neque.
                                        </div>

                                        <div style="padding: 30px 0 0;">
                                            <a href="#" style="font-size: 12px; font-weight: 700; color: #252525;">Read
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width: fit-content; padding: 14px 45px; margin: 40px auto 0; color: #252525; background: #fff; gap: 12px; border: 1px solid #252525; border-radius: 10px;" class="d-flex justify-content-center align-items-center">
                            <p style="font-size: 12px; font-weight: 600; text-wrap: nowrap;">View All</p>
                            <div style="width: 20px;" class="d-flex">
                                <img loading="lazy" src="assets/images/btn-arrow.png" alt="Excis Compliance">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: rgba(18, 24, 32, 1);">
            <div style="height: 100%; padding: 80px 15px;" class="main-content-container">
                <div style="font-size: 34px; font-weight: 500; color: #fff; text-align: center;">
                    Lorem ipsum dolor sit amet.
                </div>

                <div style="margin-top: 50px; flex-wrap: wrap;" class="d-flex">
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 25px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-microsoft.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 30px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-lenovo.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 60px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-dell.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 20px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-vmware.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 35px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-deutsche-bank.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 35px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-cisco.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 25px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-nokia.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 25px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-microsoft.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 30px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-lenovo.png" alt="">
                        </div>
                    </div>
                    <div style="height: 100px; flex: 1;" class="partner-cards d-flex justify-content-center align-items-center">
                        <div style="height: 60px;" class="d-flex">
                            <img loading="lazy" style="width: auto;" src="assets/images/partner-dell.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="full-container">
        <div style="width: 100%; background: #fff;">
            <div style="max-width: 100%; margin-inline: auto; position: relative;">
                <div style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg-btm.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; bottom: 0; left: 0;">
                </div>
                <div style="width: 290px; height: 416px; background-image: url('assets/images/abstract-bg.png'); background-size: 100% 100%; background-repeat: no-repeat; opacity: 0.6; position: absolute; top: 0; right: 0;">
                </div>

                <div style="height: 100%; padding: 50px 15px;" class="main-content-container">
                    <div style="width: 100%; height: 875px; background: rgba(202, 207, 215, 1); border-radius: 20px; overflow: hidden; position: relative;">

                        <div style="width: 100%; height: 210px; background: linear-gradient(to bottom, rgba(27, 49, 93, 1), rgba(53, 77, 125, 1));">
                            <div style="width: 50%; height: 100%;">
                                <div class="d-flex justify-content-between align-items-start" style="height: 100%; flex-direction: column;">
                                    <div style="font-size: 14px; font-weight: 300; padding: 5px 25px; margin: 30px; border-radius: 5px; background: #fff; color: #000; text-transform: uppercase;">
                                        Contact Us
                                    </div>
                                    <div style="font-size: 35px; font-weight: 700; color: #fff; margin: 20px 30px;">
                                        Partner With Us Today!
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="width: 100%;" class="d-flex justify-content-between align-items-start">
                            <div style="width: 50%; height: 100%;">
                                <div style="height: 350px; margin: 20px 20px 20px 30px; flex-direction: column;" class="d-flex justify-content-between">
                                    <div style="font-size: 18px; font-weight: 300; line-height: 35px; padding: 50px 0 0; color: #000;">
                                        We’re happy to answer any questions you may have and help you determine which of
                                        our services best fit your needs.
                                    </div>
                                    <div style="font-size: 24px; font-weight: 600; line-height: 35px; color: #000;">
                                        Call us at <span><a href="tel:+44 1344930900" style="color: #000;">+44
                                                1344930900</a></span>
                                    </div>
                                    <div>
                                        <div style="font-size: 24px; font-weight: 600; line-height: 35px; color: #000;">
                                            Your benefits:
                                        </div>
                                        <ul style="max-width: 400px; font-size: 16px; font-weight: 300; line-height: 30px; display: grid; grid-template-columns: repeat(2, 1fr); padding: 10px 0 0 20px; color: #000;">
                                            <li>Results-Driven</li>
                                            <li>Client-Oriented</li>
                                            <li>Problem Solving</li>
                                            <li>Independent</li>
                                            <li>Transparent</li>
                                            <li>Competent</li>
                                        </ul>
                                    </div>

                                    <div style="display: none;">
                                        <div style="font-size: 24px; font-weight: 600; line-height: 35px; color: #000;">
                                            What happens next?
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="d-flex">
                                                <div style="font-size: 24px; font-weight: 600; line-height: 30px; padding-right: 6px; color: #000;">
                                                    1
                                                </div>
                                                <div style="font-size: 12px; font-weight: 300; line-height: 15px;">
                                                    We Schedule a call at your convenience
                                                </div>
                                            </div>
                                            <div style="font-size: 30px; font-weight: 600; line-height:24px; padding: 0 10px; color: #000;">
                                                >
                                            </div>
                                            <div class="d-flex">
                                                <div style="font-size: 24px; font-weight: 600; line-height: 30px; padding-right: 6px; color: #000;">
                                                    2
                                                </div>
                                                <div style="font-size: 12px; font-weight: 300; line-height: 15px;">
                                                    We Schedule a call at your convenience
                                                </div>
                                            </div>
                                            <div style="font-size: 30px; font-weight: 600; line-height:24px; padding: 0 10px; color: #000;">
                                                >
                                            </div>
                                            <div class="d-flex">
                                                <div style="font-size: 24px; font-weight: 600; line-height: 30px; padding-right: 6px; color: #000;">
                                                    3
                                                </div>
                                                <div style="font-size: 12px; font-weight: 300; line-height: 15px;">
                                                    We Schedule a call at your convenience
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="position: absolute; top: 0; right: 0; width: 50%; height: 100%;">
                            <div style="margin: 70px 30px 20px 0; background: #fff; max-width: 100%; height: 770px; box-shadow: 0 0 10px 5px rgb(0, 0, 0, 0.2);">
                                <div style="font-size: 20px; font-weight: 600; line-height: 55px; text-transform: capitalize; text-align: center; border-bottom: 1px solid rgb(0, 0, 0, 0.5);">
                                    Schedule a Call with Us
                                </div>
                                <div>
                                    <div style="gap: 30px; margin: 20px 30px;" class="d-flex">
                                        <div style="width: 100%;">
                                            <label for="firstName" style="font-size: 14px; font-weight: 400; color: rgb(0, 0, 0, 0.7);">First
                                                Name</label> <br>
                                            <input type="text" name="firstName" placeholder="" style="height: 36px; width: calc(100% - 22px); font-size: 15px; padding: 2px 10px 0 10px; margin: 6px 0 0; outline: none; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 4px;">
                                        </div>
                                        <div style="width: 100%;">
                                            <label for="lastName" style="font-size: 14px; font-weight: 400; color: rgb(0, 0, 0, 0.7);">Last
                                                Name</label> <br>
                                            <input type="text" name="lastName" placeholder="" style="height: 36px; width: calc(100% - 22px); font-size: 15px; padding: 2px 10px 0 10px; margin: 6px 0 0; outline: none; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 4px;">
                                        </div>
                                    </div>

                                    <div style="margin: 20px 30px;" class="d-flex">
                                        <div style="width: 100%;">
                                            <label for="companyName" style="font-size: 14px; font-weight: 400; color: rgb(0, 0, 0, 0.7);">Company
                                                / Organization</label> <br>
                                            <input type="text" name="companyName" placeholder="" style="height: 36px; width: calc(100% - 22px); font-size: 15px; padding: 2px 10px 0 10px; margin: 6px 0 0; outline: none; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 4px;">
                                        </div>
                                    </div>

                                    <div style="margin: 20px 30px;" class="d-flex">
                                        <div style="width: 100%;">
                                            <label for="companyEmail" style="font-size: 14px; font-weight: 400; color: rgb(0, 0, 0, 0.7);">Company
                                                Email</label> <br>
                                            <input type="email" name="companyEmail" placeholder="" style="height: 36px; width: calc(100% - 22px); font-size: 15px; padding: 2px 10px 0 10px; margin: 6px 0 0; outline: none; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 4px;">
                                        </div>
                                    </div>

                                    <div style="margin: 20px 30px;" class="d-flex">
                                        <div style="width: 100%;">
                                            <label for="phoneNumber" style="font-size: 14px; font-weight: 400; color: rgb(0, 0, 0, 0.7);">Phone</label>
                                            <br>
                                            <input type="tel" name="phoneNumber" id="phone" style="width: 100%; height: 40px; font-size: 15px; font-weight: 400; letter-spacing: 1px; margin: 6px 0 0 0; outline: none; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 4px;">
                                        </div>
                                    </div>

                                    <div style=" margin: 20px 30px;" class="d-flex">
                                        <div style="width: 100%;">
                                            <p style="font-size: 14px; font-weight: 400; color: rgb(0, 0, 0, 0.7);">How
                                                Can We Help You?</p>

                                            <div style="width: 50%; gap: 10px; display: grid; grid-template-columns: repeat(2, 1fr);">
                                                <div class="d-flex justify-content-start align-items-center" style="margin: 10px 0 0; gap: 5px;">
                                                    <input type="checkbox" name="recruitment" id="" style="width: 18px; height: 18px; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 3px;">
                                                    <label for="recruitment" style="font-size: 14px; font-weight: 600; line-height: 20px; color: rgb(0, 0, 0, 0.9);">Services</label>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center" style="margin: 10px 0 0; gap: 5px;">
                                                    <input type="checkbox" name="recruitment" id="" style="width: 18px; height: 18px; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 3px;">
                                                    <label for="recruitment" style="font-size: 14px; font-weight: 600; line-height: 20px; color: rgb(0, 0, 0, 0.9);">Partner</label>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center" style="margin: 10px 0 0; gap: 5px;">
                                                    <input type="checkbox" name="recruitment" id="" style="width: 18px; height: 18px; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 3px;">
                                                    <label for="recruitment" style="font-size: 14px; font-weight: 600; line-height: 20px; color: rgb(0, 0, 0, 0.9);">Storage</label>
                                                </div>
                                                <div class="d-flex justify-content-start align-items-center" style="margin: 10px 0 0; gap: 5px;">
                                                    <input type="checkbox" name="recruitment" id="" style="width: 18px; height: 18px; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 3px;">
                                                    <label for="recruitment" style="font-size: 14px; font-weight: 600; line-height: 20px; color: rgb(0, 0, 0, 0.9);">Career</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="margin: 20px 30px; overflow: hidden;" class="d-flex">
                                        <div style="width: 99%;">
                                            <label for="message" style="font-size: 14px; font-weight: 400; color: rgb(0, 0, 0, 0.7);">Message</label>
                                            <br>
                                            <textarea name="message" id="" rows="6" style="width: calc(100% - 28px); padding: 12px 15px; margin: 6px 0 0; outline: none; border: 1px solid rgb(0, 0, 0, 0.3); border-radius: 4px; resize: none;" placeholder="To better assist you, please describe how we can help..."></textarea>
                                        </div>
                                    </div>

                                    <div style="margin: 20px 30px;" class="d-flex justify-content-center">
                                        <input type="submit" value="Submit" style="height: 48px; width: 100px; font-size: 15px; font-weight: 500; color: #fff; border-radius: 5px; outline: none; border: none; cursor: pointer;" class="submitBtn">
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
        <div style="width: 100%; background: rgba(18, 24, 32, 1);">
            <div style="height: 100%; padding: 50px 15px 0;" class="main-content-container">
                <div style="width: 100%; gap: 80px;" class="d-flex justify-content-between align-items-start">
                    <div>
                        <div style="font-size: 18px; font-weight: 700; color: rgba(245, 133, 32, 1); text-transform: uppercase; text-wrap: nowrap;">
                            Excis Compliance Ltd.
                        </div>
                        <div style="font-size: 13px; font-weight: 300; line-height: 20px; letter-spacing: 1px; padding: 15px 0 0; color: rgba(250, 249, 246, 1);">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, repellat? Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit. Obcaecati temporibus tenetur, necessitatibus
                            officiis quisquam consectetur. Blanditiis autem ipsum eos aut?
                        </div>
                        <div style="width: 60%; padding: 30px 0 0;" class="d-flex justify-content-between align-items-center">
                            <div style="height: 22px;">
                                <img src="assets/images/facebook.png" style="width: auto;" alt="">
                            </div>
                            <div style="height: 22px;">
                                <img src="assets/images/youtube.png" style="width: auto;" alt="">
                            </div>
                            <div style="height: 22px;">
                                <img src="assets/images/instagram.png" style="width: auto;" alt="">
                            </div>
                            <div style="height: 22px;">
                                <img src="assets/images/twitter.png" style="width: auto;" alt="">
                            </div>
                            <div style="height: 22px;">
                                <img src="assets/images/linkedin.png" style="width: auto;" alt="">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div style="font-size: 18px; font-weight: 700; color: rgba(245, 133, 32, 1); text-transform: capitalize; text-wrap: nowrap;">
                                Our Services
                            </div>
                            <div style="padding: 10px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Network</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Data
                                    Center Support</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">End-User
                                    Support</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Audio-Visual</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">WiFi
                                    Services</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Cybersecurity
                                    Consulting</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">API
                                    Integration</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Warehousing</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Audio-Visual</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">WiFi
                                    Services</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Cybersecurity
                                    Consulting</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">All
                                    Services &nbsp; -></a>
                            </div>
                        </div>

                        <div>
                            <div style="font-size: 18px; font-weight: 700; padding: 20px 0 0; color: rgba(245, 133, 32, 1); text-transform: capitalize; text-wrap: nowrap;">
                                About Us
                            </div>
                            <div style="padding: 10px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Why
                                    Excis</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Career
                                    Opportunities</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">CSR</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Worldwide</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Partners</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <div style="font-size: 18px; font-weight: 700; color: rgba(245, 133, 32, 1); text-transform: capitalize; text-wrap: nowrap;">
                                Industries
                            </div>
                            <div style="padding: 10px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Retail</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Energy</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Life
                                    Sciences</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Financial
                                    Services (FS&I)</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Telecoms</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Utilities</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Public
                                    Sector</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Manufacturing</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Education</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">IT
                                    & Consulting</a>
                            </div>
                        </div>

                        <div>
                            <div style="font-size: 18px; font-weight: 700; padding: 20px 0 0; color: rgba(245, 133, 32, 1); text-transform: capitalize; text-wrap: nowrap;">
                                Insights
                            </div>
                            <div style="padding: 10px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Blogs/Case
                                    Studies</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">News</a>
                            </div>
                            <div style="padding: 5px 0 0; line-height: 24px;">
                                <a href="#" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">Research
                                    & Development</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div style="font-size: 16px; font-weight: 400; color: rgba(250, 249, 246, 1); text-wrap: nowrap;">
                            ISO Certfications Certified <br> Covering The UK
                        </div>
                        <div style="padding: 20px 0 0; gap: 10px;" class="d-flex justify-content-between align-itemcenter">
                            <div style="width: 60px;" class="d-flex">
                                <img src="assets/images/iso-1.png" alt="">
                            </div>
                            <div style="width: 60px;" class="d-flex">
                                <img src="assets/images/iso-2.png" alt="">
                            </div>
                            <div style="width: 60px;" class="d-flex">
                                <img src="assets/images/iso-3.png" alt="">
                            </div>
                            <div style="width: 60px;" class="d-flex">
                                <img src="assets/images/iso-4.png" alt="">
                            </div>
                        </div>
                        <div style="padding: 15px 0 0;">
                            <div style="width: 100px;" class="d-flex">
                                <img src="assets/images/cyber-essentials.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="width: 100%; padding: 25px 0 0; border-bottom: 1px solid #fff;"></div>
                <div style="height: 70px;" class="d-flex justify-content-between align-items-center">
                    <div style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1);">
                        ©2024 Excis Compliance Ltd. All Rights Reserved.
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div style="padding: 0 15px 0;">
                            <a href="" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1);">General
                                Policies</a>
                        </div>
                        <div style="padding: 0 15px 0;">
                            <a href="" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1);">Privacy/
                                Cookies Policy</a>
                        </div>
                        <div style="padding: 0 15px 0;">
                            <a href="" style="font-size: 14px; font-weight: 400; color: rgba(250, 249, 246, 1);">Terms
                                and Conditions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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