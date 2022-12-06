@extends('layouts.auth')

@section('content')
    <form action="/register" method="POST">
        @csrf

        <input type="hidden" name="jenis" value="{{$jenis}}">

        <h1 class="h3 mb-3 fw-normal">Simping</h1>

        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" placeholder="name@example.com">
            <label>Name</label>
        </div>        

        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" placeholder="name@example.com">
            <label>Email address</label>
        </div>
        
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <label>Password</label>
        </div>    
        
        <div class="form-floating mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
            <label>Confirm Password</label>
        </div>          

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <p class="mt-3"><a href="/login">Already have an account?</a></p>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
@endsection
