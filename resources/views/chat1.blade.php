{{--@extends('layouts.app')--}}
{{--@section('title', 'Chat')--}}
{{--@section('content')--}}
{{--@include('include.css')--}}
{{--<div class="row">--}}
{{--    @include('include.sidebar')--}}

{{--    <div class="col-10 gradient">--}}
{{--        <div class="container">--}}
{{--            <div class="panel-body">--}}
{{--                <chat-messages :messages="messages"></chat-messages>--}}
{{--            </div>--}}



{{--            @include('include.input')--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



{{--@endsection--}}

<!-- resources/views/chat.blade.php -->
{{--@php dd($user);@endphp--}}
@extends('layouts.app')
@section('title', 'Chat')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Chats</div>

                    <div class="panel-body">
                        <chat-messages :messages="messages"></chat-messages>
                    </div>
                    <div class="panel-footer">
                        <chat-form
                            v-on:messagesent="addMessage"
                            :user="{{ Auth::user() }}"
                        ></chat-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

