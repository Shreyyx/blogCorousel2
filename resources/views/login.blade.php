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
                    <h2 class="page-header__title">log in</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_4') }}">Home</a></li>
                        <li><span>log in</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="login-page section-space">
                <div class="container">
                    <div class="row gutter-y-60">
                        <div class="col-xl-6 login-page__image-col wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="login-page__image">
                                <div class="login-page__image__inner">
                                    <img src="assets/images/login/login-1-1.jpg" alt="login"
                                        class="login-page__image__one">
                                    <img src="assets/images/login/login-1-2.jpg" alt="login"
                                        class="login-page__image__two">
                                </div><!-- /.login-page__image__inner -->
                            </div><!-- /.login-page__image -->
                        </div>
                        <div class="col-xl-6 wow fadeInRight fadeInRight" data-wow-duration="1500ms">
                            <div class="login-page__wrap login-page__main-tab-box tabs-box">
                                <div class="login-page__wrap__bg"
                                    style="background-image: url('assets/images/shapes/login-bg-1.png');"></div>
                                <!-- /.login-page__wrap__bg -->
                                <div class="login-page__wrap__top">
                                    <div class="login-page__wrap__content">
                                        <h3 class="login-page__wrap__title">welcome</h3>
                                    </div><!-- /.login-page__wrap__content -->
                                    <ul class="tab-buttons">
                                        <li data-tab="#login" class="tab-btn active-btn wow animated fadeInUp"
                                            data-wow-delay="0.1s" data-wow-duration="1500ms"><span>log in</span></li>
                                        <li data-tab="#register" class="tab-btn wow animated fadeInUp" data-wow-delay="0.3s"
                                            data-wow-duration="1500ms"><span>register</span></li>
                                    </ul><!-- /.tab-buttons -->
                                </div><!-- /.login-page__wrap__top -->
                                <div class="tabs-content">
                                    <div class="tab active-tab fadeInUp animated" data-wow-delay="200ms" id="login"
                                        style="display: block;">
                                        <span class="login-page__tab-title">sign in your account</span>
                                        <form class="login-page__form">
                                            <div class="login-page__form__input-box">
                                                <input type="email" placeholder="Email address">
                                                <span class="icon-email"></span>
                                            </div><!-- /.login-page__form__input-box -->
                                            <div class="login-page__form__input-box">
                                                <input type="password" placeholder="Password" class="login-page__password">
                                                <i class="toggle-password pass-field-icon fa fa-fw fa-eye-slash"></i>
                                                <span class="icon-padlock"></span>
                                            </div><!-- /.login-page__form__input-box -->
                                            <div class="login-page__form__input-box login-page__form__input-box--bottom">
                                                <div class="login-page__form__checked-box">
                                                    <input type="checkbox" name="remember-policy" id="remember-policy">
                                                    <label for="remember-policy"><span></span>remember me</label>
                                                </div>
                                                <a href="#" class="login-page__form__forgot">forgot
                                                    password?</a><!-- /.login-page__form__forgot -->
                                            </div><!-- /.login-page__form__input-box -->
                                            <div class="login-page__form__input-box login-page__form__input-box--button">
                                                <button type="submit" class="floens-btn login-page__form__btn">log
                                                    in</button>
                                            </div><!-- /.login-page__form__button -->
                                        </form><!-- /.login-page__form -->
                                        <div class="login-page__signin">
                                            <h4 class="login-page__signin__title">don’t have an account? <a
                                                    href="#">register</a></h4><!-- /.login-page__signin__title -->
                                            <span class="login-page__signin__text">or sign in
                                                with</span><!-- /.login-page__signin__text -->
                                            <div class="login-page__signin__buttons">
                                                <button type="button" class="login-page__signin__btn"><img
                                                        src="assets/images/resources/google.png" alt="google"></button>
                                                <button type="button" class="login-page__signin__btn"><img
                                                        src="assets/images/resources/apple.png" alt="apple"></button>
                                                <button type="button" class="login-page__signin__btn"><img
                                                        src="assets/images/resources/facebook.png" alt="facebook"></button>
                                            </div><!-- /.login-page__signin__buttons -->
                                        </div><!-- /.login-page__signin -->
                                    </div><!-- /.login-tab -->

                                    <div class="tab fadeInUp animated" data-wow-delay="200ms" id="register"
                                        style="display: none;">
                                        <span class="login-page__tab-title">sign up your account</span>
                                        <form class="login-page__form">
                                            <div class="login-page__form__input-box">
                                                <input type="email" placeholder="Email address">
                                                <span class="icon-email"></span>
                                            </div><!-- /.login-page__form__input-box -->
                                            <div class="login-page__form__input-box">
                                                <input type="password" placeholder="Password"
                                                    class="login-page__password">
                                                <i class="toggle-password pass-field-icon fa fa-fw fa-eye-slash"></i>
                                                <span class="icon-padlock"></span>
                                            </div><!-- /.login-page__form__input-box -->
                                            <div class="login-page__form__input-box login-page__form__input-box--bottom">
                                                <div class="login-page__form__checked-box">
                                                    <input type="checkbox" name="accept-policy" id="accept-policy">
                                                    <label for="accept-policy"><span></span>I accept company privacy
                                                        policy.</label>
                                                </div>
                                            </div><!-- /.login-page__form__input-box -->
                                            <div class="login-page__form__input-box login-page__form__input-box--button">
                                                <button type="submit"
                                                    class="floens-btn login-page__form__btn">Register</button>
                                            </div><!-- /.login-page__form__button -->
                                        </form><!-- /.login-page__form -->
                                        <div class="login-page__signin">
                                            <h4 class="login-page__signin__title">Already have an account? <a
                                                    href="#">Sign In</a></h4><!-- /.login-page__signin__title -->
                                            <span class="login-page__signin__text">or sign in
                                                with</span><!-- /.login-page__signin__text -->
                                            <div class="login-page__signin__buttons">
                                                <button type="button" class="login-page__signin__btn"><img
                                                        src="assets/images/resources/google.png" alt="google"></button>
                                                <button type="button" class="login-page__signin__btn"><img
                                                        src="assets/images/resources/apple.png" alt="apple"></button>
                                                <button type="button" class="login-page__signin__btn"><img
                                                        src="assets/images/resources/facebook.png"
                                                        alt="facebook"></button>
                                            </div><!-- /.login-page__signin__buttons -->
                                        </div><!-- /.login-page__signin -->
                                    </div><!-- /.register-tab -->
                                </div><!-- /.tab-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- /.login-page section-space -->

        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection
