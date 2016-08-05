<!doctype html>
<html lang="pt_BR">
<head>
    @include('frontend.template.partials._head')
</head>
<body>
    @include('frontend.template.partials._nav')

    <div class="banner static">
        <figure>
            <img src="{{ asset('dotsyntax-theme/assets/imgs/banners/b3.jpg') }}" alt="{{ $theme_actual_section }}">
            <div class="container">
                <figcaption>
                    <h1>{{ $theme_actual_section }}</h1>
                </figcaption>
            </div>
        </figure>
    </div>

    @yield('content')

    @if($theme_show_courses)
        <section class="courses">
            <div class="container">
                <h1 class="text-center">Os melhores cursos, num só lugar.</h1>
                <h2 class="text-center">Feito por nós, para você.</h2>

                <div class="row">

                    <div class="col-md-4 col-sm-12 course">
                        <div class="row">
                            <div class="thumb col-md-4 col-sm-4 col-xs-4">
                                <a href="{{ route('course-details', ['php-com-laravel-framework']) }}"><img src="{{ asset('dotsyntax-theme/assets/imgs/courses-ico/laravel.png') }}" alt="Laravel"></a>
                            </div>
                            <div class="description col-md-8 col-sm-8 col-xs-8">
                                <h3><a href="{{ route('course-details', ['php-com-laravel-framework']) }}">PHP + Laravel</a></h3>
                                <p class="hidden-md"><a href="{{ route('course-details', ['php-com-laravel-framework']) }}">Aprenda a desenvolver PHP utilizando o Framework Laravel.</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 course">
                        <div class="row">
                            <div class="thumb col-md-4 col-sm-4 col-xs-4">
                                <a href="{{ route('course-details', ['mikrotik']) }}"><img src="{{ asset('dotsyntax-theme/assets/imgs/courses-ico/mikrotik.png') }}" alt="Mikrotik"></a>
                            </div>
                            <div class="description col-md-8 col-sm-8 col-xs-8">
                                <h3><a href="{{ route('course-details', ['mikrotik']) }}">Mikrotik</a></h3>
                                <p class="hidden-md"><a href="{{ route('course-details', ['mikrotik']) }}">Configure redes com Mikrotik.</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 course">
                        <div class="row">
                            <div class="thumb col-md-4 col-sm-4 col-xs-4">
                                <a href="{{ route('course-details', ['ubuntu']) }}"><img src="{{ asset('dotsyntax-theme/assets/imgs/courses-ico/ubuntu.png') }}" alt="Ubuntu"></a>
                            </div>
                            <div class="description col-md-8 col-sm-8 col-xs-8">
                                <h3><a href="{{ route('course-details', ['ubuntu']) }}">Ubuntu</a></h3>
                                <p class="hidden-md"><a href="{{ route('course-details', ['ubuntu']) }}">Domine as técnicas para gerenciar o Ubuntu.</a></p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 text-center all-courses"><a href="{{ route('courses') }}" class="btn btn-sm btn-default">Confira todos os cursos</a></div>
                </div>

            </div>
        </section>
    @endif

    @include('frontend.template.partials._footer')

    @include('frontend.template.partials._scripts')

    @yield('scripts')
</body>
</html>