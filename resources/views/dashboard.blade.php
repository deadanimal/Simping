@extends('layouts.basic')

@section('content')
    <div class="row my-3">
        <div class="col-xl-3">
            <h1> Dashboard </h1>

            @role('brand')
                <a href="/billing-portal"><button class="btn btn-outline-success my-3" type="button">Billing Portal</button></a>
            @endrole            

            <form action="/logout" method="POST">
                @csrf
                <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>




        </div>
        <div class="col-xl-6">
            <div class="card mt-3">
                
                <div class="card-body">


                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="{{$user->email}}" disabled>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control" placeholder="{{$user->name}}" disabled>
                    </div>     
                    
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>    
                    
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control">
                    </div>                       

                </div>

                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-primary" type="submit">Update Password</button>
                </div>                

                
            </div>            
        </div>
        <div class="col-xl-4">

            @role('brand')
   
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
