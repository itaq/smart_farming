@extends('layouts.app-master')

<!-- Masthead-->
@auth
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">SMART FARMING</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <a class="btn btn-primary btn-xl" href="/services">Services</a>
            </div>

        </div>
    </div>
</header>
@endauth

@guest
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">SMART FARMING</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p>Silakan login terlebih dahulu</p>
                <a class="btn btn-primary btn-xl" href="/login">Login</a>
            </div>

        </div>
    </div>
</header>
@endguest
<!-- <header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">SMART FARMING</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <a class="btn btn-primary btn-xl" href="/login">Login</a>
            </div>

        </div>
    </div>
</header>
</body> -->

</html>