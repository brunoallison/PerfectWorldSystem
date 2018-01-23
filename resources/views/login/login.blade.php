@extends('templates.app')
@section('content')

    <h2 align="center">Perfect World X</h2>

    <div class="panel panel-default col-md-4 col-md-offset-4">
        <div class="panel-heading">
            <h3 class="panel-title" align="center">Painel do Jogador</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-10 col-md-offset-1">
                @include('errors._check_form')
                @include('flash::message')
                <div class="container-login center-block">
                </div>
                {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
                <div class="form-group">
                    <label>Login</label>
                    {!! Form::text('name',null,['class' => 'form-control','required','placeholder' => 'Digite seu Login']) !!}
                </div>
                <div class="form-group">
                    <label>Senha</label>
                    {!! Form::password('passwd',['class' => 'form-control','required','placeholder' => 'Digite sua Senha']) !!}
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default-dark">Entrar</button>
                </div>
                <a href="#">Esqueci minha senha.</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection