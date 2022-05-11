
@extends('layout.master')

@section('menu-bar')

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>SuperMarket</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Inicio</a>
                <a href="about.html" class="nav-item nav-link">Sobre Nosotros</a>
                <a href="courses.html" class="nav-item nav-link">Productos</a>
               
                <a href="contact.html" class="nav-item nav-link">Contactanos</a>
            </div>
            <a href="" class="btn btn-warning py-4 px-lg-5 d-none d-lg-block">Inicia Sesión </a>
        </div>
    </nav>
    <!-- Navbar End -->

@endsection