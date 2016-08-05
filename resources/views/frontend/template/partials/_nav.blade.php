<header>
    <nav class="navbar navbar-default navhome">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand brand" href="{{ route('index') }}"><span>dot.</span>Syntax</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('index') }}">Início</a></li>
                    <li><a href="{{ route('about-us') }}">Sobre Nós</a></li>
                    <li><a href="cursos.html">Cursos</a></li>
                    <li><a href="calendario.html">Calendário</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>