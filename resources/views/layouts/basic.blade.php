<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simping</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.2/journal/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">        

    @yield('styles')

</head>

<body>
    @include('sweetalert::alert')
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Simping</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    @role('brand')
                        <li class="nav-item">
                            <a class="nav-link" href="/briefs">Brief</a>
                        </li>
                    @endrole
                    @role('creator')
                        <li class="nav-item">
                            <a class="nav-link" href="/contents">Content</a>
                        </li>
                    @endrole
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">Dashboard</a>
                    </li>                    

                </ul>


                @role('brand')
                    <a href='/create-brief'>
                        <button class="btn btn-success mx-2 my-2 my-sm-0">Create a Brief</button>
                    </a>
                @endrole
                @role('creator')
                    <a href='/create-content'>
                        <button class="btn btn-success mx-2 my-2 my-sm-0">Join a Challenge</button>
                    </a>
                @endrole
                @guest
                    <a href='/dashboard'>
                        <button class="btn btn-success mx-2 my-2 my-sm-0">Earn Reward Now!</button>
                    </a>
                @endguest


            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        <footer class="row py-3 my-3 border-top">
            <div class="col-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    {{-- <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg> --}}

                </a>
                <p class="text-muted">2022 &copy; DCB Platform Limited</p>
            </div>



            <div class="col-3">
                <h5>Simping</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="/about" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col-3">
                <h5>Assistance</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a href="https://simping.freshdesk.com/support/tickets/new" class="nav-link p-0 text-muted">Support Ticket</a>
                    </li>    
                    <li class="nav-item mb-2"><a href="https://simping.freshdesk.com/support/home" class="nav-link p-0 text-muted">Knowledge Base</a></li>
                </ul>
            </div>            

            <div class="col-3">
                <h5>Legal</h5>
                <ul class="nav flex-column">                
                    <li class="nav-item mb-2">
                        <a href="/terms" class="nav-link p-0 text-muted">Terms of Service</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="/privacy" class="nav-link p-0 text-muted">Privacy</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>

</html>
