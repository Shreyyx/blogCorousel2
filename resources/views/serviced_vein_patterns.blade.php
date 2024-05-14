@extends('index_main')
@section('csscontent')
@endsection
@section('content')

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
                    <h2 class="page-header__title">Vein Patterns</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>services</span></li>
                        <li><span>Vein Patterns</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="service-details section-space">
                <div class="container">
                    <div class="row gutter-y-30">
                        <div class="col-md-12 col-lg-4">
                            <div class="service-sidebar">
                                <div class="service-sidebar__info service-sidebar__single">
                                    <ul class="list-unstyled service-sidebar__nav wow fadeInLeft"
                                        data-wow-duration="1500ms">
                                        <li><a href="{{ Route('serviced_industrial_flooring') }}">industrial flooring</a>
                                        </li>
                                        <li><a href="{{ Route('serviced_tiling_concrete') }}">Tiling & concrete</a></li>
                                        <li><a href="{{ Route('serviced_carpets_rugs') }}">Carpets & rugs</a></li>
                                        <li><a href="{{ Route('serviced_oak_flooring') }}">Oak Flooring</a></li>
                                        <li><a href="{{ Route('serviced_vinyl_plank') }}">Vinyl Plank</a></li>
                                        <li><a href="{{ Route('serviced_vein_patterns') }}">Vein Patterns</a></li>
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
                                                <h4 class="service-sidebar__contact__time">MON-SAT 8:00-9:00</h4>
                                                <!-- /.service-sidebar__contact__time -->
                                                <h4 class="service-sidebar__contact__number">
                                                    <a href="tel:+915698036420">+91 569 803 6420</a>
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
                                        <img src="assets/images/services/service-d-1.jpg" alt="Vein Patterns">
                                    </div><!-- /.service-details__thumbnail -->
                                    <h3 class="service-details__title">Vein Patterns</h3><!-- /.service-details__title -->
                                    <p class="service-details__text wow fadeInUp" data-wow-duration="1500ms"
                                        data-wow-delay="00ms">There are many variations of passages of Lorem Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the
                                        Internet tend to repeat predefined chunks as necessary, making this the first true
                                        generator on the Internet. It uses a dictionary of over 200 Latin words,</p>
                                    <!-- /.service-details__text -->
                                </div><!-- /.service-details__inner -->
                                <div class="service-details__inner-two">
                                    <h3 class="service-details__sub-title">Where can I get some?</h3>
                                    <!-- /.service-details__sub-title -->
                                    <p class="service-details__text wow fadeInUp" data-wow-duration="1500ms"
                                        data-wow-delay="00ms">mistaken idea of denouncing pleasure and praising pain was
                                        born and I will give you a complete account of the system, and expound the actual
                                        teachings of the great explorer of the truth, the master-builder of human happiness.
                                        No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                                        because those who do not know how to pursue pleasure rationally encounter
                                        consequences that are extremely painful.</p><!-- /.service-details__text -->
                                </div><!-- /.service-details__inner-two -->
                                <div class="service-details__info wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="00ms">
                                    <ul class="list-unstyled service-details__list">
                                        <li>
                                            <span class="icon-check"></span>
                                            Instant Business Growth
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            24/7 Quality Service
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            Easy Customer Service
                                        </li>
                                        <li>
                                            <span class="icon-check"></span>
                                            Quality Cost Service
                                        </li>
                                    </ul><!-- /.list-unstyled team-details__list -->
                                    <img src="assets/images/services/service-d-list-1.jpg" alt="service-d-list"
                                        class="service-details__info__image">
                                </div><!-- /.service-details__info -->
                                <p class="service-details__text-two wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="00ms">Continually myocardinate holistic mindshare with client-based web
                                    services. Assertively e-enable catalysts for change before tested markets.
                                    Phosfluorescently maintain wireless scenarios after intermandated applications.
                                    Conveniently predominate revolutionary quality vectors through future-proof manufactured
                                    products. Enthusiastically transform distinctive collaboration.</p>
                                <!-- /.service-details__text-two -->
                                <div class="service-details__faq">
                                    <h3 class="service-details__faq__title service-details__sub-title">Where can I get
                                        some?</h3><!-- /.service-details__sub-title -->
                                    <div class="faq-accordion floens-accordion" data-grp-name="floens-accordion">
                                        <div class="accordion active">
                                            <div class="accordion-title">
                                                <h4>
                                                    What services does your construction company offer?
                                                    <span
                                                        class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                                </h4>
                                            </div><!-- /.accordian-title -->
                                            <div class="accordion-content">
                                                <div class="inner">
                                                    <p>Bring to the table win-win survival strategies to ensure proactive
                                                        domination. At the end of the day, going forward, a new normal that
                                                        has evolved from generation X is on the</p>
                                                </div><!-- /.accordian-content -->
                                            </div>
                                        </div><!-- /.accordian-item -->
                                        <div class="accordion">
                                            <div class="accordion-title">
                                                <h4>
                                                    How do I request a quote for my construction project?
                                                    <span
                                                        class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                                </h4>
                                            </div><!-- /.accordian-title -->
                                            <div class="accordion-content">
                                                <div class="inner">
                                                    <p>Bring to the table win-win survival strategies to ensure proactive
                                                        domination. At the end of the day, going forward, a new normal that
                                                        has evolved from generation X is on the</p>
                                                </div><!-- /.accordian-content -->
                                            </div>
                                        </div><!-- /.accordian-item -->
                                        <div class="accordion">
                                            <div class="accordion-title">
                                                <h4>
                                                    What is the timeline for a construction project?
                                                    <span
                                                        class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                                </h4>
                                            </div><!-- /.accordian-title -->
                                            <div class="accordion-content">
                                                <div class="inner">
                                                    <p>Bring to the table win-win survival strategies to ensure proactive
                                                        domination. At the end of the day, going forward, a new normal that
                                                        has evolved from generation X is on the</p>
                                                </div><!-- /.accordian-content -->
                                            </div>
                                        </div><!-- /.accordian-item -->
                                    </div>
                                </div><!-- /.service-details__faq -->
                            </div><!-- /.service-details__content -->
                        </div><!-- /.col-md-12 col-lg-8 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.service-details section-space -->

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


                                <p class="contact-one__text">Our vision is to provide innovative, independent flooring
                                    solutions that solve problems for homes, industries, and workspaces, as well as flooring
                                    we would like in our own residences, work spaces,</p><!-- /.contact-one__text -->
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
