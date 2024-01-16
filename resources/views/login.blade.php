@extends('layout')
@section("title", "Login")
@section('content')
    <div class="container-xxl d-flex justify-content-center">
        <div class="card p-4 mt-4 w-100" style="max-width:380px">
            <form action="{{ route('login.post')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

{{-- My Own summary and understanding --}}

{{-- @extends("name") means this exact file is the child component which will be rendered on the
component tree. It will be rendered on the @section('content')--}}

{{-- @section("title", "Login") this will override the defined section on layout.blade.php --}}