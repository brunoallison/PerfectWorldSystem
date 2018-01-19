@extends('templates.app')
@section('content')
    <div class="container login-container">
        <h3 class="title">Login</h3></div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                {{--@include('errors._check_form')--}}
                @include('flash::message')
                <div class="container-login center-block">
                    <div class="topo-login">
                        <p>Fazer Login</p>
                    </div>
                    {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
                    <div class="form-group">
                        <label>Usuário</label>
                        {!! Form::text('name',null,['class' => 'form-control','required','placeholder' => 'Digite seu Usuário']) !!}
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
    </div>
@endsection