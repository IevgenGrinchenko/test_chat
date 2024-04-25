@extends('layouts.app')
@section('title', 'Chat')
@section('content')
@include('include.css')
<div class="row">

    <div class="col-2 border-end border-black bg-secondary vh-100" id="user_list">
{{--        <ul>--}}
{{--            <li>aaaaaaaa</li>--}}
{{--            <li>aaaaaaaa</li>--}}
{{--            <li>aaaaaaaa</li>--}}
{{--            <li>aaaaaaaa</li>--}}
{{--            <li>aaaaaaaa</li>--}}
{{--            <li>aaaaaaaa</li>--}}
{{--        </ul>--}}
    </div>
    <div class="col-10 gradient container" id="app">
        <div class="row">

            <div>
                <chat-messages :messages="messages"></chat-messages>
            </div>

            <chat-form
                v-on:messagesent="addMessage"
                :user="{{ Auth::user() }}" class="fixed-bottom"
            ></chat-form>
        </div>
    </div>
</div>



@endsection
