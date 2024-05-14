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
                    <h2 class="page-header__title">Contact Us</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>Contact Us</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

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
                <img src="assets/images/contact/contact-1-2.jpg" alt="contact image"
                    class="contact-one__image-two wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="00ms">
            </section><!-- /.contact-one section-space -->

            <section class="contact-map">
                <div class="container-fluid">
                    <div class="google-map google-map__contact">
                        <iframe title="template google map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                            class="map__contact" allowfullscreen></iframe>
                    </div><!-- /.google-map -->
                </div><!-- /.container-fluid -->
            </section><!-- /.contact-map -->
        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection