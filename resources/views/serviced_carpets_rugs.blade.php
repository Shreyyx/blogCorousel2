@extends('index_main')
@section('csscontent')
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
                    <h2 class="page-header__title">Italian Marble</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>services</span></li>
                        <li><span>Italian Marble</span></li>
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
                                    <h3 class="service-details__sub-title">"OUR ITALIAN MARBLE COLLECTION CATERS TO EVERY
                                        STYLE AND PROJECT NEED."</h3>
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

                                <p class="contact-one__text">Our vision at Mohit Marble and Granites is to lead the
                                    industry with our innovative marble solutions, catering to the diverse needs of homes,
                                    industries, and workspaces. We are committed to redefining the standards of marble
                                    craftsmanship, offering exquisite products that embody timeless elegance and exceptional
                                    quality.</p><!-- /.contact-one__text -->
                                <div class="contact-one__info wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="00ms">
                                    <div class="contact-one__info__bg"
                                        style="background-image: url('assets/images/shapes/contact-info-bg.png');"></div>
                                    <!-- /.contact-one__info__bg -->

                                    <!-- /.contact-one__info__content -->
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
                <img src="assets/images/contact/contact-1-2.jpg" alt="contact image"
                    class="contact-one__image-two wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">
            </section>
        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection
