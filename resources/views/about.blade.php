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
                    <h2 class="page-header__title">About us</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>About us</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="about-one section-space" id="about">
                <div class="container">
                    <div class="row gutter-y-60">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="00ms">
                            <div class="about-one__image-grid">
                                <div class="about-one__image">
                                    <img src="assets/images/about/about-1-3.png" alt="about"
                                        class="about-one__image__one">
                                    <img src="assets/images/about/about-1-2.jpg" alt="about"
                                        class="about-one__image__two">
                                </div><!-- /.about-one__image -->
                                <div class="about-one__image">
                                    <img src="assets/images/about/about-1-1.jpg" alt="about"
                                        class="about-one__image__three">
                                </div><!-- /.about-one__image -->
                                <div class="about-one__circle-text">
                                    <div class="about-one__circle-text__bg"
                                        style="background-image: url('assets/images/resources/about-award-bg.jpg');"></div>
                                    <img src="assets/images/resources/about-award-symbol.png" alt="award-symbole"
                                        class="about-one__circle-text__image">
                                    <div class="about-one__curved-circle curved-circle">
                                        <!-- curved-circle start-->
                                        <div class="about-one__curved-circle__item curved-circle__item"
                                            data-circle-text-options='{
                         "radius": 84,
                         "forceWidth": true,
                         "forceHeight": true}'>
                                            award winning flooring company
                                        </div>
                                    </div><!-- curved-circle end-->
                                </div><!-- /.about-one__circle-text -->
                            </div><!-- /.about-one__image-grid -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="about-one__content">
                                <div class="sec-title sec-title--border">

                                    <h6 class="sec-title__tagline">about us</h6><!-- /.sec-title__tagline -->

                                    <h3 class="sec-title__title">Explore Modern Tiles Stone & Agency</h3>
                                    <!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->


                                <div class="about-one__content__text wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="00ms">
                                    <h5 class="about-one__text-title">We’re providing the best quality tiles in town.</h5>
                                    <!-- /.about-one__text-title -->
                                    <p class="about-one__text">Tiles company, also known as a tile manufacturer or
                                        distributor,
                                        specializes in the production and distribution of various types of tiles used for a
                                        wide
                                        range of applications. These companies play a crucial role in the construn and
                                        interior
                                        design industries by providing tiles for residential.</p><!-- /.about-one__text -->
                                </div><!-- /.about-one__content__text -->
                                <div class="row about-one__inner-row gutter-y-40">
                                    <div class="col-xl-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                                        <div class="about-one__service about-one__service--one">
                                            <div class="about-one__service__icon">
                                                <span class="icon-toilet"></span>
                                            </div><!-- /.about-one__service__icon -->
                                            <div class="about-one__service__content">
                                                <h4 class="about-one__service__title">Tiles & Toilet</h4>
                                                <!-- /.about-one__service__title -->
                                                <p class="about-one__service__text">Tiles company, also known as a tile</p>
                                                <!-- /.about-one__service__text -->
                                            </div><!-- /.about-one__service__content -->
                                        </div><!-- /.about-one__service -->
                                    </div><!-- /.col-xl-6 -->
                                    <div class="col-xl-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                                        <div class="about-one__service about-one__service--two">
                                            <div class="about-one__service__icon">
                                                <span class="icon-kitchen"></span>
                                            </div><!-- /.about-one__service__icon -->
                                            <div class="about-one__service__content">
                                                <h4 class="about-one__service__title">design Kitchen in 3D</h4>
                                                <!-- /.about-one__service__title -->
                                                <p class="about-one__service__text">Tiles company, also known as a tile</p>
                                                <!-- /.about-one__service__text -->
                                            </div><!-- /.about-one__service__content -->
                                        </div><!-- /.about-one__service -->
                                    </div><!-- /.col-xl-6 -->
                                </div><!-- /.row -->
                                <div class="about-one__button wow fadeInUp" data-wow-duration="1500ms"
                                    data-wow-delay="00ms">
                                    <a href="{{ Route('contact') }}" class="floens-btn">
                                        <span>get in touch</span>
                                        <i class="icon-right-arrow"></i>
                                    </a><!-- /.floens-btn -->
                                </div><!-- /.about-one__button -->
                            </div><!-- /.about-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
                <div class="about-one__shapes">
                    <img src="assets/images/shapes/about-shape-1-1.jpg" alt="about-shape"
                        class="about-one__shape about-one__shape--one">
                    <img src="assets/images/shapes/about-shape-1-1.jpg" alt="about-shape"
                        class="about-one__shape about-one__shape--two">
                </div><!-- /.about-one__shapes -->
            </section><!-- /.about-one section-space -->

            <section class="work-process work-process--two section-space-two">
                <div class="work-process__bg"
                    style="background-image: url('assets/images/backgrounds/work-process-bg-1.png');"></div>
                <!-- /.work-process__bg -->
                <div class="work-process__container-top container">
                    <div class="sec-title sec-title--center">

                        <h6 class="sec-title__tagline">work process</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Steps of Recruitment <br> Work Process</h3><!-- /.sec-title__title -->
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

            <section class="reliable-one @@extraClassName section-space-bottom">
                <div class="container">
                    <div class="row gutter-y-60">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="reliable-one__images">
                                <div class="reliable-one__image">
                                    <img src="assets/images/reliable/reliable-2-1.jpg" alt="reliable"
                                        class="reliable-one__image__one">
                                    <div class="reliable-one__image__inner">
                                        <img src="assets/images/reliable/reliable-2-2.jpg" alt="reliable"
                                            class="reliable-one__image__two">
                                        <img src="assets/images/reliable/reliable-2-3.png" alt="reliable"
                                            class="reliable-one__image__three">
                                    </div><!-- /.reliable-one__image__inner -->
                                    <div class="experience reliable-one__experience">
                                        <div class="experience__inner">
                                            <h3 class="experience__year"
                                                style="background-image: url('assets/images/shapes/reliable-shape-1-1.png');">
                                                25
                                            </h3>
                                            <!-- /.experience__year -->
                                            <p class="experience__text">years of <br> experience</p>
                                            <!-- /.experience__text -->
                                        </div><!-- /.experience__inner -->
                                    </div><!-- /.experience -->
                                </div><!-- /.reliable-one__image -->
                            </div><!-- /.reliable-one__images -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="reliable-one__content">
                                <div class="sec-title sec-title--border">

                                    <h6 class="sec-title__tagline">reliable</h6><!-- /.sec-title__tagline -->

                                    <h3 class="sec-title__title">We Provide Reliable Flooring Services</h3>
                                    <!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->


                                <p class="reliable-one__text">Our vision is to provide innovative, independent flooring
                                    solutions
                                    that problems for homes, industries, and workspaces, as well as flooring we would like
                                    in
                                    our own residences, work spaces,</p><!-- /.reliable-one__text -->
                                <div class="row align-items-center gutter-y-30">
                                    <div class="col-lg-6 col-md-4 col-sm-6">
                                        <div class="reliable-one__info">
                                            <div class="reliable-one__info__icon">
                                                <span class="icon-smiley"></span>
                                            </div><!-- /.reliable-one__info__icon -->
                                            <div class="reliable-one__info__text">
                                                <h4 class="reliable-one__info__title">Happy clients</h4>
                                                <!-- /.reliable-one__info__title -->
                                                <h5 class="reliable-one__info__total">2.5M+</h5>
                                                <!-- /.reliable-one__info__total -->
                                            </div><!-- /.reliable-one__info__text -->
                                        </div><!-- /.reliable-one__info -->
                                    </div><!-- /.col-lg-6 col-md-4 col-sm-6 -->
                                    <div class="col-lg-6 col-md-4 col-sm-6">
                                        <div class="reliable-one__ratings">
                                            <h4 class="reliable-one__ratings__title">clients rating:</h4>
                                            <!-- /.reliable-one__ratings__title -->
                                            <div class="floens-ratings @@extraClassName">
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                                <span class="icon-star"></span>
                                            </div><!-- /.product-ratings -->
                                        </div><!-- /.eliable-one__ratings -->
                                    </div><!-- /.col-lg-6 col-md-4 col-sm-6 -->
                                </div><!-- /.row -->
                            </div><!-- /.reliable-one__content -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.reliable-one section-space-bottom -->

            <section class="team-one team-one--about section-space-two" id="team">
                <div class="team-one__bg" style="background-image: url('assets/images/backgrounds/team-bg-1-1.png');">
                </div><!-- /.team-one__bg -->
                <div class="container">
                    <div class="team-one__top">
                        <div class="row gutter-y-50 align-items-center">
                            <div class="col-lg-6">
                                <div class="sec-title @@extraClassName">

                                    <h6 class="sec-title__tagline">our team</h6><!-- /.sec-title__tagline -->

                                    <h3 class="sec-title__title">Meet our Best Team <br> Members</h3>
                                    <!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->


                            </div><!-- /.col-lg-6 -->
                            <div class="col-lg-6">
                                <div class="team-one__top__right">
                                    <p class="team-one__top__text">Luctus enim vehicula nec. Ut auctor lobortis sapien et
                                        eleifend. Integer ac orci vitae neque porttitor efficitur ac vestibulum orci. Sed
                                        tincidunt magna sed leo luctus,</p><!-- /.team-one__top__text -->
                                </div><!-- /.team-one__top__right -->
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div><!-- /.team-one__top -->
                    <div class="team-one__carousel floens-owl__carousel floens-owl__carousel--with-shadow floens-owl__carousel--basic-nav owl-carousel owl-theme"
                        data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": true,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
			"dots": false,
			"autoplay": 600,
			"responsive": {
				"0": {
					"items": 1,
					"nav": true,
                    "dots": false,
					"margin": 10
				},
                "576": {
                    "items": 1,
                    "dots": true,
                    "nav": false,
					"margin": 10
                },
				"768": {
					"items": 2,
                    "nav": false,
                    "dots": true,
					"margin": 30
				},
				"992": {
					"items": 3,
                    "loop": false,
                    "nav": false,
                    "dots": false,
					"margin": 30
				}
			}
		}'>
                        <div class="item">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-1.jpg" alt="Mike Hardson">
                                    <div class="team-card__hover">
                                        <div class="team-card__social">
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
                                        </div><!-- /.team-card__social -->
                                        <div class="team-card__identity">
                                            <div class="team-card__identity__inner">
                                                <h3 class="team-card__name"><a href="{{ Route('team_details') }}">Mike
                                                        Hardson</a>
                                                </h3><!-- /.team-card__name -->
                                                <span class="team-card__designation">marketing
                                                    manager</span><!-- /.team-card__designation -->
                                            </div><!-- /.team-card__identity__inner -->
                                        </div><!-- /.team-card__identity -->
                                    </div><!-- /.team-card__hover -->
                                </div><!-- /.team-card__image -->
                            </div><!-- /.team-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-2.jpg" alt="Anthony B. Castillo">
                                    <div class="team-card__hover">
                                        <div class="team-card__social">
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
                                        </div><!-- /.team-card__social -->
                                        <div class="team-card__identity">
                                            <div class="team-card__identity__inner">
                                                <h3 class="team-card__name"><a href="{{ Route('team_details') }}">Anthony
                                                        B.
                                                        Castillo</a></h3><!-- /.team-card__name -->
                                                <span class="team-card__designation">marketing
                                                    manager</span><!-- /.team-card__designation -->
                                            </div><!-- /.team-card__identity__inner -->
                                        </div><!-- /.team-card__identity -->
                                    </div><!-- /.team-card__hover -->
                                </div><!-- /.team-card__image -->
                            </div><!-- /.team-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-3.jpg" alt="david cooper">
                                    <div class="team-card__hover">
                                        <div class="team-card__social">
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
                                        </div><!-- /.team-card__social -->
                                        <div class="team-card__identity">
                                            <div class="team-card__identity__inner">
                                                <h3 class="team-card__name"><a href="{{ Route('team_details') }}">david
                                                        cooper</a>
                                                </h3><!-- /.team-card__name -->
                                                <span class="team-card__designation">marketing
                                                    manager</span><!-- /.team-card__designation -->
                                            </div><!-- /.team-card__identity__inner -->
                                        </div><!-- /.team-card__identity -->
                                    </div><!-- /.team-card__hover -->
                                </div><!-- /.team-card__image -->
                            </div><!-- /.team-card -->
                        </div><!-- /.item -->
                    </div><!-- /.team-one__carousel -->
                </div><!-- /.container -->
            </section><!-- /.team-one section-space-two -->

            <section class="testimonials-two section-space-two" id="testimonials">
                <div class="container">
                    <div class="sec-title sec-title--center">

                        <h6 class="sec-title__tagline">testimonial</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">What People are Talking <br> About Floens</h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->


                    <div class="testimonials-two__carousel floens-owl__carousel floens-owl__carousel--with-shadow floens-owl__carousel--basic-nav owl-carousel owl-theme"
                        data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": true,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"],
                "dots": false,
                "autoplay": 600,
                "responsive": {
                    "0": {
                        "items": 1,
                        "nav": true,
                        "dots": false,
                        "margin": 10
                    },
                    "576": {
                        "items": 1,
                        "dots": true,
                        "nav": false,
                        "margin": 10
                    },
                    "768": {
                        "items": 1,
                        "dots": true,
                        "nav": false,
                        "margin": 10
                    },
                    "992": {
                        "items": 2,
                        "loop": false,
                        "nav": false,
                        "dots": false,
                        "margin": 30
                    }
                }
            }'>
                        <div class="item">
                            <div class="testimonials-card @@extraClassName">
                                <div class="testimonials-card__bg"
                                    style="background-image: url(assets/images/testimonials/testimonials-card-bg.png);">
                                </div><!-- /.testimonials-card__bg -->
                                <div class="testimonials-card__top">
                                    <div class="floens-ratings @@extraClassName">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </div><!-- /.product-ratings -->
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc"
                                        class="testimonials-card__video video-button video-popup">
                                        <span class="icon-play"></span>
                                        <i class="video-button__ripple"></i>
                                    </a><!-- /.testimonials-card__video -->
                                </div><!-- /.testimonials-card__top -->
                                <div class="testimonials-card__content">
                                    <div class="testimonials-card__content__inner">
                                        <p class="testimonials-card__text">"I recently worked with <a
                                                href="{{ Route('about') }}"
                                                class="testimonials-card__text__highlight">Floens</a> for my home
                                            renovation project, and I couldn't be happier with the results. From the moment
                                            I walked into their showroom, I was impressed by the extensive selection</p>
                                        <!-- /.testimonials-card__text -->
                                    </div><!-- /.testimonials-card__content__inner -->
                                    <div class="testimonials-card__person">
                                        <div class="testimonials-card__person__inner">
                                            <img src="assets/images/testimonials/testimonials-1-1.jpg"
                                                alt="Michael G. Ware" class="testimonials-card__person__image">
                                            <div class="testimonials-card__person__info">
                                                <h3 class="testimonials-card__person__name">Michael G. Ware</h3>
                                                <!-- /.testimonials-card__person__name -->
                                                <span class="testimonials-card__person__designation">managing
                                                    director</span><!-- /.testimonials-card__person__designation -->
                                            </div><!-- /.testimonials-card__person__info -->
                                        </div><!-- /.testimonials-card__person__inner -->
                                    </div><!-- /.testimonials-card__person -->
                                </div><!-- /.testimonials-card__content -->
                                <div class="testimonials-card__quotes"
                                    style='background-image: url(assets/images/testimonials/testimonials-quote-bg-1-1.jpg);'>
                                    <svg class="testimonials-card__quotes__icon" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 52 38" fill="none">
                                        <path
                                            d="M0 23.7248H10.3849L3.46157 37.5713H13.8465L20.7698 23.7248V2.95508H0V23.7248Z" />
                                        <path
                                            d="M27.6929 2.95508V23.7248H38.0778L31.1544 37.5713H41.5393L48.4626 23.7248V2.95508H27.6929Z" />
                                        <path
                                            d="M13.34 20.2698H3.45508V0.5H23.2248V20.6517L16.4925 34.1162H7.22567L13.7872 20.9934L14.149 20.2698H13.34Z" />
                                        <path
                                            d="M41.0328 20.2698H31.1479V0.5H50.9177V20.6517L44.1854 34.1162H34.9185L41.48 20.9934L41.8419 20.2698H41.0328Z" />
                                    </svg>
                                </div><!-- /.testimonials-card__quotes -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="testimonials-card @@extraClassName">
                                <div class="testimonials-card__bg"
                                    style="background-image: url(assets/images/testimonials/testimonials-card-bg.png);">
                                </div><!-- /.testimonials-card__bg -->
                                <div class="testimonials-card__top">
                                    <div class="floens-ratings @@extraClassName">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </div><!-- /.product-ratings -->
                                    <a href="https://www.youtube.com/watch?v=h9MbznbxlLc"
                                        class="testimonials-card__video video-button video-popup">
                                        <span class="icon-play"></span>
                                        <i class="video-button__ripple"></i>
                                    </a><!-- /.testimonials-card__video -->
                                </div><!-- /.testimonials-card__top -->
                                <div class="testimonials-card__content">
                                    <div class="testimonials-card__content__inner">
                                        <p class="testimonials-card__text">"I recently worked with <a
                                                href="{{ Route('about') }}"
                                                class="testimonials-card__text__highlight">Floens</a> for my home
                                            renovation project, and I couldn't be happier with the results. From the moment
                                            I walked into their showroom, I was impressed by the extensive selection</p>
                                        <!-- /.testimonials-card__text -->
                                    </div><!-- /.testimonials-card__content__inner -->
                                    <div class="testimonials-card__person">
                                        <div class="testimonials-card__person__inner">
                                            <img src="assets/images/testimonials/testimonials-1-2.jpg"
                                                alt="Anthony B. Castillo" class="testimonials-card__person__image">
                                            <div class="testimonials-card__person__info">
                                                <h3 class="testimonials-card__person__name">Anthony B. Castillo</h3>
                                                <!-- /.testimonials-card__person__name -->
                                                <span class="testimonials-card__person__designation">managing
                                                    director</span><!-- /.testimonials-card__person__designation -->
                                            </div><!-- /.testimonials-card__person__info -->
                                        </div><!-- /.testimonials-card__person__inner -->
                                    </div><!-- /.testimonials-card__person -->
                                </div><!-- /.testimonials-card__content -->
                                <div class="testimonials-card__quotes"
                                    style='background-image: url(assets/images/testimonials/testimonials-quote-bg-1-2.jpg);'>
                                    <svg class="testimonials-card__quotes__icon" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 52 38" fill="none">
                                        <path
                                            d="M0 23.7248H10.3849L3.46157 37.5713H13.8465L20.7698 23.7248V2.95508H0V23.7248Z" />
                                        <path
                                            d="M27.6929 2.95508V23.7248H38.0778L31.1544 37.5713H41.5393L48.4626 23.7248V2.95508H27.6929Z" />
                                        <path
                                            d="M13.34 20.2698H3.45508V0.5H23.2248V20.6517L16.4925 34.1162H7.22567L13.7872 20.9934L14.149 20.2698H13.34Z" />
                                        <path
                                            d="M41.0328 20.2698H31.1479V0.5H50.9177V20.6517L44.1854 34.1162H34.9185L41.48 20.9934L41.8419 20.2698H41.0328Z" />
                                    </svg>
                                </div><!-- /.testimonials-card__quotes -->
                            </div><!-- /.testimonials-card -->
                        </div><!-- /.item -->
                    </div><!-- /.testimonials-two__carousel -->
                </div><!-- /.container -->
            </section><!-- /.testimonials-two section-space-two -->
        @endsection
        @section('jscontent')
        @endsection
