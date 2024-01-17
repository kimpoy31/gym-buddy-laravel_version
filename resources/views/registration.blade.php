@extends('layout')
@section("title", "Login")
@section('content')
    <div class="container-xxl d-flex justify-content-center">
        <div class="card p-4 mt-4 w-100 gap-2" style="max-width:380px"> 
            <form method="POST" action="{{route("registration.post")}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    @error('name')
                        <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                    @error('email')
                        <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                        <div class="text-danger my-2">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @if (session()->has("error"))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
        </div>
    </div>
@endsection
