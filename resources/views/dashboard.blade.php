@extends('layouts.basic')

@section('content')
    <div class="row my-3">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header bg-info text-white">Profile</div>
                <div class="card-body">

                    {{-- {{ Auth::user()->name }} --}}
                    email, name,
                    tiktok_handle,
                    reset_password


                    <form action="/logout" method="POST">
                        @csrf
                        <div class="d-grid gap-2 mt-3">
                            <button class="btn btn-danger" type="submit">Logout</button>
                        </div>
                    </form>

                </div>
            </div>


        </div>
        <div class="col-xl-8">

            @role('brand')
                <div class="card">
                    <div class="card-header bg-info text-white">Billing Portal</div>
                    <div class="card-body">
                        <a href="/billing-portal">Billing Portal</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-info text-white">Invoice</div>
                    <div class="card-body">
                    </div>
                </div>
            @endrole

            @role('creator')
                <div class="card">
                    <div class="card-header bg-info text-white">Reward</div>
                    <div class="card-body">
                    </div>
                </div>
            @endrole

        </div>
    </div>
@endsection
