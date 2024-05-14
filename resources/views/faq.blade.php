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
                    <h2 class="page-header__title">FAQ</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>faq's</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="faq-page-search">
                <div class="container">
                    <div class="faq-page-search__inner wow fadeInUp" data-wow-duration="1500ms">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sec-title sec-title--center">

                                    <h3 class="sec-title__title">Search Your Questions Queries Here</h3>
                                    <!-- /.sec-title__title -->
                                </div><!-- /.sec-title -->


                                <form action="#" class="faq-page-search__form">
                                    <input type="text" id="error-search" placeholder="Search Here..." />
                                    <button type="submit" class="faq-page-search__form__btn" aria-label="search submit">
                                        <span class="icon-search"></span>
                                    </button>
                                </form><!-- /.faq-page-search__form -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.faq-page-search__inner -->
                </div><!-- /.container -->
            </section><!-- /.faq-page-search -->


            <section class="faq-page section-space">
                <div class="container">
                    <div class="row gutter-y-60">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                            <div class="faq-page__image">
                                <img src="assets/images/faq/faq-2-1.jpg" alt="faq">
                            </div><!-- /.faq-page__image -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <div class="faq-accordion floens-accordion" data-grp-name="floens-accordion">
                                <div class="accordion">
                                    <div class="accordion-title">
                                        <h4>
                                            Do you offer a warranty for your work?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Bring to the table win-win survival strategies to ensure proactive
                                                domination. At the end of the day, going forward, a new normal that has
                                                evolved from generation X is on the</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion">
                                    <div class="accordion-title">
                                        <h4>
                                            Can you help with tile selection and design?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Bring to the table win-win survival strategies to ensure proactive
                                                domination. At the end of the day, going forward, a new normal that has
                                                evolved from generation X is on the</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion active">
                                    <div class="accordion-title">
                                        <h4>
                                            What types of tiles are available from a tiles company?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Bring to the table win-win survival strategies to ensure proactive
                                                domination. At the end of the day, going forward, a new normal that has
                                                evolved from generation X is on the</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion">
                                    <div class="accordion-title">

                                        <h4>
                                            How do I choose the right tiles for my project?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->

                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Bring to the table win-win survival strategies to ensure proactive
                                                domination. At the end of the day, going forward, a new normal that has
                                                evolved from generation X is on the</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion">
                                    <div class="accordion-title">
                                        <h4>
                                            Are there eco-friendly tile options available?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Bring to the table win-win survival strategies to ensure proactive
                                                domination. At the end of the day, going forward, a new normal that has
                                                evolved from generation X is on the</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                            </div>
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.faq-page section-space -->
        @endsection
        @section('jscontent')
        @endsection
