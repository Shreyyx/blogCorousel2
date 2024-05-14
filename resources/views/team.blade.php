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
                    <h2 class="page-header__title">our team</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>our team</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="team-one team-one--page section-space">
                <div class="container">
                    <div class="row gutter-y-30">
                        <div class="col-md-6 col-lg-4">
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
                        </div><!-- /.col-md-6 col-lg-4 -->
                        <div class="col-md-6 col-lg-4">
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
                        </div><!-- /.col-md-6 col-lg-4 -->
                        <div class="col-md-6 col-lg-4">
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
                        </div><!-- /.col-md-6 col-lg-4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-4.jpg" alt="sarah albert">
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
                                                <h3 class="team-card__name"><a href="{{ Route('team_details') }}">sarah
                                                        albert</a>
                                                </h3><!-- /.team-card__name -->
                                                <span class="team-card__designation">marketing
                                                    manager</span><!-- /.team-card__designation -->
                                            </div><!-- /.team-card__identity__inner -->
                                        </div><!-- /.team-card__identity -->
                                    </div><!-- /.team-card__hover -->
                                </div><!-- /.team-card__image -->
                            </div><!-- /.team-card -->
                        </div><!-- /.col-md-6 col-lg-4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-5.jpg" alt="kevin martin">
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
                                                <h3 class="team-card__name"><a href="{{ Route('team_details') }}">kevin
                                                        martin</a>
                                                </h3><!-- /.team-card__name -->
                                                <span class="team-card__designation">marketing
                                                    manager</span><!-- /.team-card__designation -->
                                            </div><!-- /.team-card__identity__inner -->
                                        </div><!-- /.team-card__identity -->
                                    </div><!-- /.team-card__hover -->
                                </div><!-- /.team-card__image -->
                            </div><!-- /.team-card -->
                        </div><!-- /.col-md-6 col-lg-4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms'>
                                <div class="team-card__image">
                                    <img src="assets/images/team/team-1-6.jpg" alt="christine eve">
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
                                                <h3 class="team-card__name"><a
                                                        href="{{ Route('team_details') }}">christine eve</a>
                                                </h3><!-- /.team-card__name -->
                                                <span class="team-card__designation">marketing
                                                    manager</span><!-- /.team-card__designation -->
                                            </div><!-- /.team-card__identity__inner -->
                                        </div><!-- /.team-card__identity -->
                                    </div><!-- /.team-card__hover -->
                                </div><!-- /.team-card__image -->
                            </div><!-- /.team-card -->
                        </div><!-- /.col-md-6 col-lg-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.team-one section-space -->


        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection
