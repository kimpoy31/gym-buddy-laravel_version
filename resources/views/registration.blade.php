@extends('layout')
@section("title", "Login")
@section('content')
    <div class="container-xxl d-flex justify-content-center">
        <div class="card p-4 mt-4 w-100" style="max-width:380px"> 
            <form method="POST" action="{{route("registration.post")}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="password" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
