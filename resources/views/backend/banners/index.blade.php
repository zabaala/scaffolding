@extends('backend.template.default')
@section('content')
    <div class="jumbotron title">
        <div class="container">
            <h1>Banners <a href="{{ route('backend::banners_create') }}" class="btn btn-lg btn-success pull-right">Novo</a></h1>
        </div>
    </div>

    <main class="container">
        <table class="table">
            <thead>
                <tr>
                    <th width="80" class="text-right">#</th>
                    <th>Status</th>
                    <th>Título</th>
                    <th width="100">Ações</th>
                </tr>
            </thead>
            <tbody>

                @if(! count($models))
                    <tr>
                        <td colspan="4" class="text-center">Nenhum registro encontrado.</td>
                    </tr>
                @endif

                @foreach($models as $model)
                    <tr>
                        <td class="text-right">{{ $model->id }}</td>
                        <td>{{ $model->arrStatus[$model->status] }}</td>
                        <td>{{ $model->titulo }}</td>
                        <td>
                            <a href="{{ route('backend::banners_edit', $model->id) }}" class="btn btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="{{ route('backend::banners_delete', $model->id) }}" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection