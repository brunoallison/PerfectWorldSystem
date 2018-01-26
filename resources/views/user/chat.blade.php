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
            <div class="offset-4 col-4">
                <li class="list-group-item active">Chat Room</li>
                <ul class="list-group" v-chat-scroll>
                    <message
                            v-for="value in chat.message"
                            :key="value.index"
                            color="warning"
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