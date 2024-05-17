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
                        <li><i class="icon-home"></i> <a href="{{ Route('index_4') }}">Home</a></li>
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
                                    <img src="assets/images/about/Indian Marble.png" alt="Tiling & concrete">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a
                                            href='{{ Route('serviced_industrial_flooring') }}'>Indian Marble</a></h3><!-- /.service-card-two__title -->
                                    <div class="service-card-two__bottom">
                                        <a href='{{ Route('serviced_industrial_flooring') }}'
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
                                    <img src="assets/images/about/granite.jpeg" alt="Industrial Flooring">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a
                                            href='{{ Route('serviced_tiling_concrete') }}'>Granite</a>
                                    </h3>
                                    <!-- /.service-card-two__title -->
                                    <div class="service-card-two__bottom">
                                        <a href='{{ Route('serviced_tiling_concrete') }}'
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
                                    <img src="assets/images/about/italian marble.jpeg" alt="Vinyl Plank">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a href='{{ Route('serviced_carpets_rugs') }}'>Italian Marble</a></h3><!-- /.service-card-two__title -->
                                    <div class="service-card-two__bottom">
                                        <a href='{{ Route('serviced_carpets_rugs') }}'
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
                                    <img src="assets/images/about/elevation.jpeg" alt="Carpets & rugs">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a
                                            href='{{ Route('serviced_oak_flooring') }}'>Elevation</a></h3><!-- /.service-card-two__title -->
                                    <div class="service-card-two__bottom">
                                        <a href='{{ Route('serviced_oak_flooring') }}'
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
                                    <img src="assets/images/about/sand stone.jpeg" alt="Oak Flooring">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a href='{{ Route('serviced_vinyl_plank') }}'>Sand Stone</a></h3><!-- /.service-card-two__title -->
                                    <div class="service-card-two__bottom">
                                        <a href='{{ Route('serviced_vinyl_plank') }}'
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
                                    <img src="assets/images/about/export service.jpeg" alt="Vein Patterns">
                                </div><!-- /.service-card-two__image -->
                                <div class="service-card-two__content">
                                    <h3 class="service-card-two__title"><a
                                            href='{{ Route('serviced_vein_patterns') }}'>Export Service</a></h3><!-- /.service-card-two__title -->
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
                    </div>
                </div><!-- /.container -->
            </section><!-- /.services-page section-space -->

        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    <script>
        window.addEventListener('load', function () {
            adjustCardHeights();
        });
    
        window.addEventListener('resize', function () {
            adjustCardHeights();
        });
    
        function adjustCardHeights() {
            var cardRows = document.querySelectorAll('.row.gutter-y-30');
    
            cardRows.forEach(function (row) {
                var cardsInRow = row.querySelectorAll('.service-card-two');
    
                // Reset height to auto for all cards in the row
                cardsInRow.forEach(function (card) {
                    card.style.height = 'auto';
                });
    
                // Find the maximum height among cards in the row
                var maxHeight = 0;
                cardsInRow.forEach(function (card) {
                    var cardHeight = card.offsetHeight;
                    maxHeight = Math.max(maxHeight, cardHeight);
                });
    
                // Set the height of all cards in the row to the maximum height
                cardsInRow.forEach(function (card) {
                    card.style.height = maxHeight + 'px';
                });
            });
        }
    </script>
    @endsection
