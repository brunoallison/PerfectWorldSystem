@extends('templates.app')
@push('styles')
    {!! Html::style('css/datatables.min.css') !!}
    {!! Html::style('js/libs/datepicker/css/bootstrap-datepicker3.css') !!}
@endpush

@push('scripts')
    {!! Html::script('js/libs/datepicker/js/bootstrap-datepicker.min.js') !!}
    {!! Html::script('js/libs/datepicker/locales/bootstrap-datepicker.pt-BR.min.js') !!}
    {!! Html::script('js/libs/main.js') !!}
@endpush
@section('content')
    <div class="container">
        <div class="row">
            @include('flash::message')
            @include('errors._check_form')
            <div class="col-md-12">
                {!! Form::open(['route' => 'user.store', 'method' => 'post']) !!}
                <h3>Dados da Conta</h3>
                <div class="form-group">
                    <label>Login</label>
                    {!! Form::text('name',null,['class' => 'form-control','required','placeholder' => 'Digite seu login', 'required', 'autofocus']) !!}
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    {!! Form::password('passwd',['class' => 'form-control','required','placeholder' => 'Digite sua Senha', 'required']) !!}
                </div>
                <div class="form-group">
                    <label>Confirme a Senha</label>
                    {!! Form::password('password_confirmation',['class' => 'form-control', 'id' => 'password-confirm', 'placeholder' => 'Confirme a Senha', 'required']) !!}
                </div>
                <h3>Dados Pessoais</h3>
                <div class="form-group">
                    <label>Nome Completo</label>
                    {!! Form::text('truename',null,['class' => 'form-control','required','placeholder' => 'Nome Completo', 'required']) !!}
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    {!! Form::email('email',null,['class' => 'form-control','required', 'required']) !!}
                </div>
                <div class="form-group">
                    <label>Pergunta Secreta</label>
                    {!! Form::text('qq',null,['class' => 'form-control','required','placeholder' => 'Pergunta Secreta', 'required']) !!}
                </div>
                <div class="form-group">
                    <label>Resposta Secreta</label>
                    {!! Form::text('answer',null,['class' => 'form-control','required','placeholder' => 'Resposta Secreta', 'required']) !!}
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
                    {!! Form::text('birthday',null,['class' => 'form-control calendar','required', 'required']) !!}
                </div>
                {!! Recaptcha::render() !!}
                <div class="form-group">
                    <button type="submit" class="btn btn-default-dark">Cadastrar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection