@extends('layout')
@section('title', 'Login')
@section('content')
    <div class="container">
        <form action="{{route('login')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px;">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
{{--            <div class="mb-3 form-check">--}}
{{--                <input type="checkbox" class="form-check-input" id="check1">--}}
{{--                <label class="form-check-label" for="check1">Check me out</label>--}}
{{--            </div>--}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
