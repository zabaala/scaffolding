<!doctype html>
<html lang="en">
<head>
    @include('backend.template.partials._head')
</head>
<body>

    @include('backend.template.partials._nav')

    @if(session('success'))
        <div class="alert alert-success" >
            <div class="container">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')

    @include('backend.template.partials._footer')
    @include('backend.template.partials._scripts')

</body>
</html>