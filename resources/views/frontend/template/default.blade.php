<!doctype html>
<html lang="pt_BR">
<head>
    @include('frontend.template.partials._head')
</head>
<body>
    @include('frontend.template.partials._nav')

    @yield('content')

    @include('frontend.template.partials._footer')

    @include('frontend.template.partials._scripts')

    @yield('scripts')
</body>
</html>