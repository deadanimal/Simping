@extends('layouts.basic')

@section('content')
    <div class="row my-3">
        <div class="col-xl-2">


        </div>
        <div class="col-xl-8 col-12">
            <h3>Active Brief</h3>

            @forelse($briefs as $brief)
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        <h2>{{ $brief->title }}</h2>
                    </div>
                    <div class="card-body">
                        launched date, image, budget, used_budget, submissions, 
                        total views, total likes, total comments, total shares
                        top submissions
                    </div>
                </div>
            @empty
                <div class="card mt-3">
                    <div class="card-header bg-info text-white">
                        <h2>No active Brief</h2>
                    </div>
                    <div class="card-body">
                        create a new one!
                    </div>
                </div>
            @endforelse

        </div>
    </div>
@endsection
