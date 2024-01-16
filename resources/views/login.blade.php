@extends('layout')
@section("title", "Login")
@section('content')
    <div class="container-xxl d-flex justify-content-center">
        <div class="card p-4 mt-4 w-100 gap-2" style="max-width:380px">
            <form action="{{ route('login.post')}}" method="POST" autocomplete="off">
                @csrf
                <div class="mb-3 has-validation">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                    @error('email')
                        <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control @error('email') is-invalid @enderror" name="password">
                    @error('password')
                        <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
        </div>
    </div>
@endsection

{{-- My Own summary and understanding --}}

{{-- @extends("name") means this exact file is the child component which will be rendered on the
component tree. It will be rendered on the @section('content')--}}

{{-- @section("title", "Login") this will override the defined section on layout.blade.php --}}