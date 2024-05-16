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
                    <h2 class="page-header__title">Gallery</h2>
                    <ul class="floens-breadcrumb list-unstyled">
                        <li><i class="icon-home"></i> <a href="{{ Route('index_2') }}">Home</a></li>
                        <li><span>Gallery</span></li>
                    </ul><!-- /.thm-breadcrumb list-unstyled -->
                </div><!-- /.container -->
            </section><!-- /.page-header -->

            <section class="gallery-one section-space">
                <div class="container-fluid">

                    <div class="row">
                        @foreach ($data as $gallery)
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="gallery-one__card">
                                    <img src="{{ asset('GalleryImages/' . $gallery->image) }}" alt="">
                                    <div class="gallery-one__card__hover">
                                        <a href="{{ asset('GalleryImages/' . $gallery->image) }}" class="img-popup">
                                            <span class="gallery-one__card__icon"></span>
                                        </a>
                                    </div><!-- /.gallery-one__card__hover -->
                                </div><!-- /.gallery-one__card -->
                            </div>
                        @endforeach
                    </div>

                </div><!-- /.container-fluid -->
            </section><!-- /.gallery-one section-space -->
        </div><!-- /.page-wrapper -->
    @endsection
    @section('jscontent')
    @endsection
