@extends('backend.template.default')

<?php
$status = isset($model) ? $model->status : old('status');
$titulo = isset($model) ? $model->titulo : old('titulo');
$action = isset($model) ? 'backend::banners_update' : 'backend::banners_store'; ?>

@section('content')
    <div class="jumbotron title">
        <div class="container">
            <h1>
                Banners <small>/edit</small>
                <span class="pull-right">
                    <a href="{{ route('backend::banners_index') }}" class="btn cancel">cancelar</a>
                    <a href="#" class="btn btn-lg btn-success submit">Salvar Registro</a>
                </span>
            </h1>

        </div>
    </div>

    <main class="container">
        <form action="{{ route($action) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ isset($model) ? $model->id : '' }}">
            {{ csrf_field() }}
            <div class="row">

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="titulo">Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="0" {{ $status=='0' ? 'selected' : '' }}>Bloqueado</option>
                            <option value="1" {{ $status=='1' ? 'selected' : '' }}>Liberado</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="imagem">
                            Imagem
                            <?php
                                if(isset($model) && $model->imagem) {
                                    echo '<a href="'.Storage::url($model->imagem).'" target="_new"><small>(ver)</small></a>';
                                }
                            ?>
                        </label>
                        <input type="file" name="imagem" id="imagem" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" value="{{ $titulo }}" required>
                    </div>
                </div>

            </div>
        </form>
    </main>
@endsection

@section('scripts')
    <script>
        jQuery(function($){
            $('a.submit').click(function(e){
                $('form').submit();
                console.log('clicked')
            })
        });
    </script>
@endsection