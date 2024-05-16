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
                    <h2 class="page-header__title">recent work</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>recent work</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="projects-two section-space-top">
                <div class="container-fluid">
                    <div class="projects-two__carousel floens-owl__carousel floens-owl__carousel--basic-nav owl-theme owl-carousel"
                        data-owl-options='{
        "items": 3,
        "margin": 30,
        "smartSpeed": 700,
        "loop": true,
        "autoWidth": true,
        "autoplay": true,
        "nav": true,
        "dots": false,
        "navText": ["<span class=\"icon-slide-left-arrow\"></span>","<span class=\"icon-slide-right-arrow\"></span>"]
        }'>
                        <div class="item">
                            <div class="project-card @@extraClassName">
                                <a href="{{ Route('work_details') }}" class="project-card__image">
                                    <img src="assets/images/works/project-2-1.jpg" alt="Modern Tiles">
                                </a><!-- /.project-card__image -->
                                <div class="project-card__content">
                                    <h3 class="project-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                    <div class="project-card__links">
                                        <div class="project-card__links__inner">
                                            <h3 class="project-card__title"><a href="{{ Route('work_details') }}">Modern
                                                    Tiles</a>
                                            </h3><!-- /.project-card__title -->
                                            <a href="{{ Route('work_details') }}"
                                                class="project-card__link floens-btn"><span
                                                    class="icon-right-arrow"></span></a><!-- /.project-card__link -->
                                        </div><!-- /.project-card__links__inner -->
                                    </div><!-- /.project-card__links -->
                                </div><!-- /.project-card__content -->
                            </div><!-- /.project-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-card @@extraClassName">
                                <a href="{{ Route('work_details') }}" class="project-card__image">
                                    <img src="assets/images/works/project-2-2.jpg" alt="Modern Tiles">
                                </a><!-- /.project-card__image -->
                                <div class="project-card__content">
                                    <h3 class="project-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                    <div class="project-card__links">
                                        <div class="project-card__links__inner">
                                            <h3 class="project-card__title"><a href="{{ Route('work_details') }}">Modern
                                                    Tiles</a>
                                            </h3><!-- /.project-card__title -->
                                            <a href="{{ Route('work_details') }}"
                                                class="project-card__link floens-btn"><span
                                                    class="icon-right-arrow"></span></a><!-- /.project-card__link -->
                                        </div><!-- /.project-card__links__inner -->
                                    </div><!-- /.project-card__links -->
                                </div><!-- /.project-card__content -->
                            </div><!-- /.project-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-card project-card--large">
                                <a href="{{ Route('work_details') }}" class="project-card__image">
                                    <img src="assets/images/works/project-2-3.jpg" alt="Modern Tiles">
                                </a><!-- /.project-card__image -->
                                <div class="project-card__content">
                                    <h3 class="project-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                    <div class="project-card__links">
                                        <div class="project-card__links__inner">
                                            <h3 class="project-card__title"><a href="{{ Route('work_details') }}">Modern
                                                    Tiles</a>
                                            </h3><!-- /.project-card__title -->
                                            <a href="{{ Route('work_details') }}"
                                                class="project-card__link floens-btn"><span
                                                    class="icon-right-arrow"></span></a><!-- /.project-card__link -->
                                        </div><!-- /.project-card__links__inner -->
                                    </div><!-- /.project-card__links -->
                                </div><!-- /.project-card__content -->
                            </div><!-- /.project-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-card @@extraClassName">
                                <a href="{{ Route('work_details') }}" class="project-card__image">
                                    <img src="assets/images/works/project-2-4.jpg" alt="Modern Tiles">
                                </a><!-- /.project-card__image -->
                                <div class="project-card__content">
                                    <h3 class="project-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                    <div class="project-card__links">
                                        <div class="project-card__links__inner">
                                            <h3 class="project-card__title"><a href="{{ Route('work_details') }}">Modern
                                                    Tiles</a>
                                            </h3><!-- /.project-card__title -->
                                            <a href="{{ Route('work_details') }}"
                                                class="project-card__link floens-btn"><span
                                                    class="icon-right-arrow"></span></a><!-- /.project-card__link -->
                                        </div><!-- /.project-card__links__inner -->
                                    </div><!-- /.project-card__links -->
                                </div><!-- /.project-card__content -->
                            </div><!-- /.project-card -->
                        </div><!-- /.item -->
                        <div class="item">
                            <div class="project-card @@extraClassName">
                                <a href="{{ Route('work_details') }}" class="project-card__image">
                                    <img src="assets/images/works/project-2-5.jpg" alt="Modern Tiles">
                                </a><!-- /.project-card__image -->
                                <div class="project-card__content">
                                    <h3 class="project-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                    <div class="project-card__links">
                                        <div class="project-card__links__inner">
                                            <h3 class="project-card__title"><a href="{{ Route('work_details') }}">Modern
                                                    Tiles</a>
                                            </h3><!-- /.project-card__title -->
                                            <a href="{{ Route('work_details') }}"
                                                class="project-card__link floens-btn"><span
                                                    class="icon-right-arrow"></span></a><!-- /.project-card__link -->
                                        </div><!-- /.project-card__links__inner -->
                                    </div><!-- /.project-card__links -->
                                </div><!-- /.project-card__content -->
                            </div><!-- /.project-card -->
                        </div><!-- /.item -->
                    </div><!-- /.projects-two__carousel -->
                </div><!-- /.container-fluid -->
            </section><!-- /.projects-two section-space-top -->

            <section class="work-page section-space-bottom">
                <div class="container">
                    <div class="row gutter-y-30">
                        <div class="col-lg-4 col-md-6">
                            <div class="work-card">
                                <div class="work-card__image">
                                    <img src="assets/images/works/work-1-1.jpg" alt="Modern Tiles fitting">
                                </div><!-- /.work-card__image -->
                                <div class="work-card__content-show">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Modern Tiles
                                                fitting</a>
                                        </h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                </div><!-- /.work-card__content-show -->
                                <div class="work-card__content-hover">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Modern Tiles
                                                fitting</a>
                                        </h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                    <a href="{{ Route('work_details') }}" class="work-card__link floens-btn"><span
                                            class="icon-right-arrow"></span></a><!-- /.work-card__link -->
                                </div><!-- /.work-card__content-hover -->
                            </div><!-- /.work-card -->
                        </div><!-- /.col-lg-4 col-md-6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="work-card">
                                <div class="work-card__image">
                                    <img src="assets/images/works/work-1-2.jpg" alt="Indoor Court">
                                </div><!-- /.work-card__image -->
                                <div class="work-card__content-show">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Indoor
                                                Court</a></h3>
                                        <!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                </div><!-- /.work-card__content-show -->
                                <div class="work-card__content-hover">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Indoor
                                                Court</a></h3>
                                        <!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                    <a href="{{ Route('work_details') }}" class="work-card__link floens-btn"><span
                                            class="icon-right-arrow"></span></a><!-- /.work-card__link -->
                                </div><!-- /.work-card__content-hover -->
                            </div><!-- /.work-card -->
                        </div><!-- /.col-lg-4 col-md-6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="work-card">
                                <div class="work-card__image">
                                    <img src="assets/images/works/work-1-3.jpg" alt="Awesome Outdoor Project">
                                </div><!-- /.work-card__image -->
                                <div class="work-card__content-show">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Awesome
                                                Outdoor
                                                Project</a></h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                </div><!-- /.work-card__content-show -->
                                <div class="work-card__content-hover">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Awesome
                                                Outdoor
                                                Project</a></h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                    <a href="{{ Route('work_details') }}" class="work-card__link floens-btn"><span
                                            class="icon-right-arrow"></span></a><!-- /.work-card__link -->
                                </div><!-- /.work-card__content-hover -->
                            </div><!-- /.work-card -->
                        </div><!-- /.col-lg-4 col-md-6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="work-card">
                                <div class="work-card__image">
                                    <img src="assets/images/works/work-1-4.jpg" alt="Industrial Flooring">
                                </div><!-- /.work-card__image -->
                                <div class="work-card__content-show">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Industrial
                                                Flooring</a>
                                        </h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                </div><!-- /.work-card__content-show -->
                                <div class="work-card__content-hover">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Industrial
                                                Flooring</a>
                                        </h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                    <a href="{{ Route('work_details') }}" class="work-card__link floens-btn"><span
                                            class="icon-right-arrow"></span></a><!-- /.work-card__link -->
                                </div><!-- /.work-card__content-hover -->
                            </div><!-- /.work-card -->
                        </div><!-- /.col-lg-4 col-md-6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="work-card">
                                <div class="work-card__image">
                                    <img src="assets/images/works/work-1-5.jpg" alt="Eco-Friendly-Flooring">
                                </div><!-- /.work-card__image -->
                                <div class="work-card__content-show">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a
                                                href="{{ Route('work_details') }}">Eco-Friendly-Flooring</a>
                                        </h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                </div><!-- /.work-card__content-show -->
                                <div class="work-card__content-hover">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a
                                                href="{{ Route('work_details') }}">Eco-Friendly-Flooring</a>
                                        </h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                    <a href="{{ Route('work_details') }}" class="work-card__link floens-btn"><span
                                            class="icon-right-arrow"></span></a><!-- /.work-card__link -->
                                </div><!-- /.work-card__content-hover -->
                            </div><!-- /.work-card -->
                        </div><!-- /.col-lg-4 col-md-6 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="work-card">
                                <div class="work-card__image">
                                    <img src="assets/images/works/work-1-6.jpg" alt="Laminate Flooring">
                                </div><!-- /.work-card__image -->
                                <div class="work-card__content-show">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Laminate
                                                Flooring</a>
                                        </h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                </div><!-- /.work-card__content-show -->
                                <div class="work-card__content-hover">
                                    <div class="work-card__content-inner">
                                        <h3 class="work-card__tagline">Tile Care</h3><!-- /.project-card__tagline -->
                                        <h3 class="work-card__title"><a href="{{ Route('work_details') }}">Laminate
                                                Flooring</a>
                                        </h3><!-- /.work-card__title -->
                                    </div><!-- /.work-card__content-inner -->
                                    <a href="{{ Route('work_details') }}" class="work-card__link floens-btn"><span
                                            class="icon-right-arrow"></span></a><!-- /.work-card__link -->
                                </div><!-- /.work-card__content-hover -->
                            </div><!-- /.work-card -->
                        </div><!-- /.col-lg-4 col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.work-page section-space-bottom -->
        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection
