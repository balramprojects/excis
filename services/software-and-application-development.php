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
                        <a href="<?php echo $desktop_url; ?>">Home</a> - <a href="<?php echo $desktop_url . 'services'; ?>">Services</a> - <span class="page">Software and Application Development</span>
                    </div>
                    <div class="page-title">
                        Software and Application Development
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
                                Why Excis plays a vital role in software <br> and application development?
                            </div>
                            <div style="padding: 25px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                Excis transform business with custom-designed and developed software applications from application UX/UI design, coding, testing, deployment, and support. We manage the end-to-end software development lifecycle. Empower your business with leading-edge software development services by accessing competent resources to transform your business and withstand the changes of modern technology. The proven skills and competence of impeccable custom software development services will increase sales for your business.
                                <br> <br>
                                We offer custom software solutions with services such as software design, software development, software testing, and much more. Excis is a pioneer in software development services around the world with a dedicated team of talented developers. This ensures that business processes, productivity, and profits are streamlined.
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
                    What are the Excis Software and Application development services?
                </div>
                <div style="max-width: 800px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; text-align: center; padding: 20px 0 0;">
                    As one of the most valuable software development companies, we offer a wide range of custom software development services with our expertise to meet custom software requirements successfully.
                </div>

                <ul style="max-width: 800px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; text-align: left; padding: 20px 0 0 20px;">
                    <li><b>Custom software development:</b> Develop custom software applications according to the changing needs of businesses and end users. Excis helps businesses by developing fully functional web and mobile applications. They are packed with features and compatibility to drive growth and overcome business challenges. Excis offers businesses top-notch quality services by developing efficient, secure, and high-performance software solutions with a user-friendly experience.</li>
                    <br>
                    <li><b>Cloud & DevOps:</b> Develop custom software applications according to the changing needs of businesses and end users. Excis helps businesses by developing fully functional web and mobile applications. They are packed with features and compatibility to drive growth and overcome business challenges. Excis offers businesses top-notch quality services by developing efficient, secure, and high-performance software solutions with a user-friendly experience.</li>
                    <br>
                    <li><b>Dedicated development team:</b> You can hire top thinkers from Excis to meet your specific business needs to maximize efficiency. Our Experienced Software Team, Developers, Managers, and Architects are domain experts who easily step into the shoes of their clients and offer insights.</li>
                    <br>
                    <li><b>Mobile app:</b> Mobility in app development is a win-win factor for businesses. In entrusting custom software development companies, Excis’ extensive experience in cross-platform development and native apps for iOS and Android delivers enhanced performance, longer sustainability, and smooth navigation.</li>
                    <br>
                    <li><b>Staff augmentation:</b> Mobility in app development is a win-win factor for businesses. In entrusting custom software development companies, Excis’ extensive experience in cross-platform development and native apps for iOS and Android delivers enhanced performance, longer sustainability, and smooth navigation.</li>
                    <br>
                    <li><b>Software Consultant:</b> We provide you with software development consulting on concept discovery. Technology Insights and risk analysis while building a growth strategy from user acquisition to monetization.</li>
                    <br>
                    <li><b>Artificial Intelligence:</b> We use machine learning to leverage AI capabilities and build AI business applications, including automation, data analysis, Voice assistants, and other AI-powered apps.</li>
                    <br>
                    <li><b>UX and UI design development:</b> Without proper UX UI design, the user experience will be severely compromised. Our design team develops user-friendly software products with pixel-perfect designs that are interactive and meet your performance requirements.</li>
                    <br>
                    <li><b>Optimize all business processes:</b> You want to change your business by automating your business activities. Plan resources correctly and increase efficiency. Want to develop a centralized system to optimize and manage for your organization? Excis software solutions will do what you need.</li>
                </ul>

                <div style="max-width: 800px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; padding: 20px 0 0;">
                    Excis is the leading custom software development company that provides enterprise software development services for enterprise application development. As one of the best software development companies, we have served more clients ranging from growing startup companies.
                    <br> <br>
                    Our software company has successfully delivered more projects such as business development software, Cloud software, mobile apps, mobile web applications, and web portals. We use advanced information technology concepts such as Artificial Intelligence, Machine Learning, AR/VR, Blockchain, and the Internet of Things in software engineering projects.
                </div>

                <div style="padding: 50px 0 0;">
                    <div style="max-width: 700px; margin-inline: auto; color: #fff; font-size: 30px; line-height: 40px; font-weight: 500; text-align: center;">
                        Software development cycle
                    </div>
                    <ul style="max-width: 800px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; text-align: left; padding: 20px 0 0 20px;">
                        <li><b>Needs analysis and planning:</b> In the first step of the software development process, we will collect information about the desired product. Excis will understand your project requirements and start planning requirements. We also check project feasibility and then create a project plan.</li>
                        <li><b>Design:</b> The next step in the software development cycle is to design a product based on your business needs. Our designers will create interactive layouts, screen layouts, Front design structure, logo, and other necessary parts of the final product.</li>
                        <li><b>Development:</b> Next, our team of enterprise developers will start building software by coding. Our team uses agile development methods that speed up the product development process and reduce your costs. We build products from the ground up according to your requirements.</li>
                        <li><b>Test:</b> It’s time to make sure your software product is 100% free from defects. Our Quality Assurance team conducts testing at every stage of development and eliminates any defects or defects, if any. Excis will use various testing tools to make sure the software runs smoothly.</li>
                        <li><b>Deployment and maintenance:</b> We deploy our products on suitable servers for our customers to test and use. It is essential to maintain and update the software from time to time to adapt to changing trends. This is why we provide maintenance and technical support.</li>
                    </ul>
                </div>

                <div style="padding: 50px 0 0;">
                    <div style="max-width: 700px; margin-inline: auto; color: #fff; font-size: 30px; line-height: 40px; font-weight: 500; text-align: center;">
                        Why choose Excis for software and application development?
                    </div>

                    <div class="support-cards d-flex justify-content-between">
                        <div class="support-card">
                            <div class="card-content">
                                <div style="font-size: 24px; font-weight: 700; color: #000;">
                                    DevOps and Agile Approaches
                                </div>
                                <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                    By adopting DevOps practices and becoming a DevOps company, we can accelerate time-to-market while ensuring continuous quality improvement.
                                </div>
                            </div>
                        </div>
                        <div class="support-card">
                            <div class="card-content">
                                <div style="font-size: 24px; font-weight: 700; color: #000;">
                                    GDPR Compliance
                                </div>
                                <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                    By using our services, companies can provide their customers with a reliable digital experience that meets GDPR standards.
                                </div>
                            </div>
                        </div>
                        <div class="support-card">
                            <div class="card-content">
                                <div style="font-size: 24px; font-weight: 700; color: #000;">
                                    Continuous support
                                </div>
                                <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                    With our capabilities as one of the leading software development companies, our goal is to support and assist customers around the world continuously.
                                </div>
                            </div>
                        </div>
                        <div class="support-card">
                            <div class="card-content">
                                <div style="font-size: 24px; font-weight: 700; color: #000;">
                                    Flexible employment model
                                </div>
                                <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                    We can offer a fixed pricing model or a dedicated team according to customers’ business needs.
                                </div>
                            </div>
                        </div>
                        <div class="support-card">
                            <div class="card-content">
                                <div style="font-size: 24px; font-weight: 700; color: #000;">
                                    Collaborative approach
                                </div>
                                <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                    Our collaborative approach ensures customers are supported throughout the process, from planning, design, and development to post-launch maintenance.
                                </div>
                            </div>
                        </div>
                        <div class="support-card">
                            <div class="card-content">
                                <div style="font-size: 24px; font-weight: 700; color: #000;">
                                    Strong architecture
                                </div>
                                <div style="padding: 18px 0 0; font-size: 14px; font-weight: 400; line-height: 22px; color: #000;">
                                    Enterprise software applications fail to impress with robust UI/UX and architectural design. It’s a hands-on development team focused on building robust enterprise applications that have supported businesses for a long time.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="max-width: 800px; margin-inline: auto; color: #fff; font-size: 14px; line-height: 24px; font-weight: 400; text-align: center; padding: 20px 0 0;">
                        As a leading custom software development company, Excis believes in providing support to our customers at every step of the process. When developing web, software, or enterprise applications, your feedback plays an important role. It keeps us on the same page to deliver what you expect. You don’t need to talk to the entire development team.
                        <br> <br>
                        We will provide a single point of contact. Our PM (project manager) will assist you in the development process, and you can tell us your requirements.
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