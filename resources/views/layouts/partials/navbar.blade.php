<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Smart Farming</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <!-- <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul> -->
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    @auth
                    {{auth()->user()->name}}
                    <li class="nav-item">
                        <a href="{{ route('logout.perform') }}" class="btn btn-primary btn-l">Logout</a>
                    </li>
                    @endauth

                    @guest
                    <li class="nav-item">
                        <a href="{{ route('login.perform') }}" class="btn btn-primary btn-l">Login</a>
                        <a href="{{ route('register.perform') }}" class="btn btn-light btn-l">Sign-up</a>
                    </li>
                    @endguest
                </div>
            </div>


        </nav>
    </div>
    </div>
</header>