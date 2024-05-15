@extends('index_main')
@section('csscontent')
@endsection
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url('assets/images/backgrounds/page-header-bg-1-1.png');"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <h2 class="page-header__title">there are many variations of passage</h2>
            <ul class="floens-breadcrumb list-unstyled">
                <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                <li><span>blog</span></li>
                <li><span>Porcelain or ceramic tiles that mimic the appearance. . .</span></li>
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
                                <img src="assets/images/blog/blog-d-1-1.jpg"
                                    alt="There are many variations of passages of available but majority">
                                <div class="blog-card__date">
                                    <span class="blog-card__date__day">20</span>
                                    <span class="blog-card__date__month">june</span>
                                </div><!-- /.blog-card__date -->
                            </div><!-- /.blog-card__image -->
                            <div class="blog-card__content">
                                <ul class="list-unstyled blog-card__meta">
                                    <li><a href="#"> <i class="icon-user"></i> by Admin</a></li>
                                    <li><a href="#"><i class="icon-comment"></i> 2 Comments</a></li>
                                </ul><!-- /.list-unstyled blog-card__meta -->
                                <h3 class="blog-card__title">There are many variations of passages of available but
                                    majority</h3><!-- /.blog-card__title -->
                                <p class="blog-card__text blog-card__text--one">Neque porro est qui dolorem ipsum
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
                                </div><!-- /.blog-details__inner -->
                            </div><!-- /.blog-card-four__content -->
                        </div><!-- /.blog-card -->
                        <div class="blog-details__meta">
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
                        </div><!-- /.blog-details__meta -->
                    </div><!-- /.blog-details -->

                    <div class="comments-one @@extraClassName">
                        <h3 class="comments-one__title">02 Comments</h3><!-- /.comments-one__title -->
                        <ul class="list-unstyled comments-one__list">
                            <li class="comments-one__card wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                <div class="comments-one__card__image">
                                    <img src="assets/images/blog/blog-comment-1-1.png" alt="Kevin martin">
                                </div><!-- /.comments-one__card__image -->
                                <div class="comments-one__card__content">
                                    <div class="comments-one__card__top">
                                        <div class="comments-one__card__info">
                                            <h3 class="comments-one__card__title">Kevin martin</h3>
                                            <!-- /.comments-one__card__title -->
                                            <p class="comments-one__card__date">March 20, 2023 at 2:37 pm</p>
                                            <!-- / -->
                                        </div><!-- /.comments-one__card__info -->
                                        <div class="floens-ratings @@extraClassName">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div><!-- /.product-ratings -->
                                    </div><!-- /.comments-one__card__top -->
                                    <p class="comments-one__card__text">Neque porro est qui dolorem ipsum quia
                                        quaed inventor veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo. Aelltes port lacus quis enim var</p>
                                    <!-- /.comments-one__card__text -->
                                </div><!-- /.comments-one__card__content -->
                            </li><!-- /.comments-one__card -->
                            <li class="comments-one__card wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                <div class="comments-one__card__image">
                                    <img src="assets/images/blog/blog-comment-1-2.png" alt="Sarah albert">
                                </div><!-- /.comments-one__card__image -->
                                <div class="comments-one__card__content">
                                    <div class="comments-one__card__top">
                                        <div class="comments-one__card__info">
                                            <h3 class="comments-one__card__title">Sarah albert</h3>
                                            <!-- /.comments-one__card__title -->
                                            <p class="comments-one__card__date">March 20, 2023 at 2:37 pm</p>
                                            <!-- / -->
                                        </div><!-- /.comments-one__card__info -->
                                        <div class="floens-ratings @@extraClassName">
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div><!-- /.product-ratings -->
                                    </div><!-- /.comments-one__card__top -->
                                    <p class="comments-one__card__text">Neque porro est qui dolorem ipsum quia
                                        quaed inventor veritatis et quasi architecto beatae vitae dicta sunt
                                        explicabo. Aelltes port lacus quis enim var sed</p>
                                    <!-- /.comments-one__card__text -->
                                </div><!-- /.comments-one__card__content -->
                            </li><!-- /.comments-one__card -->
                        </ul><!-- /.list-unstyled comments-one__list -->
                    </div><!-- /.comments-one -->

                    <div class="comments-form">
                        <h3 class="comments-form__title">Leave a Comment</h3><!-- /.comments-form__title -->
                        <form class="comments-form__form contact-form-validated form-one">
                            <div class="form-one__group">
                                <div class="form-one__control form-one__control--full form-one__control--input wow fadeInUp"
                                    data-wow-duration="1500ms" data-wow-delay="00mms">
                                    <input type="text" name="name" placeholder="Your name">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full form-one__control--input wow fadeInUp"
                                    data-wow-duration="1500ms" data-wow-delay="100mms">
                                    <input type="email" name="email" placeholder="your email">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full wow fadeInUp"
                                    data-wow-duration="1500ms" data-wow-delay="200mms">
                                    <textarea name="message" placeholder="write message . ."></textarea>
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full wow fadeInUp"
                                    data-wow-duration="1500ms" data-wow-delay="300mms">
                                    <button type="submit" class="floens-btn">
                                        <span>post comment</span>
                                        <i class="icon-right-arrow"></i>
                                    </button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form><!-- /.comments-form__form -->
                        <div class="result"></div><!-- /.result -->
                    </div><!-- /.comments-form -->

                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <aside class="widget-area">
                            <div class="sidebar__form sidebar__single">
                                <h4 class="sidebar__title sidebar__form__title">search here</h4>
                                <!-- /.sidebar__title -->
                                <form action="#" class="sidebar__search">
                                    <input type="text" placeholder="Search Here" />
                                    <button type="submit" aria-label="search submit">
                                        <span class="icon-search"></span>
                                    </button>
                                </form><!-- /.sidebar__search -->
                            </div><!-- /.sidebar__form sidebar__single -->
                            <div class="sidebar__posts-wrapper sidebar__single">
                                <h4 class="sidebar__title sidebar__posts-title">Latest posts</h4>
                                <!-- /.sidebar__title -->
                                <ul class="sidebar__posts list-unstyled">
                                    <li class="sidebar__posts__item">
                                        <div class="sidebar__posts__image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="Latest posts">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta"><a href="#">
                                                    <span class="icon-user"></span>
                                                    By Admin</a></p><!-- /.sidebar__posts__date -->
                                            <h4 class="sidebar__posts__title"><a
                                                    href="{{ Route('blog_detailsright') }}">There are many vario
                                                    ns of
                                                    passages of</a></h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                    <li class="sidebar__posts__item">
                                        <div class="sidebar__posts__image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="Latest posts">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta"><a href="#">
                                                    <span class="icon-user"></span>
                                                    By Admin</a></p><!-- /.sidebar__posts__date -->
                                            <h4 class="sidebar__posts__title"><a
                                                    href="{{ Route('blog_detailsright') }}">There are many vario
                                                    ns of
                                                    passages of</a></h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                    <li class="sidebar__posts__item">
                                        <div class="sidebar__posts__image">
                                            <img src="assets/images/blog/lp-1-3.jpg" alt="Latest posts">
                                        </div><!-- /.sidebar__posts__image -->
                                        <div class="sidebar__posts__content">
                                            <p class="sidebar__posts__meta"><a href="#">
                                                    <span class="icon-user"></span>
                                                    By Admin</a></p><!-- /.sidebar__posts__date -->
                                            <h4 class="sidebar__posts__title"><a
                                                    href="{{ Route('blog_detailsright') }}">There are many vario
                                                    ns of
                                                    passages of</a></h4><!-- /.sidebar__posts__title -->
                                        </div><!-- /.sidebar__posts__content -->
                                    </li>
                                </ul><!-- /.sidebar__posts list-unstyled -->
                            </div><!-- /.sidebar__posts-wrapper sidebar__single -->
                            <div class="sidebar__categories-wrapper sidebar__single">
                                <h4 class="sidebar__title">Categories</h4><!-- /.sidebar__title -->
                                <ul class="sidebar__categories list-unstyled">
                                    <li><a href="{{ Route('blog_detailsright') }}">Wood-Look Tiles
                                            <span>(4)</span></a></li>
                                    <li><a href="{{ Route('blog_detailsright') }}">Metal Tiles
                                            <span>(2)</span></a></li>
                                    <li><a href="{{ Route('blog_detailsright') }}">Penny Tiles
                                            <span>(6)</span></a></li>
                                    <li><a href="{{ Route('blog_detailsright') }}">Hexagonal Tiles
                                            <span>(9)</span></a></li>
                                    <li><a href="{{ Route('blog_detailsright') }}">Patterned Tiles
                                            <span>(10)</span></a>
                                    </li>
                                </ul><!-- /.sidebar__categories list-unstyled -->
                            </div><!-- /.sidebar__categories-wrapper sidebar__single -->
                            <div class="sidebar__tags-wrapper sidebar__single">
                                <h4 class="sidebar__title">Tags</h4><!-- /.sidebar__title -->
                                <div class="sidebar__tags">
                                    <a href="{{ Route('blog_detailsright') }}">Penny tiles</a>
                                    <a href="{{ Route('blog_detailsright') }}">Metal Tiles</a>
                                    <a href="{{ Route('blog_detailsright') }}">Octagon</a>
                                    <a href="{{ Route('blog_detailsright') }}">Octagon</a>
                                    <a href="{{ Route('blog_detailsright') }}">Patterned Tiles</a>
                                    <a href="{{ Route('blog_detailsright') }}">Digital Print Tiles</a>
                                </div><!-- /.sidebar__tags -->
                            </div><!-- /.sidebar__tags-wrapper sidebar__single -->
                            <div class="sidebar__comments-wrapper sidebar__single">
                                <h4 class="sidebar__title">Comments</h4><!-- /.sidebar__title -->
                                <ul class="sidebar__comments list-unstyled">
                                    <li>
                                        <div class="sidebar__comments__icon">
                                            <span class="icon-speech-bubble"></span>
                                        </div><!-- /.sidebar__comments__icon -->
                                        <h6 class="sidebar__comments__title"><a
                                                href="{{ Route('blog_detailsright') }}">Neque porro est qui
                                                dolorem ipsum
                                                quia quaed inventor</a></h6><!-- /.sidebar__comments__title -->
                                    </li>
                                    <li>
                                        <div class="sidebar__comments__icon">
                                            <span class="icon-speech-bubble"></span>
                                        </div><!-- /.sidebar__comments__icon -->
                                        <h6 class="sidebar__comments__title"><a
                                                href="{{ Route('blog_detailsright') }}">Neque porro est qui
                                                dolorem ipsum
                                                quia quaed inventor</a></h6><!-- /.sidebar__comments__title -->
                                    </li>
                                    <li>
                                        <div class="sidebar__comments__icon">
                                            <span class="icon-speech-bubble"></span>
                                        </div><!-- /.sidebar__comments__icon -->
                                        <h6 class="sidebar__comments__title"><a
                                                href="{{ Route('blog_detailsright') }}">Neque porro est qui
                                                dolorem ipsum
                                                quia quaed inventor</a></h6><!-- /.sidebar__comments__title -->
                                    </li>
                                </ul><!-- /.sidebar__comments list-unstyled -->
                            </div><!-- /.sidebar__comments-wrapper sidebar__single -->
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
