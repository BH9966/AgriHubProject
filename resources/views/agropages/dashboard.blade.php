@extends('agropages.layout')
@section('header')
<nav class="navbar navbar-expand-lg navbar-light shadow">
    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            AgroHub
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    {{-- Categories Dropdown --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"
           href="#"
           id="categoryDropdown"
           role="button"
           data-bs-toggle="dropdown"
           aria-expanded="false">
            Categories
        </a>

        <ul class="dropdown-menu shadow-sm border-0" aria-labelledby="categoryDropdown">
            {{-- @forelse($categories as $category) --}}
                <li>
                    <a class="dropdown-item">
                       {{-- href="{{ route('category.products', $category->id) }}"> --}}
                        {{-- {{ $category->name }} --}} Nguo
                    </a>
                </li>
            {{-- @empty
                <li>
                    <span class="dropdown-item text-muted">
                        No categories
                    </span>
                </li>
            @endforelse --}}
        </ul>
    </li>
                    {{-- <li class="nav-item">
                        <button type="button" class="btn btn-light ">Register</button>
                        {{-- <a class="nav-link" href="contact.html"></a> </li>--}}
                        <li class="nav-item">
                            <button class="btn btn-success me-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#registerModal">
                                Register
                            </button>
                        </li>
                    {{-- <li class="nav-item">
                        <button type="button" class="btn btn-light ">Login</button>
                        {{-- <a class="nav-link" href="contact.html"></a> </li>--}}
                    
                    <li class="nav-item">
                        <button class="btn btn-success"
                                data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                            Login
                        </button>
                    </li>
                </ul>
                {{-- start login --}}
                <div class="modal fade" id="loginModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 shadow-lg rounded-4">
                
                            <div class="modal-header border-0">
                                <h5 class="modal-title text-success fw-bold">Login to AgroHub</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                
                            <div class="modal-body px-4">
                                <form method="POST" action="#">
                                    @csrf
                
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control rounded-pill" required>
                                    </div>
                
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control rounded-pill" required>
                                    </div>
                
                                    <button type="submit"
                                            class="btn btn-success w-100 rounded-pill py-2">
                                        Login
                                    </button>
                                </form>
                            </div>
                
                            <div class="modal-footer border-0 justify-content-center">
                                <small class="text-muted">
                                    Don’t have an account?
                                    <a href="#" class="text-success fw-semibold"
                                       data-bs-dismiss="modal"
                                       data-bs-toggle="modal"
                                       data-bs-target="#registerModal">
                                        Register
                                    </a>
                                </small>
                            </div>
                
                        </div>
                    </div>
                </div>
                


                {{-- end login --}}

                {{-- start register --}}

                <div class="modal fade" id="registerModal" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow-lg rounded-4">
                
                            <div class="modal-header border-0">
                                <h5 class="modal-title text-success fw-bold">Create AgroHub Account</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                
                            <div class="modal-body px-4">
                                <form method="POST" action="#">
                                    @csrf
                
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control rounded-pill" required>
                                        </div>
                
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control rounded-pill">
                                        </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control rounded-pill" required>
                                    </div>
                
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control rounded-pill" required>
                                        </div>
                
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control rounded-pill" required>
                                        </div>
                                    </div>
                
                                    <button type="submit"
                                            class="btn btn-success w-100 rounded-pill py-2">
                                        Register
                                    </button>
                                </form>
                            </div>
                
                            <div class="modal-footer border-0 justify-content-center">
                                <small class="text-muted">
                                    Already have an account?
                                    <a href="#" class="text-success fw-semibold"
                                       data-bs-dismiss="modal"
                                       data-bs-toggle="modal"
                                       data-bs-target="#loginModal">
                                        Login
                                    </a>
                                </small>
                            </div>
                
                        </div>
                    </div>
                </div>
                

                {{-- end register --}}
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                        <div class="input-group-text">
                            <i class="fa fa-fw fa-search"></i>
                        </div>
                    </div>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                {{-- <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                </a>
                <a class="nav-icon position-relative text-decoration-none" href="#">
                    <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                </a> --}}
            </div>
        </div>

    </div>
</nav>
@endsection