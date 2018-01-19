@extends('templates.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('flash::message')
            <div class="col-md-12">
                {!! Form::open(['route' => 'user.store', 'method' => 'post']) !!}
                <h3>Dados da Conta</h3>
                <div class="form-group">
                    <label>Login</label>
                    {!! Form::text('name',null,['class' => 'form-control','required','placeholder' => 'Digite seu login']) !!}
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    {!! Form::password('passwd',['class' => 'form-control','required','placeholder' => 'Digite sua Senha']) !!}
                </div>
                <div class="form-group">
                    <label>Confirme a Senha</label>
                    {!! Form::password('passwd2',['class' => 'form-control','required','placeholder' => 'Confirme a Senha']) !!}
                </div>
                <h3>Dados Pessoais</h3>
                <div class="form-group">
                    <label>Nome Completo</label>
                    {!! Form::text('truename',null,['class' => 'form-control','required','placeholder' => 'Nome Completo']) !!}
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    {!! Form::email('email',null,['class' => 'form-control','required']) !!}
                </div>
                <div class="form-group">
                    <label>Pergunta Secreta</label>
                    {!! Form::text('qq',null,['class' => 'form-control','required','placeholder' => 'Pergunta Secreta']) !!}
                </div>
                <div class="form-group">
                    <label>Resposta Secreta</label>
                    {!! Form::text('answer',null,['class' => 'form-control','required','placeholder' => 'Resposta Secreta']) !!}
                </div>
                <label>Gênero</label>
                <label class="radio-inline">
                    {!! Form::radio('gender', '1', true) !!} Masculino
                </label>
                <label class="radio-inline">
                    {!! Form::radio('gender', '0', false) !!} Feminino
                </label>
                <div class="form-group">
                    <label>Data de Nascimento</label>
                    {!! Form::date('birthday',null,['class' => 'form-control','required']) !!}
                </div>
                {!! Recaptcha::render() !!}
                <div class="form-group">
                    <button type="submit" class="btn btn-default-dark">Entrar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection