@extends('layouts.basic')

@section('content')
    <div class="row my-3">
        <div class="col-xl-2">

        </div>
        <div class="col-xl-8 col-12">            
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h2>Create a Brief</h2>
                </div>
                <div class="card-body">
                    <form action="/briefs" method="POST">
                        @csrf

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Brief Title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Brand Description</label>
                        <textarea class="form-control" name="brand_description" placeholder="Brand Description" rows=5></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Brief Description</label>
                        <textarea class="form-control" name="brief_description" placeholder="Brief Description" rows=5></textarea>
                    </div>   

                    <div class="mb-3">
                        <label class="form-label">Reference URL</label>
                        <input type="text" name="reference_url" class="form-control" placeholder="URL To For Reference">
                    </div>                                                      

                    <div class="d-grid gap-2 mt-3">
                        <button class="btn btn-primary" type="submit">Create Brief!</button>
                    </div>                    
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
