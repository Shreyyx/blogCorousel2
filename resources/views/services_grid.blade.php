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
                    <h2 class="page-header__title">our services</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>our services</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="services-page section-space">
                <div class="container">
                    <div class="row gutter-y-30">
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card-two">
                                <div class="service-card-two__bg"
                                    style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                                <!-- /.service-card-two__bg -->
                                <div class="service-card-two__image">
                                    <img src="assets/images/services/service-2-1.jpg" alt="Tiling & concrete">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a
                                            href='{{ Route('serviced_tiling_concrete') }}'>Tiling &
                                            concrete</a></h3><!-- /.service-card-two__title -->
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
                        </div><!-- /.col-xl-4 col-md-6 -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card-two">
                                <div class="service-card-two__bg"
                                    style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                                <!-- /.service-card-two__bg -->
                                <div class="service-card-two__image">
                                    <img src="assets/images/services/service-2-2.jpg" alt="Industrial Flooring">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a
                                            href='{{ Route('serviced_industrial_flooring') }}'>Industrial Flooring</a>
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
                        </div><!-- /.col-xl-4 col-md-6 -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card-two">
                                <div class="service-card-two__bg"
                                    style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                                <!-- /.service-card-two__bg -->
                                <div class="service-card-two__image">
                                    <img src="assets/images/services/service-2-3.jpg" alt="Vinyl Plank">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a href='{{ Route('serviced_vinyl_plank') }}'>Vinyl
                                            Plank</a></h3><!-- /.service-card-two__title -->
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
                        </div><!-- /.col-xl-4 col-md-6 -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card-two">
                                <div class="service-card-two__bg"
                                    style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                                <!-- /.service-card-two__bg -->
                                <div class="service-card-two__image">
                                    <img src="assets/images/services/service-2-4.jpg" alt="Carpets & rugs">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a
                                            href='{{ Route('serviced_carpets_rugs') }}'>Carpets &
                                            rugs</a></h3><!-- /.service-card-two__title -->
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
                        </div><!-- /.col-xl-4 col-md-6 -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card-two">
                                <div class="service-card-two__bg"
                                    style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                                <!-- /.service-card-two__bg -->
                                <div class="service-card-two__image">
                                    <img src="assets/images/services/service-2-5.jpg" alt="Oak Flooring">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a href='{{ Route('serviced_oak_flooring') }}'>Oak
                                            Flooring</a></h3><!-- /.service-card-two__title -->
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
                        </div><!-- /.col-xl-4 col-md-6 -->
                        <div class="col-xl-4 col-md-6">
                            <div class="service-card-two">
                                <div class="service-card-two__bg"
                                    style="background-image: url('assets/images/services/service-bg-2-1.png');"></div>
                                <!-- /.service-card-two__bg -->
                                <div class="service-card-two__image">
                                    <img src="assets/images/services/service-2-6.jpg" alt="Vein Patterns">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a
                                            href='{{ Route('serviced_vein_patterns') }}'>Vein
                                            Patterns</a></h3><!-- /.service-card-two__title -->
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
                        </div><!-- /.col-xl-4 col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.services-page section-space -->

        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection
