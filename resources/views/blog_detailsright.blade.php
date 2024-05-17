@extends('index_main')
@section('csscontent')
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url{{asset('assets/images/backgrounds/page-header-bg-1-1.png')}};"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">{{$data->title}}</h2>
            <ul class="floens-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="{{ Route('index_4') }}">Home</a></li>
                <li><span>Blogs</span></li>
            </ul><!-- /.thm-breadcrumb list-unstyled -->
        </div><!-- /.container -->
    </section>

    <section class="blog-page section-space">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-card wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="blog-card__image">
                                <img src={{asset("assets/images/blog/blog-d-1-1.jpg")}}
                                    alt="There are many variations of passages of available but majority">
                                <div class="blog-card__date">
                                    <span class="blog-card__date__day">{{$data->date}}</span>
                                    <span class="blog-card__date__month">{{$data->month}}</span>
                                </div><!-- /.blog-card__date -->
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">{{$data->title}}</h3><!-- /.blog-card__title -->

                                   <p>{!!$data->description !!}</p>

                                {{-- <p class="blog-card__text blog-card__text--one">Neque porro est qui dolorem ipsum
                                    quia quaed inventor veritatis et quasi architecto beatae vitae dicta sunt
                                    explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit
                                    amet finibus eros. Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.</p><!-- /.blog-card__text -->
                                <p class="blog-card__text blog-card__text--two">When an unknown printer took a
                                    galley of type and scrambled it to make a type specimen book. It has survived
                                    not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. Aelltes port lacus quis enim var sed efficitur
                                    turpis gilla sed sit amet finibus eros.</p><!-- /.blog-card__text -->
                                <div class="blog-details__inner">
                                    <div class="row gutter-y-30">
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay="100ms"
                                            data-wow-duration="1500ms">
                                            <div class="blog-details__inner__image">
                                                <img src="assets/images/blog/blog-d-1-2.jpg" alt="blog details">
                                            </div><!-- /.blog-details__inner__image -->
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay="300ms"
                                            data-wow-duration="1500ms">
                                            <div class="blog-details__inner__image">
                                                <img src="assets/images/blog/blog-d-1-3.jpg" alt="blog details">
                                            </div><!-- /.blog-details__inner__image -->
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="blog-details__inner__content">
                                        <p class="blog-details__inner__text">Neque porro est qui dolorem ipsum quia
                                            quaed inventor veritatis et quasi architecto beatae vitae dicta sunt
                                            explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla
                                            sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the
                                            printing and typesetting industry.</p>
                                        <ul class="blog-details__inner__list">
                                            <li>
                                                <p>Another area of AI that holds great promise is robotics, which
                                                    involves developing machines.</p>
                                            </li>
                                            <li>
                                                <p>AI also has the potential to improve healthcare, by enabling more
                                                    accurate diagnosis and trea</p>
                                            </li>
                                            <li>
                                                <p>However, there are also challenges associated with the
                                                    development and deployment of AI.</p>
                                            </li>
                                        </ul><!-- /.blog-details__inner__list -->
                                    </div><!-- /.blog-details__inner__content -->
                                </div><!-- /.blog-details__inner --> --}}
                            </div><!-- /.blog-card-four__content -->
                        </div><!-- /.blog-card -->
                        {{-- <div class="blog-details__meta">
                            <div class="blog-details__tags">
                                <h4 class="blog-details__meta__title">Tags:</h4>
                                <!-- /.blog-details__meta__title -->
                                <div class="blog-details__tags__box">
                                    <a href="{{ Route('blog_detailsright') }}">Octagon</a>
                                    <a href="{{ Route('blog_detailsright') }}">Patterned Tiles</a>
                                    <a href="{{ Route('blog_detailsright') }}">Penny tiles</a>
                                </div><!-- /.blog-details__tag__box-->
                            </div><!-- /.blog-details__tags -->
                            <div class="blog-details__social">
                                <h4 class="blog-details__meta__title">Share:</h4>
                                <!-- /.blog-details__meta__title -->
                                <div class="details-social">
                                    <a href="https://facebook.com/">
                                        <i class="icon-facebook" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                    <a href="https://twitter.com/">
                                        <i class="icon-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Twitter</span>
                                    </a>
                                    <a href="https://linkedin.com/">
                                        <i class="icon-linkedin" aria-hidden="true"></i>
                                        <span class="sr-only">Linkedin</span>
                                    </a>
                                    <a href="https://youtube.com/">
                                        <i class="icon-youtube" aria-hidden="true"></i>
                                        <span class="sr-only">Youtube</span>
                                    </a>
                                </div><!-- /.social-link -->
                            </div><!-- /.blog-details__social -->
                        </div><!-- /.blog-details__meta --> --}}
                    </div><!-- /.blog-details -->

                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <aside class="widget-area">
                            <div class="sidebar__posts-wrapper sidebar__single">
                                <h4 class="sidebar__title sidebar__posts-title">Latest Blogs</h4>
                                <!-- /.sidebar__title -->
                                <ul class="sidebar__posts list-unstyled">
                                    <li class="sidebar__posts__item">
                                        <div class="sidebar__posts__image">
                                            <img src={{asset("assets/images/blog/lp-1-1.jpg")}} alt="Latest posts">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta"><a href="#">
                                                    <span class="icon-user"></span>
                                                    By Admin</a></p><!-- /.sidebar__posts__date -->
                                            <h4 class="sidebar__posts__title"><a
                                                    href="#">There are many vario
                                                    ns of
                                                    passages of</a></h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                    <li class="sidebar__posts__item">
                                        <div class="sidebar__posts__image">
                                            <img src={{asset("assets/images/blog/lp-1-2.jpg")}} alt="Latest posts">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta"><a href="#">
                                                    <span class="icon-user"></span>
                                                    By Admin</a></p><!-- /.sidebar__posts__date -->
                                            <h4 class="sidebar__posts__title"><a
                                                    href="#">There are many vario
                                                    ns of
                                                    passages of</a></h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                    <li class="sidebar__posts__item">
                                        <div class="sidebar__posts__image">
                                            <img src={{asset("assets/images/blog/lp-1-3.jpg")}} alt="Latest posts">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta"><a href="#">
                                                    <span class="icon-user"></span>
                                                    By Admin</a></p><!-- /.sidebar__posts__date -->
                                            <h4 class="sidebar__posts__title"><a
                                                    href="#">There are many vario
                                                    ns of
                                                    passages of</a></h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                </ul><!-- /.sidebar__posts list-unstyled -->
                            </div><!-- /.sidebar__posts-wrapper sidebar__single -->
                        </aside><!-- /.widget-area -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    </div><!-- /.page-wrapper -->
@endsection
@section('jscontent')
@endsection
