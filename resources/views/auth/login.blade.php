@extends('layouts.auth')

@section('content')
    <form action="/login" method="POST">
        @csrf
        {{-- <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72"
        height="57"> --}}
        <h1 class="h3 mb-3 fw-normal">Simping</h1>

        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>            

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        {{-- <p class="mt-3"><a href="/forgot-password">Forgot password?</a></p> --}}
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
@endsection
