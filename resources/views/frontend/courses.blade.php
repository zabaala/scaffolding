@extends('frontend.template.pages')
@section('content')

    <section class="courses">
        <div class="container">
            <h1 class="text-center">Os melhores cursos, num só lugar.</h1>
            <h2 class="text-center">Feito por nós, para você.</h2>

            @for($i=0; $i<5; $i++)

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

            @endfor


            <div class="row">
                <div class="col-md-12 text-center all-courses">

                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </section>

@endsection
