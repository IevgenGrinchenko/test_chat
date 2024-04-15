@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <form action="{{route('register')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px;">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nickname</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
