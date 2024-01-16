@extends('layout')
@section("title", "Login")
@section('content')
    <div class="container-xxl d-flex justify-content-center">
        <div class="card p-4 mt-4">
            <form style="max-width:480px">
                <div class="mb-3">
                    <label for="register_fullname" class="form-label">Full Name</label>
                    <input type="password" class="form-control" id="register_fullname">
                </div>
                <div class="mb-3">
                    <label for="register_email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="register_email" aria-describedby="emailHelp">
                <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="register_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="register_password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection