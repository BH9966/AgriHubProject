@extends('agropages.layout')
@section('header')
<nav class="navbar navbar-expand-lg navbar-light shadow">
        

    <div class="container d-flex justify-content-between align-items-center">
        <button class="btn me-3"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#leftCategoryMenu">
    <i class="fa fa-bars"></i>
</button>
        <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
            AgriHub
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{-- offsate --}}



        <!-- CATEGORY OFFCANVAS -->



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
                    {{-- <li class="nav-item">
                        <button type="button" class="btn btn-light ">Register</button>
                        {{-- <a class="nav-link" href="contact.html"></a> </li>--}}
                        <li class="nav-item">
                            <button class="btn btn-success me-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#registerModal">
                                create account
                            </button>
                        </li>
                    {{-- <li class="nav-item">
                        <button type="button" class="btn btn-light ">Login</button>
                        {{-- <a class="nav-link" href="contact.html"></a> </li>--}}
                    
                    <li class="nav-item ">
                        <button class="btn btn-success mt-1"
                                data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                            sign in
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
                                        create Account
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
                                <form method="POST" action="{{ route('register_user') }}">
                                    @csrf
                
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control rounded-pill" required>
                                        </div>
                
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="text" placeholder="+255790......." class="form-control rounded-pill">
                                        </div>
                                    </div>
                
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control rounded-pill" placeholder="example@gmail.com" required>
                                    </div>
                                    <div class="col-md-4 w-50">
                                        <label for="inputState" class="form-label">Role</label>
                                        <select id="inputState" class="form-control rounded-pill">
                                          <option selected>Choose...</option>
                                          <option>Buyer</option>
                                          <option>Farmer</option>
                                          <option>Shop</option>
                                          <option>Both</option>
                                        </select>
                                      </div> <br>
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
            </div>
        </div>

    </div>
</nav>


{{-- start offset --}}
<div class="offcanvas offcanvas-start category-canvas" tabindex="-1" id="leftCategoryMenu">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title text-success fw-bold">
            Categories
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body p-0">

        <div class="list-group list-group-flush">

            <!-- CATEGORY -->
            <button class="list-group-item list-group-item-action category-item"
                    data-bs-toggle="collapse"
                    data-bs-target="#catFarming">
                    <img src="img/farming.png" alt="sedd" class="rounded-circle me-2" width="40" height="40">
                Farming
                <i class="fa fa-chevron-down float-end mt-1"></i>
            </button>

            <div class="collapse submenu" id="catFarming">
                <a href="#" class="list-group-item list-group-item-action"><img src="img/seed.png" alt="sedd" class="rounded-circle me-2" width="50" height="50"> Seeds</a>
                <a href="#" class="list-group-item list-group-item-action"><img src="img/fertilizer.png" alt="fertilizer" class="rounded-circle me-2" width="50" height="50"> Fertilizers</a>
                <a href="#" class="list-group-item list-group-item-action"><img src="img/pest (2).png" alt="fertilizer" class="rounded-circle me-2" width="50" height="50"> Pesticides</a>
            </div>

            <!-- CATEGORY -->
            <button class="list-group-item list-group-item-action category-item"
                    data-bs-toggle="collapse"
                    data-bs-target="#catEquipment">
                    <img src="img/equip.png" alt="sedd" class="rounded-circle me-2" width="40" height="40">
                Equipment
                <i class="fa fa-chevron-down float-end mt-1"></i>
            </button>

            <div class="collapse submenu" id="catEquipment">
                <a href="#" class="list-group-item list-group-item-action">Tractors</a>
                <a href="#" class="list-group-item list-group-item-action"> Tools</a>
                <a href="#" class="list-group-item list-group-item-action"> Irrigation</a>
            </div>

            
            <button class="list-group-item list-group-item-action category-item"
                    data-bs-toggle="collapse"
                    data-bs-target="#catLivestock">
                <i class="fa-solid fa-cow text-success me-2"></i>
                Livestock
                <i class="fa fa-chevron-down float-end mt-1"></i>
            </button>

            <div class="collapse submenu" id="catLivestock">
                <a href="#" class="list-group-item list-group-item-action">Cattle</a>
                <a href="#" class="list-group-item list-group-item-action"> Pigs</a>
                <a href="#" class="list-group-item list-group-item-action">Poultry</a>
                <a href="#" class="list-group-item list-group-item-action"> Sheep</a>
            </div>

          
            <button class="list-group-item list-group-item-action category-item"
                    data-bs-toggle="collapse"
                    data-bs-target="#catGardening">
                <i class="fa-solid fa-leaf text-success me-2"></i>
                Gardening
                <i class="fa fa-chevron-down float-end mt-1"></i>
            </button>

            <div class="collapse submenu" id="catGardening">
                <a href="#" class="list-group-item list-group-item-action"> Flowers</a>
                <a href="#" class="list-group-item list-group-item-action"> Vegetables</a>
                <a href="#" class="list-group-item list-group-item-action"> Herbs</a>
                <a href="#" class="list-group-item list-group-item-action"> Pots & Planters</a>
            </div>

           
            <button class="list-group-item list-group-item-action category-item"
                    data-bs-toggle="collapse"
                    data-bs-target="#catStorage">
                <i class="fa-solid fa-warehouse text-success me-2"></i>
                Storage
                <i class="fa fa-chevron-down float-end mt-1"></i>
            </button>

            <div class="collapse submenu" id="catStorage">
                <a href="#" class="list-group-item list-group-item-action"> Barns</a>
                <a href="#" class="list-group-item list-group-item-action"> Silos</a>
                <a href="#" class="list-group-item list-group-item-action"> Crates</a>
                <a href="#" class="list-group-item list-group-item-action"> Cold Storage</a>
            </div>

          
            <button class="list-group-item list-group-item-action category-item"
                    data-bs-toggle="collapse"
                    data-bs-target="#catIrrigation">
                <i class="fa-solid fa-water text-success me-2"></i>
                Irrigation
                <i class="fa fa-chevron-down float-end mt-1"></i>
            </button>

            <div class="collapse submenu" id="catIrrigation">
                <a href="#" class="list-group-item list-group-item-action"> Drip</a>
                <a href="#" class="list-group-item list-group-item-action"> Sprinklers</a>
                <a href="#" class="list-group-item list-group-item-action"> Pumps</a>
                <a href="#" class="list-group-item list-group-item-action"> Pipes & Hoses</a>
            </div>

           
            <button class="list-group-item list-group-item-action category-item"
                    data-bs-toggle="collapse"
                    data-bs-target="#catSupplies">
                <i class="fa-solid fa-boxes-packing text-success me-2"></i>
                Farm Supplies
                <i class="fa fa-chevron-down float-end mt-1"></i>
            </button>

            <div class="collapse submenu" id="catSupplies">
                <a href="#" class="list-group-item list-group-item-action"> <img src="img/crops.png" alt="Fertilizers" class="rounded-circle me-2" width="24" height="24">Fertilizer Bags</a>
                <a href="#" class="list-group-item list-group-item-action"> Packaging</a>
                <a href="#" class="list-group-item list-group-item-action"> Tools</a>
                <a href="#" class="list-group-item list-group-item-action"> Accessories</a>
            </div>

        </div>
    </div>
</div>



@endsection