<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jia Drilling</title>
    <!-- Stylesheets -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="assets/css/color.css" rel="stylesheet">

    <link rel="preconnect" href="../../fonts.googleapis.com/index.html">
    <link rel="preconnect" href="../../fonts.gstatic.com/index.html" crossorigin>
    <link
        href="../../fonts.googleapis.com/css2dd6c.css?family=Barlow:wght@400;500;600;700&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <style>
    * {
        margin: 0%;
        padding: 0%;
    }

    .part {
        transition: all 500ms;
        position: sticky;
        padding: 10px;
        width: 100%;
        height: 100vh;
        top: 0;
        background-size: 100% 100%;
        box-sizing: border-box;
        background-repeat: no-repeat;
    }

    .part:nth-of-type(1) {
        background-image: url("./assets/images/background/bg-1.jpg");
    }

    .part:nth-of-type(2) {
        background-image: url("./assets/images/background/bg-2.jpg");
        background-repeat: no-repeat;
    }

    .part:nth-of-type(3) {
        background-image: url("./assets/images/background/bg-3.jpg");
        background-repeat: no-repeat;
    }

    .part:nth-of-type(4) {
        background-image: url("./assets/images/background/bg-4.jpg");
        background-repeat: no-repeat;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">

        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <?php include 'header.php' ?>


        <div class="hidden-sidebar close-sidebar">
            <div class="wrapper-box">
                <div class="hidden-sidebar-close"><span class="fal fa-times"></span></div>
                <div class="logo"><a href="#"><img src="assets/images/logo.png" alt=""></a></div>
                <div class="content">
                    <div class="about-widget-two sidebar-widget">
                        <h3>Finding The Best <br>
                            Construction Services </h3>
                        <div class="text">We denounce with righteous indignation and dislike men who we are to beguiled
                            demoralized by the charms of pleasures that moment, so we blinded desires, that they
                            indignations.</div>
                    </div>
                    <!-- Contact Widget -->
                    <div class="sidebar-contact-info mb_40">
                        <h4 class="fs_22 fw_medium mb_20">Conatct Us</h4>
                        <ul>
                            <li>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/icon-7__mapmarker.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>54B, Tailstoi Town 5238 MT,<br> La city, IA 522364</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/icon-8__envelop.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:info@example.com">contact@buildnox.com</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/icon-9__phone.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p><a href="tel:+8801682648101">+91-94281 18030</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/images/icons/icon-10__clock.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p>Working Hrs : 9.30am to 6.30pm</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Newsletter Widget -->
                    <div class="newsletter-widget">
                        <h4 class="fs_22 fw_medium mb_20">Newsletter Subscription</h4>
                        <form action="#">
                            <input type="email" placeholder="Enter Email Address">
                            <button class="btn-1 pt_18 pb_15 pl_30 pr_30 ff_sec fw_bold tt_u fs_14 ls_1">Subscribe Us <i
                                    class="flaticon-right-arrow-1"></i><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="fal fa-times"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="https://azim.hostlin.com/buildnox/index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value=""
                                    placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                    <br>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Idea</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Growth</a></li>
                        <li><a href="#">Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>



        <section class="banner-1-section banner-section bg_dark5 overflow-hidden">
            <h1 class="banner-1-side-text text_stroke">Construction</h1>

            <div class="swiper-container banner-slider-2">
                <div class="swiper-wrapper">
                    <!-- Slide Item -->
                    <div class="swiper-slide">
                        <div class="bnox_76 p_absolute l_0 l_xxl_220 t_110 r_0 b_0 bg_cover"
                            style="background-image: url(assets/images/main-slider/banner-6.jpg);"></div>
                        <div class="auto-container">
                            <div class="content-box p_inherit pt_330 pb_200">
                                <div class="inner">
                                    <h1 class="c_light mb_30 fw_black fs_70">We Provide the Guaranteed Quality in
                                        Construction </h1>
                                    <p class="mb_40 fs_22 c_light">Jia International is a multi-disciplinary technology,
                                        engineering, manufacturing, and trading company. Independent services are
                                        offered to clients worldwide based on the knowledge and experience of highly
                                        skilled and dedicated professionals. Jia International is one of the
                                        fastest-growing companies in India. </p>
                                    <!-- <div class="link-box tt_u pr_font fs_14"><a href="appointment.html" class="btn-1 pt_18 pb_15 pl_30 pr_30 b_radius_5 ff_sec fw_bold tt_u fs_14 ls_1">Book Appointment <i class="flaticon-fast-forward"></i> <span></span></a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide Item -->
                    <!-- Slide Item -->
                    <div class="swiper-slide">
                        <div class="bnox_76 p_absolute l_0 l_xxl_220 t_110 r_0 b_0 bg_cover"
                            style="background-image: url(assets/images/main-slider/banner-6.jpg);"></div>
                        <div class="auto-container">
                            <div class="content-box p_inherit pt_330 pb_200">
                                <div class="inner">
                                    <h1 class="c_light mb_30 fw_black fs_70">We Provide the Guaranteed Quality in
                                        Construction </h1>
                                    <p class="mb_40 fs_22 c_light">Jia International is a multi-disciplinary technology,
                                        engineering, manufacturing, and trading company. Independent services are
                                        offered to clients worldwide based on the knowledge and experience of highly
                                        skilled and dedicated professionals. Jia International is one of the
                                        fastest-growing companies in India. </p>
                                    <!-- <div class="link-box tt_u pr_font fs_14"><a href="appointment.html" class="btn-1 pt_18 pb_15 pl_30 pr_30 b_radius_5 ff_sec fw_bold tt_u fs_14 ls_1">Book Appointment <i class="flaticon-fast-forward"></i> <span></span></a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="banner-slider-nav">
                <div class="banner-slider-control banner-slider-button-prev"><span><i
                            class="flaticon-left-arrow-line-symbol"></i></span></div>
                <div class="banner-slider-control banner-slider-button-next"><span><i
                            class="flaticon-right-arrow-angle"></i></span> </div>
            </div>
        </section>

        <section class="pt_160 pb_90 bg_dark5">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                        <div class="ml_xxl__155 mr_xxl__18">
                            <div class="row row-20 align-items-end">
                                <div class="col-6">
                                    <div class="image mb_30"><img src="assets/images/resource/image-17.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="image mb_30"><img src="assets/images/resource/image-18.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="p_relative ml_xxl_70">
                            <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                    class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Welcome to Jia Drilling.</h6>
                            <h2 class="fs_45 fw_black mb_30 c_light">We Are Best Company In <br> Constrcution</h2>
                            <p class="mb_30 fs_16 c_light">Since 2005, a strong, customer-focused approach and
                                relentless pursuit of world-class quality have helped it achieve and maintain leadership
                                in all its main lines of business. <br>
                                With an international presence, Jia International has offices spread across several
                                African countries. Thrust on international business saw overseas earnings grow
                                significantly. It continues to expand its global footprint, with an office in East
                                Africa.<br>
                                A wide marketing network provides support for these businesses and has established
                                credibility for strong customer support.<br>
                                To respond to these changes in the market dynamics, Jia International has evolved
                                through a phased process of redefinition of its organizational model for growth through
                                higher levels of empowerment. A new organization structure is designed around multiple
                                businesses, that serves the needs of a different set of industries.<br>
                                Jia International, which believes in the fact that "progress must be achieved in harmony
                                with the environment," requires corporate vision embracing commitments to community
                                welfare and environmental protection as a vital component.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-1 c_light fs_20 fw_medium mb_30">
                                        <li><i class="flaticon-comment"></i>100% Satisfaction</li>
                                        <li><i class="flaticon-comment"></i>Flexible and Cost-Effective</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-1 c_light fs_20 fw_medium mb_30">
                                        <li><i class="flaticon-comment"></i>Annual Pass Programs</li>
                                        <li><i class="flaticon-comment"></i>Trained Emploies</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="author-box d-flex align-items-center">
                                <div class="image mb_20 mr_25"><img class="b_radius_50"
                                        src="assets/images/resource/author-6.jpg" alt=""></div>
                                <div class="mb_25 mr_40">
                                    <p class="c_light mb_0 fs_20 lh_30"><span class="fs_18 fw_medium">Call Us</span>
                                        <br> <a class="fs_20 fw_sbold" href="tel:18004567890">+91-94281 18030</a>
                                    </p>
                                </div>
                                <div class="signature mb_20 mt_15"><img src="assets/images/resource/signature5.png"
                                        alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- features -->
        <section class="bg_gray2 pt_120 pb_90">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-12 mb-2">
                        <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                                class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>What we do</h6>
                        <h2 class="fs_45 fw_black mb_30">Our Featured Services</h2>
                        <!-- <div class="link-btn"><a href="services.html" class="c_primary td_underline ff_sec fw_bold tt_u fs_14 ls_1">view all services </a></div> -->
                    </div>
                    <div class="col-lg-4 ">
                        <div class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div
                                class="icon_box_1 icon_box_1_with_hover alt mb_30 p_relative d-flex p_35 pt_40 b_radius_6">
                                <div>
                                    <i class="flaticon-renovation fs_65 c_primary mb_40 d_iblock"></i>
                                    <h4 class="fs_18 fw_normal c_dark4">DTH Drilling Methods</span></h4>
                                    <div class="link mb_75"><a href="dtg-drilling-method.php"
                                            class="ff_sec fw_bold tt_u fs_14 ls_1 c_light_dark">View more <i
                                                class="p_relative t_3 c_primary ml_10 fs_20 v_middle flaticon-right-arrow-2"></i></a>
                                    </div>
                                    <div class="p_relative">
                                        <h5 class="fs_14 c_light_dark">01.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div
                                class="icon_box_1 icon_box_1_with_hover alt mb_30 p_relative d-flex p_35 pt_40 b_radius_6">
                                <div>
                                    <i class="flaticon-roof fs_65 c_primary mb_40 d_iblock"></i>
                                    <h4 class="fs_18 fw_normal c_dark4">About Diamond Core Drilling</span></h4>
                                    <div class="link mb_75"><a href="about-diamond-core-drilling.php"
                                            class="ff_sec fw_bold tt_u fs_14 ls_1 c_light_dark">View more <i
                                                class="p_relative t_3 c_primary ml_10 fs_20 v_middle flaticon-right-arrow-2"></i></a>
                                    </div>
                                    <div class="p_relative">
                                        <h5 class="fs_14 c_light_dark">02.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1.5s">
                            <div
                                class="icon_box_1 icon_box_1_with_hover alt mb_30 p_relative d-flex p_35 pt_40 b_radius_6">
                                <div>
                                    <i class="flaticon-trowel fs_65 c_primary mb_40 d_iblock"></i>
                                    <h4 class="fs_18 fw_normal c_dark4">Direct Mud Rotary Drilling </span></h4>
                                    <div class="link mb_75"><a href="budirect-mud-rotary-drilling.php"
                                            class="ff_sec fw_bold tt_u fs_14 ls_1 c_light_dark">View more <i
                                                class="p_relative t_3 c_primary ml_10 fs_20 v_middle flaticon-right-arrow-2"></i></a>
                                    </div>
                                    <div class="p_relative">
                                        <h5 class="fs_14 c_light_dark">03.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- project -->
        <section class="pt_120 pb_120 bg_dark">
            <div class="auto-container">
                <div class="text-center">
                    <h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span
                            class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>OUr recent work <span
                            class="w_30 h_2 theme-bg ml_10 d_iblock v_middle"></span></h6>
                    <h2 class="c_light fs_45 fw_black mb_60">Our Featured Products</h2>
                </div>
            </div>
            <div class="auto-container mw_xxl_1510">
                <div class="swiper-container four-item-carousel">
                    <div class="swiper-wrapper">
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="project-1-block">
                                <div class="project-1-image">
                                    <img src="assets/images/gallery/gallery-5.jpg" alt="">
                                    <div class="project-1-overlay">
                                        <a href="assets/images/gallery/gallery-5.jpg" class="project-1-icon"
                                            data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Lorence Project</p>
                                        <h4 class="project-1-title">Building Construction</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="project-1-block">
                                <div class="project-1-image">
                                    <img src="assets/images/gallery/gallery-6.jpg" alt="">
                                    <div class="project-1-overlay">
                                        <a href="assets/images/gallery/gallery-6.jpg" class="project-1-icon"
                                            data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Lorence Project</p>
                                        <h4 class="project-1-title">Building Construction</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="project-1-block">
                                <div class="project-1-image">
                                    <img src="assets/images/gallery/gallery-7.jpg" alt="">
                                    <div class="project-1-overlay">
                                        <a href="assets/images/gallery/gallery-7.jpg" class="project-1-icon"
                                            data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Lorence Project</p>
                                        <h4 class="project-1-title">Building Construction</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Slide Item -->
                        <div class="swiper-slide">
                            <div class="project-1-block">
                                <div class="project-1-image">
                                    <img src="assets/images/gallery/gallery-8.jpg" alt="">
                                    <div class="project-1-overlay">
                                        <a href="assets/images/gallery/gallery-8.jpg" class="project-1-icon"
                                            data-fancybox="project-1"><i class="flaticon-zoom"></i></a>
                                        <a href="project-details.html"><i class="flaticon-link"></i></a>
                                    </div>
                                    <div class="project-1-content">
                                        <p class="project-1-cat">Lorence Project</p>
                                        <h4 class="project-1-title">Building Construction</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-nav-style-2 testimonial-1-nav project-1-nav justify-content-center">
                        <div class="slider-control slider-button-prev4 hvr-zoom-1 hvr-zoom-1-primary"><span><i
                                    class="far fa-angle-left"></i></span></div>
                        <div class="slider-control slider-button-next4 hvr-zoom-1 hvr-zoom-1-primary"><span><i
                                    class="far fa-angle-right"></i></span> </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg_gray2 pt_1 pb_1">
            <h1 class="project-1-bottom-title text_stroke mt_100" data-parallax='{"x": -50}'>Jia Drilling</h1>
        </div>

      <!-- testimonial -->
      <section class="pt_120 pb_90 bg_dark6 mb-5">
        <div class="p_absolute t_0 r_0 b_0 l_0" style="background-image: url(assets/images/resource/map.png);"></div>
		<div class="auto-container">
			<div class="row">
				<div class="col-lg-4">
					<h6 class="theme-color ff_sec fw_bold tt_u fs_14 ls_1 mb_15"><span class="w_30 h_2 theme-bg mr_10 d_iblock v_middle"></span>Testimonials</h6>
                    <h2 class="c_light fs_45 fw_black mb_40">What They’re <br> Talking About <br> Comapany ?</h2>
				</div>
				<div class="col-lg-8">
                    <div class="swiper-container two-item-carousel">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonials-1-block">
                                    <div class="testimonials-1-top-content">
                                        <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                        <div class="testimonials-1-desc">Normal that has evolved from gene ration X is on the runway heading towards a streamlined cloud solution. strategies to ensure proactive domination. </div>
                                    </div>
                                    <div class="testimonials-1-author">
                                        <div class="testimonials-1-author-image"><img src="assets/images/resource/author-3.jpg" alt=""></div>
                                        <div class="testimonials-1-author-title">Robert Mick</div>
                                        <div class="testimonials-1-designation">Customer</div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials-1-block">
                                    <div class="testimonials-1-top-content">
                                        <div class="testimonials-1-quote"><i class="flaticon-quotation"></i></div>
                                        <div class="testimonials-1-desc">Normal that has evolved from gene ration X is on the runway heading towards a streamlined cloud solution. strategies to ensure proactive domination.  </div>
                                    </div>
                                    <div class="testimonials-1-author">
                                        <div class="testimonials-1-author-image"><img src="assets/images/resource/author-4.jpg" alt=""></div>
                                        <div class="testimonials-1-author-title">Marray Joe</div>
                                        <div class="testimonials-1-designation">Customer</div>
                                    </div>
                                </div>
                            </div>
                        </div>                            
                    </div>
				</div>
			</div>
		</div>
        <div class=" bg_dark6">
        <div class="brand-logo-sec-border alt"></div>
        <div class="text-center"><h5 class="ff_sec fw_bold tt_u fs_14 ls_1 c_primary text-center mb_80 bg_dark6 pl_30 pr_30 p_relative d_iblock">We worked with royal clients</h5></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="assets/images/clients-logo/brand-logo-1.png" alt=""></div>
                </div>
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="assets/images/clients-logo/brand-logo-2.png" alt=""></div>
                </div>
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="assets/images/clients-logo/brand-logo-3.png" alt=""></div>
                </div>
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="assets/images/clients-logo/brand-logo-4.png" alt=""></div>
                </div>
                <div class="col-xl-2-5 col-lg-3 col-md-4">
                    <div class="client-logo-1-image alt mb_20"><img src="assets/images/clients-logo/brand-logo-5.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
	</section>
    


        <!-- map -->
        <section class="map-1-section">
            <div class="p_absolute t_0 r_0 b_0 l_0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.4802360181093!2d72.50461957456149!3d23.225605308722454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c262555555555%3A0x75b83b0dc91bf73a!2sJia%20International!5e0!3m2!1sen!2sin!4v1729849316184!5m2!1sen!2sin"
                    width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="auto-container">
                <div class="contact-info-1-box alt">
                    <h4 class="fs_20 c_light mb_10">Office Address</h4>
                    <span class="w_20 h_2 bg_light mr_10 d_iblock mb_20"></span>
                    <p class="c_light mb_25">Opp. Kalol GIDC,
                        National Highway, Village - Saij
                        Dist. Gandhinagar - 382725.
                        Gujarat, India</p>
                    <p class="c_light">Phone : <a>+91-96012 84980, +91-94281 18030</a> </p>
                </div>
            </div>
        </section>

      

        <?php include 'footer.php' ?>

    </div>

    <!-- parallax -->
    <!-- <section>
            <section class="part">
                <h1 style="color: white; font-size: 50px">background 1</h1>
            </section>
            <section class="part">
                <h1 style="color: white; font-size: 50px">background 2</h1>
            </section>
            <section class="part">
                <h1 style="color: white; font-size: 50px">background 3</h1>
            </section>
            <section class="part">
                <h1 style="color: white; font-size: 50px">background 4</h1>
            </section>
        </section> -->

    <!--Scroll to top-->
    <div class="scroll-to-top">
        <div>
            <div class="scroll-top-inner">
                <div class="scroll-bar">
                    <div class="bar-inner"></div>
                </div>
                <div class="scroll-bar-text">Go To Top</div>
            </div>
        </div>
    </div>
    <!-- Scroll to top end -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/script.js"></script>


</body>

</html>