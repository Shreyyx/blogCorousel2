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
                    <h2 class="page-header__title">FAQ</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_4') }}">Home</a></li>
                        <li><span>faq's</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

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
                                            What are the different types of marble available?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Customers often want to know about the variety of marble options to choose
                                                from, including colors, patterns, and finishes.</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion">
                                    <div class="accordion-title">
                                        <h4>
                                            How do I care for and maintain my marble surfaces?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>This question addresses concerns about maintaining the beauty and longevity
                                                of marble countertops, floors, and other installations.</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion active">
                                    <div class="accordion-title">
                                        <h4>
                                            What is the difference between marble and other stone materials like granite or
                                            quartz?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Comparing marble with other popular stone materials helps customers make
                                                informed decisions based on factors like durability, aesthetics, and
                                                maintenance requirements.</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion">
                                    <div class="accordion-title">

                                        <h4>
                                            What is the pricing structure for marble products?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->

                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Cost is a significant consideration for customers, so they often inquire
                                                about pricing details, including factors that influence costs such as type
                                                of marble, size of the project, and installation complexity.</p>
                                        </div><!-- /.accordian-content -->
                                    </div>
                                </div><!-- /.accordian-item -->
                                <div class="accordion">
                                    <div class="accordion-title">
                                        <h4>
                                            Can marble be used in outdoor applications?
                                            <span class="accordion-title__icon"></span><!-- /.accordion-title__icon -->
                                        </h4>
                                    </div><!-- /.accordian-title -->
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Many customers wonder about the suitability of marble for outdoor projects
                                                like patios, pool decks, and facades, as well as the maintenance
                                                requirements for such installations.</p>
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
