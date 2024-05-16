@extends('index_main')
@section('csscontent')
@endsection
@section('content')

    <body class="custom-cursor">

        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>

        <div class="preloader">
            <div class="preloader__image" style="background-image: url(assets/images/about/favicon-logo.png);"></div>
        </div>
        <!-- /.preloader -->
        <div class="page-wrapper">
            <section class="page-header">
                <div class="page-header__bg"
                    style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div>
                <!-- /.page-header__bg -->
                <div class="container">
                    <h2 class="page-header__title">Export Service</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>services</span></li>
                        <li><span>Export Service </span></li>
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
                                    <h3 class="service-details__title">EXPORT SERVICE</h3>
                                    <hr>
                                </div>
                                <div class="service-details__inner-two">
                                    <h3 class="service-details__sub-title"></h3>
                                    <p>
                                        For the past three decades, Mohit Marble and Granite has been a trusted provider of
                                        top-quality marble, granite, and other natural stones, making us the preferred
                                        choice for architects and designers worldwide. Our exported materials are perfect
                                        for a wide range of projects across the globe. Our dedication, experience, and
                                        expertise have enabled us to export the finest natural stones to over 50 major
                                        countries, establishing Mohit Marble and Granite as a well-known name in the
                                        international stone market.
                                    </p>
                                    <ul>
                                        <li style="list-style-type: none; padding: 10px;"><i class="fas fa-check-double"
                                                style="color: #f7c566"></i>
                                            We export various types of stones in the form of slabs, shapes, and cut pieces,
                                            making us a leading marble exporter in India.
                                        </li>
                                        <li style="list-style-type: none; padding: 10px;"><i class="fas fa-check-double"
                                                style="color: #f7c566"></i>
                                            We value our professional responsibilities and prioritize staying in touch with
                                            our customers to understand their unique needs. This approach allows us to
                                            provide personalized solutions tailored to their requirements.
                                        </li>
                                        <li style="list-style-type: none; padding: 10px;"><i class="fas fa-check-double"
                                                style="color: #f7c566"></i>
                                            In addition to our excellent products, we offer guidance on natural stones to
                                            help our clients plan their projects more effectively. Our goal is to provide
                                            the best possible service to our clients, which is why we gladly accept special
                                            orders that involve various customizations to meet specific project demands.
                                        </li>
                                        <li style="list-style-type: none; padding: 10px;"><i class="fas fa-check-double"
                                                style="color: #f7c566"></i>
                                            At Mohit Marble and Granite, we are committed to maintaining our reputation as a
                                            reliable supplier of premium natural stones, ensuring that our customers receive
                                            the highest level of satisfaction in every aspect of our business.
                                        </li>
                                    </ul>
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
