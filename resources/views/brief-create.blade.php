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
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Title</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="Example input placeholder">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Description</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2"
                            placeholder="Another input placeholder">
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
