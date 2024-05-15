@extends('index_main')
@section('csscontent')
@endsection
@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    </head>

    <body class="custom-cursor">

        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>

        <div class="preloader">
            <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
        </div>
        <!-- /.preloader -->
        <div class="page-wrapper">
            <section class="page-header">
                <div class="page-header__bg"
                    style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div>
                <!-- /.page-header__bg -->
                <div class="container">
                    <h2 class="page-header__title">Indian Marble</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>services</span></li>
                        <li><span>Indian Marble</span></li>
                    </ul>
                </div>
            </section>

            <section class="service-details section-space">
                <div class="container">
                    <div class="row gutter-y-30">
                        <div class="col-md-12 col-lg-4">
                            <div class="service-sidebar">
                                <div class="service-sidebar__info service-sidebar__single">
                                    <ul class="list-unstyled service-sidebar__nav wow fadeInLeft"
                                        data-wow-duration="1500ms">
                                        <li><a href="{{ Route('serviced_industrial_flooring') }}">Indian Marble</a>
                                        </li>
                                        <li><a href="{{ Route('serviced_tiling_concrete') }}">Granite</a></li>
                                        <li><a href="{{ Route('serviced_carpets_rugs') }}">Italian Marble</a></li>
                                        <li><a href="{{ Route('serviced_oak_flooring') }}">Elevation</a></li>
                                        <li><a href="{{ Route('serviced_vinyl_plank') }}">Sand Stone</a></li>
                                        <li><a href="{{ Route('serviced_vein_patterns') }}">Export Service</a></li>
                                    </ul><!-- /.list-unstyled service-sidebar__nav -->
                                    <div class="service-sidebar__contact wow fadeInLeft" data-wow-duration="1500ms"
                                        data-wow-delay="100ms"
                                        style="background-image: url('assets/images/resources/service-sidebar-contact-bg-1.jpg');">
                                        <div class="service-sidebar__contact__bg">
                                            <div class="service-sidebar__contact__bg__inner"
                                                style="background-image: url('assets/images/resources/service-sidebar-contact-bg-2.png');">
                                            </div><!-- /.service-sidebar__contact__bg__inner -->
                                        </div><!-- /.service-sidebar__contact__bg -->
                                        <div class="service-sidebar__contact__inner">
                                            <div class="service-sidebar__contact__icon">
                                                <span class="icon-telephone"></span>
                                            </div><!-- /.service-sidebar__contact__icon -->
                                            <div class="service-sidebar__contact__content">
                                                {{-- <h4 class="service-sidebar__contact__time">MON-SAT 8:00-9:00</h4> --}}
                                                <!-- /.service-sidebar__contact__time -->
                                                <h4 class="service-sidebar__contact__number">
                                                    <a href="tel:+915698036420">+9145814566</a>
                                                </h4><!-- /.service-sidebar__contact__number -->
                                            </div><!-- /.service-sidebar__contact__content -->
                                        </div><!-- /.service-sidebar__contact__inner -->
                                    </div><!-- /.service-sidebar__contact -->
                                </div><!-- /.service-sidebar__info service-sidebar__single -->
                                <div class="service-sidebar__single wow fadeInLeft" data-wow-duration="1500ms"
                                    data-wow-delay="200ms">
                                    <div class="service-sidebar__company">
                                        <a href="#" class="service-sidebar__company__btn">
                                            <span class="icon-download"></span>
                                        </a><!-- /.service-sidebar__company__btn -->
                                        <h4 class="service-sidebar__company__title">company profile</h4>
                                        <!-- /.service-sidebar__company__title -->
                                    </div><!-- /.service-sidebar__company -->
                                    <div class="service-sidebar__company">
                                        <a href="#" class="service-sidebar__company__btn">
                                            <span class="icon-download"></span>
                                        </a><!-- /.service-sidebar__company__btn -->
                                        <h4 class="service-sidebar__company__title">company brochure</h4>
                                        <!-- /.service-sidebar__company__title -->
                                    </div><!-- /.service-sidebar__company -->
                                </div><!-- /.service-sidebar__single -->
                            </div><!-- /.sidebar -->
                        </div><!-- /.col-md-12 col-lg-4 -->
                        <div class="col-md-12 col-lg-8">
                            <div class="service-details__content">
                                <div class="service-details__inner">
                                    <div class="service-details__thumbnail wow fadeInUp" data-wow-duration="1500ms"
                                        data-wow-delay="00ms">
                                        {{-- <img src="assets/images/services/service-d-1.jpg" alt="Tiling & concrete"> --}}
                                    </div><!-- /.service-details__thumbnail -->
                                    <h3 class="service-details__title">INDIAN MARBLE</h3>
                                    <hr>
                                </div>
                                <div class="service-details__inner-two">
                                    <h3 class="service-details__sub-title">WE HAVE DIFFERENT VARITIES OF INDIAN MARBLE</h3>
                                </div>

                                <style>
                                    <style>.card {
                                        height: 100%;
                                    }

                                    .card-img-top {
                                        height: 200px;
                                        /* Set a fixed height for the images */
                                        object-fit: cover;
                                        /* Ensure the images cover the whole space */
                                    }

                                    .card-title {
                                        font-size: 1.25rem;
                                        /* Set a consistent font size for the titles */
                                    }

                                    .card-body {
                                        display: flex;
                                        flex-direction: column;
                                        justify-content: space-between;
                                    }

                                    .card-body p {
                                        margin-bottom: 0;
                                        /* Remove default margin for paragraphs */
                                    }
                                </style>



                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                    <div class="col">
                                        <div class="card">
                                            <img src="assets\images\Projects\Indian-Marble1.png" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Aagariya White Marble</h5>
                                                <a href="{{ Route('contact') }}" style="text-decoration: none;">
                                                    <p>Contact us for more information</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="assets\images\Projects\Indian-Marble2.png" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Onyx Green Marble</h5>
                                                <a href="{{ Route('contact') }}" style="text-decoration: none;">
                                                    <p>Contact us for more information</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="assets\images\Projects\Indian-Marble3.png" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Indo Italian Marble</h5>
                                                <a href="{{ Route('contact') }}" style="text-decoration: none;">
                                                    <p>Contact us for more information</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="assets\images\Projects\Indian-Marble4.png" class="card-img-top"
                                                alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Wonder White Marble</h5>
                                                <a href="{{ Route('contact') }}" style="text-decoration: none;">
                                                    <p>Contact us for more information</p>
                                                </a>
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
                </div>
                <div class="container">
                    <div class="row gutter-y-40">
                        <div class="col-lg-6">
                            <div class="contact-one__content">
                                <div class="sec-title sec-title--border">

                                    <h6 class="sec-title__tagline">contact</h6>

                                    <h3 class="sec-title__title">Reach out & <br> Connect with Us</h3>
                                    <!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->


                                <p class="contact-one__text">Our vision is to provide innovative, independent flooring
                                    solutions that solve problems for homes, industries, and workspaces, as well as flooring
                                    we would like in our own residences, work spaces,</p>
                                <div class="contact-one__info wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="00ms">
                                    <div class="contact-one__info__bg"
                                        style="background-image: url('assets/images/shapes/contact-info-bg.png');"></div>
                                    <!-- /.contact-one__info__bg -->
                                    <div class="contact-one__info__content">
                                        <div class="contact-one__info__item">
                                            <div class="contact-one__info__item__inner">
                                                <div class="contact-one__info__icon">
                                                    <span class="icon-phone-call"></span>
                                                </div><!-- /.contact-one__info__icon -->
                                                <p class="contact-one__info__text"><a href="tel:+9100305640669">+91 0030
                                                        5640 669</a></p><!-- /.contact-one__info__text -->
                                            </div><!-- /.contact-one__info__item__inner -->
                                        </div><!-- /.contact-one__info__item -->
                                        <div class="contact-one__info__item">
                                            <div class="contact-one__info__item__inner">
                                                <div class="contact-one__info__icon">
                                                    <span class="icon-paper-plane"></span>
                                                </div><!-- /.contact-one__info__icon -->
                                                <p class="contact-one__info__text"><a
                                                        href="mailto:needhelp@company.com">needhelp@company.com</a></p>
                                                <!-- /.contact-one__info__text -->
                                            </div><!-- /.contact-one__info__item__inner -->
                                        </div><!-- /.contact-one__info__item -->
                                        <div class="contact-one__info__item">
                                            <div class="contact-one__info__item__inner">
                                                <div class="contact-one__info__icon">
                                                    <span class="icon-location"></span>
                                                </div><!-- /.contact-one__info__icon -->
                                                <address class="contact-one__info__text"><a
                                                        href="https://www.google.com/maps/@23.506657,90.3443647,7z?entry=ttu">85
                                                        Ketch Harbour Road Bensal, PA 19020</a></address>
                                                <!-- /.contact-one__info__text -->
                                            </div><!-- /.contact-one__info__item__inner -->
                                        </div><!-- /.contact-one__info__item -->
                                    </div><!-- /.contact-one__info__content -->
                                    <img src="assets/images/shapes/contact-shape-1-1.png" alt="contact image"
                                        class="contact-one__info__image">
                                </div><!-- /.contact-one__info -->
                            </div><!-- /.contact-one__content -->
                        </div><!-- /.col-xl-6 -->
                        <div class="col-lg-6">
                            <form class="contact-one__form contact-form-validated form-one wow fadeInUp"
                                data-wow-duration="1500ms" data-wow-delay="200ms"
                                action="https://bracketweb.com/floens-html/inc/sendemail.php">
                                <div class="contact-one__form__bg"
                                    style="background-image: url('assets/images/shapes/contact-info-form-bg.png');"></div>
                                <!-- /.contact-one__form__bg -->
                                <div class="contact-one__form__top">
                                    <h2 class="contact-one__form__title">Get In Touch With Us And Enjoy <br>
                                        Top-Notch Support</h2><!-- /.contact-one__form__title -->
                                </div><!-- /.contact-one__form__top -->
                                <div class="form-one__group form-one__group--grid">
                                    <div class="form-one__control form-one__control--input form-one__control--full">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--full">
                                        <input type="email" name="email" placeholder="your email">
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--full">
                                        <select class="selectpicker" aria-label="Choose service">
                                            <option selected>Choose service</option>
                                            <option value="1">Tiling & concrete</option>
                                            <option value="2">Industrial Flooring</option>
                                            <option value="3">Vinyl Plank</option>
                                            <option value="4">Carpets & rugs</option>
                                            <option value="5">Oak Flooring</option>
                                            <option value="6">Vein Patterns</option>
                                        </select>
                                    </div><!-- /.form-one__control form-one__control--full -->
                                    <div class="form-one__control form-one__control--mesgae form-one__control--full">
                                        <textarea name="message" placeholder="Write message"></textarea><!-- /# -->
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
        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection
