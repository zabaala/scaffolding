@extends('frontend.template.default')

@section('content')
    <div
            class="banner cycle-slideshow"
            data-cycle-carousel-visible="1"
            data-cycle-timeout="5000"
            data-cycle-swipe="true"
            data-cycle-swipe-fx="scrollHorz"
            data-cycle-fx="fade"
            data-cycle-slides=">figure"
        >
        <figure>
            <img src="{{ asset('dotsyntax-theme/assets/imgs/banners/b1.jpg') }}" alt="Route the World with Mikrotik">
            <div class="container">
                <figcaption>
                    <h5>cursos</h5>
                    <h1><a href="curso.html">Route the World with Mikrotik</a></h1>
                    <a href="curso.html" class="btn btn-default btn-lg hidden-sm hidden-xs">saiba mais</a>
                </figcaption>
            </div>
        </figure>

        <figure>
            <img src="{{ asset('dotsyntax-theme/assets/imgs/banners/b2.jpg') }}" alt="Windows Server 2012">
            <div class="container">
                <figcaption>
                    <h5>cursos</h5>
                    <h1><a href="curso.html">Windows Server 2012</a></h1>
                    <a href="curso.html" class="btn btn-default btn-lg hidden-sm hidden-xs">saiba mais</a>
                </figcaption>
            </div>
        </figure>

        <figure>
            <img src="{{ asset('dotsyntax-theme/assets/imgs/banners/b3.jpg') }}" alt="Formação PHP com Laravel">
            <div class="container">
                <figcaption>
                    <h5>cursos</h5>
                    <h1><a href="curso.html">Formação PHP com Laravel</a></h1>
                    <a href="curso.html" class="btn btn-default btn-lg hidden-sm hidden-xs">saiba mais</a>
                </figcaption>
            </div>
        </figure>
    </div>

    <section class="courses">
        <div class="container">
            <h1 class="text-center">Os melhores cursos, num só lugar.</h1>
            <h2 class="text-center">Feito por nós, para você.</h2>

            <div class="row">

                <div class="col-md-4 col-sm-12 course">
                    <div class="row">
                        <div class="thumb col-md-4 col-sm-4 col-xs-4">
                            <a href="curso.html"><img src="{{ asset('dotsyntax-theme/assets/imgs/courses-ico/laravel.png') }}" alt="Laravel"></a>
                        </div>
                        <div class="description col-md-8 col-sm-8 col-xs-8">
                            <h3><a href="curso.html">PHP + Laravel</a></h3>
                            <p class="hidden-md"><a href="curso.html">Aprenda a desenvolver PHP utilizando o Framework Laravel.</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 course">
                    <div class="row">
                        <div class="thumb col-md-4 col-sm-4 col-xs-4">
                            <a href="curso.html"><img src="{{ asset('dotsyntax-theme/assets/imgs/courses-ico/mikrotik.png') }}" alt="Mikrotik"></a>
                        </div>
                        <div class="description col-md-8 col-sm-8 col-xs-8">
                            <h3><a href="curso.html">Mikrotik</a></h3>
                            <p class="hidden-md"><a href="curso.html">Configure redes com Mikrotik.</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 course">
                    <div class="row">
                        <div class="thumb col-md-4 col-sm-4 col-xs-4">
                            <a href="curso.html"><img src="{{ asset('dotsyntax-theme/assets/imgs/courses-ico/ubuntu.png') }}" alt="Ubuntu"></a>
                        </div>
                        <div class="description col-md-8 col-sm-8 col-xs-8">
                            <h3><a href="curso.html">Ubuntu</a></h3>
                            <p class="hidden-md"><a href="curso.html">Domine as técnicas para gerenciar o Ubuntu.</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12 text-center all-courses"><a href="cursos.html" class="btn btn-sm btn-default">Confira todos os cursos</a></div>
            </div>

        </div>
    </section>

@endsection

@section('scripts')
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
@endsection