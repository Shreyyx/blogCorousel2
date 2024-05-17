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
                    <h2 class="page-header__title">our team</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_4') }}">Home</a></li>
                        <li><span>our team</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="team-one team-one--page section-space">
                <div class="container">
                    <div class="row gutter-y-30">

                        @foreach ($data as $teams)
                            <div class="col-md-6 col-lg-4">
                                <div class="team-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                                    <div class="team-card__image">
                                        <img src="{{ asset('TeamImages/' . $teams->image) }}" alt="">
                                        <div class="team-card__hover">
                                            <div class="team-card__identity">
                                                <div class="team-card__identity__inner">
                                                    <h3 class="team-card__name"><a
                                                            href="{{ Route('team_details') }}">{{ $teams->name }}</a>
                                                    </h3><!-- /.team-card__name -->
                                                    <span
                                                        class="team-card__designation">{{ $teams->title }}</span><!-- /.team-card__designation -->
                                                </div><!-- /.team-card__identity__inner -->
                                            </div><!-- /.team-card__identity -->
                                        </div><!-- /.team-card__hover -->
                                    </div><!-- /.team-card__image -->
                                </div><!-- /.team-card -->
                            </div>
                        @endforeach

                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.team-one section-space -->


        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection
