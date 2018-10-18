@extends('templates.app')
@push('styles')
    {!! Html::style('css/app.css') !!}
@endpush
@push('scripts')
    {!! Html::script('js/app.js') !!}
@endpush
<style>
    .list-group{
        overflow-y: scroll;
        height: 200px;
    }
</style>
@section('content')
    <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active">Chat Room <span class="badge badge-pill badge-danger">@{{ numberOfUsers }}</span></li>
                <div class="badge badge-pill">@{{ typing }}</div>
                <ul class="list-group" v-chat-scroll>
                    <message
                            v-for="value, index in chat.message"
                            :key="value.index"
                            :color="chat.color[index]"
                            :user="chat.user[index]"
                            :time="chat.time[index]"
                            >
                        @{{ value }}
                    </message>
                </ul>
                <input type="text" class="form-control" placeholder="Escreva sua mensagem aqui..." v-model="message"
                       @keyup.enter='send'>
            </div>
        </div>
    </div>
@endsection