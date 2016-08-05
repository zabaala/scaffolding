@extends('frontend.template.pages')

@section('content')
    <article class="content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Formação PHP com Laravel</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis eveniet id magni minima obcaecati possimus quasi rem sunt suscipit. Ab beatae cupiditate eligendi expedita laudantium! Adipisci aliquam aut minima? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis eveniet id magni minima obcaecati possimus quasi rem sunt suscipit. Ab beatae cupiditate eligendi expedita laudantium! Adipisci aliquam aut minima? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis eveniet id magni minima obcaecati possimus quasi rem sunt suscipit. Ab beatae cupiditate eligendi expedita laudantium! Adipisci aliquam aut minima? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis eveniet id magni minima obcaecati possimus quasi rem sunt suscipit. Ab beatae cupiditate eligendi expedita laudantium! Adipisci aliquam aut minima?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis eveniet id magni minima obcaecati possimus quasi rem sunt suscipit. Ab beatae cupiditate eligendi expedita laudantium! Adipisci aliquam aut minima? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis eveniet id magni minima obcaecati possimus quasi rem sunt suscipit. Ab beatae cupiditate eligendi expedita laudantium! Adipisci aliquam aut minima? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis eveniet id magni minima obcaecati possimus quasi rem sunt suscipit. Ab beatae cupiditate eligendi expedita laudantium! Adipisci aliquam aut minima? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid blanditiis eveniet id magni minima obcaecati possimus quasi rem sunt suscipit. Ab beatae cupiditate eligendi expedita laudantium! Adipisci aliquam aut minima?</p>
                </div>
                <div class="col-md-offset-1 col-md-3">
                    <div class="interest-form">
                        <p>Ficou interessado nesse curso? Preencha o formulário abaixo, que nós entraremos em contato com você.</p>
                        <form action="?" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Informe o seu nome" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="exemplo@seuemail.com" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="telefone" placeholder="(99) 99999-9999" required>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="messaege" rows="4" placeholder="Coloque aqui suas observações..."></textarea>
                            </div>

                            <button type="submit" class="btn btn-default">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection