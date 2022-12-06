@extends('layouts.basic')

@section('content')
    <div class="row my-3">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-header bg-secondary text-white">Profile</div>
                <div class="card-body">
                    
                    {{ Auth::user()->name }}


                    <form action="/logout" method="POST">
                        @csrf
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-danger" type="submit">Logout</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>
        <div class="col-xl-9">

            <div class="card">
                <div class="card-header bg-secondary text-white">Details</div>
                <div class="card-body">
                </div>
            </div>

        </div>
    </div>
@endsection
