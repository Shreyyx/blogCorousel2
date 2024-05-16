<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bracketweb.com/floens-html/{{ Route('index_3') }} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 07:05:14 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/about/favicon-logo.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/about/favicon-logo.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/about/favicon-logo.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description"
        content="Floens is a modern HTML Template for Beauty, Spa Centers, Hair, Nail, Spa Salons & Cosmetic shops. The template perfectly fits Beauty Spa, Salon, and Wellness Treatments websites and businesses." />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,900;9..40,1000&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/floens-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/floens.css" />
    <style>
        .fixed-textarea {
            width: 300px;
            /* Set the desired width */
            min-height: 150px;
            /* Set the minimum height */
            max-height: 300px;
            /* Set the maximum height */
            height: auto;
            /* Allow automatic height adjustment based on content */
            resize: none;
            /* Disable resizing */
            overflow-y: auto;
            /* Add vertical scrollbar if content exceeds max-height */
        }

        .side-by-side {
            display: inline-block;
        }
    </style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image" style="background-image: url(assets/images/about/favicon-logo.png);"></div>
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        {{-- <div class="topbar-one">
            <div class="container-fluid">
                <div class="topbar-one__inner">
                    <ul class="list-unstyled topbar-one__info">
                        <li class="topbar-one__info__item">
                            <span class="icon-paper-plane"></span>
                            <a href="mailto:needhelp@company.com">mohitmarbleandgranites@gmail.com</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <span class="icon-phone-call"></span>
                            <a href="tel:+9156980036420">9145814566, 7425824566</a>
                        </li>
                        <li class="topbar-one__info__item">
                            <span class="icon-location"></span>
                            <address>Rico industrial area , kishangarh 305801</address>
                        </li>
                    </ul><!-- /.list-unstyled topbar-one__info -->
                    <div class="topbar-one__right">
                        <div class="topbar-one__social">
                            <a href="https://facebook.com/">
                                <i class="icon-facebook" aria-hidden="true"></i>
                                <span class="sr-only">Facebook</span>
                            </a>
                            <a href="https://twitter.com/">
                                <i class="icon-twitter" aria-hidden="true"></i>
                                <span class="sr-only">Twitter</span>
                            </a>
                            <a href="https://instagram.com/">
                                <i class="icon-instagram" aria-hidden="true"></i>
                                <span class="sr-only">Instagram</span>
                            </a>
                            <a href="https://youtube.com/">
                                <i class="icon-youtube" aria-hidden="true"></i>
                                <span class="sr-only">Youtube</span>
                            </a>
                        </div><!-- /.topbar-one__social -->
                    </div><!-- /.topbar-one__right -->
                </div><!-- /.topbar-one__inner -->
            </div><!-- /.container-fluid -->
        </div> --}}
        <header class="main-header main-header--three sticky-header sticky-header--normal">
            <div class="container-fluid">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="{{ Route('index_4') }}">
                            <img src="assets/images/Projects/Screenshot_2024-05-15_181714-removebg-preview.png"
                                alt="logo" width="180" class="main-header__logo__one">
                            <img src="assets/images/Projects/Screenshot_2024-05-15_181714-removebg-preview.png"
                                alt="logo" width="180" class="main-header__logo__two">
                        </a>
                    </div>
                    <div class="main-header__right">
                        <nav class="main-header__nav main-menu">
                            <ul class="main-menu__list">

                                <li class="dropdown megamenu">
                                    <a href="{{ Route('index_4') }}">Home</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ Route('about') }}">About Us</a>
                                    <ul>
                                        <li><a href="{{ Route('team') }}">Our Team</a></li>
                                        <li>
                                            <a href="{{ Route('gallery_grid') }}">Gallery</a>
                                        </li>
                                        <li><a href="{{ Route('faq') }}">FAQS</a></li>
                                    </ul>
                                </li>
                                {{-- <li>
                                    <a href="{{ Route('about') }}">About</a>
                                </li> --}}

                                <li class="dropdown">
                                    <a href="{{ Route('services_grid') }}">Services</a>
                                    <ul>
                                        <li><a href="{{ Route('serviced_industrial_flooring') }}">Indian Marble</a>
                                        </li>
                                        <li><a href="{{ Route('serviced_tiling_concrete') }}">Granite</a>
                                        </li>
                                        <li><a href="{{ Route('serviced_carpets_rugs') }}">Italian Marble</a></li>
                                        <li><a href="{{ Route('serviced_oak_flooring') }}">Elevation</a></li>
                                        <li> <a href="{{ Route('serviced_vinyl_plank') }}">Sand Stone</a></li>
                                        <li><a href="{{ Route('serviced_vein_patterns') }}">Export Service</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown megamenu">
                                    <a href="{{ Route('work') }}">Our Projects</a>
                                </li>

                                {{-- <li class="dropdown">
                                    <a href="#">News</a>
                                    <ul>
                                        <li class="dropdown">
                                            <a href="#">News grid</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ Route('blog_grid') }}">No sidebar</a></li>
                                                <li><a href="{{ Route('blog_gridleft') }}">Left sidebar</a></li>
                                                <li><a href="{{ Route('blog_gridright') }}">Right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">News list</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ Route('blog_list') }}">No sidebar</a></li>
                                                <li><a href="{{ Route('blog_listleft') }}">Left sidebar</a></li>
                                                <li><a href="{{ Route('blog_listright') }}">Right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ Route('blog_carousel') }}">News carousel 01</a></li>
                                        <li><a href="{{ Route('blog_carousel2') }}">News carousel 02</a></li>
                                        <li><a href="{{ Route('blog_carousel3') }}">News carousel 03</a></li>
                                        <li class="dropdown">
                                            <a href="#">News details</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ Route('blog_details') }}">No sidebar</a></li>
                                                <li><a href="{{ Route('blog_detailsleft') }}">Left sidebar</a></li>
                                                <li><a href="{{ Route('blog_detailsright') }}">Right sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> --}}
                                <li>
                                    <a href="{{ Route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav><!-- /.main-header__nav -->
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- /.mobile-nav__toggler -->
                        <a href="{{ Route('cart') }}" class="main-header__cart">
                            {{-- <i class="icon-cart" aria-hidden="true"></i> --}}
                            <span class="sr-only">Cart</span>
                        </a>
                        <a href="#" class="search-toggler main-header__search">
                            {{-- <i class="icon-search" aria-hidden="true"></i> --}}
                            <span class="sr-only">Search</span>
                        </a>
                        <a href="{{ Route('contact') }}" class="floens-btn main-header__btn">
                            <span>get a quote</span>
                            <i class="icon-right-arrow"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <!-- main slider start -->
        <section class="main-slider-three hero-slider">
            <div class="hero-slider__social">
                <a href="https://facebook.com/">
                    <i class="icon-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/">
                    <i class="icon-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://instagram.com/">
                    <i class="icon-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://youtube.com/">
                    <i class="icon-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div><!-- /.hero-slider__social -->
            <div class="main-slider-three__border-top"></div><!-- /.main-slider-three__border-top -->
            <div class="main-slider-three__border-right"></div><!-- /.main-slider-three__border-right -->
            <div class="main-slider-three__border-left"></div><!-- /.main-slider-three__border-left -->
            <div class="main-slider-three__border-bottom">
                <div class="main-slider-three__border-bottom__inner"></div>
                <!-- /.main-slider-three__border-bottom__inner -->
            </div><!-- /.main-slider-three__border-bottom -->
            <div class="main-slider-three__carousel floens-slick__carousel--with-counter"
                data-slick-options='{
		"slidesToShow": 1,
		"slidesToScroll": 1,
		"autoplay": true,
		"autoplaySpeed": 3000,
		"speed": 2000,
		"infinite": true,
		"fade": true,
		"dots": false,
		"arrows": true,
		"prevArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--prev\"><i class=\"icon-left-arrow\"><i></button>",
		"nextArrow": "<button class=\"hero-slider__slick-button hero-slider__slick-button--next\"><i class=\"icon-right-arrow\"><i></button>"

	}'>
                <div class="main-slider-three__item">
                    <div class="main-slider-three__bg"
                        style="background-image: url(assets/images/backgrounds/slider-3-1.jpg);"></div>
                    <!-- /.main-slider-three__bg -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-8 mx-auto">
                                <div class="main-slider-three__content">
                                    {{-- <div class="main-slider-three__circle-text">
                                        <img src="assets/images/resources/medal.png" alt="medal"
                                            class="main-slider-three__circle-text__image">
                                        <div class="main-slider-three__curved-circle curved-circle">
                                 <div class="main-slider-three__curved-circle__item curved-circle__item"
                                                data-circle-text-options='{
									"radius": 84,
									"forceWidth": true,
									"forceHeight": true}'>
                                                award winning flooring company
                                                </div>
                                        </div><!-- curved-circle end-->
                                    </div> --}}
                                    <style>
                                        h2 {
                                            font-family: "Poppins", sans-serif;
                                        }

                                        h4 {
                                            font-family: "Raleway", sans-serif;
                                        }
                                    </style>
                                    <h2 class="main-slider-three__title">Build your Dream
                                    </h2>
                                    <h2 style="color:white;"> With Mohit Marbles and Granites</h2>
                                    <br>
                                    <br>
                                    <a href="{{ Route('about') }}" class="main-slider-three__btn floens-btn">
                                        <span>discover more</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-slider-three__item">
                    <div class="main-slider-three__bg"
                        style="background-image: url(assets/images/backgrounds/slider-3-2.jpg);"></div>
                    <!-- /.main-slider-three__bg -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-8 mx-auto">
                                <div class="main-slider-three__content">
                                    {{-- <div class="main-slider-three__circle-text">
                                        <img src="assets/images/resources/medal.png" alt="medal"
                                            class="main-slider-three__circle-text__image">
                                        <div class="main-slider-three__curved-circle curved-circle">
                                            <!-- curved-circle start-->
                                            <div class="main-slider-three__curved-circle__item curved-circle__item"
                                                data-circle-text-options='{
									"radius": 84,
									"forceWidth": true,
									"forceHeight": true}'>
                                                award winning flooring company
                                            </div>
                                        </div><!-- curved-circle end-->
                                    </div><!-- /.main-slider-three__circle-text --> --}}
                                    <h2 class="main-slider-three__title">High Quality Tile & Flooring
                                    </h2><!-- /.main-slider-three__title -->
                                    <a href="{{ Route('about') }}" class="main-slider-three__btn floens-btn">
                                        <span>discover more</span>
                                        <i class="icon-right-arrow"></i>
                                    </a><!-- /.main-slider-three__btn floens-btn -->
                                </div><!-- /.main-slider-three__content -->
                            </div><!-- /.col-md-10 -->
                        </div><!-- /.row -->
                    </div><!-- /..container -->
                </div><!-- /.main-slider-three__item -->
                <div class="main-slider-three__item">
                    <div class="main-slider-three__bg"
                        style="background-image: url(assets/images/backgrounds/slider-3-3.jpg);"></div>
                    <!-- /.main-slider-three__bg -->
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-lg-8 mx-auto">
                                <div class="main-slider-three__content">
                                    <div class="main-slider-three__circle-text">
                                        {{-- <img src="assets/images/resources/medal.png" alt="medal"
                                            class="main-slider-three__circle-text__image"> --}}
                                        {{-- <div class="main-slider-three__curved-circle curved-circle">
                                            <!-- curved-circle start-->
                                            <div class="main-slider-three__curved-circle__item curved-circle__item"
                                                data-circle-text-options='{
									"radius": 84,
									"forceWidth": true,
									"forceHeight": true}'>
                                                award winning flooring company
                                            </div>
                                        </div><!-- curved-circle end--> --}}
                                    </div><!-- /.main-slider-three__circle-text -->
                                    <h2 class="main-slider-three__title">High Quality Tile & Flooring
                                    </h2><!-- /.main-slider-three__title -->
                                    <a href="{{ Route('about') }}" class="main-slider-three__btn floens-btn">
                                        <span>discover more</span>
                                        <i class="icon-right-arrow"></i>
                                    </a><!-- /.main-slider-three__btn floens-btn -->
                                </div><!-- /.main-slider-three__content -->
                            </div><!-- /.col-md-10 -->
                        </div><!-- /.row -->
                    </div><!-- /..container -->
                </div><!-- /.main-slider-three__item -->
            </div><!-- /.main-slider-three__carousel -->
        </section><!-- /.main-slider-three -->
        <!-- main slider end -->

        <!-- about start -->
        <section class="about-three section-space" id="about">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="about-three__image">
                            <div class="about-three__image__inner">
                                <img src="assets/images/about/about-3-1.jpg" alt="about"
                                    class="about-three__image__one">
                                <img src="assets/images/about/about-3-2.png" alt="about"
                                    class="about-three__image__two">
                                <img src="assets/images/about/about-3-3.jpg" alt="about"
                                    class="about-three__image__three">
                                <div class="about-three__image__shape"></div><!-- /.about-three__image__shape -->
                            </div><!-- /.about-three__image__inner -->
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-three__content">
                            <div class="sec-title @@extraClassName">

                                <h6 class="sec-title__tagline">about us</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Deditcated to providing Unmatched Experience: </h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->


                            {{-- <div class="about-three__client wow fadeInUp" data-wow-duration="1500ms">
                                <div class="about-three__client__image">
                                    <img src="assets/images/resources/client-rating-1.jpg" alt="client">
                                    <img src="assets/images/resources/client-rating-2.jpg" alt="client">
                                    <img src="assets/images/resources/client-rating-3.jpg" alt="client">
                                    <img src="assets/images/resources/client-rating-4.jpg" alt="client">
                                </div><!-- /.about-three__client__image -->
                                <div class="about-three__client__content">
                                    <div class="floens-ratings about-three__ratings">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </div><!-- /.product-ratings -->
                                    <h4 class="about-three__client__text">Our Satisfied Client ratings</h4>
                                </div>
                            </div> --}}
                            <p class="about-three__text wow fadeInUp" data-wow-duration="1500ms"><b>Exquisite
                                    Craftsmanship and Unmatched Experience:</b> With over three decades of experience in
                                the
                                marble and granite industry, Elegant Stones boasts a team of highly skilled artisans and
                                designers dedicated to transforming your vision into reality. Our commitment to
                                exquisite craftsmanship ensures that every project is meticulously executed, resulting
                                in breathtaking installations that stand the test of time.
                            </p>
                            <ul>
                                <li style="list-style-type: none;"><i class="fas fa-check-double"
                                        style="color: #f7c566;"></i> Premium Selection of Materials.</li>
                                <li style="list-style-type: none;"><i class="fas fa-check-double pb-1"
                                        style="color: #f7c566"></i> Competitive Pricing without Compromising Quality.
                                </li>
                                <li style="list-style-type: none;"><i class="fas fa-check-double pb-1"
                                        style="color: #f7c566"></i> Timely Delivery for Your Convenience.</li>
                            </ul>
                            <p>
                                <b>Peace of Mind with Our Warranty and Support:</b> We stand behind the quality of our
                                workmanship and materials. With our comprehensive warranty and reliable after-sales
                                support, you can rest assured that your investment is protected long after the project
                                is completed.
                            </p>

                            <div class="about-three__progress">
                                <div class="progress-box">
                                    <h4 class="progress-box__title">Marbles and Granites</h4>
                                    <!-- /.progress-box__title -->
                                    <div class="progress-box__bar">
                                        <div class="progress-box__bar__inner count-bar" data-percent='90%'>
                                            <div class="progress-box__number count-text">90%</div>
                                        </div>
                                    </div><!-- /.progress-box__bar -->
                                </div><!-- /.progress-box -->
                                <div class="progress-box">
                                    <h4 class="progress-box__title">Custom projects with unique designs</h4>
                                    <!-- /.progress-box__title -->
                                    <div class="progress-box__bar">
                                        <div class="progress-box__bar__inner count-bar" data-percent='70%'>
                                            <div class="progress-box__number count-text">70%</div>
                                        </div>
                                    </div><!-- /.progress-box__bar -->
                                </div><!-- /.progress-box -->
                            </div><!-- /.about-three__progress -->
                            <div class="about-three__button wow fadeInUp" data-wow-duration="1500ms">
                                <a href="{{ Route('about') }}" class="floens-btn about-three__btn">
                                    <span>more about us</span>
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.floens-btn about-three__btn -->
                            </div><!-- /.about-three__button -->
                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <img src="assets/images/shapes/about-shape-3-1.png" alt="shapes" class="about-three__shape-image">
        </section><!-- /.about-three section-space -->
        <!-- about end -->

        <!-- services start -->
        <section class="services-three">
            <div class="services-three__bg"
                style="background-image: url(assets/images/backgrounds/services-bg-3.png);"></div>
            <!-- /.services-three__bg -->
            <div class="container">
                <div class="services-three__top">
                    <div class="row gutter-y-50 align-items-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="sec-title @@extraClassName">

                                <h6 class="sec-title__tagline">services</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">We provide the best services</h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->


                        </div><!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="services-three__top__button">
                                <a href="{{ Route('services') }}" class="floens-btn floens-btn--border">
                                    <span>View All</span>
                                    <i class="icon-right-arrow"></i>
                                </a><!-- /.floens-btn floens-btn--border -->
                            </div><!-- /.services-three__top__button -->
                        </div>
                    </div>
                </div>
                <div class="services-three__inner"
                    style="background: url(assets/images/backgrounds/services-bg-inner-1.jpg);">
                    <div class="services-three__inner__wrapper">
                        <div class="services-three__inner__content">
                            <div class="services-three__inner__counter">
                                <div class="services-three__counter count-box">
                                    <h3 class="services-three__counter__text count-text" data-stop="78"
                                        data-speed="1500">0</h3>
                                    <h3 class="services-three__counter__text">%</h3>
                                </div>
                                <h4 class="services-three__counter__title">Satisfied clients</h4>
                            </div>
                            <div class="services-three__inner__counter">
                                <div class="services-three__counter count-box">
                                    <h3 class="services-three__counter__text count-text" data-stop="95"
                                        data-speed="1500">0</h3>
                                    <h3 class="services-three__counter__text">%</h3>
                                </div>
                                <h4 class="services-three__counter__title">Quality Services</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="services-three__carousel floens-owl__carousel floens-owl__carousel--with-shadow floens-owl__carousel--basic-nav owl-carousel owl-theme"
                    data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": false,
			"smartSpeed": 700,
			"nav": true,
			"navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
			"dots": false,
			"autoplay": false,
			"responsive":{
                "0":{
                    "items": 1,
					"loop": true,
					"autoplay": true,
                    "margin": 15
                },
				"576":{
                    "items": 1,
					"loop": true,
					"autoplay": true,
                    "margin": 15
                },
                "768":{
                    "items": 2,
					"loop": true,
					"autoplay": true,
                    "margin": 30
                },
                "992":{
                    "items": 2,
					"loop": true,
					"autoplay": true,
                    "margin": 30
                },
                "1200":{
                    "items": 3,
					"loop": true,
					"autoplay": true,
                    "margin": 30
                },
                "1400":{
                    "items": 3,
					"loop": false,
					"autoplay": true,
                    "margin": 30
                },
                "1600":{
                    "items": 4,
					"loop": false,
					"autoplay": false,
                    "margin": 30
                }
			}
		}'>
                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg"
                                style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                            <div class="service-card-two__image">
                                <img src="assets/images/about/Indian Marble.png" alt="Tiling & concrete">
                            </div>
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a
                                        href='{{ Route('serviced_tiling_concrete') }}'>Indian Marble</a></h3>
                                <div class="service-card-two__bottom">
                                    <a href='{{ Route('serviced_tiling_concrete') }}'
                                        class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-tile"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg"
                                style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                            <!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/about/granite.jpeg" alt="Industrial Flooring">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a
                                        href='{{ Route('serviced_industrial_flooring') }}'>Granite</a>
                                </h3>
                                <!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href='{{ Route('serviced_industrial_flooring') }}'
                                        class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-parquet"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg"
                                style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                            <!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/about/italian marble.jpeg" alt="Vinyl Plank">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a
                                        href='{{ Route('serviced_vinyl_plank') }}'>Italian Marble</a></h3>
                                <!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href='{{ Route('serviced_vinyl_plank') }}'
                                        class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-tiles"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg"
                                style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                            <!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/about/elevation.jpeg" alt="Carpets & rugs">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a
                                        href='{{ Route('serviced_carpets_rugs') }}'>Elevation</a></h3>
                                <!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href='{{ Route('serviced_carpets_rugs') }}'
                                        class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-carpet"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg"
                                style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                            <!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/about/sand stone.jpeg" alt="Oak Flooring">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a
                                        href='{{ Route('serviced_oak_flooring') }}'>Sand Stone</a></h3>
                                <!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href='{{ Route('serviced_oak_flooring') }}'
                                        class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-wood-board"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div>
                    <div class="item">
                        <div class="service-card-two">
                            <div class="service-card-two__bg"
                                style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                            <!-- /.service-card-two__bg -->
                            <div class="service-card-two__image">
                                <img src="assets/images/about/export service.jpeg" alt="Vein Patterns">
                            </div><!-- /.service-card-two__image -->
                            <div class="service-card-two__content">
                                <h3 class="service-card-two__title"><a
                                        href='{{ Route('serviced_vein_patterns') }}'>Export Service</a></h3>
                                <!-- /.service-card-two__title -->
                                <div class="service-card-two__bottom">
                                    <a href='{{ Route('serviced_vein_patterns') }}'
                                        class="service-card-two__link floens-btn">
                                        <span>service details</span>
                                        <i class="icon-right-arrow"></i>
                                    </a>
                                    <span class="service-card-two__icon icon-stones"></span>
                                </div><!-- /.service-card-two__bottom -->
                            </div><!-- /.service-card-two__content -->
                        </div><!-- /.service-card-two -->
                    </div>
                </div>
            </div>
            <style>
                /* Ensure the service cards have a fixed size */
                .service-card-two {
                    width: 380px;
                    height: 450px;
                    overflow: hidden;
                    position: relative;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    background-color: #fff;
                    /* Optional: Ensure the card has a background color */
                    border-radius: 10px;
                    /* Optional: Add rounded corners */
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    /* Optional: Add a shadow for better aesthetics */
                    margin: 5px;
                    /* Optional: Add some margin around the cards */
                }

                /* Ensure the background image covers the card without stretching */
                .service-card-two__bg {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-size: cover;
                    background-position: center;
                    z-index: -1;
                    /* Ensure it is behind other content */
                }

                /* Adjust the image within the card */
                .service-card-two__image {
                    flex: 0 0 auto;
                    width: 100%;
                    height: 260px;
                    /* Set a fixed height for the image */
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    overflow: hidden;
                }

                .service-card-two__image img {
                    width: 100%;
                    height: auto;
                    object-fit: cover;
                    /* Ensure the image covers the area while maintaining its aspect ratio */
                }

                /* Ensure the content section remains within the card dimensions */
                .service-card-two__content {
                    padding: 10px;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    flex-grow: 1;
                }
            </style>
        </section>


        <!-- work-process start -->
        <section class="work-process section-space-two">
            <div class="work-process__container-top container">
                <div class="sec-title sec-title--center">

                    <h6 class="sec-title__tagline">work process</h6><!-- /.sec-title__tagline -->

                    <h3 class="sec-title__title">Our Work Process</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->


            </div><!-- /.container -->
            <div class="work-process__container container">
                <div class="row gutter-y-40">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="work-process__item work-process__item--one">
                            <div class="work-process__image">
                                <div class="work-process__image__inner">
                                    <img src="assets/images/work-process/work-process-1-1.png" alt="Color Board">
                                </div><!-- /.work-process__image__inner -->
                            </div><!-- /.work-process__image -->
                            <div class="work-process__content">
                                <h4 class="work-process__title">Color Board</h4><!-- /.work-process__title -->
                                <span class="work-process__step">step 01</span><!-- /.work-process__step -->
                            </div><!-- /.work-process__content -->
                        </div><!-- /.work-process__item -->
                    </div><!-- /.col-lg-3 col-sm-6 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="work-process__item work-process__item--two">
                            <div class="work-process__image">
                                <div class="work-process__image__inner">
                                    <img src="assets/images/work-process/work-process-1-2.png" alt="Dimension">
                                </div><!-- /.work-process__image__inner -->
                            </div><!-- /.work-process__image -->
                            <div class="work-process__content">
                                <h4 class="work-process__title">Dimension</h4><!-- /.work-process__title -->
                                <span class="work-process__step">step 02</span><!-- /.work-process__step -->
                            </div><!-- /.work-process__content -->
                        </div><!-- /.work-process__item -->
                    </div><!-- /.col-lg-3 col-sm-6 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="work-process__item work-process__item--three">
                            <div class="work-process__image">
                                <div class="work-process__image__inner">
                                    <img src="assets/images/work-process/work-process-1-3.png" alt="Installation">
                                </div><!-- /.work-process__image__inner -->
                            </div><!-- /.work-process__image -->
                            <div class="work-process__content">
                                <h4 class="work-process__title">Installation</h4><!-- /.work-process__title -->
                                <span class="work-process__step">step 03</span><!-- /.work-process__step -->
                            </div><!-- /.work-process__content -->
                        </div><!-- /.work-process__item -->
                    </div><!-- /.col-lg-3 col-sm-6 -->
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                        <div class="work-process__item work-process__item--four">
                            <div class="work-process__image">
                                <div class="work-process__image__inner">
                                    <img src="assets/images/work-process/work-process-1-4.png" alt="Finishing">
                                </div><!-- /.work-process__image__inner -->
                            </div><!-- /.work-process__image -->
                            <div class="work-process__content">
                                <h4 class="work-process__title">Finishing</h4><!-- /.work-process__title -->
                                <span class="work-process__step">step 04</span><!-- /.work-process__step -->
                            </div><!-- /.work-process__content -->
                        </div><!-- /.work-process__item -->
                    </div><!-- /.col-lg-3 col-sm-6 -->
                </div><!-- /.row -->
                <img src="assets/images/shapes/work-process-shape-1-3.png" alt="work-process-shape"
                    class="work-process__shape-three">
            </div><!-- /.container -->
            <div class="work-process__shapes">
                <img src="assets/images/shapes/work-process-shape-1-1.png" alt="work-process-shape"
                    class="work-process__shape-one">
                <img src="assets/images/shapes/work-process-shape-1-2.png" alt="work-process-shape"
                    class="work-process__shape-two">
            </div><!-- /.work-process__shapes -->
        </section><!-- /.work-process section-space-two -->
        <!-- work-process end -->

        <!-- projects start -->
        <section class="projects-three" id="projects">
            <div class="projects-three__bg floens-jarallax" data-jarallax data-speed="0.3"
                style="background-image: url(assets/images/backgrounds/projects-bg-3.jpg);"></div>
            <!-- /.projects-three__bg -->
            <div class="container">
                <div class="projects-three__top">
                    <div class="row gutter-y-50 align-items-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="sec-title @@extraClassName">

                                <h6 class="sec-title__tagline">projects</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Our Recent <br> Complete Projects</h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->


                        </div><!-- /.col-lg-8 -->
                        <div class="col-lg-4">
                            <div class="projects-three__top__button">
                                <a href="{{ Route('work') }}" class="floens-btn floens-btn--border">
                                    <span>View All</span>
                                    <i class="icon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="projects-three__grid">
                    <div class="projects-three__card projects-three__card--one">
                        <div class="projects-three__card__bg"
                            style="background-image: url(assets/images/Projects/Project--1.jpeg);"></div>
                        <div class="projects-three__card__content">
                            <div class="projects-three__card__top">
                                <h3 class="projects-three__card__tagline">1</h3>
                            </div>
                        </div>
                    </div><!-- /.projects-three__card -->
                    <div class="projects-three__card projects-three__card--two">
                        <div class="projects-three__card__bg"
                            style="background-image: url(assets/images/Projects/Project--2.jpeg);"></div>
                        <!-- /.projects-three__card__bg -->
                        <div class="projects-three__card__content">
                            <div class="projects-three__card__top">
                                <h3 class="projects-three__card__tagline">2</h3>
                            </div>
                            {{-- <h4 class="projects-three__card__title"><a href="{{ Route('work_details') }}">Modern
                                    interior</a>
                            </h4> --}}
                        </div>
                    </div>
                    <div class="projects-three__card projects-three__card--three">
                        <div class="projects-three__card__bg"
                            style="background-image: url(assets/images/Projects/Project--9.jpeg);"></div>
                        <div class="projects-three__card__content">
                            <div class="projects-three__card__top">
                                <h3 class="projects-three__card__tagline">3</h3>
                            </div>
                            {{-- <h4 class="projects-three__card__title"><a href="{{ Route('work_details') }}">Vinyl Plank</a></h4>
                       --}}
                        </div>
                    </div><!-- /.projects-three__card -->
                    <div class="projects-three__card projects-three__card--four">
                        <div class="projects-three__card__bg"
                            style="background-image: url(assets/images/Projects/Project--4.jpeg);"></div>
                        <!-- /.projects-three__card__bg -->
                        <div class="projects-three__card__content">
                            <div class="projects-three__card__top">
                                <h3 class="projects-three__card__tagline">4</h3>
                                <!-- /.projects-three__card__tagline -->
                            </div><!-- /.projects-three__card__top -->
                            {{-- <h4 class="projects-three__card__title"><a href="{{ Route('work_details') }}">leminate
                                    floor</a>
                            </h4> --}}
                        </div>
                    </div>
                    <div class="projects-three__card projects-three__card--five">
                        <div class="projects-three__card__bg"
                            style="background-image: url(assets/images/Projects/Project--5.jpeg);"></div>
                        <!-- /.projects-three__card__bg -->
                        <div class="projects-three__card__content">
                            <div class="projects-three__card__top">
                                <h3 class="projects-three__card__tagline">5</h3>
                                <!-- /.projects-three__card__tagline -->
                            </div><!-- /.projects-three__card__top -->
                            {{-- <h4 class="projects-three__card__title"><a href="{{ Route('work_details') }}">Tiling &
                                    concrete</a>
                            </h4> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.projects-three -->

        <section class="gallery-slide">
            <div class="container">
                <div class="gallery-slide__inner">
                    <div class="gallery-slide__carousel floens-owl__carousel owl-theme owl-carousel"
                        data-owl-options='{
                "items": 1,
                "margin": 30,
                "smartSpeed": 700,
                "loop":true,
                "autoplay": 6000,
                "stagePadding": 186,
                "nav":false,
                "dots":false,
                "navText": ["<span class=\"icon-arrow-left\"></span>","<span class=\"icon-arrow-right\"></span>"],
                "responsive":{
                    "0":{
                        "items": 1,
                        "margin": 15,
                        "stagePadding": 210
                    },
                    "500":{
                        "items": 1,
                        "stagePadding": 240
                    },
                    "768":{
                        "items": 1,
                        "stagePadding": 280
                    },
                    "992":{
                        "items": 1,
                        "stagePadding": 370
                    },
                    "1200":{
                        "items": 2,
                        "stagePadding": 280
                    },
                    "1400":{
                        "items": 2,
                        "stagePadding": 270
                    },
                    "1600":{
                        "items": 2,
                        "stagePadding": 250
                    },
                    "1800":{
                        "items": 2,
                        "stagePadding": 192.5
                    }
                }
                }'>
                        <div class="item">
                            <div class="gallery-one__card">
                                <img src="assets\images\Projects\Project--9.jpeg" alt="">
                                <div class="gallery-one__card__hover">
                                    <a href="assets/images/Projects/Project--9.jpeg" class="img-popup">
                                        <span class="gallery-one__card__icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-one__card">
                                <img src="assets\images\Projects\Project--1.jpeg" alt="">
                                <div class="gallery-one__card__hover">
                                    <a href="assets\images\Projects\Project--1.jpeg" class="img-popup">
                                        <span class="gallery-one__card__icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="gallery-one__card">
                                <img src="assets\images\Projects\Project--6.jpeg" alt="">
                                <div class="gallery-one__card__hover">
                                    <a href="assets\images\Projects\Project--6.jpeg" class="img-popup">
                                        <span class="gallery-one__card__icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .gallery-one__card {
                    width: 400px;
                    height: 350px;
                    position: relative;
                    margin: 5px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background-color: #fff;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }

                .gallery-one__card img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                }
            </style>
        </section>

        <!-- reliable start -->
        <section class="reliable-one reliable-one--home-three section-space-bottom">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">


                        <img src="assets\images\about\progress-graph-removebg-preview.png" alt="reliable"
                            class="reliable-one__image__one">
                        <div class="experience reliable-one__experience">
                            <div class="experience__inner">
                                <h3 class="experience__year"
                                    style="background-image: url('assets/images/shapes/reliable-shape-1-1.png');">
                                    25
                                </h3>
                                <p class="experience__text">years of <br> experience</p>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="reliable-one__content">
                            <div class="sec-title sec-title--border">

                                <h6 class="sec-title__tagline">victory</h6>

                                <h3 class="sec-title__title">OUR ACHIEVEMENTS</h3>
                            </div>


                            <p class="reliable-one__text">At Mohit Marble And Granite, our journey has been marked by
                                remarkable achievements and milestones that reflect our unwavering commitment to
                                excellence in the marble and granite industry. We take immense pride in these
                                accomplishments, which serve as a testament to our dedication, craftsmanship, and the
                                trust placed in us by our valued customers.</p>
                            <div class="row align-items-center gutter-y-30">
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="reliable-one__info">
                                        <div class="reliable-one__info__icon">
                                            <span class="icon-smiley"></span>
                                        </div>
                                        <div class="reliable-one__info__text">
                                            <h4 class="reliable-one__info__title">Happy clients</h4>
                                            <h5 class="reliable-one__info__total">1151</h5>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="reliable-one__ratings">
                                        <h4 class="reliable-one__ratings__title">clients rating:</h4>
                                        <div class="floens-ratings @@extraClassName">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="reliable-one__info">
                                        <div class="reliable-one__info__icon">
                                            <span class="icon-project"></span>
                                        </div>
                                        <div class="reliable-one__info__text">
                                            <h4 class="reliable-one__info__title">Projects</h4>
                                            <h5 class="reliable-one__info__total">255</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="reliable-one__info">
                                        <div class="reliable-one__info__icon">
                                            <span class="icon-marble"></span>
                                        </div>
                                        <div class="reliable-one__info__text">
                                            <h4 class="reliable-one__info__title">Marble Varieties</h4>
                                            <h5 class="reliable-one__info__total">200</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-4 col-sm-6">
                                    <div class="reliable-one__info">
                                        <div class="reliable-one__info__icon">
                                            <span class="icon-country"></span>
                                        </div>
                                        <div class="reliable-one__info__text">
                                            <h4 class="reliable-one__info__title" style="white-space: nowrap">Export
                                                in 11+ countries</h4>
                                            <h5 class="reliable-one__info__total">11</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-one section-space">
            <div class="contact-one__bg" style="background-image: url('assets/images/backgrounds/contact-bg-1.png');">
            </div><!-- /.contact-one__bg -->
            <div class="container">
                <div class="row gutter-y-40">
                    <div class="col-lg-6">
                        <div class="contact-one__content">
                            <div class="sec-title sec-title--border">

                                <h6 class="sec-title__tagline">contact</h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title">Reach out & <br> Connect with Us</h3>
                                <!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->


                            <p class="contact-one__text">Our vision is to provide innovative, independent Marble and
                                Granite
                                solutions that solve problems for homes, industries, and workspaces, as well as flooring
                                we would like in our own residences, work spaces,</p>
                            <div class="contact-one__info wow fadeInUp" data-wow-duration="1500ms"
                                data-wow-delay="00ms">
                                <div class="contact-one__info__bg"
                                    style="background-image: url('assets/images/shapes/contact-info-bg.png');"></div>
                                <div class="contact-one__info__content">
                                    <div class="contact-one__info__item side-by-side">
                                        <div class="contact-one__info__item__inner">
                                            <div class="contact-one__info__icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <p class="contact-one__info__text"><a
                                                    href="tel:+919145814566">9145814566</a></p>
                                        </div>
                                    </div>
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <div class="contact-one__info__item side-by-side">
                                        <div class="contact-one__info__item__inner">
                                            <div class="contact-one__info__icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                            <p class="contact-one__info__text"><a
                                                    href="tel:+917425824566">7425824566</a></p>
                                        </div>
                                    </div>
                                    <div class="contact-one__info__item">
                                        <div class="contact-one__info__item__inner">
                                            <div class="contact-one__info__icon">
                                                <span class="icon-paper-plane"></span>
                                            </div>
                                            <p class="contact-one__info__text"><a
                                                    href="mailto:mohitmarbleandgranites@gmail.com">mohitmarbleandgranites@gmail.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-one__info__item">
                                        <div class="contact-one__info__item__inner">
                                            <div class="contact-one__info__icon">
                                                <span class="icon-location"></span>
                                            </div>
                                            <address class="contact-one__info__text">Rico
                                                industrial area , kishangarh 305801</address>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/shapes/contact-shape-1-1.png" alt="contact image"
                                    class="contact-one__info__image">
                            </div><!-- /.contact-one__info -->
                        </div><!-- /.contact-one__content -->
                    </div><!-- /.col-xl-6 -->
                    <div class="col-lg-6">
                        <form class="contact-one__form contact-form-validated form-one wow fadeInUp"
                            data-wow-duration="1500ms" data-wow-delay="200ms" action="{{ Route('save-query') }}"
                            id="contact-form" method="POST">
                            @csrf
                            <div class="contact-one__form__bg"
                                style="background-image: url('assets/images/shapes/contact-info-form-bg.png');"></div>
                            <!-- /.contact-one__form__bg -->
                            <div class="contact-one__form__top">
                                <h2 class="contact-one__form__title">Get In Touch With Us And Enjoy <br>
                                    Top-Notch Support</h2><!-- /.contact-one__form__title -->
                            </div><!-- /.contact-one__form__top -->
                            <div class="form-one__group form-one__group--grid">

                                <div class="form-one__control form-one__control--input form-one__control--full">
                                    <input type="text" id="name" name="name" placeholder="Your name">
                                </div><!-- /.form-one__control form-one__control--full -->

                                <div class="form-one__control form-one__control--full">
                                    <input type="email" id="email" name="email" placeholder="your email">
                                </div><!-- /.form-one__control form-one__control--full -->

                                <div class="form-one__control form-one__control--full">
                                    <input type="text" id="phone" name="phone" placeholder="your phone">
                                </div><!-- /.form-one__control form-one__control--full -->

                                <div class="form-one__control form-one__control--full">
                                    <input type="text" id="subject" name="subject" placeholder="subject">
                                </div><!-- /.form-one__control form-one__control--full -->

                                <div class="form-one__control form-one__control--mesgae form-one__control--full">
                                    <textarea id="message" name="message" placeholder="Write message" class="fixed-textarea"></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->

                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="floens-btn">
                                        <span>send message</span>
                                        <i class="icon-right-arrow"></i>
                                    </button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                    </div><!-- /.col-xl-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <img src="assets/images/contact/contact-1-1.jpg" alt="contact image"
                class="contact-one__image-one wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="00ms">
            <img src="assets/images/contact/contact-1-2.jpg" alt="contact image"
                class="contact-one__image-two wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">
        </section><!-- /.contact-one section-space -->
        <!-- contact end -->

        <!-- testimonials start -->
        <section class="testimonials-three section-space">
            <div class="container">
                <div class="testimonials-three__wrapper">
                    <div class="sec-title sec-title--center">

                        <h6 class="sec-title__tagline">testimonial</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">What People are Talking <br> About us</h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->


                    <div class="testimonials-three__carousel floens-owl__carousel floens-owl__carousel--basic-nav owl-carousel owl-theme"
                        data-owl-options='{
					"items": 1,
					"margin": 0,
					"loop": true,
					"smartSpeed": 700,
					"nav": true,
					"navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
					"dots": false,
					"autoplay": 600,
					"responsive": {
						"0": {
							"items": 1,
							"margin": 10
						},
						"576": {
							"items": 1,
							"margin": 10
						},
						"768": {
							"items": 1,
							"margin": 10
						},
						"992": {
							"items": 1,
							"margin": 10
						},
						"1200": {
							"items": 1,
							"margin": 10
						}
					}
				}'>
                        <div class="item">
                            <div class="testimonials-card-three">
                                <div class="testimonials-card-three__info">
                                    <h4 class="testimonials-card-three__name" style="white-space: nowrap">Raghav
                                        Chopra
                                    </h4>
                                    <span class="testimonials-card-three__designation">Delhi</span>
                                </div>
                                <style>
                                    .testimonials-card-three__container {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        text-align: center;
                                    }

                                    .testimonials-card-three__info {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                    }

                                    .floens-ratings {
                                        display: flex;
                                        justify-content: center;
                                        margin-top: 10px;
                                    }

                                    .floens-ratings .icon-star {
                                        margin: 0 2px;
                                    }
                                </style>

                                <div class="floens-ratings @@extraClassName">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonials-card-three__text"><a href="{{ Route('about') }}"
                                        class="testimonials-card-three__text__highlight"></a><i>I recently had the
                                        pleasure of working with Good Marble for my kitchen renovation project, and I
                                        must say, their products and service exceeded all my expectations. From start to
                                        finish, my experience with Good Marble was nothing short of exceptional. </i>
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-card-three">
                                <div class="testimonials-card-three__info">
                                    <h4 class="testimonials-card-three__name" style="white-space: nowrap">Sandeep
                                        Patel
                                    </h4>
                                    <span class="testimonials-card-three__designation">Gujarat</span>
                                </div>
                                <style>
                                    .testimonials-card-three__container {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        text-align: center;
                                    }

                                    .testimonials-card-three__info {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                    }

                                    .floens-ratings {
                                        display: flex;
                                        justify-content: center;
                                        margin-top: 10px;
                                    }

                                    .floens-ratings .icon-star {
                                        margin: 0 2px;
                                    }
                                </style>

                                <div class="floens-ratings @@extraClassName">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonials-card-three__text"><a href="{{ Route('about') }}"
                                        class="testimonials-card-three__text__highlight"></a><i>I was amazed by their
                                        big selection of marble and granite. They had lots of beautiful colors and
                                        designs to choose from. The people there were really nice and helped me pick the
                                        perfect marble for my home. </i>
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-card-three">
                                <div class="testimonials-card-three__info">
                                    <h4 class="testimonials-card-three__name" style="white-space: nowrap">Venkatesh
                                        Patel
                                    </h4>
                                    <span class="testimonials-card-three__designation">Tamil</span>
                                </div>
                                <style>
                                    .testimonials-card-three__container {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        text-align: center;
                                    }

                                    .testimonials-card-three__info {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                    }

                                    .floens-ratings {
                                        display: flex;
                                        justify-content: center;
                                        margin-top: 10px;
                                    }

                                    .floens-ratings .icon-star {
                                        margin: 0 2px;
                                    }
                                </style>

                                <div class="floens-ratings @@extraClassName">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonials-card-three__text"><a href="{{ Route('about') }}"
                                        class="testimonials-card-three__text__highlight"></a><i>I just had the most
                                        amazing experience with Good Marble and Granite! They helped me turn my dream
                                        kitchen into a reality. </i>
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-card-three">
                                <div class="testimonials-card-three__info">
                                    <h4 class="testimonials-card-three__name" style="white-space: nowrap">Herry
                                    </h4>
                                    <span class="testimonials-card-three__designation">Austraila</span>
                                </div>
                                <style>
                                    .testimonials-card-three__container {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        text-align: center;
                                    }

                                    .testimonials-card-three__info {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                    }

                                    .floens-ratings {
                                        display: flex;
                                        justify-content: center;
                                        margin-top: 10px;
                                    }

                                    .floens-ratings .icon-star {
                                        margin: 0 2px;
                                    }
                                </style>

                                <div class="floens-ratings @@extraClassName">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonials-card-three__text"><a href="{{ Route('about') }}"
                                        class="testimonials-card-three__text__highlight"></a><i>I am
                                        thrilled to share my extraordinary experience with Good Marble and Granite, a
                                        company that truly,knows how to deliver excellence. My recent home renovation
                                        project involved revamping my living spaces with the luxurious touch of marble
                                        and granite, and I couldn't have chosen a better partner for this endeavor.</i>
                                </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-card-three">
                                <div class="testimonials-card-three__info">
                                    <h4 class="testimonials-card-three__name" style="white-space: nowrap">John Roth
                                    </h4>
                                    <span class="testimonials-card-three__designation">Germany</span>
                                </div>
                                <style>
                                    .testimonials-card-three__container {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                        text-align: center;
                                    }

                                    .testimonials-card-three__info {
                                        display: flex;
                                        flex-direction: column;
                                        align-items: center;
                                    }

                                    .floens-ratings {
                                        display: flex;
                                        justify-content: center;
                                        margin-top: 10px;
                                    }

                                    .floens-ratings .icon-star {
                                        margin: 0 2px;
                                    }
                                </style>

                                <div class="floens-ratings @@extraClassName">
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                    <span class="icon-star"></span>
                                </div>
                                <p class="testimonials-card-three__text"><a href="{{ Route('about') }}"
                                        class="testimonials-card-three__text__highlight"></a><i>Right from the start,
                                        their expertise was evident. The variety of marble and granite they offered for
                                        such a big project was impressive. The team was knowledgeable and helped us
                                        choose the perfect materials to elevate the building's aesthetics. </i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>


    <!-- team start -->
    <section class="team-two section-space-two">
        <div class="team-two__bg" style="background-image: url(assets/images/backgrounds/team-bg-2-1.png);"></div>
        <!-- /.team-two__bg -->
        <div class="container">
            <div class="team-two__top">
                <div class="row gutter-y-50 align-items-center">
                    <div class="col-lg-6">
                        <div class="sec-title @@extraClassName">

                            <h6 class="sec-title__tagline">our team</h6><!-- /.sec-title__tagline -->

                            <h3 class="sec-title__title">Meet our Board Team <br> Members</h3>
                        </div>


                    </div>
                    <div class="col-lg-6">
                        <div class="team-two__top__right">
                            {{-- <p class="team-two__top__text">Luctus enim vehicula nec. Ut auctor lobortis sapien et
                                eleifend. Integer ac orci vitae neque porttitor efficitur ac vestibulum orci. Sed
                                tincidunt magna sed leo luctus,</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center gutter-y-60">
                <div class="col-lg-8 col-md-7">
                    <div class="team-two__item team-two__item--one wow fadeInUp" data-wow-duration="1500ms">
                        <div class="row gutter-y-30 align-items-center">
                            <div class="team-two__img-col col-sm-12">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-1-1.jpg" alt="Alfredo K. Wilson">
                                </div><!-- /.team-two__img -->
                            </div><!-- /.team-two__img-col col-sm-12 -->
                            <div class="col-lg-7">
                                <div class="team-two__identity">
                                    <h4 class="team-two__name"><a href="{{ Route('team_details') }}">Alfredo K.
                                            Wilson</a>
                                    </h4><!-- /.team-two__name -->
                                    <span class="team-two__designation">marketing
                                        manager</span><!-- /.team-two__designation -->
                                </div><!-- /.team-two__identity -->
                            </div><!-- /.col-lg-7 -->
                            <div class="col-lg-5">
                                <div class="team-two__social">
                                    <span class="team-two__social__share icon-share"></span>
                                    <div class="team-two__social__list">
                                        <a href="https://facebook.com/">
                                            <i class="icon-facebook" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://twitter.com/">
                                            <i class="icon-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://instagram.com/">
                                            <i class="icon-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                        <a href="https://youtube.com/">
                                            <i class="icon-youtube" aria-hidden="true"></i>
                                            <span class="sr-only">Youtube</span>
                                        </a>
                                    </div><!-- /.team-two__social__list -->
                                </div><!-- /.team-two__social -->
                            </div><!-- /.col-lg-5 -->
                        </div><!-- /.row -->
                    </div><!-- /.team-two__item -->
                    <div class="team-two__item team-two__item--two wow fadeInUp" data-wow-duration="1500ms">
                        <div class="row gutter-y-30 align-items-center">
                            <div class="team-two__img-col col-sm-12">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-1-2.jpg" alt="Anthony B. Castillo">
                                </div><!-- /.team-two__img -->
                            </div><!-- /.team-two__img-col col-sm-12 -->
                            <div class="col-lg-7">
                                <div class="team-two__identity">
                                    <h4 class="team-two__name"><a href="{{ Route('team_details') }}">Anthony B.
                                            Castillo</a>
                                    </h4><!-- /.team-two__name -->
                                    <span class="team-two__designation">marketing
                                        manager</span><!-- /.team-two__designation -->
                                </div><!-- /.team-two__identity -->
                            </div><!-- /.col-lg-7 -->
                            <div class="col-lg-5">
                                <div class="team-two__social">
                                    <span class="team-two__social__share icon-share"></span>
                                    <div class="team-two__social__list">
                                        <a href="https://facebook.com/">
                                            <i class="icon-facebook" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://twitter.com/">
                                            <i class="icon-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://instagram.com/">
                                            <i class="icon-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                        <a href="https://youtube.com/">
                                            <i class="icon-youtube" aria-hidden="true"></i>
                                            <span class="sr-only">Youtube</span>
                                        </a>
                                    </div><!-- /.team-two__social__list -->
                                </div><!-- /.team-two__social -->
                            </div><!-- /.col-lg-5 -->
                        </div><!-- /.row -->
                    </div><!-- /.team-two__item -->
                    <div class="team-two__item team-two__item--three wow fadeInUp" data-wow-duration="1500ms">
                        <div class="row gutter-y-30 align-items-center">
                            <div class="team-two__img-col col-sm-12">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-1-3.jpg" alt="Anthony B. Castillo">
                                </div><!-- /.team-two__img -->
                            </div><!-- /.team-two__img-col col-sm-12 -->
                            <div class="col-lg-7">
                                <div class="team-two__identity">
                                    <h4 class="team-two__name"><a href="{{ Route('team_details') }}">David G.
                                            Harpster</a>
                                    </h4><!-- /.team-two__name -->
                                    <span class="team-two__designation">marketing
                                        manager</span><!-- /.team-two__designation -->
                                </div><!-- /.team-two__identity -->
                            </div><!-- /.col-lg-7 -->
                            <div class="col-lg-5">
                                <div class="team-two__social">
                                    <span class="team-two__social__share icon-share"></span>
                                    <div class="team-two__social__list">
                                        <a href="https://facebook.com/">
                                            <i class="icon-facebook" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://twitter.com/">
                                            <i class="icon-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://instagram.com/">
                                            <i class="icon-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                        <a href="https://youtube.com/">
                                            <i class="icon-youtube" aria-hidden="true"></i>
                                            <span class="sr-only">Youtube</span>
                                        </a>
                                    </div><!-- /.team-two__social__list -->
                                </div><!-- /.team-two__social -->
                            </div><!-- /.col-lg-5 -->
                        </div><!-- /.row -->
                    </div><!-- /.team-two__item -->
                    <div class="team-two__item team-two__item--four wow fadeInUp" data-wow-duration="1500ms">
                        <div class="row gutter-y-30 align-items-center">
                            <div class="team-two__img-col col-sm-12">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-1-4.jpg" alt="Harriet R. Anderson">
                                </div><!-- /.team-two__img -->
                            </div><!-- /.team-two__img-col col-sm-12 -->
                            <div class="col-lg-7">
                                <div class="team-two__identity">
                                    <h4 class="team-two__name"><a href="{{ Route('team_details') }}">Harriet R.
                                            Anderson</a>
                                    </h4><!-- /.team-two__name -->
                                    <span class="team-two__designation">marketing
                                        manager</span><!-- /.team-two__designation -->
                                </div><!-- /.team-two__identity -->
                            </div><!-- /.col-lg-7 -->
                            <div class="col-lg-5">
                                <div class="team-two__social">
                                    <span class="team-two__social__share icon-share"></span>
                                    <div class="team-two__social__list">
                                        <a href="https://facebook.com/">
                                            <i class="icon-facebook" aria-hidden="true"></i>
                                            <span class="sr-only">Facebook</span>
                                        </a>
                                        <a href="https://twitter.com/">
                                            <i class="icon-twitter" aria-hidden="true"></i>
                                            <span class="sr-only">Twitter</span>
                                        </a>
                                        <a href="https://instagram.com/">
                                            <i class="icon-instagram" aria-hidden="true"></i>
                                            <span class="sr-only">Instagram</span>
                                        </a>
                                        <a href="https://youtube.com/">
                                            <i class="icon-youtube" aria-hidden="true"></i>
                                            <span class="sr-only">Youtube</span>
                                        </a>
                                    </div><!-- /.team-two__social__list -->
                                </div><!-- /.team-two__social -->
                            </div><!-- /.col-lg-5 -->
                        </div><!-- /.row -->
                    </div><!-- /.team-two__item -->
                </div><!-- /.col-lg-8 col-md-7 -->
                <div class="col-lg-4 col-md-5 team-two__images-col wow fadeInUp" data-wow-duration="1500ms"
                    data-wow-delay="200ms">
                    <div class="team-two__images">
                        <div class="team-two__image team-two__image--one">
                            <div class="team-two__image__inner">
                                <img src="assets/images/team/team-1-1.jpg" alt="Alfredo K. Wilson">
                            </div><!-- /.team-two__image__inner -->
                        </div><!-- /.team-two__image -->
                        <div class="team-two__image team-two__image--two">
                            <div class="team-two__image__inner">
                                <img src="assets/images/team/team-1-2.jpg" alt="Anthony B. Castillo">
                            </div><!-- /.team-two__image__inner -->
                        </div><!-- /.team-two__image -->
                        <div class="team-two__image team-two__image--three">
                            <div class="team-two__image__inner">
                                <img src="assets/images/team/team-1-3.jpg" alt="David G. Harpster">
                            </div><!-- /.team-two__image__inner -->
                        </div><!-- /.team-two__image -->
                        <div class="team-two__image team-two__image--four">
                            <div class="team-two__image__inner">
                                <img src="assets/images/team/team-1-4.jpg" alt="Harriet R. Anderson">
                            </div><!-- /.team-two__image__inner -->
                        </div><!-- /.team-two__image -->
                    </div><!-- /.team-two__images -->
                </div><!-- /.col-lg-4 col-md-5 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.team-two section-space-two -->
    <!-- team end -->

    <!-- blog start -->
    <section class="blog-three section-space-two">
        <div class="container">
            <div class="sec-title sec-title--center">

                <h6 class="sec-title__tagline">news room</h6><!-- /.sec-title__tagline -->

                <h3 class="sec-title__title">See Latest News <br> from the Blog Posts</h3>
                <!-- /.sec-title__title -->
            </div><!-- /.sec-title -->


            <div class="row gutter-y-30">
                @foreach ($data as $blogs)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card blog-card--three wow fadeInUp" data-wow-duration='1500ms'
                            data-wow-delay='000ms'>
                            <div class="blog-card__image">
                                <img src="{{ asset('BlogImages/' . $blogs->image) }}" alt="">
                                <a href="{{ Route('blog_detailsright', ['id' => $blogs->id]) }}"
                                    class="blog-card__image__link"><span class="sr-only">{{ $blogs->title }}</span>
                                    <!-- /.sr-only --></a>
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__date">
                                <span class="blog-card__date__day">{{ $blogs->date }}</span>
                                <span class="blog-card__date__month">{{ $blogs->month }}</span>
                            </div><!-- /.blog-card__date -->
                            <div class="blog-card__content">
                                <h3 class="blog-card__title"><a
                                        href="{{ Route('blog_detailsright', ['id' => $blogs->id]) }}">{{ $blogs->title }}</a>
                                </h3><!-- /.blog-card__title -->

                            </div><!-- /.blog-card__content -->
                        </div><!-- /.blog-card -->
                    </div>
                @endforeach
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-three section-space-two -->
    <!-- blog end -->

    <!-- client carousel start -->
    <div class="client-carousel @@extraClassName">
        <div class="container">
            <div class="client-carousel__one floens-owl__carousel owl-theme owl-carousel"
                data-owl-options='{
            "items": 5,
            "margin": 65,
            "smartSpeed": 700,
            "loop":true,
            "autoplay": 6000,
            "nav":false,
            "dots":false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "responsive":{
                "0":{
                    "items": 2,
                    "margin": 30
                },
                "500":{
                    "items": 3,
                    "margin": 40
                },
                "768":{
                    "items": 4,
                    "margin": 50
                },
                "992":{
                    "items": 5,
                    "margin": 70
                },
                "1200":{
                    "items": 6,
                    "margin": 149
                }
            }
            }'>
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="brand">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-1.png" alt="brand">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-2.png" alt="brand">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-3.png" alt="brand">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-4.png" alt="brand">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-5.png" alt="brand">
                </div><!-- /.owl-slide-item-->
                <div class="client-carousel__one__item">
                    <img src="assets/images/resources/brand-1-6.png" alt="brand">
                </div><!-- /.owl-slide-item-->
            </div><!-- /.thm-owl__slider -->
        </div><!-- /.container -->
    </div><!-- /.client-carousel -->
    <!-- client carousel end -->

    <footer class="main-footer">
        <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);">
        </div>
        <div class="main-footer__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                        <div class="footer-widget footer-widget--about">
                            <a href="{{ Route('index_4') }}" class="footer-widget__logo">
                                <img src="assets/images/Projects/Screenshot_2024-05-15_181714-removebg-preview.png"
                                    width="200px" height="auto" alt="Floens HTML Template">
                            </a>
                            <p class="footer-widget__about-text">Our commitment to exquisite craftsmanship ensures
                                that every project is meticulously executed, resulting in breathtaking installations
                                that stand the test of time.</p>
                            <form action="#" data-url="MAILCHIMP_FORM_URL"
                                class="footer-widget__newsletter mc-form">
                                <input type="text" name="EMAIL" placeholder="enter email">
                                <button type="submit" class="icon-right-arrow">
                                    <span class="sr-only">submit</span>
                                </button>
                            </form>
                            <div class="mc-form__response"></div>
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-xl-4 col-lg-6 -->
                    <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="200ms">
                        <div class="footer-widget footer-widget--links footer-widget--links-one">
                            <div class="footer-widget__top">
                                <div class="footer-widget__title-box"></div><!-- /.footer-widget__title-box -->
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                            </div><!-- /.footer-widget__top -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="{{ Route('about') }}">About Us</a></li>
                                <li><a href="{{ Route('services') }}">Services</a></li>
                                <li><a href="{{ Route('team') }}">Our Projects</a></li>
                                {{-- <li><a href="{{ Route('blog_gridright') }}">Recent News</a></li> --}}
                                <li><a href="{{ Route('contact') }}">Contact</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-xl-2 col-lg-3 col-md-3 col-sm-6 -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="400ms">
                        <div class="footer-widget footer-widget--links footer-widget--links-two">
                            <div class="footer-widget__top">
                                <div class="footer-widget__title-box"></div><!-- /.footer-widget__title-box -->
                                <h2 class="footer-widget__title">Services</h2><!-- /.footer-widget__title -->
                            </div><!-- /.footer-widget__top -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="{{ Route('serviced_industrial_flooring') }}">Indian Marble</a></li>
                                <li><a href="{{ Route('serviced_tiling_concrete') }}">Granite</a></li>
                                <li><a href="{{ Route('serviced_carpets_rugs') }}">Itailian Marble</a></li>
                                <li><a href="{{ Route('serviced_oak_flooring') }}">Elevation</a></li>
                                <li><a href="{{ Route('serviced_vinyl_plank') }}">Sand Stone</a></li>
                                <li><a href="{{ Route('serviced_vein_patterns') }}">Export Services</a></li>
                            </ul><!-- /.list-unstyled footer-widget__links -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-xl-3 col-lg-3 col-md-4 col-sm-6 -->
                    <div class="col-xl-3 col-lg-6 col-md-5 wow fadeInUp" data-wow-duration="1500ms"
                        data-wow-delay="600ms">
                        <div class="footer-widget footer-widget--contact">
                            <div class="footer-widget__top">
                                <div class="footer-widget__title-box"></div><!-- /.footer-widget__title-box -->
                                <h2 class="footer-widget__title">Get inTouch</h2><!-- /.footer-widget__title -->
                            </div><!-- /.footer-widget__top -->
                            <ul class="list-unstyled footer-widget__info">
                                <li><span class="icon-location"></span><a href="https://www.google.com/maps">Riico
                                        industrial area, kishangarh 305801</a>
                                </li>
                                <li><span class="icon-paper-plane"></span> <a
                                        href="mailto:mohitmarbleandgranites@gmail.com">mohitmarbleandgranites<br>@gmail.com
                                        </p></a>
                                </li>
                                <li><span class="icon-phone-call"></span> <a href="tel:+9156980036420">9145814566<br>
                                        7425824566</a></li>
                            </ul>
                        </div>
                    </div><!-- /.col-xl-3 col-lg-6 col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__top -->
        <div class="main-footer__bottom">
            <div class="container">
                <div class="main-footer__bottom__inner">
                    <div class="row gutter-y-30 align-items-center">
                        <div class="col-md-5 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                            <div class="main-footer__social floens-social">
                                <a href="https://facebook.com/">
                                    <i class="icon-facebook" aria-hidden="true"></i>
                                    <span class="sr-only">Facebook</span>
                                </a>
                                <a href="https://twitter.com/">
                                    <i class="icon-twitter" aria-hidden="true"></i>
                                    <span class="sr-only">Twitter</span>
                                </a>
                                <a href="https://instagram.com/">
                                    <i class="icon-instagram" aria-hidden="true"></i>
                                    <span class="sr-only">Instagram</span>
                                </a>
                                <a href="https://youtube.com/">
                                    <i class="icon-youtube" aria-hidden="true"></i>
                                    <span class="sr-only">Youtube</span>
                                </a>
                            </div><!-- /.main-footer__social -->
                        </div><!-- /.col-md-5 -->
                        <div class="col-md-7 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="main-footer__bottom__copyright">
                                <p class="main-footer__copyright">
                                    &copy; Copyright <span class="dynamic-year"></span> MMG Made with ❤️ by
                                    <a href="https://www.intouchsoftware.co.in/">InTouch Software Solutions </a>All
                                    rights reserved.
                                </p>
                            </div><!-- /.main-footer__bottom__copyright -->
                        </div><!-- /.col-md-7 -->
                    </div><!-- /.row -->
                </div><!-- /.main-footer__inner -->
            </div><!-- /.container -->
        </div><!-- /.main-footer__bottom -->
    </footer>
    </div>
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{ Route('index_2') }}" aria-label="logo image"><img src="assets/images/logo-light.png"
                        width="155" alt="logo-light" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@floens.com">needhelp@floens.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+9156980036420">+91 5698 0036 420</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://facebook.com/">
                    <i class="icon-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/">
                    <i class="icon-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://instagram.com/">
                    <i class="icon-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://youtube.com/">
                    <i class="icon-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="floens-btn">
                    <span class="icon-search"></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay sidebar-btn__toggler"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <span class="sidebar-one__close sidebar-btn__toggler"><i class="fa fa-times"></i></span>
            <div class="sidebar-one__logo sidebar-one__item">
                <a href="{{ Route('index_2') }}" aria-label="logo image"><img src="assets/images/logo-light.png"
                        width="123" alt="logo-dark" /></a>
            </div><!-- /.sidebar-one__logo -->
            <div class="sidebar-one__about sidebar-one__item">
                <p class="sidebar-one__about__text">Tiles company, also known as a tile manufacturer or distributor,
                    specializes in the production and distri</p>
            </div><!-- /.sidebar-one__about -->
            <div class="sidebar-one__info sidebar-one__item">
                <h4 class="sidebar-one__title">Information</h4>
                <ul class="sidebar-one__info__list">
                    <li><span class="icon-location-2"></span>
                        <address>Rico industrial area , kishangarh 305801</address>
                    </li>
                    <li><span class="icon-paper-plane"></span> <a
                            href="mailto:needhelp@company.com">mohitmarbleandgranites@gmail.com</a></li>
                    <li><span class="icon-phone-call"></span> <a href="tel:+9156980036420">9145814566,
                            7425824566</a>
                    </li>
                </ul><!-- /.sidebar-one__info__list -->
            </div><!-- /.sidebar-one__info -->
            <div class="sidebar-one__social floens-social sidebar-one__item">
                <a href="https://facebook.com/">
                    <i class="icon-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://twitter.com/">
                    <i class="icon-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://instagram.com/">
                    <i class="icon-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
                <a href="https://youtube.com/">
                    <i class="icon-youtube" aria-hidden="true"></i>
                    <span class="sr-only">Youtube</span>
                </a>
            </div><!-- /sidebar-one__social -->
            <div class="sidebar-one__newsletter sidebar-one__item">
                <label class="sidebar-one__title" for="sidebar-email">Newsletter Subscribe</label>
                <form action="#" class="sidebar-one__newsletter__inner mc-form" data-url="MAILCHIMP_FORM_URL">
                    <input type="email" name="sidebar-email" id="sidebar-email"
                        class="sidebar-one__newsletter__input" placeholder="Email Address">
                    <button type="submit" class="sidebar-one__newsletter__btn"><span class="icon-email"
                            aria-hidden="true"></span></button>
                </form>
                <div class="mc-form__response"></div><!-- /.mc-form__response -->
            </div><!-- /.sidebar-one__form -->
        </div><!-- /.sidebar__content -->
    </aside>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__text">back top</span>
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
    </a>

    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendors/swiper/js/swiper-bundle.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <script src="assets/vendors/slick/slick.min.js"></script>
    <!-- template js -->
    <script src="assets/js/floens.js"></script>
</body>


<!-- Mirrored from bracketweb.com/floens-html/{{ Route('index_3') }} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 07:05:32 GMT -->

</html>
