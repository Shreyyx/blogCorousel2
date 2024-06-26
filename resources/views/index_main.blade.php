<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bracketweb.com/floens-html/{{ Route('about') }} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 07:05:35 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mohit Marbles & Granites</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/about/favicon-logo.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/about/favicon-logo.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/about/favicon-logo.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <meta name="description"
        content="Floens is a modern HTML Template for Beauty, Spa Centers, Hair, Nail, Spa Salons & Cosmetic shops. The template perfectly fits Beauty Spa, Salon, and Wellness Treatments websites and businesses." />

    <!-- fonts -->
    <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com/') }}">
    <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com/') }}" crossorigin>
    <link
        href="{{ asset('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700;9..40,900;9..40,1000&amp;display=swap') }}"
        rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500&amp;display=swap') }}"
        rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Quicksand:wght@700&amp;display=swap') }}"
        rel="stylesheet">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Manrope:wght@500&amp;display=swap') }}"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/floens-icons/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick/slick.css') }}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/floens.css') }}" />
    @yield('csscontent')
</head>
<div class="topbar-one">
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
                    <address>Riico industrial area , kishangarh 305801</address>
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
</div>
<header class="main-header main-header--two sticky-header sticky-header--normal">
    <div class="container-fluid">
        <div class="main-header__inner">
            <div class="main-header__left">
                <div class="main-header__logo">
                    <a href="{{ Route('index_2') }}">
                        <img src="assets/images/Projects/Screenshot_2024-05-15_181714-removebg-preview.png" alt="Floens HTML" width="125">
                    </a>
                </div><!-- /.main-header__logo -->
                <nav class="main-header__nav main-menu">
                    <ul class="main-menu__list">


                        <li class="megamenu megamenu-clickable megamenu-clickable--toggler">
                            {{-- <a href="{{ Route('index_4') }}">Demos</a> --}}
                            <ul>
                                <li>
                                    <div class="megamenu-popup">
                                        <a href="#" class="megamenu-clickable--close"><span
                                                class="icon-close"></span></a>
                                        <!-- /.megamenu-clickable--close -->
                                        <div class="megamenu-popup__content">
                                            <div class="demo-one">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="{{ asset('assets/images/landing/home-1.jpg') }}"
                                                                        alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="{{ Route('index_4') }}"
                                                                            class="floens-btn demo-one__btn">
                                                                            <span>Multi Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                        <a href="{{ Route('index_onepage') }}"
                                                                            class="floens-btn demo-one__btn">
                                                                            <span>One Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="{{ Route('index_4') }}">Home
                                                                            Page 01</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="{{ asset('assets/images/landing/home-2.jpg') }}"
                                                                        alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="{{ Route('index_3') }}"
                                                                            class="floens-btn demo-one__btn">
                                                                            <span>Multi Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                        <a href="{{ Route('index_4onepage') }}"
                                                                            class="floens-btn demo-one__btn">
                                                                            <span>One Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="{{ Route('index_3') }}">Home
                                                                            Page 02</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="{{ asset('assets/images/landing/home-3.jpg') }}"
                                                                        alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="{{ Route('index_4') }}"
                                                                            class="floens-btn demo-one__btn">
                                                                            <span>Multi Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                        <a href="{{ Route('index_3onepage') }}"
                                                                            class="floens-btn demo-one__btn">
                                                                            <span>One Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="{{ Route('index_4') }}">Home
                                                                            Page 03</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="{{ asset('assets/images/landing/home-dark.jpg') }}"
                                                                        alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="{{ Route('index_dark') }}"
                                                                            class="floens-btn demo-one__btn">
                                                                            <span>View Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="{{ Route('index_dark') }}">Home
                                                                            Dark</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="{{ asset('assets/images/landing/home-boxed.jpg') }}"
                                                                        alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="{{ Route('index_boxed') }}"
                                                                            class="floens-btn demo-one__btn">
                                                                            <span>View Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="{{ Route('index_boxed') }}">Home
                                                                            Boxed</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                        <div class="col-md-6 col-lg-4">
                                                            <div class="demo-one__card">
                                                                <div class="demo-one__image">
                                                                    <img src="{{ asset('assets/images/landing/home-rtl.jpg') }}"
                                                                        alt="">
                                                                    <div class="demo-one__btns">
                                                                        <a href="{{ Route('index_rtl') }}"
                                                                            class="floens-btn demo-one__btn">
                                                                            <span>View Page</span>
                                                                        </a><!-- /.thm-btn demo-one__btn -->
                                                                    </div><!-- /.demo-one__btns -->
                                                                </div><!-- /.demo-one__image -->
                                                                <div class="demo-one__content">
                                                                    <h3 class="demo-one__title">
                                                                        <a href="{{ Route('index_4') }}">Home
                                                                            RTL</a>
                                                                    </h3><!-- /.demo-one__title -->
                                                                </div><!-- /.demo-one__content -->
                                                            </div><!-- /.demo-one__card -->
                                                        </div><!-- /.col-md-6 col-lg-3 -->
                                                    </div><!-- /.row -->
                                                </div><!-- /.container -->
                                            </div><!-- /.demos-one -->
                                        </div><!-- /.megamenu-popup__content -->
                                    </div><!-- /.megamenu-popup -->
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown megamenu">
                            <a href="{{ Route('index_4') }}">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ Route('about') }}">About</a>
                            <ul>
                                <li><a href="{{ Route('team') }}">Our Team</a></li>
                                <li>
                                    <a href="{{ Route('gallery_grid') }}">Gallery</a>
                                </li>
                                <li><a href="{{ Route('faq') }}">FAQS</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#">Services</a>
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
                        <li>
                            <a href="{{ Route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav><!-- /.main-header__nav -->
            </div><!-- /.main-header__left -->
            <div class="main-header__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                <a href="{{ Route('cart') }}" class="main-header__cart">
                    {{-- <i class="icon-cart" aria-hidden="true"></i> --}}
                    <span class="sr-only">Cart</span>
                </a><!-- /.shopping card -->
                <a href="#" class="search-toggler main-header__search">
                    {{-- <i class="icon-search" aria-hidden="true"></i> --}}
                    <span class="sr-only">Search</span>
                </a><!-- /.search-toggler -->
                <a href="{{ Route('contact') }}" class="floens-btn main-header__btn">
                    <span>get a quote</span>
                    <i class="icon-right-arrow"></i>
                </a><!-- /.thm-btn main-header__btn -->
                <button class="main-header__sidebar-btn sidebar-btn__toggler">
                    <span class="main-header__sidebar-btn__box"></span><!-- /.main-header__sidebar-btn__box -->
                    <span class="main-header__sidebar-btn__box"></span><!-- /.main-header__sidebar-btn__box -->
                    <span class="main-header__sidebar-btn__box"></span><!-- /.main-header__sidebar-btn__box -->
                </button><!-- /.main-header__sidebar-btn -->
            </div><!-- /.main-header__right -->
        </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
</header>
@yield('content')
<footer class="main-footer">
    <div class="main-footer__bg" style="background-image: url(assets/images/shapes/footer-bg-1-1.png);">
    </div>
    <div class="main-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                    <div class="footer-widget footer-widget--about">
                        <a href="{{ Route('index_4') }}" class="footer-widget__logo">
                            <img src="{{ asset('assets/images/Projects/Screenshot_2024-05-15_181714-removebg-preview.png') }}"
                                width="200px" height="auto" alt="Floens HTML Template">
                        </a>
                        <p class="footer-widget__about-text">Our commitment to exquisite craftsmanship ensures
                            that every project is meticulously executed, resulting in breathtaking installations
                            that stand the test of time.</p>
                        <form action="#" data-url="MAILCHIMP_FORM_URL" class="footer-widget__newsletter mc-form">
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
                            <li><a href="{{ Route('services_grid') }}">Services</a></li>
                            <li><a href="{{ Route('work') }}">Our Projects</a></li>
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
                                    href="mailto:mohitmarbleandgranites@gmail.com">mohitmarbleandgranites<br>@gmail.com</a>
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
                                &copy; Copyright<span class="dynamic-year"></span> MMG Made with ❤️ by <a
                                    href="InTouch Software Solutions">InTouch
                                    Software Solutions</a> All rights reserved.
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
            <a href="{{ Route('index_4') }}" aria-label="logo image"><img src="{{ asset('assets/images/Projects/Screenshot_2024-05-15_181714-removebg-preview.png') }}"
                    width="155" alt="logo-light" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:mohitmarbleandgranites@gmail.com">mohitmarbleandgranites@gmail.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:9145814566,
                7425824566">9145814566, 7425824566</a>
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
        <div class="sidebar-one__logo sidebar-one__item" style="margin-bottom: 20px;">
            <a href="{{ Route('index_4') }}" aria-label="logo image"><img src="{{ asset('assets/images/Projects/Screenshot_2024-05-15_181714-removebg-preview.png') }}"
                    width="123" alt="logo-dark" /></a>
        </div><!-- /.sidebar-one__logo -->
        <div class="sidebar-one__about sidebar-one__item">
            <p class="sidebar-one__about__text"style="margin-bottom: 20px;" >Our commitment to exquisite craftsmanship ensures that every project is meticulously executed, resulting in breathtaking installations that stand the test of time.</p>
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
        <div class="sidebar-one__social floens-social sidebar-one__item" style="margin-top: 10px;">
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
                <input type="email" name="sidebar-email" id="sidebar-email" class="sidebar-one__newsletter__input"
                    placeholder="Email Address">
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

<script src="{{ asset('assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/vendors/swiper/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('assets/vendors/imagesloaded/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('assets/vendors/slick/slick.min.js') }}"></script>
<!-- template js -->
<script src="{{ asset('assets/js/floens.js') }}"></script>
</body>


<!-- Mirrored from bracketweb.com/floens-html/{{ Route('about') }} by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 May 2024 07:05:41 GMT -->
@yield('jscontent')

</html>
