@extends('frontend.template.pages')
@section('content')
    <article class="content">
        <div class="container">
            <p>
                Nossa equipe está sempre à disposição, aguardando o seu contato.
                Utilize o formulário de contato abaixo, para nos enviar sua dúvida, crítica ou sugestão.<br />
                Nós responderemos com a maior brevidade possível.
            </p>
            <form action="?" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Informe o seu nome" required>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Informe o seu e-mail" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Informe o seu telefone">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="assunto">Motivo do contato:</label>
                                    <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Informe o motivo do contato" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mensagem">Mensagem:</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="9" placeholder="Digite aqui a sua mensagem..." required></textarea>
                        </div>
                    </div>

                </div>

                <div class="text-right">
                    <br><a href="#enviar" class="btn btn-success">Enviar Mensagem</a>
                </div>
            </form>

        </div>

    </article>

@endsection