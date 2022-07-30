<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body class="antialiased"  data-layout-config='{"darkMode":false}'>
           <!-- NAVBAR START -->
           <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
            <div class="container">

                <!-- logo -->
                <a href="index.html" class="navbar-brand me-lg-5">
                    <img src="assets/images/logo.png" alt="" class="logo-dark" height="18" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <!-- menus -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <!-- left menu -->
                    <ul class="navbar-nav me-auto align-items-center">
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link active" href="">Home</a>
                        </li>
                        <li class="nav-item mx-lg-1">
                            <a class="nav-link" href="">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <!-- START HERO -->
            <section class="hero-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="mt-md-4">
                                <div>
                                    <span class="badge bg-danger rounded-pill">New</span>
                                    <span class="text-white-50 ms-1">Welcome to new site</span>
                                </div>
                                <h2 class="text-white fw-normal mb-4 mt-3 hero-title">
                                   <p> Super Baker panel </p>
                                </h2>
    
                                <p class="mb-4 font-16 text-white-50">Connect all customer data streams to reflect the unique, personal, and value-driven relationships you have with your customers.</p>
                                @if (Route::has('login'))
                               
                                    @auth
                                        <a href="{{ url('/home') }}" class="btn btn-success">My profile  <i class="fa-solid fa-house-user"></i></a>
                                        
                                        @else
                                        <a href="{{ route('login') }}" class="btn btn-success">Login <i class="fa-solid fa-right-to-bracket"></i></a> 
                                        
                
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="btn btn-success">Register</a> 
                                        @endif
                                    @endauth
                            
                                @endif
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-2">
                            <div class="text-md-end mt-3 mt-md-0">
                                <img src="assets/images/startup.svg" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END HERO -->
           <!-- START SERVICES -->
           <section class="py-5">
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <h1 class="mt-0"><i class="fa-solid fa-infinity"></i></h1>
                            <h3>The admin is fully <span class="text-primary">control </span> and easy to <span
                                    class="text-primary">Use</span></h3>
                            <p class="text-muted mt-2">Connect all customer data streams to reflect the unique,personal, 
                                <br>and value-driven relationships you have with your customers.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-desktop text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Responsive Layouts</h4>
                            <p class="text-muted mt-2 mb-0">Et harum quidem rerum as expedita distinctio nam libero tempore
                                cum soluta nobis est cumque quo.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-vector-square text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Based on Bootstrap UI</h4>
                            <p class="text-muted mt-2 mb-0">Temporibus autem quibusdam et aut officiis necessitatibus saepe
                                eveniet ut sit et recusandae.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-presentation text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Creative Design</h4>
                            <p class="text-muted mt-2 mb-0">Nam libero tempore, cum soluta a est eligendi minus id quod
                                maxime placeate facere assumenda est.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-apps text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Multiple Applications</h4>
                            <p class="text-muted mt-2 mb-0">Et harum quidem rerum as expedita distinctio nam libero tempore
                                cum soluta nobis est cumque quo.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-shopping-cart-alt text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Ecommerce Pages</h4>
                            <p class="text-muted mt-2 mb-0">Temporibus autem quibusdam et aut officiis necessitatibus saepe
                                eveniet ut sit et recusandae.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="text-center p-3">
                            <div class="avatar-sm m-auto">
                                <span class="avatar-title bg-primary-lighten rounded-circle">
                                    <i class="uil uil-grids text-primary font-24"></i>
                                </span>
                            </div>
                            <h4 class="mt-3">Multiple Layouts</h4>
                            <p class="text-muted mt-2 mb-0">Nam libero tempore, cum soluta a est eligendi minus id quod
                                maxime placeate facere assumenda est.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/06cccea7d4.js" crossorigin="anonymous"></script>
</html>
