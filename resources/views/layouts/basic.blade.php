<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simping</title>
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.2.2/cosmo/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

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

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                    {{-- <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg> --}}

                </a>
                <p class="text-muted">2022 &copy; DCB Platform Limited</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">

            </div>

            {{-- <div class="col mb-3">
                <h5>Token Pool</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="/about" class="nav-link p-0 text-muted">About</a></li>
                    <li class="nav-item mb-2"><a href="/faq" class="nav-link p-0 text-muted">FAQ</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Agreement</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="/terms" class="nav-link p-0 text-muted">Terms of Service</a>
                    </li>
                    <li class="nav-item mb-2"><a href="/maker-terms" class="nav-link p-0 text-muted">Market Maker
                            Agreement</a></li>
                    <li class="nav-item mb-2"><a href="/privacy" class="nav-link p-0 text-muted">Privacy</a></li>
                </ul>
            </div> --}}
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>

</html>
