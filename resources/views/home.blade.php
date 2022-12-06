@extends('layouts.basic')

@section('styles')
<style>
.myVideo {
    object-fit: fill;
    min-width: 100%; 
    min-height: 100%;
    width: 100%; 
    height: auto; 
    z-index: -100;
    background-size: cover;
    overflow: hidden;
}
</style>
@endsection

@section('content')
    <div class="px-4 pt-5 my-5 text-center">
        <h1 class="display-4 fw-bold">Simping</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Simping lets everyone to earn rewards from promoting the brands that they love.
                Brands also enjoy wider marketing reach with lower costs and the highest ROI in the market.
                Register today to start reaping benefits from influencing!
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a href="/creator"><button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Join as
                        Creator</button></a>
                <a href="/brand"><button type="button" class="btn btn-info btn-lg px-4">Join as
                        Brand</button></a>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="{{ URL::asset('images/1.JPG') }}" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image"
                    width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

 

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <div class="wrapper">
                    <video autoplay muted loop class="myVideo">
                        <source src="{{ URL::asset('videos/3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Access to millions of influencers</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s
                    most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system,
                    extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="/creator"><button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Join as
                        Creator</button></a>
                <a href="/brand"><button type="button" class="btn btn-info btn-lg px-4">Join as
                        Brand</button></a>
                </div>
            </div>
        </div>
    </div>
  


        
@endsection
