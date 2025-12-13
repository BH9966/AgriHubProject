<section class="bg-light py-5">
    <div class="container">

        <div class="row text-center mb-4">
            <div class="col-lg-7 mx-auto">
                <h1 class="fw-bold">Featured Products</h1>
                <p class="text-muted">
                    Hand-picked fresh produce and farm supplies from verified sellers.
                </p>
            </div>
        </div>

        <div class="row g-4">

            {{-- Product Card --}}
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm product-card">

                    <img src="{{ asset('img/Tomatoes-sh769524253.jpg') }}"
                         class="card-img-top"
                         alt="Tomatoes">

                    <div class="card-body">
                        <span class="badge bg-success mb-2">Crop</span>

                        <h5 class="card-title mt-2">Fresh Tomatoes</h5>

                        <p class="text-success fw-bold mb-1">
                            TZS 2,500 / kg
                        </p>

                        <p class="text-muted small mb-2">
                            Seller: John Farm 
                        </p>

                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-warning">
                                ★★★★☆
                            </small>

                            <small class="text-muted">
                                (42 reviews)
                            </small>
                        </div>
                    </div>

                    <div class="card-footer bg-white border-0 d-flex justify-content-between">
                        <a href="#" class="btn btn-outline-success btn-xl">
                            View
                        </a>

                        <a href="#" class="btn btn-success btn-sm">
                            Contact Seller
                        </a>
                    </div>

                </div>
            </div>

            {{-- Duplicate card structure for more products --}}

        </div>
    </div>
</section>
